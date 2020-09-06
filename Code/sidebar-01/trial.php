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

        <h2 class="mb-4">Trial Blanace</h2>
<!--Table start-->

<table border class="table table-bordered mg-b-0">
                          
      <tr>
          <th>S.No</th>
          <th>Description</th>
          <th>Ref</th>
          <th>Amount(Rs) Dr.</th>
          <th>Amount(Rs) Cr.</th>
      </tr>
      <tr>
          <th>Total</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
      </tr>
</table>
                
 <!--Table end-->
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>