<?php
    include 'template2.php';
    $con = mysqli_connect("localhost","root","","grievence");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    $token_sel=$_REQUEST['token'];
    $sql="UPDATE complaints SET status ='$_POST[status]' , comments='$_POST[comments]' WHERE token=$token_sel";
    if (!mysqli_query($con,$sql))
    {
        die('Error: Enter Valid Token No: ');
    }
    mysqli_close($con);
?>
<script type="text/javascript">
alert("Changes Saved Successsfully" );
window.location= "c_viewcomplain.php";
</script>
