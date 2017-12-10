<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php
echo '<h1>hey</h1>';
?>

<form action="index.php?page=accounts&action=store" method="post" id="form1">
    First name: <input type="text" name="fname" value=""><br>
    Last name: <input type="text" name="lname" value=""><br>
    Email: <input type="text" name="email" value=""><br>
    Phone: <input type="text" name="phone" value=""><br>
    Birthday: <input type="text" name="birthday" value=""><br>
    Gender: <input type="text" name="gender" value=""><br>
    Password: <input type="password" name="password" value=""><br>
    <button type="submit" form="form1" value="Submit">Submit</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>