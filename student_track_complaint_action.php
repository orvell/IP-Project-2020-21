<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    include 'template2.php';
    ?>
  </head>
  <body>
    <form method="post" action="student_tr.php">
      <div class="token">
        Enter token no:  <input type="text" name="token" placeholder="Enter Token No" >
      </div>
      <div class="subbut">
        <button type="submit" class="btn" onclick="location.href='student_tr.php'">Submit</button>
      </div>
    </form>
  </body>
</html>
