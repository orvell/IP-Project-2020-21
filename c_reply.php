
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
        <form method="post" action="config_c_reply.php">
            <br><br>
                <div class="complaint-form">
                  Token No : <input type="text" class="effect" name="token" placeholder="Enter Token No" >
                </div>
                <div class="complaint-form" >
                  Status : <select name = "status" onChange="myFunction()" class="complaint-form-1">
                    <option selected = "selected" >Pending </option>
                    <option value = "Completed">Completed</option>
                    <option value = "Processing">Processing</option>
                    <option value = "Rejected">Rejected</option>
                  </select>
                </div>
                <div class="complaint-form">
                    <form >
                        <textarea  name="comments" cols="140" rows="10" text-align="left" placeholder="Enter your Comments"></textarea>
                    </form>
                    <br>
                    <button type="submit" class="butt">Save Changes</button>
                </div>
          </form>
    </body>
</html>
