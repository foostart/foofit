<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Module 167</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/167.less', 'css/167.css');
    ?>
    <link href="css/167.css" rel="stylesheet" type="text/css"/>
</head>

<body>
     <?php include '../167/167-content.php'; ?>
</body>