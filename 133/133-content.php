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
    $less->compileFile('less/301.less', 'css/301.css');
    ?>

    <link href="css/301.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-301">
        <!--MENU HOME-->
        <div class="navbar-default" role="navigation">
           
            <div class="container">        
                <nav class="topnav">
                    <ul>
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="gioi-thieu">Giới thiệu</a></li>
                        <li><a href="thanh-tich">Thành tích</a></li>
                        <li><a href="tuyen-sinh">Tuyển sinh</a></li>
                        <li><a href="brochure">Brochure</a></li>
                        <li><a href="lien-he">Liên hệ</a></li> 
                    </ul>
                </nav>
            </div>
        </div>
        <!--END MENU HOME-->
      
        <div class="navbar navbar-inverse navbar-static-top">
            <!--LIST OF HEADER -->
            <div class="container" style="position: relative;">
                <div class="left-bg">&nbsp;</div>
                <div class="container">
                    <div class="logo">
                        <a href="#"><img alt="TDC-Khoa CNTT logo" src="images/logo.png"></a>
                        <span class="triangle-arrow">&nbsp;</span>
                    </div>
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button>
                    </div>
                    <!---->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="first parent"><a href="#">TIN TỨC</a></li>
                            <li class="parent"><a href="#">GIẢNG VIÊN</a></li>
                            <li class="parent"><a href="#">SINH VIÊN</a></li>
                            <li class="parent"><a href="#">CHUYÊN ĐỀ</a></li>
                            <li class="last parent"><a href="#">ĐÀO TẠO</a></li>
                        </ul>
                    </div>                  
                </div>
            </div>
        </div>
        <!--END MENU HEADER-->
    </div>
</body>