<?php
if (!extension_loaded('gd')) {
  DIE("NEED gd library to work");
}
class Picture{
  public $id, $title, $img, $cat;
  function __construct($id, $title, $img, $cat){
    $this->title= $title;
    $this->img = $img;
    $this->id = $id;
    $this->cat = $cat;

  }   
 
  function all($cat=NULL,$order =NULL) {
    if (!isset($cat)) {
      $results= mysql_query("SELECT * FROM pictures");
    } else {
      $cat = intval($cat);
      $results= mysql_query("SELECT * FROM pictures where cat=".$cat);
    }
       
    $pictures = Array();
    if ($results) {
      while ($row = mysql_fetch_assoc($results)) {
        $pictures[] = new Picture($row['id'],$row['title'],$row['img'],$row['cat']);
      }
    }
    else {
      echo mysql_error();
    }
    return $pictures;
  }
 

  function render_all($pics) {
    echo "<ul>\n";
    foreach ($pics as $pic) {
      echo "\t<li>".$pic->render()."</a></li>\n";
    }
    echo "</ul>\n";
  }
 function render_edit() {
    $str = "<img src=\"uploads/".h($this->img)."\" alt=\"".h($this->title)."\" />";
    return $str;
  } 
  

  function render() {
    $str = "<img src=\"admin/uploads/".h($this->img)."\" alt=\"".h($this->title)."\" />";
    return $str;
  } 
  function find($id) {
    $id = intval($id);
    if (!preg_match('/^[0-9]+$/', $id)) {
      die("ERROR: INTEGER REQUIRED");
    }
    $result = mysql_query("SELECT * FROM pictures where id=".$id);
    $row = mysql_fetch_assoc($result); 
    if (isset($row)){
      $picture = new Picture($row['id'],$row['title'],$row['img'],$row['cat']);
    }
    return $picture;
  
  }
  function delete($id) {
    $id = intval($id);
    if (!preg_match('/^[0-9]+$/', $id)) {
      die("ERROR: INTEGER REQUIRED");
    }
    $result = mysql_query("DELETE FROM pictures where id=".(int)$id);
    //should unlink the file
  }
  function last($cat) {
    $cat = intval($cat);
    $result= mysql_query("SELECT * FROM pictures WHERE cat=".$cat." ORDER BY id DESC LIMIT 1");
    $row = mysql_fetch_assoc($result);
    if (isset($row)){
      return new Picture($row['id'],$row['title'],$row['img'],$row['cat']);
    }
  }
  function show($id) {
    $id = intval($id);
    $result= mysql_query("SELECT * FROM pictures where id=".$id);
    $row = mysql_fetch_assoc($result);
    if (isset($row)){
      return new Picture($row['id'],$row['title'],$row['img'],$row['cat']);
    }
  }
  
  function create(){
    if(isset($_FILES['image'])){
      $dir = 'uploads/';
      $file = basename($_FILES['image']['name']);
      $ext = pathinfo($file, PATHINFO_EXTENSION);
      $valids = array("png","gif", "jpg");
      if (!in_array($ext, $valids )){
        DIE("This application only access gif, png or jpg files");
      }
      if (preg_match('/\.php$/',$file)) {
        DIE("NO PHP!!");
      }
      $base =  $_FILES['image']['tmp_name'];
      list($swidth,$sheight, $smime, $attr) = getimagesize($base); 
      switch ($smime) { 
        case IMAGETYPE_GIF: 
          $src = imagecreatefromgif($base);
          break; 
        case IMAGETYPE_JPEG: 
          $src = imagecreatefromjpeg($base);
          break; 
        case IMAGETYPE_PNG: 
          $src = imagecreatefrompng($base);
          break; 
        default:
          DIE("INVALID CONTENT TYPE:".$smime);
      }
      if ($src === false) {
        DIE("INVALID IMAGE");
      }
      $file = time().".".$ext;
      if(!move_uploaded_file($base, "/var/www/advanced_bancocn/admin/uploads/".$file)) {
        die("Error during upload");
      }
      $sql = "INSERT INTO pictures (title, img, cat) VALUES ('";
      $title = mysql_real_escape_string($_POST["title"]);
      $img = mysql_real_escape_string( $file);
      $cat = (int)$_POST["category"];
      $sql .= $title."','".$img."','".$cat;
      $sql.= "')";
      $result = mysql_query($sql);
      echo mysql_error(); 
    }
    

  }
}
?>
