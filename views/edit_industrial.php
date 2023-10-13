<?php
require_once 'header.php';
require_once 'menu.php';
?>

<div class="tablediv mx-5 my-5" >
<a href="index.php?action=industrial_permittee" class="btn btn-close mb-3 mt-5" aria-label="Close"></a>
    <form class="row g-3" action="index.php?action=edit_industrial&id=<?= $data['Industrial_Permit_Key']; ?>" method="post">
        <div class="col-md-4">
            <label for="Permittee_Name" class="form-label">Permittee Name</label>
            <input type="text" name="Permittee_Name" class="form-control" id="Permittee_Name" value="<?=$data['Permittee_Name'];?>" required>
        </div>
        <div class="col-md-4">
            <label for="Tin_No" class="form-label">TIN No.</label>
            <input type="text" name="Tin_No" class="form-control" id="Tin_No" value="<?=$data['Tin_No'];?>" required>
        </div>
        <div class="col-4">
            <label for="Postal_Address" class="form-label">Postal Address</label>
            <input type="text" name="Postal_Address" class="form-control" id="Postal_Address"  value="<?=$data['Postal_Address'];?>" required>
        </div>
        <div class="col-6">
            <label for="Extraction_Site" class="form-label">Extraction Site</label>
            <input type="text" class="form-control" name="Extraction_Site" id="Extraction_Site"  value="<?=$data['Extraction_Site'];?>" required>
        </div>
        <div class="col-md-3">
            <label for="Type_of_Mineral" class="form-label">Type of mineral</label>
            <input type="text" name="Type_of_Mineral" class="form-control" id="Type_of_Mineral" value="<?=$data['Type_of_Mineral'];?>" required>
        </div>
        <!-- <div class="col-md-3">
            <label for="inputState" class="form-label">Permit No.</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div> -->
        <div class="col-md-3">
            <label for="Permit_No" class="form-label">Permit No.</label>
            <input type="text" name="Permit_No" class="form-control" id="Permit_No" value="<?=$data['Permit_No'];?>" required>
        </div>
        <div class="col-md-3">
            <label for="Approved_Volume" class="form-label">Approved Volume (mᵌ)</label>
            <input type="number" name="Approved_Volume" class="form-control" id="Approved_Volume" value="<?=$data['Approved_Volume'];?>" required>
        </div>
        <div class="col-md-3">
            <label for="Area" class="form-label">Area (mᵌ)</label>
            <input type="number" name="Area" step="1" class="form-control" id="Area" value="<?=$data['Area'];?>" required>
        </div>
        <div class="col-md-3">
            <label for="Date_Approved" class="form-label">Date Approved</label>
            <input type="date" name="Date_Approved" class="form-control" id="Date_Approved" value="<?=$data['Date_Approved'];?>" required>
        </div>
        <div class="col-md-3">
            <label for="Expiry_Date" class="form-label">Expiry Date</label>
            <input type="date" name="Expiry_Date" class="form-control" id="Expiry_Date" value="<?=$data['Expiry_Date'];?>" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<?php include_once 'footer.php';?>