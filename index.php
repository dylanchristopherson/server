<!DOCTYPE html>
<html>
<head>
  <title>Hello</title> 
</head>
<body>


<!--     <?php //$IPATH = "/home/dylanc/Documents/software/server/assets/"; include($IPATH."nav.html"); ?>
    <style>
        <?php // include($IPATH."nav.css"); ?>
    </style>
 --> 

<!--
    This section used for local testing
    <?php // $IPATH = "/home/dylanc/Documents/github.com/dylanchristopherson/server/assets/"; include($IPATH."nav.html"); ?>
    <style>
        <?php // include($IPATH."nav.css"); ?>
    </style>
-->

    <?php $IPATH = "/server/assets/"; include($IPATH."nav.html"); ?>
    <style>
        <?php include($IPATH."nav.css"); ?>
    </style>


    <h1>Hello</h1>
    <p1>This is a side project to learn more about hosting and programming.</p1>

    <p1>A couple of things I enjoy are motorcycles and books!</p1> 

    <ul>
        <li><a href="motorcycles/index.php">Motorcycles</a></li>
        <li><a href="books/index.php">Books</a></li>
        <li><a href="consumerism/index.php">Consumerism</a></li>
        <li><a href="nutrition/index.php">Nutrition</a></li>
        <li><a href="chess/index.php">Chess</a></li>
    </ul>

</body>
</html>
