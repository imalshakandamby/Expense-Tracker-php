<?php session_start();
include ('accdbcon.php');   

$acxdate=$_POST['acdate'];
$acxcat=$_POST['accat'];
$acxamo=$_POST['acamo'];
$acxpay=$_POST['acpay'];


$sqlTTMe = "SELECT * FROM dhhexp WHERE dbdate='$acxdate' AND dbcat='$acxcat' AND dbamo='$acxamo'";
$resultTTMe = $unicand->query($sqlTTMe);

if ($resultTTMe->num_rows > 0) {
   while($row = $resultTTMe->fetch_assoc()) {
	 echo "Record in the Database"; 
  }
}else{
    $query=mysqli_query($unicand, "INSERT INTO dhhexp(dbdate,dbcat,dbamo,dbpay)
  VALUES ('".$acxdate."', '".$acxcat."','".$acxamo."','".$acxpay."')");

      if($query){
            echo "<script>alert('Expense has been added');</script>";
            echo "<script>window.location.href='index.php'</script>";
      } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
  
      }
/////////////////////deduction part - code works perfectly
      if($acxpay=="Cash"){
            $result = mysqli_query($unicand, "SELECT dbcash_bud AS dbcash FROM dhhbudget WHERE dhh_bid=1;");
            $row=mysqli_fetch_assoc($result);
            $cashx=$row['dbcash'];
            $dedcash=$cashx-$acxamo;
            $query1=mysqli_query($unicand, "UPDATE dhhbudget SET dbcash_bud=$dedcash WHERE dhh_bid=1;");
      }else if($acxpay=="Bank"){
            $result = mysqli_query($unicand, "SELECT dbbank_bud AS dbbank FROM dhhbudget WHERE dhh_bid=1;");
            $row=mysqli_fetch_assoc($result);
            $bankx=$row['dbbank'];
            $dedbank=$bankx-$acxamo;
            $query1=mysqli_query($unicand, "UPDATE dhhbudget SET dbbank_bud=$dedbank WHERE dhh_bid=1;"); 
      }else{
            echo "Error!";
      }
//////////////////////////////

}


?>