<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
        $url_host = $_SERVER['HTTP_HOST'];

        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

        preg_match_all($pattern_uri, __DIR__, $matches);

        $url_path = $url_host . $matches[1][0];

        $url_path = str_replace('\\', '/', $url_path);
    ?>
    <link href="css/159.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-159">
        <div class="container bio">
            <div class="row">
                <!--BIOGRAPHY-->
                <div class="col-md-8">
                    <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><span>Lý lịch</span><br>Khoa học</h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            Chuyên ngành&nbsp;<strong>Công Nghệ Thông Tin</strong>
                        </div>
                    </div>
                    </div>
                </div>
                <!--END BIOGRAPHY-->  
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>
</body>

