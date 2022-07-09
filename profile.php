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
    <br>
    <div class="container">
        <div class="row">
            <div class=col-sm-6>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h5> Edit Profile </h5>
                        </div>
                        <div class="card-body">
                            Full Name <br><input type="text" name="fname" class="form-control" required> <br>
                            Email <br><input type="email" name="email" class="form-control" required> <br>
                            Phone Number <br><input type="text" name="ph_no" class="form-control" required> <br>
                            Gender <br><select name="gender" id="gender" width="100%" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select> <br>
                            <input type="submit" name="submit" value="Update">
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class=col-sm-6>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h5> Change Password</h5>
                        </div>
                        <div class="card-body">
                            Old Password <br><input type="password" name="o_pass" class="form-control" required> <br>
                            New Password <br><input type="password" name="n_pass" class="form-control" required> <br>
                            Confirm Password <br><input type="password" name="c_pass" class="form-control" required> <br>
                            <input type="submit" name="submit" value="Change Password">
                        </div>
                    </div>
                </div>
            </div>
            <div class=col-sm-6>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h5> Avatar</h5>
                        </div>
                        <div class="card-body">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="submit" value="Update Avatar">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>

</html>