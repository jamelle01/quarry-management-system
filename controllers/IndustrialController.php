<?php
require_once 'models/IndustrialModel.php';

class IndustrialController
{
    private $model;

    public function __construct(IndustrialModel $model)
    {
        $this->model = $model;
    }

    public function getPermittees()
    {
        $ActivePermittees = $this->model->getAllActive();

        $InactivePermittees = $this->model->getAllInactive();
        require 'views/ui_industrial_permittee.php';
    }

    public function view($Industrial_Permit_Key)
    {
        $data = $this->model->getPermitteeById($Industrial_Permit_Key);
        require 'views/view_industrial.php';
    }

    public function edit($Industrial_Permit_Key)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Permittee_Name = $_POST['Permittee_Name'];
            $Tin_No = $_POST['Tin_No'];
            $Postal_Address = $_POST['Postal_Address'];
            $Extraction_Site = $_POST['Extraction_Site'];
            $Type_of_Mineral = $_POST['Type_of_Mineral'];
            $Permit_No = $_POST['Permit_No'];
            $Approved_Volume = $_POST['Approved_Volume'];
            $Area = $_POST['Area'];
            $Date_Approved = $_POST['Date_Approved'];
            $Expiry_Date = $_POST['Expiry_Date'];

            $this->model->updatePermittee($Industrial_Permit_Key, $Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date);

            // print "<pre/> view";
            // exit();
            // header('Location: views/ui_industrial_permittee.php');
            // require 'views/ui_industrial_permittee.php';
            $this->getPermittees();

        } else {
            $data = $this->model->getPermitteeById($Industrial_Permit_Key);
            require 'views/edit_industrial.php';
        }
    }

    public function setActive($id)
    {
        $this->model->setActivePermittee($id);
        // header('Location: index.php');
        $this->getPermittees();
    }

    public function setInactive($id)
    {
        $this->model->setInactivePermittee($id);
        // header('Location: index.php');
        $this->getPermittees();
    }

    public function search($query)
    {
        // print '<pre> search work';
        $ActivePermittees = $this->model->getSearchActive($query);
        $InactivePermittees = $this->model->getSearchInactive($query);
        require 'views/ui_industrial_permittee.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Permittee_Name = $_POST['Permittee_Name'];
            $Tin_No = $_POST['Tin_No'];
            $Postal_Address = $_POST['Postal_Address'];
            $Extraction_Site = $_POST['Extraction_Site'];
            $Type_of_Mineral = $_POST['Type_of_Mineral'];
            $Permit_No = $_POST['Permit_No'];
            $Approved_Volume = $_POST['Approved_Volume'];
            $Area = $_POST['Area'];
            $Date_Approved = $_POST['Date_Approved'];
            $Expiry_Date = $_POST['Expiry_Date'];

            $this->model->setPermittee($Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date);
            // header('Location: index.php');
            // require 'views/ui_industrial_permittee.php';
            $this->getPermittees();
        } else {
            require 'views/create_industrial.php';
        }
    }

    public function import()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $fileName = $_FILES["excel"]["name"];
            $fileExtension = explode('.', $fileName);
            $fileExtension = strtolower(end($fileExtension));
            $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

            $targetDirectory = "uploads/" . $newFileName;
            move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

            error_reporting(0);
            ini_set('display_errors', 0);

            $this->model->importPermittees($targetDirectory);

            // header('Location: index.php');
            $this->getPermittees();
            // require 'views/ui_industrial_permittee.php';
        }
    }

    //! not used
    public function delete($id)
    {
        $this->model->deleteQuarryPermittee($id);
        header('Location: index.php');
    }

}
