<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>        
<div class="type-167">
    <div class="container sidebar">
        <div class="row">
            <!--END INTRODUCTION-->
            <!--RIGHT SIDE BAR-->
            <div class="col-md-4">       
                <!--WIDGET TOP WORKS-->
                <div class="widget topworks">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tuyển dụng <br><span>Cơ hội việc làm</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item boxshow">
                                    <a href="#">IT Phần Cứng - Mạng</a>
                                    <span class="productdot"></span>                        
                                </li>
                                <li class="list-group-item boxshow">
                                    <a href="#">Nhân Viên Kỹ Thuật</a>  
                                    <span class="productdot"></span>                        
                                </li>
                            </ul>
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END WIDGET TOP WORKS-->
            </div>
            <!--/END RIGHT SIDE BAR-->
        </div>
    </div>
</div>
