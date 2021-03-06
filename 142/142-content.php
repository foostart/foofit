<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-142">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT SIDE BAR-->
            <!--/END LEFT SIDE BAR-->
            <!--RIGHT SIDE BAR-->
            <div class="col-md-8">
                <!--WIDGET TOP TECHNOLOGIES-->
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Bài viết <br><span>Học thuật</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 toparticle">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://<?php echo $url_path ?>/images/files.png" alt="files.png">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                
                                        </h4>
                                        <div>
                                            (PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.                    
                                            <a href="#">[...]</a>                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item boxshow">
                                            <a href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp_Phần 1</a>                        
                                            <span class="productdot"> </span>
                                        </li>
                                        <li class="list-group-item boxshow">
                                            <a href="#">Quên SSD đi, SSHD mới là chiếc ổ cứng thỏa mãn mơ ước của bạn</a>
                                            <span class="productdot"> </span>
                                        </li>
                                        <li class="list-group-item boxshow">
                                            <a href="#">Microsoft chính thức “kết liễu” Windows 7 và Windows 8</a>        
                                            <span class="productdot"> </span>
                                        </li>
                                        <li class="list-group-item boxshow">
                                            <a href="#">Đo tốc độ Internet bằng Google Search</a>
                                            <span class="productdot"> </span>
                                        </li>
                                        <li class="list-group-item boxshow">
                                            <a href="#">3 cách giúp tăng tốc Internet nhanh hơn 20%</a>          
                                            <span class="productdot"> </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="divider"></div>
                    <!--/END WIDGET TOP TECHNOLOGIES-->
                </div>
            </div>
            <!--/END RIGHT SIDE BAR-->
        </div>
    </div>
</div>
