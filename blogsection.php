<?php require_once 'config.php';
include_once 'sidebar.php';
if (!isset($_SESSION['userid'])) {
  header("location:login.php");
}
if (isset($_POST['minislider'])) {
  $tit = $_POST['title'];
  $file = $_FILES['img'];
  $file_size = ($file['size'] / 1024) / 1024;
  $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
  $imge = "storageimg/" . time() . "." . $ext;
  move_uploaded_file($file['tmp_name'], $imge);
  $database->addmini($tit, $imge);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>project</title>
  <link rel="stylesheet" href="css/dashboard.css">
  <!-- Boxicons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
  <div class="backgroundimg">
    <div class="main h-100 bg-light shadow-lg">
      <div class="alert alert-primary" role="alert">
        <h2 class="text-center text-dark fw-bold"">Welcome to Project</h2>
      </div>
      <h3 class="text-center" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); border-radius:3px;">Trending</h3>
      <?php
      $show = $database->showdata();
      foreach ($show as $product) {
      ?>
        <div style="border:tomato 2px solid;" class="trendbg fst-italic text-dark bg-light shadow"><?php echo $product['trending']; ?>
          <a href="edittrending.php?id=<?php echo $product['id'] ?>" class="btn btn2 text-light shadow ms-3 mb-1 mt-1" title="Edit"><i class="fa fa-pencil-square-o fa-lg"></i></a>
        </div>
      <?php } ?>


      <h3 class="text-center" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); border-radius:3px;">Latest Blog</h3>

      <div class="tableFixHead">
        <table class="table table-hover table-responsive">
          <thead class="sticky-top">

            <tr   style=" font-size:20px; background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );">
              <th scope="col">Image</th>
              <th scope="col">Title</th>
              <th scope="col">Action</th>
              <th scope="col"> <button type="button" class="btn tablebg fst-italic fw-bolder" data-bs-toggle="modal" data-bs-target="#exampleModal"><i style="font-size:18px;" class="fa fa-plus-circle" aria-hidden="true">&nbsp;</i>Add New Slider</button></th>
            </tr>
            <!-- Edit Modal HTML -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Add Slider</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label class="fw-bold">Image</label>
                        <input type="file" name="img" class="form-control" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="Cancel">
                      <button type="submit" name="minislider" class="btn btn-success">Add</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Edit Modal HTML -->
          </thead>
          <tbody >
          <?php
      $fetch = $database->fetchslider();
      foreach ($fetch as $key) {   
      ?>
            <tr class="sliderhover">
            <td><img    src="<?php echo $key['images'] ?>" class="align-middle  img-fluid img-thumbnail rounded "  alt=""></td>
              <td class="align-middle fw-bolder"  ><?php echo $key['title'] ?></td>
              <td  class="align-middle" >
                <a href="editminislider.php?sid=<?php echo $key['id'] ?>" class="btn text-light  btn2 me-2 " title="Edit"><i class="fa fa-pencil-square-o fa-lg"></i></a>
                <a href="deletemini.php?id=<?php echo $key['id'] ?>" class="btn btn-danger deleteuser " data-userid="14" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
              </td>
              <td class="align-middle"></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>



    </div>

  </div>



</body>

</html>