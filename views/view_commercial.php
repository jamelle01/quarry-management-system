<?php
require_once 'header.php';
require_once 'menu.php';
?>

<div class="tablediv mx-5 my-5">

    <table class="table">
    <a href="index.php?action=commercial_permittee" class="btn btn-close mb-3 mt-5" aria-label="Close"></a>

        <thead class="table-dark my-5 fixed ">
            <tr>
                <th>FIELD</th>
                <th>VALUE</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>Permittee Name</td>
            <td><?=$data['Permittee_Name']?></td>
        </tr>
        <tr>
            <td>TIN No.</td>
            <td><?=$data['Tin_No']?></td>
        </tr>
        <tr>
            <td>Postal Address</td>
            <td><?=$data['Postal_Address']?></td>
        </tr>
        <tr>
            <td>Extraction Site</td>
            <td><?=$data['Extraction_Site']?></td>
        </tr>
        <tr>
            <td>Type of Mineral</td>
            <td><?=$data['Type_of_Mineral']?></td>
        </tr>
        <tr>
            <td>Permit No.</td>
            <td><?=$data['Permit_No']?></td>
        </tr>
        <tr>
            <td>Approved Volume (mᵌ)</td>
            <td><?=$data['Approved_Volume']?></td>
        </tr>
        <tr>
            <td>Area (mᵌ)</td>
            <td><?=$data['Area']?></td>
        </tr>
        <tr>
            <td>Date Approved</td>
            <td><?=$data['Date_Approved']?></td>
        </tr>
        <tr>
            <td>Expiry Date</td>
            <td><?=$data['Expiry_Date']?></td>
        </tr>
        </tbody>

    </table>
</div>

<?php include_once 'footer.php';?>
