<?php
error_reporting(0);
require 'bg.php';
if ($_GET['url'] != "")
{
    if ($_GET['url'] == 'login')
    {
        require 'login.php';
    }
    if ($_GET['url'] == 'register')
    {
        require 'register.php';
    }
    if ($_GET['url'] == 'doc')
    {
        require 'docm.php';
    }
    if ($_GET['url'] == 'user')
    {
        require 'usertx.php';
    }
    if ($_GET['url'] == 'admin')
    {
        require 'admin.php';
    }
    if ($_GET['url'] == 'install')
    {
       require 'install';
    }
}
else
{
    require 'blog.php';
}
?>