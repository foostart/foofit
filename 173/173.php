<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/173.less', 'css/173.css');
?>
<head>
    <meta charset="UTF-8">
    <title>173</title>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/173.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo $url_path ?>/js/turn.min.js" type="text/javascript"></script>

</head>

<body>
            <?php
        include '../173/173-content.php';
        ?>
</body>

<script>
    var oTurn = $(".flipbook").turn({
        width: 960,
        height: 338,
        elevation: 50,
        gradients: true,
        autoCenter: true,
        next: true
    });

    $("#prev").click(function (e) {
        e.preventDefault();
        oTurn.turn("previous");
    });

    $("#next").click(function (e) {
        e.preventDefault();
        oTurn.turn("next");
    });
</script>