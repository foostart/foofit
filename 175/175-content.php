<head>
    <meta charset="UTF-8">
    <title>174</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,800|Open+Sans+Condensed:300,700|Prata&amp;subset=vietnamese" rel="stylesheet" type="text/css">
    <?php
        $url_host = $_SERVER['HTTP_HOST'];

        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

        preg_match_all($pattern_uri, __DIR__, $matches);

        $url_path = $url_host . $matches[1][0];

        $url_path = str_replace('\\', '/', $url_path);
    ?>
    <link href="css/175.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-175">
        <div class="container top-menu" style="position: relative">
            <!--MENU-->
            <div class="left-bg">&nbsp;</div>
            <!--END MENU-->
            <div class="container top-menu">
                <!--LOGO-->
                <div class="logo">
                    <a href="#">
                        <img alt="TDC-Khoa CNTT logo" src="images/logo.png">
                    </a>
                    <span class="triangle-arrow">&nbsp;</span>
                </div>
                <!--END LOGO-->
                <!--MAIN MENU-->
                <div class="">
                    <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                    <div class="clear"></div>
                </div>
                <div class="navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right collapse collapse-top-menu"> 
                        <li class="item active"><a href="#">TIN TỨC</a></li>
                        <li class="item"><a href="#">GIẢNG VIÊN</a></li>
                        <li class="item"><a href="#">SINH VIÊN</a></li>
                        <li class="item"><a href="#">CHUYÊN ĐỀ</a></li>
                        <li class="item"><a href="#">ĐÀO TẠO</a></li>
                    </ul>
                </div>
                <!--END MAIN MENU-->              
            </div>
        </div>
        
    </div>
</body>
