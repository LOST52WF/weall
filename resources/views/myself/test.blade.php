<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
  <form action="upload"  name="form_file_upload"  id="formSubmit"  method="post" enctype="multipart/form-data">
           {!! csrf_field() !!}
            <div class="form-group">
                <label for="exampleInputSelect" class="color-darker-2">资源类型</label>
                <select class="form-control" name="file_type" id="file_type">
                        <option class="color-darker-2">视频</option>
                        <option class="color-info">文档</option>
                        <option class="color-light-2">图片</option>
                        <option class="color-primary">其他</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputText" class="color-darker-2">标题</label>
                <input type="text" class="form-control"  id="title" name="title" placeholder="标题">
            </div>
            <div class="form-group">
                <label for="exampleInputText" class="color-darker-2">封面上传</label>
                <input type="file" name="videopage">
                <p style="font-size:5px;color:grey">视频和文档类型可以上传封面，图片类型则不用上传</p>
            </div>            
            <div class="form-group">
                <label for="exampleInputFile" class="color-darker-2">文件上传</label><br>
                <div class="file-container" style="display:inline-block;position:relative;overflow: hidden;vertical-align:middle">
                    <button class="btn btn-success fileinput-button" type="button">上传</button>
                    <input type="file" id="jobData" name="file[]" style="position:absolute;top:0;left:0;font-size:34px; opacity:0" multiple="multiple">
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
                        str += '<li>名称：' + t_files[i].name + '  大小' + t_files[i].size / 1024 + 'KB</li>';
                                                                        };
                    document.getElementById('content').innerHTML = str;
                }, false);
            </script>
            <div class="form-group">
                <label for="exampleInputTag" class="color-darker-2">标签</label>
                <input type="text" class="form-control"  id="tag" name="tag" placeholder="可以输入多个标签 多个标签之间请用空格分隔">
                <p></p>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" style="width: 80px" id="submitBtn">
        </form>
         <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
         <script src="/static/myself/javascripts/jquery.form.js"></script>   
</body>
</html>