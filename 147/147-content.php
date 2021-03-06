<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-147">
    <div class="container teacher">
        <div class="row">
            <!--INFORMATICS BASIS (TIN HỌC CƠ SỞ)-->
            <div class="col-sm-4 col-md-4">
                <div class="widget html">
                    <div class="panel-heading">
                        <h2><span>Bộ môn</span><br>Tin học cơ sở</h2>
                    </div>
                    <p class="name">
                        Trưởng bộ môn: Lâm Thị Phương Thảo
                    </p>
                    <p class="desc">
                        Cung cấp kiến thức nền vững chắc cho sinh viên ngành CNTT thông qua các kiến thức cơ sở về lập trình, cấu trúc dữ liệu, giải thuật, lập trình hướng đối tượng, anh văn chuyên ngành… và trang bị kiến thức chung về tin học cho sinh viên tất cả các ngành khác trong trường.
                        Tham gia các hoạt động tổ chức huấn luyện đội tuyển Olympic tin học, đội tuyển MOS.
                        Nghiên cứu xây dựng các đề tài khoa học có khả năng áp dụng trong thực tế như: các thuật toán, e-learning, các phần mềm thiết kế bài giảng điện tử.
                    </p>	
                </div>
            </div>
            <!--LIST TEACHER OF INFORMATICS BASIS-->
            <!--END LIST TEACHER OF INFORMATICS BASIS-->
            <!--END INFORMATICS BASIS-->
        </div>
    </div>
</div>

