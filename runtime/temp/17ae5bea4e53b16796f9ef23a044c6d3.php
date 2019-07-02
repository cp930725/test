<?php /*a:1:{s:64:"/www/wwwroot/ggfb.ggfb.cc/application/index/view/index/book.html";i:1561949333;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GGFB白皮书</title>
  <link href="/static/pdf/jquery.touchPDF.css" rel="stylesheet" media="screen" />
    <style>
      	body , html{
			background-color: #404040;
			height: 100%;
			padding: 0;
			margin: 0;
		}
        .pdf{
            width: 0px;
            height: 0px;
        }
    </style>
</head>
<body>
<div id="canvs"  style="margin:0px auto">
	<canvas id="the-canvas" ></canvas>
	<div style="text-align: center">
		<button id="prev" onclick="onPrevPage()">上一页</button>
		<span> <span id="page_num"></span> / <span id="page_count"></span></span>
		<button id="next" onclick="onNextPage()">下一页</button>
		  &nbsp; &nbsp;	
	</div>
</div>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="/static/pdf/pdf.js"></script>

 
<script type="text/javascript">
var url = '/static/GGFB白皮书.pdf';//展示的pdf路径
PDFJS.workerSrc = '/static/pdf/pdf.worker.js';//引入js，不引好像也没事。。。
var pdfDoc = null,
    pageNum = 1,//页码
    pageRendering = false,//据我观察，是用来应对一时间多次点击下一页按钮的情况的,你可以试试。
    pageNumPending = null,//取得最新的页码
    scale = 2.5,//缩放倍数
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');
PDFJS.getDocument(url).then(function(pdfDoc_) {
  pdfDoc = pdfDoc_;
  document.getElementById('page_count').textContent = pdfDoc.numPages;
  renderPage(pageNum);
});
/**
 *以下方法可以提取放到单独js里面去
 */
/**
 *渲染当前页
 */
function renderPage(num) {
  pageRendering = true;

  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport(scale);
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);

    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  document.getElementById('page_num').textContent = num;
}

function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

/**
 *上一页
 */
function onPrevPage() {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
}

/**
 *下一页
 */
function onNextPage() {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
}

</script>
  <script>
  function isPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPod","iPad","iPad Pro"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

  </script>
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