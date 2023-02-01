
<?php
class dataBase
{
    private $con;
    public function connection()
    {
        $this->con = mysqli_connect("localhost", "root", "", "blog") or die("connection failed...");
    }

    public function insert($uname, $uemail, $upassword, $uimage)
    {
        $sql = "INSERT INTO `signup`(`name`, `email`, `password`, `image`) VALUES ('$uname','$uemail','$upassword','$uimage')";
        $row =   mysqli_query($this->con, $sql);
        if ($row) {
            header("location:login.php");
        } else {
            echo "Data insert failed";
        }
    }
    public function login($email, $password)
    {
        $sql = "SELECT * from `signup` where `email`='$email' and `password`='$password'";
        $res = mysqli_query($this->con, $sql);
        $row = mysqli_num_rows($res);
        if ($row > 0) {
            $user = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['userid'] = $user['id'];
            echo $_SESSION['userid'];
            $_SESSION['image'] = $user['image'];
            $_SESSION['name'] = $user['name'];
            header('location:dashboard.php');
        } else {
            echo "<script>
             alert('WRONG PASSWORD 🙄');
         window.location.href='login.php';
           </script>
           ";
        }
    }

    // trending
    public function  showdata()
    {
        $sql = "SELECT * FROM  `trending`";
        $show = mysqli_query($this->con, $sql);
        return $show;
    }
    //   Trending edit date
    public function edittrending($id)
    {
        $sql = "SELECT * FROM  `trending`  where  id='$id'";
        $id = mysqli_query($this->con, $sql);
        return $id;
    }

    public function updatetrending($id, $name)
    {
        $query = "UPDATE `trending` SET `trending`='$name' WHERE  `id`='$id'";
        $res = mysqli_query($this->con, $query);
        return $res;
    }
    // end trending part
    // minislider
    public function addmini($titl, $imag)
    {
        $syl = "INSERT INTO `minislider`( `title`, `images`) VALUES ('$titl','$imag')";
        mysqli_query($this->con, $syl);
    }
    public function fetchslider()
    {
        $sql = "SELECT * FROM `minislider`";
        $fetch = mysqli_query($this->con, $sql);
        return $fetch;
    }

    public function valuemini($id)
    {
        $sql = "SELECT * FROM  `minislider`  where  id='$id'";
        $id = mysqli_query($this->con, $sql);
        return $id;
    }
    public function editslider($id, $tit, $image)
    {
        $query = "UPDATE `minislider` SET `title`='$tit',`images`='$image' WHERE `id` = '$id'";
        $hong =  mysqli_query($this->con, $query);
        if ($hong) {
            echo "<script>
         window.location.href='blogsection.php';
           </script>";
        } else {
            echo "FAILED UPDATE DATA";
        }
    }

    public function deleteslider($id)
    {
        $sql = "DELETE  FROM  `minislider`  where  id='$id'";
        $delete = mysqli_query($this->con, $sql);
        return $delete;
    }

    // end minislider
    // popular blog start
    public function poplrinsert($titl, $date, $image)
    {
        $fry =  "INSERT INTO `popularblog`(`title`, `date`, `image`) VALUES ('$titl','$date','$image')";
        mysqli_query($this->con, $fry);
    }

    public function fpblog()
    {
        $sql = "SELECT * FROM `popularblog`";
        $farry = mysqli_query($this->con, $sql);
        return $farry;
    }
    // for show update value current id 
    public function valuepblog($id)
    {
        $sql = "SELECT * FROM  `popularblog`  where  id='$id'";
        $id = mysqli_query($this->con, $sql);
        return $id;
    }
    public function updatepblog($id, $date, $tit, $img)
    {
        $query = "UPDATE `popularblog` SET `date`='$date',`title`='$tit',`image`='$img' WHERE `id` = '$id'";
        $cool =  mysqli_query($this->con, $query);
        if ($cool) {
            echo "<script>
         window.location.href='popularblog.php';
           </script>";
        } else {
            echo "FAILED UPDATE DATA";
        }
    }
    public function deletepblog($id)
    {
        $sql = "DELETE  FROM  `popularblog`  where  id='$id'";
        $remove = mysqli_query($this->con, $sql);
        return $remove;
    }
    // end popular blog end

    //    < Recent blog section >
    public function recentbloginsert($title, $image)
    {
        $fry =  "INSERT INTO `recentblog` (`title`,`image`) VALUES ('$title','$image')";
        mysqli_query($this->con, $fry);
    }

    public function fetchrecent()
    {
        $sql = "SELECT * FROM `recentblog`";
        $abc = mysqli_query($this->con, $sql);
        return $abc;
    }

    public function deleterecent($id)
    {
        $sql = "DELETE  FROM  `recentblog`  where  id='$id'";
        $del = mysqli_query($this->con, $sql);
        return $del;
    }
    // for show update value current id 
    public function valuerecent($id)
    {
        $sql = "SELECT * FROM  `recentblog`  where  id='$id'";
        $id = mysqli_query($this->con, $sql);
        return $id;
    }
    //  update 
    public function updateprecent($id, $tit, $img)
    {
        $query = "UPDATE  `recentblog` SET `title`='$tit',`image`='$img' WHERE `id` = '$id'";
        $cool =  mysqli_query($this->con, $query);
        if ($cool) {
            echo "<script>
          window.location.href='popularblog.php';
            </script>";
        } else {
            echo "FAILED UPDATE DATA";
        }
    }
    //    < Recent blog section end >

}
$database = new dataBase();
$database->connection();
?>
  