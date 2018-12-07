<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-159">
    <div class="container bio">
        <div class="row">
            <!--BIOGRAPHY-->
            <div class="col-md-8">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><span>Lý lịch</span><br>Khoa học</h2>
                        </div>
                        <div class="crossedbg"></div>
                        <div class="panel-body">
                            Chuyên ngành&nbsp;<strong>Công Nghệ Thông Tin</strong>
                        </div>
                    </div>
                </div>
            </div>
            <!--END BIOGRAPHY-->  
        </div>
    </div>
</div>

