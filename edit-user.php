<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lte";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 if (isset($_POST['submit'])) {

$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$id=$_GET['id'];

$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `gender` = '$gender', `dob` = '$dob', `password` = '$pass' WHERE `users`.`id` = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}
$id=$_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

?>






<?php include 'header.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="" method="post">
    <section class="content">

      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add User</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" placeholder="Enter Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label>Gender</label>
                  <br/>
                  <input type="radio" class="form-check-label" name="gender" value="male"> Male
                  <input type="radio" class="form-check-label" name="gender" value="female"> Female
                  <input type="radio" class="form-check-label" name="gender" value="others"> Others
                </div>

                <div class="form-group">
                  <label>Date of birth</label>
                  <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>"  placeholder="Enter D.O.B">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" value="<?php echo $row['password']; ?>" class="form-control" name="pass"  placeholder="Enter Password">
                </div>
                <!-- /.form-group -->
              </div>

            </div>
        
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button class="btn btn-primary" name="submit" >Add User</button>
          </div>
        </div>
        <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php';?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
