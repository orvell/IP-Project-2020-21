
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <?php
        include 'template2.php';
    ?>
    <link rel="stylesheet" href="style2.css" />
    </head>
    <body>
        <form method="post" action="config2.php">
        <div class="complaint-form">
            Name : <input type="text" class="effect" name="fullname" placeholder="Enter Full Name" >
        </div>
        <div class="complaint-form">
            Email : <input type="text" class="effect" name="email" placeholder="Enter Email" >
        </div>
        <div class="complaint-form" >
            <select name = "level" onChange="myFunction()" class="complaint-form-1">
                <option selected = "selected" >Select Level </option>
                <option value = "Department">Department Level</option>
                <option value = "College">College Level</option>
                <option value = "University">University Level</option>
            </select>
            <select name = "subcategory" onChange="myFunction()" class="complaint-form-1">
                <option selected = "selected">Sub Categories  </option>
                <option value = "Admission">Admission</option>
                <option value = "Finance">Finance</option>
                <option value = "Examination">Examination</option>
                <option value = "Lecture timetable /Learning">Lecture TimeTable/ Learning</option>
                <option value = "Paper Re-evaluation">Paper Re-evaluation</option>
            </select>
        </div>
        <div class="head">
            <h4>Enter your complaint in the textbox</h4>
        </div>
        <div class="complaint-form">
            <form >
                <textarea  name="complainttext" cols="140" rows="20" text-align="left" placeholder="Enter your complaint here.."></textarea>
            </form>
            <br>
            <button type="submit" class="butt">Submit Complaint</button>
        </div>
        </form>
    </body>
</html>
