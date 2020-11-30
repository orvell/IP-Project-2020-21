<?php
  include 'template2.php';
  $con = mysqli_connect("localhost","root","","grievence");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
  $token=rand(10000,99999);
  $sql="INSERT INTO complaints VALUES ('$_POST[fullname]','$_POST[email]',$token,'$_POST[level]','$_POST[subcategory]','$_POST[complainttext]','Pending','')";
  if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error());
    }
    mysqli_close($con);
?>
<script type="text/javascript">
  alert("Your Complaint is Submitted Successsfully. Please Note your Token No" );
  alert(<?php echo $token ?>);
  window.location= "student_submit_action.php";
</script>
