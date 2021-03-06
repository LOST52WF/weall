<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="/static/imageplayerjs/css/index.css">

</head>
<body>
<ul class="picView-magnify-list" style="padding: 30px">
    <li>
        <a href="javascript:void(0)" data-magnify="gallery" data-group="g1" data-src="{{$info->picture_url}}" data-caption="测试图片一">
            <img src="{{$info->picture_url}}">
        </a>
    </li>
</ul>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/imageplayerjs/js/index.js"></script>
<script src="/static/imageplayerjs/js/jquery.rotate.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('[data-magnify]').Magnify({
            Toolbar: [
                'prev',
                'next',
                'rotateLeft',
                'rotateRight',
                'zoomIn',
                'actualSize',
                'zoomOut'
            ],
            keyboard:true,
            draggable:true,
            movable:true,
            modalSize:[800,600],
            beforeOpen:function (obj,data) {
                console.log('beforeOpen')
            },
            opened:function (obj,data) {
                console.log('opened')
            },
            beforeClose:function (obj,data) {
                console.log('beforeClose')
            },
            closed:function (obj,data) {
                console.log('closed')
            },
            beforeChange:function (obj,data) {
                console.log('beforeChange')
            },
            changed:function (obj,data) {
                console.log('changed')
            }
        });

    })
</script>
</body>
</html>