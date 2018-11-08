<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Module 164</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/164.less', 'css/164.css');
    ?>
    <link href="css/164.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />

</head>

<body>
	 <?php include '../164/164-content.php'; ?>
</body>