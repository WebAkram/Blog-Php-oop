<?php require_once 'config.php';
include_once 'sidebar.php';
if (!isset($_SESSION['userid'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>dashboard</title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="css/dashboard.css">
  <!-- Boxicons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="backgroundimg">
    <div class="main h-100 bg-light">
      <div class="alert alert-primary" role="alert">
        <h2 class="text-center text-dark">Welcome to Dashboard</h2>
      </div>
      <div class="container bg-light">
        <div class="boxes row text-dark text-center ">
          <div class="col box1 m-2">
            <?php
            $show = $database->showdata();
            if ($show) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows($show);
            ?>
              <h2 class="fw-bolder  mt-1">Trending</h2>
              <h3 class="fw-bolder"> <?php echo $rowcount;  ?></h3>
            <?php } ?>
          </div>
          <div class="col box2  m-2  ">
            <?php
            $fetch = $database->fetchslider();
            if ($fetch) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows($fetch);
            ?>
              <h2 class="fw-bolder mt-1">Latest</h2>
              <h3 class="fw-bolder"><?php echo $rowcount; ?></h3>
            <?php } ?>
          </div>
          <div class="col box3 m-2 ">
            <?php
            $farry = $database->fpblog();
            if ($farry) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows($farry);
            ?>
              <h2 class="fw-bolder mt-1">Popular</h2>
              <h3 class="fw-bolder"><?php echo $rowcount; ?></h3>
            <?php } ?>
          </div>
          <div class="col box4  m-2 ">
            <?php
            $abc = $database->fetchrecent();
            if ($abc) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows($abc);
            ?>
              <h2 class="fw-bolder mt-1">Recent</h2>
              <h3 class="fw-bolder"><?php echo $rowcount; ?></h3>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="d-flex bg-light overflow-hidden">
        <div id="chartContainer" style="height:454px; width:550px;"></div>
        <canvas id="myChart" style="max-width:480px;  margin-top:90px;"></canvas>
      </div>
    </div>

    <!-- chart js -->
    <script>
      var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
      var yValues = [55, 49, 44, 24, 15];
      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
      ];

      new Chart("myChart", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "World Wide Wine Production 2018"
          }
        }
      });
    </script>



    <script>
      window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          title: {
            text: "Hourly Average CPU Utilization"
          },
          axisX: {
            title: "Time"
          },
          axisY: {
            title: "Percentage",
            suffix: "%",
            includeZero: true
          },
          data: [{
            type: "line",
            name: "CPU Utilization",
            connectNullData: true,
            //nullDataLineDashType: "solid",
            xValueType: "dateTime",
            xValueFormatString: "DD MMM hh:mm TT",
            yValueFormatString: "#,##0.##\"%\"",
            dataPoints: [{
                x: 1501048673000,
                y: 35.939
              },
              {
                x: 1501052273000,
                y: 40.896
              },
              {
                x: 1501055873000,
                y: 56.625
              },
              {
                x: 1501059473000,
                y: 26.003
              },
              {
                x: 1501063073000,
                y: 20.376
              },
              {
                x: 1501066673000,
                y: 19.774
              },
              {
                x: 1501070273000,
                y: 23.508
              },
              {
                x: 1501073873000,
                y: 18.577
              },
              {
                x: 1501077473000,
                y: 15.918
              },
              {
                x: 1501081073000,
                y: null
              }, // Null Data
              {
                x: 1501084673000,
                y: 10.314
              },
              {
                x: 1501088273000,
                y: 10.574
              },
              {
                x: 1501091873000,
                y: 14.422
              },
              {
                x: 1501095473000,
                y: 18.576
              },
              {
                x: 1501099073000,
                y: 22.342
              },
              {
                x: 1501102673000,
                y: 22.836
              },
              {
                x: 1501106273000,
                y: 23.220
              },
              {
                x: 1501109873000,
                y: 23.594
              },
              {
                x: 1501113473000,
                y: 24.596
              },
              {
                x: 1501117073000,
                y: 31.947
              },
              {
                x: 1501120673000,
                y: 31.142
              }
            ]
          }]
        });
        chart.render();

      }
    </script>
    <!-- graph chart -->

  </div>
</body>

</html>