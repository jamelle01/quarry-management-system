
<?php
require_once 'header.php';
require_once 'menu.php';
?>

    <div class="tablediv mx-5 my-10" >
    <div class="row g-3 py-2">
        <div class="col-md-4">
            <a class="btn btn-primary create-link" href="index.php?action=create_quarry">Add New Permittee</a>
        </div>
        <div class="col-md-4">
            <form class="form11" action="index.php?action=import_quarry" method="post" enctype="multipart/form-data">
                <input type="file" name="excel" required value="" />
                <button type="submit" name="import" class="btn btn-primary">Import</button>
            </form>
        </div>
        <div class="col-md-4 text-end">
            <form class="search1" action="index.php?action=search_quarry" method="POST">
            <input type="text" name="query_quarry" value="<?php $query_quarry ?>" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

    </div>
        <table class="table ">
            <thead class="table-dark my-5 fixed ">
                <tr>
                    <th colspan="3" ><p class="text-center pt-3">ACTIVE PERMITTEES</p></th>
                </tr>
                <tr>
                    <th style="width: 50%" scope="col">Permittee Name</th>
                    <th style="width: 20%" scope="col">Expiry Date</th>
                    <th style="width: 30%" scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ActivePermittees as $permittee): ?>
                    <tr>
                        <td>
                            <?=$permittee['Permittee_Name'];?>
                        </td>
                        <td>
                            <?=$permittee['Expiry_Date'];?>
                        </td>
                        <td class="action-links text-center">
                            <div class="containers">
                                <button type="button" class="btn btn-primary">
                                    <a style="color: white;" href="index.php?action=view_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                        <i class="fas fa-edit">view</i>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-primary">
                                <a style="color: white;" href="index.php?action=edit_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                        <i class="fas fa-edit">edit</i>
                                    </a>
                                </button>

                                <!-- <a href="index.php?action=delete&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                    <i class="fas fa-trash">delete</i>
                                </a> -->
                                <button type="button" class="btn btn-primary">
                                    <a style="color: white;" href="index.php?action=set_inactive_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                        <i class="fas fa-trash">make Inactive</i>
                                    </a>
                                </button>

                            </div>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <table class="table">
        <thead class="table-dark my-5 fixed ">
            <tr>
                <th colspan="3" ><p class="text-center pt-3">INACTIVE PERMITTEES</p></th>
            </tr>
            <tr>
                    <th style="width: 50%" scope="col">Permittee Name</th>
                    <th style="width: 20%" scope="col">Expiry Date</th>
                    <th style="width: 30%" scope="col" class="text-center">Action</th>
                </tr>
        </thead>
        <tbody>
            <?php foreach ($InactivePermittees as $permittee): ?>
                <tr>
                    <td>
                        <?=$permittee['Permittee_Name'];?>
                    </td>
                    <td>
                        <?=$permittee['Expiry_Date'];?>
                    </td>
                    <td class="action-links text-center">
                        <div class="containers">
                            <button type="button" class="btn btn-primary">
                                <a style="color: white;" href="index.php?action=view_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                    <i class="fas fa-edit">view</i>
                                </a>
                            </button>
                            <button type="button" class="btn btn-primary">
                               <a style="color: white;" href="index.php?action=edit_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                    <i class="fas fa-edit">edit</i>
                                </a>
                            </button>

                            <!-- <a href="index.php?action=delete&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                <i class="fas fa-trash">delete</i>
                            </a> -->
                            <button type="button" class="btn btn-primary">
                                <a style="color: white;" href="index.php?action=set_active_quarry&id=<?=$permittee['Quarry_Permit_Key'];?>">
                                    <i class="fas fa-trash">make Active</i>
                                </a>
                            </button>

                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </div>

    <?php include_once 'footer.php';?>
