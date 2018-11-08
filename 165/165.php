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
    $less->compileFile('less/165.less', 'css/165.css');
    ?>
    <link href="css/165.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script> 
    <script src="js/AOS.js"></script> 
     
</head>

<body>
    <script>AOS.init();</script>
    <?php include '../165/165-content.php'; ?>
    </div>
</body>

