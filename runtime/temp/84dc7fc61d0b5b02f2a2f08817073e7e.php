<?php /*a:1:{s:62:"/www/wwwroot/ggfb.ggfb.cc/application/api/view/index/book.html";i:1561603780;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GGFB白皮书</title>
    <style>
        .pdf{
            width: 0px;
            height: 0px;
        }
    </style>
</head>
<body>
<embed class="pdf" src="/static/GGFB白皮书.pdf" type="application/pdf">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {
        var width = $(window).width();
        var height = $(window).height();

        $('.pdf').width(width);
        $('.pdf').height(height);
    })
</script>
</body>
</html>