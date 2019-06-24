<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/static/jisuan/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <style>
      .jumbotron{
          background:url(/static/jisuan/baoxian.png);
      }
    </style>
  </head>
  <body>
    <div class="jumbotron" style="
      margin-top: 155px;
      width: 500px;
      height: 321px;
      margin-left: 450px;
    ">
      <div class="container">
        <font style="color: white;">保额：</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="baoe"  id="baoe"><font style="color: white;">万元</font>  <!--保额-->
        <br>
        <br>
        <font style="color: white;">年利率：</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="nianlilu"  id="nianlilu">  <!--年利率-->
        <br>
        <br>
        <font style="color: white;">通货膨胀率：</font>
        <input type="text" name="pal"  id="pal">  <!--通货膨胀率-->
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="jisuan">计算</button>
        <br>
        <br>
        <p id="jieguo" style="color:red;">结果</p>
      </div>
  </div>
      

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="/static/jisuan/js/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="/static/jisuan/js/bootstrap.min.js"></script>
  </body>
  <script type="text/javascript">
    $(function(){  
    $("#jisuan").click(function(){
       var baoe     = $("#baoe").val();
       var nianlilu = $("#nianlilu").val();
       var pal      = $("#pal").val();
        $.ajax({
                type: "post",
                url: "/jisuan/result",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    'baoe':baoe,
                    'nianlilu':nianlilu,
                    'pal':pal
                },
                success: function(data){
                $("#jieguo").html("保费为："+data['all']+"万元<br>养老金为："+data['R']+"万元");
                }    
            });
    })
  });
  </script>
</html>