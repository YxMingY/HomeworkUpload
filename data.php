<?php
function get_namelist():array
{
  $arr = explode("\n",file_get_contents('名单.txt'));
  foreach ($arr as &$name) {
   $name = trim($name);
  }
  return $arr;
}
function name_exists(string $name):bool
{
  return in_array($name,get_namelist());
}
function get_commited_list():array
{
  $list = [];
  $imgs = array_diff(scandir("images"),array('..','.'));
  foreach($imgs as $img){
    $list[] = substr($img,0,strrpos($img,"."));
  }
  return $list;
}
function is_commited(string $name):bool
{
  return in_array($name,get_commited_list());
}
function get_pic(string $name):string
{
  return is_commited($name) ? "images/{$name}.jpg" : "";
}