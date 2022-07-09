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
  <BR>
  <div class="container">
    <div class="row-sm-12">

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
                    <h5 class="modal-title" id="exampleModalLongTitle">Staff</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Staff_ID <input type="text" name="s_id" class="form-control" required>
                    Full Name <input type="text" name="fname" class="form-control" required>
                    E-mail <input type="email" name="email" class="form-control" required>
                    D_Code <br><select name="d_code" id="d_code" width="100%" class="form-control">
                            </select>
                    Gender <br><select name="gender" id="gender" width="100%" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                    Phone number <input type="text" name="ph_no" class="form-control" required>
                    User name <input type="text" name="user" class="form-control" required>
                    Password <input type="text" name="pass" class="form-control" required>


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
                  <th scope="col">Staff ID</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">D_Code</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
          </table>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>
  <!--content -->
</body>

</html>