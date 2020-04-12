<?php

class Category {
  const SITE = "PHOTOBLOG";

  public $title, $id, $txt;
  function __construct($id,$title,$txt) {
    $this->id = $id;
    $this->title = $title;
    $this->txt = $txt;
  }
  function all() {
    $sql = "SELECT * FROM categories";
    $results = mysql_query($sql);
    $categories = Array();
    while ($row = mysql_fetch_assoc($results)) {
      $categories[] = new Category($row['id'],$row['title'],$row['txt']);
    }
    return $categories;
  }

  function get_one($id) {
    $id = intval($id);
    $sql = "SELECT * FROM categories WHERE id=".$id;
    $results = mysql_query($sql);
    
if ($results){
    $categories = Array();
    while ($row = mysql_fetch_assoc($results)) {
      $categories[] = new Category($row['id'],$row['title'],$row['txt']);
    }
    return array_values($categories)[0];
}else{
	echo mysql_error();
}  
  }


  function render_menu() {
    foreach (Category::all() as $cat) {
      echo "\t<li><a href=\"cat.php?id=".h($cat->id)."\">".h($cat->title)."</a></li>\n";
    }
  }
  function render_select() {
    echo "<select name=\"category\">";
    foreach (Category::all() as $cat) {
      echo "<option value=".h($cat->id).">".h($cat->title)."</option>";
    }
    echo "</select>";
  }
  function render_text($id) {
     $id = intval($id);
     $cat = Category::get_one($id);
     echo "$cat->txt";
  }
  



}
?>
