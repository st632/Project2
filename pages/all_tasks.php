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
$a='';
$a.='<center>';
$a.='<h2>Pending Tasks</h2><br>';
$a.='<a href="index.php?page=tasks&action=create">Create New Task</a>';
if($data==FALSE){
  $a.='<br>No records found';
  $a.='</center>';
  echo $a;
}
else{
$a.=utility\htmlTable::genarateTableFromMultiArray($data);
$a.='</center>';
echo $a;
}
?>


<script src="js/scripts.js"></script>
</body>
</html>