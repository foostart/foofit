<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-141">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT SIDE BAR-->

            <!--/END LEFT SIDE BAR-->

            <!--RIGHT CONTENTS HOME-->

            <!--LEFT PARTNERS-->
            <div class="widget">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Đối tác</h2>
                    </div>
                    <div class="crossedbg"></div>
                    <h4><b>Chứng nhận</b></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                            <div class="partnerlogo">
                                <a href="http://<?php echo $url_path ?>/images/ms_cert.gif" data-toggle="lightbox" data-title="Microsoft IT Academy">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/micr.png" alt="Microsoft logo"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                            <div class="partnerlogo">
                                <a href="http://<?php echo $url_path ?>/images/cisco_cert.gif" data-toggle="lightbox" data-title="Microsoft IT Academy">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/cisco.gif" alt="Microsoft logo"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4><b>Công ty thực tập</b></h4>

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/thue.png"  alt="Cục thuế Tp.HCM logo" title="Cục thuế Tp.HCM">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/tma.png" alt="TMA solutions logo" title="TMA Solutions">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/fpt.png"  alt="FPT Software logo" title="FPT Software" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/pmsv.png"  alt="PMSV logo" title="Phần mềm giáo dục">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/esc.png" alt="ESC logo" title="ESC">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/abs.gif" alt="ABS Việt Mỹ logo" title="ABS Việt Mỹ" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/softWorld.gif" alt="SoftWorld logo" title="SoftWorld Việt Nam" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/thietbinhanh.gif" alt="Bibiam logo" title="Bibiam">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/3t.png"  alt="3T logo" title="3T" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/bk.gif" alt="Bach Khoa Group logo" title="Bach Khoa Group">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/pnc.png" alt="PNC logo" title="PNC Telecom" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/cmc.png" alt="CMC P&T logo" title="CMC P&T" >
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partnerlogo">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/southernWaveS.gif" alt="Sóng nam logo" title="Sóng Nam" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
            <!--/END LEFT PARTNERS-->
        </div>
    </div>
</div>

