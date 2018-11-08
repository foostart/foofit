<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/169.less', 'css/169.css');
    ?>
    <link href="css/169.css" rel="stylesheet" type="text/css"/>

</head>

<body>
 <?php include '../169/169-content.php'; ?>
</body>