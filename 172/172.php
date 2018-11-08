<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Module 172</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/172.less', 'css/172.css');
    ?>
    <link href="css/172.css" rel="stylesheet" type="text/css"/>
    <link href="css/Cube_Animation.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.event.move.js"></script>

</head>
<body>
  <?php include '../172/172-content.php'; ?>
</body>