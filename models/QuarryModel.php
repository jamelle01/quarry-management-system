<?php
    require_once 'assets/excelReader/excel_reader2.php';
    require_once 'assets/excelReader/SpreadsheetReader.php';

    class QuarryModel
    {
        private $db;

        // Constructor
        public function __construct(PDO $db)
        {
            $this->db = $db;
        }
    }
?>