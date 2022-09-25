<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-154">
    <div class="container sidebar">
        <div class="row">
            <!--/END LEFT-->
            <!--RIGHT SIDE BAR-->
            <div class="col-md-4">
                <!--STUDENT-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Sinh viên<br><span>Tiêu biểu</span></h2>
                    </div>
                    <div class="crossedbg"></div>
                    <div class="row">
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12 ">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">                                
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">                                       
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12 ">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">                     
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">                                    
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">       
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">                                        
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">    
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">                                        
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">     
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                        <div class="feedback_owner col-sm-6 col-xs-12 col-md-12 ">
                            <div class="row mobile" >
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="feedback_thumb mask shine">
                                        <a href="#">                                      
                                            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/sv.jpg" alt="sv">       
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 feedback_desc">
                                    <span class="feedback_name"> Mai Khoa</span>
                                    <p class="feedback_title">Giải nhất Olympic tin học sinh viên toàn quốc 2015</p>
                                </div>
                            </div>          
                        </div>
                    </div>	
                    <div class="divider"></div>
                </div>
                <!--/END STUDENT-->
            </div>
            <!--/END RIGHT SIDE BAR-->
        </div>
    </div>
</div>

