<?php

class SVGraph{


  public $width;
  public $height;


  function set_width($width){
    $this -> width = $width;
  }

  function get_width(){
    return $this ->width;
  }

  function set_height($height){
    $this -> height = $height;
  }

  function get_height(){
    return $this ->height;
  }

  function create_tag($tag,$content){
    $this -> xmlString =  "<".$tag.">".$content."</".$tag.">";
  }

function GraphOutput(){
  echo $this -> xmlString;
}


}





$x = new SVGraph();
$x -> create_tag("g","pina");
$x -> GraphOutput();

 ?>
