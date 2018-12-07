<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-155">
    <div class="container sidebar">
        <div class="row">
            <!--LEFT-->
            <!--/END LEFT-->

            <!--RIGHT SIDE BAR-->
            <div class="col-md-4">

                <!--TEST-->
                <div class="test">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Thử tài<br><span>Qua các cuộc thi</span></h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="contest_list">
                            <div class="col-md-6 col-sm-6 col-xs-6 contest_item mask shine">

                                <a href="#">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/oth_logo.gif" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 contest_item mask shine">
                                <a href="#">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/oth_logo.gif" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 contest_item mask shine">
                                <a href="#">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/oth_logo.gif" alt="logo">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 contest_item mask shine">
                                <a href="#">
                                    <img class="img-responsive" src="http://<?php echo $url_path ?>/images/oth_logo.gif" alt="logo">
                                </a>
                            </div>

                            <svg height="0">
                            <!-- THE mask -->
                            <mask id="mask-firefox">
                                <image width="160" height="160" xlink:href="images/oth_logo.gif" filter="url(#filter)">
                            </mask>

                            <!-- the filter to make the image white -->
                            <filter id="filter">
                                <feFlood flood-color="white">
                                    <feComposite in2="SourceAlpha" operator="in">
                                        </filter>
                                        </svg>
                                        </div>
                                        </div>
                                        </div>	
                                        <div class="divider"></div>
                                        </div>
                                        <!--/END TEST-->


                                        </div>
                                        <!--/END RIGHT SIDE BAR-->

                                        </div>
                                        </div>

