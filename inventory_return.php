<?php include_once('script.php');
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <br>
    <!--content -->
    <br>
    <div class="container">
        <div class="row">
            <div class=col-sm-1></div>
            <div class=col-sm-10>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                +ADD
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Return Inventory</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Return ID <input type="text" name="return_id" class="form-control" required> <br>
                                            Transfer ID <input type="text" name="transfer_id" class="form-control" required> <br>
                                            Staff ID <br><select name="staff" id="s_id" width="100%" class="form-control">
                                                Inventory ID <br><select name="inventory" id="i_id" width="100%" class="form-control">
                                                </select> <br>
                                                Sender D_Code <br><select name="sender" id="sdc" width="100%" class="form-control">
                                                </select> <br>
                                                Receiver D_Code <br><select name="receiver" id="rdc" width="100%" class="form-control">
                                                </select> <br>
                                                Date <input type="date" name="date" class="form-control" required> <br>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" name="save" value="Save Changes">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table">
                            <div class="table-responsive">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Return ID</th>
                                        <th scope="col">Transfer ID</th>
                                        <th scope="col">Staff ID</th>
                                        <th scope="col">Inventory ID</th>
                                        <th scope="col">Sender D_Code</th>
                                        <th scope="col">Receiver D_Code</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                        </table>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!--content -->
</body>

</html>