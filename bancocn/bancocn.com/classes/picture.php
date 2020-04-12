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
      // $cat = intval($cat); 
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
    if (!preg_match('/^[0-9]+$/', $id)) {
      die("ERROR: INTEGER REQUIRED");
    }
    $result = mysql_query("DELETE FROM pictures where id=".(int)$id);
    //should unlink the file
  }
  function last($cat) {
    $result= mysql_query("SELECT * FROM pictures WHERE cat=".$cat." ORDER BY id DESC LIMIT 1");
    $row = mysql_fetch_assoc($result);
    if (isset($row)){
      return new Picture($row['id'],$row['title'],$row['img'],$row['cat']);
    }
  }
  function show($id) {
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
       
      if (!preg_match('/\w{3,12}.\w{2,4}$/',$file)) {
        DIE("The filename should only contains between 3 to 8 letters");
      }
      if (preg_match('/\.php$/',$file)) {
        DIE("NO PHP!!");
      }

      if(!move_uploaded_file($_FILES['image']['tmp_name'], $dir . $file)) {
        die("Error during upload");
      }
      $sql = "INSERT INTO pictures (title, img, cat) VALUES ('";
      $title = mysql_real_escape_string($_POST["title"]);
      $img = mysql_real_escape_string( $file);
      $cat = (int)$_POST["category"];
      $sql .= $title."','".$img."','".$cat;
      $sql.= "')";
      echo $sql;
      $result = mysql_query($sql);
      echo mysql_error(); 
    }
  }
  
}
?>
