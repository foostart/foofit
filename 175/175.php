<head>
    <meta charset="UTF-8">
    <title>175</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,800|Open+Sans+Condensed:300,700|Prata&amp;subset=vietnamese" rel="stylesheet" type="text/css">
        <?php
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
        if (!class_exists('lessc')) {
            $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
            require_once($dir_block.'/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/175.less', 'css/175.css');
        
    ?>
    <link href="css/175.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
                    <?php
        include '../175/175-content.php';
        ?>
</body>
