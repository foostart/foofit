<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-157">
        <div class="container sidebar">
            <div class="row">
                <!--CONTENTS LEFT-->
                <div class="col-md-8">

                    <!--LIST NEWS-->
                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="http://<?php echo $url_path ?>/images/php.jpg" alt="thumb">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="http://<?php echo $url_path ?>/images/php.jpg" alt="thumb">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list_new_view">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="top_news_block_thumb">
                                        <img src="http://<?php echo $url_path ?>/images/php.jpg" alt="thumb">
                                    </div>
                                </div>
                                <div class="col-md-7 top_news_block_desc">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3 topnewstime">
                                            <span class="topnewsdate">21</span><br>
                                            <span class="topnewsmonth">Tháng 09</span><br>
                                        </div>
                                        <div class="col-md-9 col-xs-9 shortdesc">
                                            <h4><a href="#">PHP5 và những cải tiến vượt bậc</a></h4>
                                            <p>
                                                Công nghệ mới PHP5 và những cải tiến hỗ trợ developer lập trình tốt hơn so với các phiên bản trước đó.
                                                <a href="#">[...]</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                    <!--/END LIST NEWS-->

                </div>
                <!--/END CONTENTS LEFT-->

                <div class="col-md-8"></div>

            </div>
        </div>
    </div>
