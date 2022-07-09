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
    <?php include_once('navbar.php'); ?>
    <!--content -->
    <br>
    <div class="container">
        <div class="row">
            <div class=col-sm-1></div>
            <div class=col-sm-10>

                <?php
                //insert

                if (isset($_POST['save'])) {
                    $d_code = $_POST['dcode'];
                    $d_name = $_POST['dname'];
                    $img = $_POST['image'];
                    $hod = $_POST['hod'];

                    $sql = "INSERT INTO department(Department_Code,Department_Name,Image,Head_Of_Department) VALUES ('$d_code','$d_name',' $img','$hod')";

                    if (mysqli_query($con, $sql)) {
                ?>
                        <div class="alert alert-success" role="alert">
                            <img src="img/tick.gif">Insert success
                        </div>
                        echo ("
                        <meta http-equiv='refresh' content='4'>");
                <?php
                    } else {
                        echo "error:" . mysqli_errno($con);
                    }
                }



                ?>

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
                                            <h5 class="modal-title" id="exampleModalLongTitle">Department</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Department Code <input type="text" name="dcode" class="form-control" required> <br>
                                            Department Name <input type="text" name="dname" class="form-control" required> <br>
                                            Image
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div> <br> <br>
                                            Head Of Department <br><select name="hod" id="hod1" width="100%" class="form-control">
                                                <option value="demo">Demo</option>
                                            </select> <br>


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
                                        <th scope="col">Department Code</th>
                                        <th scope="col">Department Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Head Of Department</th>
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