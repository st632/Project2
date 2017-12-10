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

<form action="index.php?page=tasks&action=store&id=" method="post" id="form1">

Owner Email:<input type="text" name="owneremail" value=""><br>
Owner ID:<input type="text" name="ownerid" value=""><br>
Created Date:<input type="text" name="createddate" value=""><br>
Due Date:<input type="text" name="duedate" value=""><br>
Message:<input type="text" name="message" value=""><br>
Is Done:<input type="text" name="isdone" value=""><br>

<button type="submit" form="form1" value="create">Create</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>