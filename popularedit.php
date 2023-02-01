<?php
include_once 'config.php';
require 'sidebar.php';
if (!isset($_SESSION['userid'])) {
  header("location:login.php");
}
$id = $_GET['uid'];
/* value fetch  */
$ed = $database->valuepblog($id);
$row = mysqli_fetch_assoc($ed);
/* for update data when  click   */
if (isset($_POST['blogbtn'])) {
  $date = $_POST['dat'];
  $tit = $_POST['tit'];
  $file = $_FILES['pic'];
  $file_size = ($file['size'] / 1024) / 1024;
  $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
  $img = "storageimg/" . time() . "." . $ext;
  move_uploaded_file($file['tmp_name'], $img);
  $database->updatepblog($id, $date, $tit, $img);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>editminislider</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <div class="backgroundimg">
    <div class="main h-100 bg-light shadow-lg">
      <div class="alert alert-primary" role="alert">
        <h2 class="text-center text-dark fw-bold">Welcome to Project</h2>
      </div>

      <h3 class="text-center py-1" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); border-radius:3px;">Trending Update</h3>

      <form action="" method="post" enctype="multipart/form-data" class="mx-auto row h-75" style="background-image: linear-gradient(to right, #E0EAFC 0%, #CFDEF3  51%, #E0EAFC  100%);">
        <div class="modal-dialog w-100 p-1 ">
          <div class="modal-content ">
            <div class="modal-body ">
              <div class="form-group ">
                <label class="fw-bold">Date</label>
                <input type="text" name="dat" value="<?php echo $row['date']; ?>" class="form-control" required>
              </div>
              <div class="form-group ">
                <label class="fw-bold">Title</label>
                <input type="text" name="tit" value="<?php echo $row['title']; ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label class="fw-bold">Image</label>
                <input type="file" name="pic" value="<?php echo $row['image']; ?>" class="form-control ">
              </div>
            </div>
            <div class="col mx-auto mb-1">
              <a class="text-decoration-none text-light btn btn3 shadow-md mx-1" href="popularblog.php">Cancel</a>
              <button type="submit" class="btn btn4 text-dark fw-bold shadow-md" name="blogbtn">Update</button>
            </div>
          </div>

        </div>
      </form>

    </div>



</body>

</html>