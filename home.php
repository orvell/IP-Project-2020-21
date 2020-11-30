<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" language="javascript">
      window.history.forward();
      function noback()
      {
        window.history.forward();
      }
      </script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Students Grievence Portal</title>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style2.css">
    </head>
    <body onLoad="noback();" onpageshow="if(event.persisted) noback();" onUnload="">
      <header>
        <div class="wrapper">
          <div class="logo">
            <a href="logout.php"><img src="3.png" alt="logo"></a>
          </div>
            <ul class="nav-area">
              <li><a href="home.php">Home</a></li>
              <li class="dropdown ">Login
                <div class="dropdown-content">
                  <a href="student_login.php">Student Level</a>
                  <a href="department_login.php">Department Level</a>
                  <a href="college_login.php">College Level</a>
                  <a href="university_login.php">University Level</a>
                </div>
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="welcome-text">
            <h1>Welcome to <span>Students Grievance Portal</span></h1>
            <a href="info.php">Info</a>
          </div>
        </header>

      </body>
</html>
