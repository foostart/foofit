<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Module 162</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/162.less', 'css/162.css');
    ?>
    <link href="css/162.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js"></script>
</head>

<body>
   <?php include'../162/162-content.php'; ?>
</body>