<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-151">
    <div class="container news">
        <!--PANEL HEADING-->
        <div class="panel-heading">
            <h2>Bài viết <br><span>chuyên đề</span></h2>
        </div>
        <!--END PANEL HEADING-->
        <div class="crossedbg"></div>
        <div class="row">
            <!--NEWS-->
            <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" ><img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">12</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp (Phần 2)</a>                            </h4>
                                <p>(PCWorldVN) Ba bài thực hành ở cấp độ trung cấp đòi hỏi bạn phải "võ luyện" nhiều lần, kết hợp với cọ xát thực tế với thiết bị, mạng giả lập và mạng thực tế tại gia đình, doanh nghiệp.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" > <img src="http://<?php echo $url_path ?>/images/posts-1.png" alt="post1"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">23</span><br>
                                <span class="topnewsmonth">Tháng 12</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a  class="hover-fill" href="#">9 bài thực hành để trở thành quản trị mạng chuyên nghiệp_Phần 1</a>                            </h4>
                                <p>(PCWorldVN) Với nghề quản trị mạng, kinh nghiệm là trên hết, kế đến mới là bằng cấp. PCW giới thiệu đến bạn 9 bài thực hành được thiết kế cho 3 cấp độ, từ cơ bản cho đến nâng cao.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">                   
                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" >  <img src="http://<?php echo $url_path ?>/images/posts-3.jpg" alt="post3"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">15</span><br>
                                <span class="topnewsmonth">Tháng 11</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a class="hover-fill"  href="#">Quên SSD đi, SSHD mới là chiếc ổ cứng thỏa mãn mơ ước của bạn</a>                            </h4>
                                <p>Thay ổ HHD cũ bằng một ổ SSD mới là cách nhanh chóng và đơn giản nhất để đẩy nhanh hiệu năng của chiếc PC nhà bạn. Thế nhưng giờ đây bạn đã có thêm một lựa chọn để biến những trải nghiệm chơi video game của mình “tuyệt như mơ”.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 col-sm-6">
                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" >    <img src="http://<?php echo $url_path ?>/images/posts-4.png" alt="post4"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">15</span><br>
                                <span class="topnewsmonth">Tháng 11</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a  class="hover-fill" href="#">Microsoft chính thức “kết liễu” Windows 7 và Windows 8</a>                            </h4>
                                <p>Trên trang chính thức của mình, Microsoft vừa đưa ra tuyên bố “Ngừng bán” hai hệ điều hành phổ biến nhất của hãng: Windows 7 và Windows 8.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">

                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" >   <img src="http://<?php echo $url_path ?>/images/posts-5.jpg" alt="post5"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">5</span><br>
                                <span class="topnewsmonth">Tháng 10</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a class="hover-fill"  href="#">Đo tốc độ Internet bằng Google Search</a>                            </h4>
                                <p>Công cụ kiểm tra tốc độ Internet của Google hiện chỉ hỗ trợ người dùng ở Mỹ. Tuy nhiên, với thủ thuật trong bài viết sau đây, bạn có thể dễ dàng sử dụng nó ở Việt Nam.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-6">                   
                <div class="top_news_block">
                    <div class="img-responsive thumb mask shine">
                        <a href="#" >  <img src="http://<?php echo $url_path ?>/images/posts-6.jpg" alt="post6"/></a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">5</span><br>
                                <span class="topnewsmonth">Tháng 10</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a  class="hover-fill" href="#">3 cách giúp tăng tốc Internet nhanh hơn 20%</a>                            </h4>
                                <p>Chỉ với vài mẹo nhỏ đơn giản, bạn có thể tăng tốc Internet nhanh hơn 20% mà không cần phải cài đặt thêm các ứng dụng của bên thứ ba.<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>            
            <!--END NEWS-->  
        </div>
        <!--PAGINATION-->
        <div class="pagination-centered">
            <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#" data-ci-pagination-page="2" rel="start">2</a></li>
                <li class="next"><a href="#" data-ci-pagination-page="2" rel="next">→</a></li>
            </ul>    
        </div>
        <!--END PAGINATION-->
    </div>
</div>


