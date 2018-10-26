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
    $less->compileFile('less/315.less', 'css/315.css');
    ?>
    <link href="css/315.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-315">
        <div class="container teacher">
            <div class="row">
                <!--INFORMATICS BASIS (TIN HỌC CƠ SỞ)-->
                <div class="col-sm-4 col-md-4">
                    <div class="widget html">
                        <div class="panel-heading">
                            <h2><span>bộ môn</span><br>Tin học cơ sở</h2>
                        </div>
                        <p>
                            Trưởng bộ môn: Lâm Thị Phương Thảo
                        </p>
                        <p>
                Cung cấp kiến thức nền vững chắc cho sinh viên ngành CNTT thông qua các kiến thức cơ sở về lập trình, cấu trúc dữ liệu, giải thuật, lập trình hướng đối tượng, anh văn chuyên ngành… và trang bị kiến thức chung về tin học cho sinh viên tất cả các ngành khác trong trường.
                Tham gia các hoạt động tổ chức huấn luyện đội tuyển Olympic tin học, đội tuyển MOS.
                Nghiên cứu xây dựng các đề tài khoa học có khả năng áp dụng trong thực tế như: các thuật toán, e-learning, các phần mềm thiết kế bài giảng điện tử.
                        </p>	
                    </div>

                </div>
                <!--LIST TEACHER OF INFORMATICS BASIS-->
                <div class="col-sm-8 col-md-8 prof_list">
                </div>
                <!--END LIST TEACHER OF INFORMATICS BASIS-->
                <!--END INFORMATICS BASIS-->
            </div>
        </div>
    </div>
</body>

