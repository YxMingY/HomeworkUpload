<?php
function get_namelist():array
{
  return explode("\n",file_get_contents('名单.txt'));
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
    $list[] = substr(0,strrpos($img,"."),$img);
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