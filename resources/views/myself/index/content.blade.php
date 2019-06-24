<div class="content">
    <div class="content-header" style="background-color:#cccccc;">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index">个人主页</a></li>
            </ul>
        </div>
    </div>
    
    <div class="col-sm-12 col-md-7">
        <div class="row">
            <h4 class="section-subtitle" style="margin-left: 15px;"><b>个人资源</b> 统计</h4>
            <div class="col-sm-12 col-md-6">
                <div class="panel widgetbox wbox-2 bg-scale-0">
                    <div class="panel-content ">
                        <div class="row">
                            <div class="col-xs-4">
                                <span class="icon fa fa-file color-darker-1 "></span>
                            </div>
                            <div class="col-xs-8">
                                <h3 class="subtitle color-darker-1">共计</h3>
                                <h2 class="title color-primary">{{$data['video']+$data['words']+$data['image']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--<div class="col-sm-12 col-md-3">-->
            <div class="col-sm-12 col-md-6">
                <div class="panel widgetbox wbox-2 bg-info">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <span class="icon fa fa-file-movie-o color-darker-2"></span>
                            </div>
                            <div class="col-xs-8">
                                <h3 class="subtitle color-darker-2">视频</h3>
                                <h2 class="title color-w"> {{$data['video']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--<div class="col-sm-12 col-md-3">-->
        </div><!--<div class="row">-->
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <span class="icon fa fa-book color-darker-2"></span>
                            </div>
                            <div class="col-xs-8">
                                <h3 class="subtitle color-darker-2">文档</h3>
                                <h2 class="title color-w">{{$data['words']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--<div class="col-sm-12 col-md-3">-->
            <div class="col-sm-12 col-md-6">
                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-4">
                                <span class="icon fa fa-picture-o color-lighter-1"></span>
                            </div>
                            <div class="col-xs-8">
                                <h3 class="subtitle color-lighter-1">图片</h3>
                                <h2 class="title color-light"> {{$data['image']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--<div class="col-sm-12 col-sm-6">-->
        </div><!--class="row"-->
        <div class="row">
            <h4 class="section-subtitle"><b>学习群组</b> 统计</h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="widget-list list-left-element ">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="left-element"><i class="fa fa-group color-warning"></i></div>
                                    <div class="text">
                                        <span class="title">{{$group['count']}}</span>
                                        <span class="subtitle">加入资源群组</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left-element"><i class="fa fa-file color-danger"></i></div>
                                    <div class="text">
                                        <span class="title">{{$group['file']}}</span>
                                        <span class="subtitle">贡献资源</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left-element"><i class="fa fa-smile-o color-primary"></i></div>
                                    <div class="text">
                                        <span class="title">{{$group['rank']}}</span>
                                        <span class="subtitle">担任群主和管理员</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--<div class="panel">-->
        </div><!--<div class="row">-->
    </div><!--<div class="col-sm-12 col-md-7">-->
    <div class="col-sm-12 col-md-5">
        <h3 class="color-darker-2" style="margin: 0px;"> 上传资源 </h3>
        <br>
        <form class="form-inline" name="form_file_upload"  id="formSubmit"  method="post" enctype="multipart/form-data" >
            {!! csrf_field() !!}
            <div class="row" style="margin-left: 0px;margin-bottom: 10px;">
                <div class="form-group">
                    <label for="exampleInputText" class="color-darker-2">标题</label>
                    <input type="text" class="form-control"  id="title" name="title" placeholder="标题">
                </div>
                <div class="form-group">
                    <label for="exampleInputSelect" class="color-darker-2">资源类型</label>
                    <select class="form-control" name="file_type" id="file_type">
                        <option class="color-darker-2">视频</option>
                        <option class="color-info">文档</option>
                        <option class="color-light-2">图片</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-left: 0px;margin-bottom: 10px;">
                <div class="form-group">
                    <label for="exampleInputText" class="color-darker-2">封面上传</label>
                    <input type="file" name="videopage">
                    <p style="font-size:5px;color:grey;margin-bottom: 0px;">视频和文档类型可以上传封面，图片类型则不用上传
                    </p>
                </div> 
            </div>       
            <div class="row" style="margin-left: 0px;margin-bottom: 10px;">
                <div class="form-group">
                    <label for="exampleInputFile" class="color-darker-2">文件上传</label><br>
                    <div class="file-container" style="display:inline-block;position:relative;overflow: hidden; vertical-align:middle">  
                    <button class="btn btn-success fileinput-button" type="button">上传</button>  
                    <input type="file" id="jobData" name="file[]" style="position:absolute;top:0;left:0;font-size :34px; opacity:0" multiple="multiple"> 
                    </div>  
                    <ul id='content'></ul>
                </div>
                    <script>
                        var test = document.getElementById('jobData');
                        test.addEventListener('change', function() {
                            var t_files = this.files;
                            console.log(t_files);
                        var str = '';
                        for (var i = 0, len = t_files.length; i < len; i++) {
                            console.log(t_files[i]);
                            str += '<li>名称：' + t_files[i].name + '大小' + t_files[i].size/1024 + 'KB</li>';
                            }
                        document.getElementById('content').innerHTML = str;
                        }, false);
                    </script>
                    <!-------------------显示文件名字-------------------->
            </div>
            <div class="row" style="margin-left: 0px;margin-bottom: 10px;">
                <div class="form-group">
                    <label for="exampleInputTag" class="color-darker-2">标签</label>
                    <div class="search" style="margin:0px;" >
                        <div class="citySelect">
                            <span class="cityName" id="tag">项目类型</span>
                            <i class="iconDown"></i>
                            <i class="line"></i>
                        </div>
                        <div class="dropDown">
                            <div class="dropProv">
                                <ul class="dropProvUl dropUl"></ul>
                            </div>
                            <div class="dropCity">
                                <ul class="dropCityUl dropUl"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-left: 0px;margin-bottom: 10px;">
                <div class="form-group">
                    <label for="exampleInputTag" class="color-darker-2">原创/转载声明</label>
                    <input type="radio" name="shenming" value="yuanchuang">原创 &nbsp;
                    <input type="radio" name="shenming" value="zhuanzai">转载
                    <input name="zzdizhi" type="text" vlaue="" placeholder="转载请必须在此次说明转载地址" style="width: 220px;">
                </div>
            </div>
            <input type="hidden" name="tag" id="gettag" value="">
            <input type="button" class="btn btn-primary" value="确认上传" style="width: 80px" id="submitBtn">
            <input type="hidden" id="ajaxParam" name="ajaxParam">
        </form>
                <script type="text/javascript">
                    $("#submitBtn").click(function(){
                        var file_type=$("#file_type").val();
                        var title=$("#title").val();
                        var tag=$("#tag").html();
                        $("#gettag").val(tag);
                        uploadJsonData="{'file_type':"+file_type+",'title':"+title+",'tag':"+tag+"}";
                        $("#ajaxParam").val(uploadJsonData);
                        $("#formSubmit");
                            var options = {
                                url:'/myself/upload',
                                type:'post',
                                resetForm: true,
                                success:function(data){     
                                    if(data){
                                        alert("上传成功");
                                    }else{
                                        alert("上传失败");
                                    }
　　　　　                       },
                                error:function(){
                                }
                            }; 
                        $("#formSubmit").ajaxSubmit(options);
                    });
                </script>
    </div><!--<div class="col-sm-12 col-md-5">-->
</div><!--<div class="content">-->