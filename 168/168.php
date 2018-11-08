<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Module 168</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/168.less', 'css/168.css');
    ?>
    <link href="css/168.css" rel="stylesheet" type="text/css"/>

</head>

<body>
   <?php include '../168/168-content.php'; ?>
</body>