<!doctype html>
<html lang="en">
  <head>
  	<title>Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
	        <ul class="list-unstyled components mb-5">
            <li>
	              <a href="index.php">Home</a>
	          </li>
            <li>
                <a href="addBudget.php">Add Budget</a>
	          </li>
	          <li>
	              <a href="addExp.php">Add Expense</a>
	          </li>
	          <li>
              <a href="profitLoss.php">Profit and Loss Accounts</a>
	          </li>
	          <li>
              <a href="trial.php">Trial Balance</a>
	          </li>
	        </ul>


	      </div>
    	</nav>

        <!-- Page Content  -->
        <!-- Start Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          </div>
        </nav>

<h2 class="mb-4">Existing Budget</h2>
<div class="row">
<div class="col-md-6 mb-3">
<!--Start - Print existing budget cash-->
        <?php include('accdbcon.php');
          $result=mysqli_query($unicand,'SELECT SUM(dbcash_bud) AS cashsum FROM dhhbudget');
          $row=mysqli_fetch_assoc($result);
          $sum=$row['cashsum'];
          echo "<h5>Total Cash Amount : " . $sum . "</h5>";
        ?>
<!--End - Print existing budget cash-->
</div>
<div class="col-md-6 mb-3">
<!--Start - Print existing budget bank-->
        <?php include('accdbcon.php');
          $result=mysqli_query($unicand,'SELECT SUM(dbbank_bud) AS banksum FROM dhhbudget');
          $row=mysqli_fetch_assoc($result);
          $sum=$row['banksum'];
          echo "<h5>Total Bank Amount : " . $sum . "</h5>";
        ?>
<!--End - Print existing budget bank-->
</div>
</div>


        <h2 class="mb-4">All Added Expense</h2>

<!--Start - Print total of all entered expense-->
      <?php include('accdbcon.php');
          $result=mysqli_query($unicand,'SELECT SUM(dbamo) AS totsum FROM dhhexp');
          $row=mysqli_fetch_assoc($result);
          $sum=$row['totsum'];
          echo "<h5>Total Expense : " . $sum . "</h5>";
        ?>
<!--End - Print total of all entered expense-->

<!--Table start-->
        <?php
              include_once 'accdbcon.php';
              $result = mysqli_query($unicand,"SELECT * FROM dhhexp");
        ?>
        <?php
                    if (mysqli_num_rows($result) > 0) {
        ?>

        <table border class="table table-bordered mg-b-0">
                          
            <tr>
                <th>RawId</th>
                <th>Date</th>
                <th>Category</th>
                <th>Amount</th>
               <th>Paying Method</th>
            </tr>
        <?php
          $i=0;
         while($row = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $row["rowid"]; ?></td>
            <td><?php echo $row["dbdate"]; ?></td>
            <td><?php echo $row["dbcat"]; ?></td>
            <td><?php echo $row["dbamo"]; ?></td>
            <td><?php echo $row["dbpay"]; ?></td>   
          </tr>

          <?php
            $i++;
          }
         ?>
                      
      </table>
          <?php
            }
      else{
        echo "No result found";
        }
        ?>
<!--Table end-->

<!-- End Content  -->
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>