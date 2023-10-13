<?php
// include file configuration
require_once 'config.php';

// include controller
require_once 'controllers/QuarryController.php';
require_once 'controllers/CommercialController.php';

// initialize model
$quarryModel = new QuarryModel($db);
$commercialModel = new CommercialModel($db);

// create instance
$quarryController = new QuarryController($quarryModel);
$commercialController = new CommercialController($commercialModel);

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
        $quarryController->getPermittees();
        // require 'views/ui_quarry_permittee.php';
        break;
    case 'view_quarry':
        $Quarry_Permit_Key = $_GET['id'];
        $quarryController->view($Quarry_Permit_Key);
        // require 'views/view_quarry.php';
        break;
    case 'edit_quarry':
        if (isset($_GET['id'])) {
            $Quarry_Permit_Key = $_GET['id'];
            $quarryController->edit($Quarry_Permit_Key);
        } else {
            header('Location: index.php');
        }
        // require 'views/edit_quarry.php';
        break;
    case 'set_active_quarry':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $quarryController->setActive($id);
        } else {
            header('Location: index.php');
        }
        break;
    case 'set_inactive_quarry':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $quarryController->setInactive($id);
        } else {
            header('Location: index.php');
        }
        break;
    case 'search_quarry':
        $query_quarry = $_POST['query_quarry'];
        $quarryController->search($query_quarry);
        // $sandGravelController->index();
        // $InduSandGravelController->index();
        // require 'views/index.php';
        break;
    case 'create_quarry':
        $quarryController->create();
        break;
    case 'import_quarry':
        $quarryController->import();
        break;

    // * for commercial
    case 'commercial_permittee':
        $commercialController->getPermittees();
        break;
    case 'view_commercial':
        $Commercial_Permit_Key = $_GET['id'];
        $commercialController->view($Commercial_Permit_Key);
        break;
    case 'edit_commercial':
        if (isset($_GET['id'])) {
            $Commercial_Permit_Key = $_GET['id'];
            $commercialController->edit($Commercial_Permit_Key);
        } else {
            header('Location: index.php');
        }
        break;
    case 'set_active_commercial':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $commercialController->setActive($id);
        } else {
            header('Location: index.php');
        }
        break;
    case 'set_inactive_commercial':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $commercialController->setInactive($id);
        } else {
            header('Location: index.php');
        }
        break;
    case 'search_commercial':
        $query_commercial = $_POST['query_commercial'];
        $commercialController->search($query_commercial);
        break;
    case 'create_commercial':
        $commercialController->create();
        break;
    case 'import_commercial':
        $commercialController->import();
        break;
    // // * for commercial
    // case 'commercial_permittee':
    //     $commercialController->getPermittees();
    //     break;
    // case 'view_commercial':
    //     $Commercial_Permit_Key = $_GET['id'];
    //     $commercialController->view($Commercial_Permit_Key);
    //     break;
    // case 'edit_commercial':
    //     if (isset($_GET['id'])) {
    //         $Commercial_Permit_Key = $_GET['id'];
    //         $commercialController->edit($Commercial_Permit_Key);
    //     } else {
    //         header('Location: index.php');
    //     }
    //     break;
    // case 'set_active_commercial':
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $commercialController->setActive($id);
    //     } else {
    //         header('Location: index.php');
    //     }
    //     break;
    // case 'set_inactive_commercial':
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         $commercialController->setInactive($id);
    //     } else {
    //         header('Location: index.php');
    //     }
    //     break;
    // case 'search_commercial':
    //     $query_commercial = $_POST['query_commercial'];
    //     $commercialController->search($query_commercial);
    //     break;
    // case 'create_commercial':
    //     $commercialController->create();
    //     break;
    // case 'import_commercial':
    //     $commercialController->import();
    //     break;
}
