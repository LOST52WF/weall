<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>weall.hd</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/static/showingmap/css/shutter.css">
        <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
        <style>
            .jumbotron{
                background:url(/static/img/workinggirl.jpg);
            }
            .navbar{
                background-color: hsla(0,0%,50%,.5);
                box-shadow: 0 1px 2px rgba(0,0,0,.1);
                border:0px;
                font-family: "Helvetica Neue", Helvetica, Arial, "Microsoft Yahei", "Hiragino Sans GB", "Heiti SC", "WenQuanYi Micro Hei", sans-serif;
                font-size: 13px;
            }
            .navbar-nav>li>a {padding-top:10px;padding-bottom:0px;}
            .navbar-brand {height:40px;padding-top:10px;}
            .navbar {min-height:40px;}
            .navbar-toggle {margin-top:4px;margin-bottom:0px;}
            .navbar-default .navbar-nav>li>a {
                color: white;
            }
            .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
                color: #FF0000;
                background-color: transparent;
            }
            .navbar-default .navbar-nav>li>a:hover {
                color: #FF0000;
            }
            .navbar-default .navbar-nav>li>a:focus {
                color: white
            }
            .col-md-offset-2 {
                margin-left: 12%;
            }
            .row {
                margin-top:-17px;
                margin-right: 0px;
                margin-left:0px;
            }
            .list-group-item {
                border: 0px;
            }
            .table>tbody>tr>td{
                border:0px;
            }
            .panel{
                border:0px;
            }
            .p-title:hover{
                color:#3cb5d8;
            }
            .ranking:hover{
                color:#3cb5d8;
            }
            .panel-title:hover{
                text-decoration:none;
                color:#3cb5d8;
            }
        /* 重置文本格式元素 */
        .clearfix::after{ 
            display:block; 
            content:''; 
            height:0; 
            overflow:hidden; 
            clear:both;
        } 

        </style>
    </head>
    <body>
<!-------------------------------------------主体部分--------------------------------------------->
        <div class="content" style="background-color: white">
            <div class="row animated fadeInUp">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1"> 
                        <div class="panel panel-default" style="margin-top: 20px; margin-left: 45px;">
                            <div class="panel-heading" style="margin-left: 15px;width: 960px;"><h4 style="margin: 0px;">视频审查</h4></div>
                            <div class="panel-body" style="padding-bottom: 0px;">
                                <video width="960"  poster="{{$data->picture_url}}" controls>
                                    <source src="{{$data->file_url}}" type="video/mp4">
                                </video>
                            </div>
                            <div class="panel-footer" style="margin-left: 15px;width: 960px;height: 100px;">
                                <div class="row" style="margin-top:0px;">
                                    <form method="post" action="/admin/check/post">
                                        {!!csrf_field()!!}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="check" value="tg">通过 &nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="check" value="wtg">未通过
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        未通过原因：<select name="info">
                                            <option>色情/暴力</option>
                                            <option>反动/违法</option>
                                            <option>版权/抄袭</option>
                                            <option>内容质量太差</option>
                                            <option>与学习IT无关</option>
                                        </select>
                                        <input type='hidden' name='file_id' value="{{$data->id}}">
                                        <input type="submit" name="提交" class="btn btn-primary">
                                    </form>
                                </div><!--<div class="row" style="margin-top:0px;">-->
                            </div><!--div class="panel-footer"-->
                        </div> <!--<div class="panel panel-default">--> 
                    </div><!--<div class="col-md-9 col-md-offset-1"> -->
                </div><!--<div class="row">-->         
<!---------------------------------------------结束----------------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>