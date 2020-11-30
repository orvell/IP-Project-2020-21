
<?php
  include 'template2.php';
  $con = mysqli_connect("localhost","root","","grievence");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }

  $token_check=$_POST['token'];

  $sql="SELECT * FROM complaints where token=$token_check";

  $result=mysqli_query($con,$sql)
  or die('error querying database');
  $name="Cannot find such data Enter valid token and Retry";
  $email="Cannot find such data Enter valid token and Retry";
  $complaint="Cannot find such data Enter valid token and Retry";
  $status="Cannot find such data Enter valid token and Retry";
  $comments="Cannot find such data Enter valid token and Retry";

  while($row=mysqli_fetch_array($result))
  {
  $name=$row['name'];
  $email=$row['email'];
  $complaint=$row['complaint'];
  $status=$row['status'];
  $comments=$row['comments'];
  }
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style type="text/css">
    .display
      {
        width: auto;
        text-align: justify;
        padding-left: 25px;
        padding-top: 15px;
        padding-right: 40px;
        font-size: 20px;
        color: #fff;
        font-family: 'poppins'sans-serif;
       }
    .display p
      {
        font-size: 20px;
        font-weight: bold;
      }
      @media(max-width:600)
      {
        .display
        {
          padding-bottom: : 5px;
          font-size: 15px;
        }
      }

    </style>
  </head>
  <body>
    <div class="display">
    <?php
          echo "<br><br><p> Name :</p>$name<br>";
          echo "<p>Email :</p>$email <br><br>";
          echo "<p>Complaint :</p>$complaint <br><br>";
          echo "<p>Status :$status <br></p>";
          echo "<p>Comments :</p>$comments <br>";
    ?>
  </div>
  </body>
</html>
