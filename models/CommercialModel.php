<?php
require_once 'assets/excelReader/excel_reader2.php';
require_once 'assets/excelReader/SpreadsheetReader.php';

class CommercialModel
{
    private $db;

    // Constructor
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // get search
    public function getSearchActive($query)
    {
        $stmt = $this->db->query("SELECT * FROM commercial WHERE Permittee_Name LIKE '%" . $query . "%' AND Active = 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //get search
    public function getSearchInactive($query)
    {
        $stmt = $this->db->query("SELECT * FROM commercial WHERE Permittee_Name LIKE '%" . $query . "%' AND Active = 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //get all permittees
    public function getAllActive()
    {
        $stmt = $this->db->query("SELECT * FROM commercial WHERE Active = 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllInactive()
    {
        $stmt = $this->db->query("SELECT * FROM commercial WHERE Active = 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // get by Id
    public function getPermitteeById($Commercial_Permit_Key)
    {
        $stmt = $this->db->prepare("SELECT * FROM commercial WHERE Commercial_Permit_Key = ?");
        $stmt->execute([$Commercial_Permit_Key]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //add permittee
    public function setPermittee($Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date)
    {
        $stmt = $this->db->prepare("INSERT INTO commercial ( Permittee_Name, Tin_No, Postal_Address, Extraction_Site, Type_of_Mineral, Permit_No, Approved_Volume, Area, Date_Approved, Expiry_Date, Active) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        return $stmt->execute([$Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date, true]);
    }

    //import
    public function importPermittees($targetDirectory)
    {
        $reader = new SpreadsheetReader($targetDirectory);
        foreach ($reader as $key => $row) {
            $Permittee_Name = $row[0];
            $Tin_No = $row[1];
            $Postal_Address = $row[2];
            $Extraction_Site = $row[3];
            $Type_of_Mineral = $row[4];
            $Permit_No = $row[5];
            $Approved_Volume = $row[6];
            $Area = $row[7];
            $Date_Approved = date('Y-m-d', strtotime($row[8]));
            $Expiry_Date = date('Y-m-d', strtotime($row[9]));

            $stmt = $this->db->prepare("INSERT INTO commercial ( Permittee_Name, Tin_No, Postal_Address, Extraction_Site, Type_of_Mineral, Permit_No, Approved_Volume, Area, Date_Approved, Expiry_Date, Active) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            try {
                $stmt->execute([$Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date, true]);
            } catch (PDOException $e) {
                // Handle any exceptions or errors here
                return false;
            }
        }

        return true; // Return true if the import process completes without errors
    }

    // update
    public function updatePermittee($Commercial_Permit_Key, $Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date)
    {
        $stmt = $this->db->prepare("UPDATE commercial SET Permittee_Name = ?, Tin_No = ?, Postal_Address = ?, Extraction_Site = ?, Type_of_Mineral = ?, Permit_No = ?, Approved_Volume = ?, Area = ?, Date_Approved = ?, Expiry_Date = ? WHERE Commercial_Permit_Key = ?");
        return $stmt->execute([$Permittee_Name, $Tin_No, $Postal_Address, $Extraction_Site, $Type_of_Mineral, $Permit_No, $Approved_Volume, $Area, $Date_Approved, $Expiry_Date, $Commercial_Permit_Key]);
    }

    //delete
    public function deletePermittee($Commercial_Permit_Key)
    {
        $stmt = $this->db->prepare("DELETE FROM commercial WHERE Commercial_Permit_Key = ?");
        return $stmt->execute([$Commercial_Permit_Key]);
    }

    // set to inactive
    public function setInactivePermittee($Commercial_Permit_Key)
    {
        $stmt = $this->db->prepare("UPDATE commercial SET Active = false WHERE Commercial_Permit_Key = ?");
        return $stmt->execute([$Commercial_Permit_Key]);
    }

    // set to active
    public function setActivePermittee($Commercial_Permit_Key)
    {
        $stmt = $this->db->prepare("UPDATE commercial SET Active = true WHERE Commercial_Permit_Key = ?");
        return $stmt->execute([$Commercial_Permit_Key]);
    }

}
