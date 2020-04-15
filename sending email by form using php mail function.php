<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container col-md-6" style="background-color:white;padding:50px;">
        <div class="text-center" style="padding:50px;"><h2>Send Email</h2></div>
        <form class="text-center"  method="post">
            <div class="form-group"><label for="">Enter email</label>
            <input name="email" type="text">
            </div>
            <div class="form-group"><label for="">Header</label>
            <input name="header" type="text">
            </div>
            <div class="form-group">
            <label for="">Message</label>
            <input name="body" type="text">

            </div>

            <input class="btn btn-success" name="save" type="submit">

        </form>
    </div>

    <?php
        if (isset($_POST['save'])){
        $email=$_POST['email'];

        $to_email = $email;
        $subject = "Simple Email Test via PHP";
        $body = $_POST['body'];
        $headers = $_POST['header'];

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
        }
    ?>
</body>
</html>