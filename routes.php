<?php
require "controller.php";
/* $page = ($_GET['page']??'login').'.view';
$content = file_get_contents(VIEW_FOLDER.$page);
echo $content; */

//do_login();
$page = $_GET['page'];

switch ($page) {
    case 'login':
        do_login();
        break;

    case 'register':
        do_register();
        break;

    case 'home':
        do_home();
        break;
    
    default:
        do_not_found();
        break;
}