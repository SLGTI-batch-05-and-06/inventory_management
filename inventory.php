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
  <!--content -->
  <br><br><br>

    <div class="row">
      <div class=col-sm-1></div>
      <div class=col-sm-10>

        <?php
        $in_id = null;
        $in_name = null;
        $description = null;
        $quantity = null;
        $date = null;

        //insert

        if (isset($_POST['save'])) {
          $in_id = $_POST['in_id'];
          $in_name = $_POST['in_name'];
          $description = $_POST['desc'];
          $quantity = $_POST['quantity'];
          $date = $_POST['date'];
          $sql = "INSERT INTO inventory(Inventory_ID,Name,Description,Quantity,Date) VALUES('$in_id','$in_name','$description','$quantity','$date')";

          if (mysqli_query($con, $sql)) {
        ?>
            <div class="alert alert-success" role="alert">
            <img src="img/tick.gif">Insert success
            </div>
        <?php

            echo ("<meta http-equiv='refresh' content='4'>");
          } else {
            echo "error:" . mysqli_errno($con);
          }
        }

        //delete

        if (isset($_GET['delete'])) {
          $id = $_GET['delete'];
          $sql = "DELETE FROM inventory WHERE ID=$id";
          if (mysqli_query($con, $sql)) {
            echo "Delete Success";
          } else {
            echo "error:" . mysqli_errno($con);
          }
        }

        //update

        if (isset($_GET['edit'])) {
          $id = $_GET['edit'];
          $sql = "SELECT * FROM inventory WHERE ID=$id";
          $result = mysqli_query($con, $sql);
          if (mysqli_fetch_row($result) == 1) {
            $r = mysqli_fetch_assoc($result);
            $in_id = $r['Inventory_ID'];
            $in_name = $r['Name'];
            $desc = $r['Description'];
            $quantity = $r['Quantity'];
            $date = $r['Date'];
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
                      <h5 class="modal-title" id="exampleModalLongTitle">Inventory</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Inventory_ID <input type="text" name="in_id" class="form-control" value="<?php echo $in_id; ?>" required>
                      Name <input type="text" name="in_name" class="form-control" value="<?php echo $in_name; ?>" required>
                      Description <input type="text" name="desc" class="form-control" value="<?php echo $description; ?>" required>
                      Quantity <input type="text" name="quantity" class="form-control" value="<?php echo $quantity; ?>" required>
                      Date <input type="date" name="date" class="form-control" value="<?php echo $date; ?>" required>

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
                    <th scope="col">Inventory_ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = 'SELECT* FROM inventory';
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>
           <td>', $row['Inventory_ID'], '</td>
           <td>', $row['Name'], '</td>
           <td>', $row['Description'], '</td>
           <td>', $row['Quantity'], '</td>
           <td>', $row['Date'], '</td>
           <td>
              <a href="?edit=', $row['ID'], '" data-toggle="modal" data-target="#exampleModalCenter">Edit</a> | <a href="?delete=', $row['ID'], '">Delete</a>
           </td>
           </tr>
           ';
                    }
                  } else {
                    echo "No data";
                  }
                  ?>
                </tbody>
            </table>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--content -->
</body>

</html>