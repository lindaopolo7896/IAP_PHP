<?php
class  Layout{
  public function header(){
    echo"<header><h1>".$config['site_name'] . "</h1></header>";
  }

  public function footer(){
    echo"<footer><p>Copyright &copy; ".$config['site_name'] ." " . date("Y") ."</p></footer>";
  }
}
?>