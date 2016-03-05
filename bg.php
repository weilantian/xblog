<?php
/**
 * Created by PhpStorm.
 * User: xiaol
 * Date: 2016/2/27
 * Time: 11:02
 */
require 'config.php';
$result = mysql_query("SELECT * FROM xblog_me");
$blogname == "";
$name = "";
$old = "";
$qq = "";
$tel = "";
$whyme = "";
$birthday = "";
while($row = mysql_fetch_array($result))
{
    if($row['name'] == "blogname")
    {
        $blogname=$row['value'];
    }
    if ($row['name'] == "name")
    {
        $name = $row['value'];
    }
    if ($row['name'] == "old")
    {
        $old = $row['value'];
    }
    if ($row['name'] == "qq")
    {
        $qq = $row['value'];
    }
    if ($row['name'] == "tel")
    {
        $tel = $row['value'];
    }
    if($row['name'] == "whyme")
    {
        $whyme =$row['value'];
    }
    if($row['name'] == "birthday")
    {
        $birthday = $row['value'];
    }
}