<?php
include_once 'config.php';
require_once 'sidebar.php';
if (!isset($_SESSION['userid'])) {
  header("location:login.php");
}
$id = $_GET['id'];
$edit = $database->edittrending($id);
$row = mysqli_fetch_assoc($edit);
/* value fetch  */
if (isset($_POST['btntrend'])) {
  $trend = $_POST['trending'];
  $res = $database->updatetrending($id, $trend);
  if ($res) {
    echo "<script>
  window.location.href='blogsection.php';
    </script>";
  } else {
    echo "FAILED UPDATE DATA";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php crud oop</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="./css/dashboard.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <div class="backgroundimg">
    <div class="main h-100 bg-light shadow-lg">
      <div class="alert alert-primary" role="alert">
        <h2 class="text-center text-dark">Welcome to Project</h2>
      </div>

      <h3 class="text-center py-1" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); border-radius:3px;">Trending Update</h3>
      <div class="trendback d-flex mb-1 justify-content-center">
        <a class="fa fa-arrow-left  text-dark text-decoration-none" href="project.php"></a>

      </div>
      <form action="" method="post" class="col-12 mx-auto row">
        <input type="text" value="<?php echo $row['trending']; ?>" style="background-image: linear-gradient(to right, #E0EAFC 0%, #CFDEF3  51%, #E0EAFC  100%);" class="form-control p-2" name="trending">
        <button type="submit" class="btn p-2   text-light mx-auto mt-1 shadow-md" name="btntrend" style=" width:120px; background-image: linear-gradient(to right, #fd746c 0%, #ff9068 51%, #fd746c 100%);">Update</button>
      </form>
    </div>



</body>

</html>