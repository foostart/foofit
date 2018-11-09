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
    <link href="css/146.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-146">
        <div class="container teacher">
            <div class="row">
                <!--FACULTY OFFICE (văn phòng khoa)--> 
                <div class="faculty-office">
                    <div class="col-sm-4 col-md-4">
                    </div>  
                    <!--LIST TEACHER OF FACULTY OFFICE-->
                    <div class="col-sm-8 col-md-8 prof_list">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/VoThanhTrung.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Võ Thành Trung</a></h4>
                                <span class="prof_title">Trưởng khoa</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/TieuKimCuong.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Tiêu Kim Cương</a></h4>
                                <span class="prof_title">Phó khoa</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/NguyenHongLan.png" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Nguyễn Hồng Lân</a></h4>
                                <span class="prof_title">Nhân viên</span>
                            </div>
                            <div class="col-xs-6 col-sm-3 placeholder profview">
                                <div class="profview_thumb">
                                    <div class="profview_thumb_wrap">
                                        <img src="images/DongThiHoan.jpg" alt=""/>
                                    </div>
                                </div>
                                <h4 class="prof_name"><a href="#">Đồng Thị Hoan</a></h4>
                                <span class="prof_title">Nhân viên</span>
                            </div>
                        </div>
                    </div>
                    <!--END LIST TEACHER OF FACULTY OFFICE-->
                </div>
                <!--END FACULTY OFFICE-->
            </div>   
        </div>
    </div>
</body>

