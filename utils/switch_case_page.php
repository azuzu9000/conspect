<?php

switch ($_GET['page']) {
    case 'main':
        include 'blocks/main.php';
        break;
    case 'ubuntu':
        include 'ubuntu.php';
        break;
    case 'php':
        require 'php_info.php';
        break;
    case 'java':
        require 'java.php';
        break;
    case 'maven':
        require 'maven.php';
        break;
    case 'gradle':
        require 'gradle.php';
        break;
    case 'html':
        require 'html.php';
        break;
    case 'css':
        require 'css.php';
        break;
    case 'javascript':
        require 'javascript.php';
        break;
    case 'git':
        require 'git.php';
        break;
    case 'info':
        require 'info.php';
        break;
    default:
        echo 'Page not found! Err';
        break;
}
?>