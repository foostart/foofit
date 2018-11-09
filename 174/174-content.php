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
    <link href="css/174.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>   
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
</head>

<body>
    <div class="type-174">
        <div class="container top-menu">
            <!--TOP MENU-->
            <!--BUTTON MENU-->
            <div class="">
                <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clear"></div>
            </div>
            
            <!--END BUTTON MENU-->            
            <!--MENU-->
            <div class="menu">
                <ul class="nav-menu collapse collapse-top-menu">
                    <li class="item active"><a href="#"> Trang Chủ </a></li>
                    <li class="item"><a href="#"> Giới Thiệu </a></li>
                    <li class="item"><a href="#"> Tuyển Sinh </a></li>
                    <li class="item"><a href="#"> Brochure </a></li>
                    <li class="item"><a href="#"> Liên Hệ </a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <!--END MENU-->
            <!--END TOP MENU-->
        </div>
    </div>
</body>
