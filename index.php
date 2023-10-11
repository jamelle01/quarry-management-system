<?php
// include file configuration
require_once 'config.php';

// include controller

// initialize model

// create instance

// check action parameter
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// print "<pre/> hello";
// exit();

// route
switch ($action) {
    case 'index':
        require 'views/ui_home.php';
        break;
    case 'about':
        require 'views/ui_about.php';
        break;
    case 'quarry_permittee':
        require 'views/ui_quarry_permittee.php';
        break;
}