/**
 * Created by mzf on 2018/8/7.
 */
$(function(){
    addArray();
    //console.log(arr2);
    //加载省级列表
    for(let i=0;i<arr.length;i++) {
        $('.dropProvUl').append("<li class='dropProvLi'>" + arr[i] + "</li>");
    }
    //点击选择城市时，先隐藏省级市级选择块
    $('.citySelect').on('click',function(){
        //$('.dropDown').toggle();
        $('.dropCity').css('display',"none");
        $('.dropProv').toggle();
            //点击省份时，自动选择省会城市
            $('.dropProvLi').on('click',function(){
                $('.cityName').text( arr2[$(this).index()][0]);
                $('.dropDown div').css("display","none");
            });
            //给省级列表添加mouseover事件
            $('.dropProvLi').on('mouseover',function(){
                $('.dropCity').css("display","block");
                $('.dropProvLi').css("background-color","white");
                $('.dropCityUl').empty();
                $(this).css("background-color","#f1f3f6");
                //加载城市列表
                for(let j=0;j<arr2[$(this).index()].length;j++){
                    $('.dropCityUl').append("<li class='dropCityLi'>"+arr2[$(this).index()][j]+"</li>");

                }
                //选择城市
                $('.dropCityLi').on("click", function () {
                    //console.log($(this).text());
                    $('.cityName').text($(this).text());
                    $('.dropDown div').css("display","none");
                });
            });
    });
   // console.log(arr[17]);
});
//把市级添加到arr2中对应的省级
function addArray(){
     arr=["后端","前端","移动端","其他"];
     arr2=["后端","前端","移动端","其他"];
    function addTo(id,iArray){
        arr2[id] = [];
        for(let i=0;i<iArray.length;i++){
            arr2[id][i]=iArray[i];
        }

    }
   addTo("0",["PHP","Java","Go","Python","C","C++","C#","Ruby"]);
   addTo("1",["HTML/CSS","JavaScript"]);
   addTo("2",["Android","iOS"]);
   addTo("3",["区块链","人工智能","机器学习","云计算","大数据","算法与数据结构","数据库","其他"]);

   // console.log(arr);
};

