<?php
    include 'template2.php';
  $con = mysqli_connect("localhost","root","","grievence");
  if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
  $sql="SELECT * FROM complaints WHERE level='University' ORDER BY status ASC";
  $result=mysqli_query($con,$sql)
  or die('error querying database');
  mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style type="text/css">
    .tabcon
    {
      padding-top: 60px;
      padding-left: 30px;
      padding-right: 30px;
      font-size: 15px;
      font-family:'Poppins' sans-serif;
      color: #fff;
    }
    a:link
    {
      color: green;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited
     {
       color: white;
       background-color: transparent;
       text-decoration: none;
     }

     a:hover
     {
       color: cyan;
       background-color: transparent;
       text-decoration: underline;
     }

     a:active
    {
      color: blue;
      background-color: transparent;
      text-decoration: underline;
    }
    table
    {
      border-spacing: 5px;
      width: 100%;
      color: white;
      font-family: 'times new roman';
      font-size: 20px;
      text-align: left;
      border: 20px;
      border-color: white;
    }
    th
    {
      border-radius: 3px;
      padding: 10px;
      background-color:turquoise;
      color: black;
    }
    tr: nth-child(even)
    {
      background-color: white;
    }
    td
    {
      padding: 15px;
    }
    </style>
    </head>
    <body>
      <div class="tabcon">
        <?php
          if ($result->num_rows > 0)
          {
            echo "<table><tr><th>Name</th><th>Email</th><th>Token</th><th>Level</th><th>Subcategory</th><th>Complaint</th><th>Reply</th><th>Status</th><th>Comments</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc())
              {
                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["token"]."</td><td>". $row["level"]. "</td><td>" . $row["subcategory"]. "</td><td>" . $row["complaint"] ."</td><td>"."<a href='u_reply.php'>Reply</a>"."</td><td>" . $row["status"] ."</td><td>". $row["comments"] ."</td><td>"."</td></tr>";
              }
              echo "</table>";
          }
          else
          {
            echo "0 results";
          }
        ?>
      </div>
  </body>
</html>
