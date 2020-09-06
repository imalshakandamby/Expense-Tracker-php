<?php session_start();
include ('accdbcon.php');   

$acbcash=$_POST['acbudcash'];
$acbbank=$_POST['acbudbank'];

$sqlTTMe = "SELECT * FROM dhhbudget WHERE dbcash_bud=$acbcash"; //WHERE should be removed
$resultTTMe = $unicand->query($sqlTTMe);

if ($resultTTMe->num_rows > 0) {
   while($row = $resultTTMe->fetch_assoc()) {
	 echo "Something went wrong";
  }
}else{
    $query2=mysqli_query($unicand,"SELECT COUNT(*) AS Rowcnt FROM dhhbudget");
    $row=mysqli_fetch_assoc($query2);
    $sum=$row['Rowcnt'];
      //second if else - start
    if($sum==0){
        $query=mysqli_query($unicand, "INSERT INTO dhhbudget(dbcash_bud,dbbank_bud)
        VALUES ('".$acbcash."','".$acbbank."')");
        if($query){
          echo "<script>alert('Budget has been added');</script>";
          echo "<script>window.location.href='index.php'</script>";
          } else {
          echo "<script>alert('Something went wrong. Please try again');</script>";
          }
    }else if($sum==1){
        //Error is here - not working at UPDATE
        $resultc = mysqli_query($unicand, "SELECT dbcash_bud AS dbcashx FROM dhhbudget WHERE dhh_bid=1;");
        $row=mysqli_fetch_assoc($resultc);
        $cashz=$row['dbcashx'];
        $resultb = mysqli_query($unicand, "SELECT dbbank_bud AS dbbankx FROM dhhbudget WHERE dhh_bid=1;");
        $row=mysqli_fetch_assoc($resultb);
        $bankz=$row['dbbankx'];

        $addc=$acbcash+$cashz;
        $addb=$acbbank+$bankz;
        $query=mysqli_query($unicand, "UPDATE dhhbudget SET dbcash_bud=$addc, dbbank_bud=$addb WHERE dhh_bid=1;");
        if($query){
          echo "<script>alert('Budget has been added');</script>";
          echo "<script>window.location.href='index.php'</script>";
          } else {
          echo "<script>alert('Something went wrong. YY Please try again');</script>";
          
          }        
    }else{
        echo "error";
    }
    //second if else - end

}


?>