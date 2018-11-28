<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-143">
    <div class="container news">
        <div class="row">
            <!--TOP NEWS-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <img src="http://<?php echo $url_path ?>/images/news-3.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <img src="http://<?php echo $url_path ?>/images/news-3.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="top_news_block">
                    <div class="thumb text-center">
                        <a href="#">
                            <img src="http://<?php echo $url_path ?>/images/news-3.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="top_news_block_desc">
                        <div class="row">
                            <div class="col-md-4 col-xs-3 topnewstime">
                                <span class="topnewsdate">19</span><br>
                                <span class="topnewsmonth">Tháng 01</span><br>
                            </div>
                            <div class="col-md-8 col-xs-9 shortdesc">
                                <h4>
                                    <a href="#">TDC kết nối, hợp tác cùng Tập đoàn BKAV</a>                            </h4>
                                <p>Ngày 18/01 vừa qua, bà Nguyễn Thị Lý – Hiệu trưởng cùng bà Phạm Ngọc Tường – Phó Hiệu trưởng Trường Cao đẳng Công nghệ Thủ Đức (TDC) đã có chuyến thăm và làm việc cùng đại diện lãnh đạo Tập đoàn BKAV (Khu Đô thị Yên Hoà, Q.Cầu Giấy, HN).<a href="#">[...]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END TOP NEWS-->   
        </div>
    </div>
</div>

