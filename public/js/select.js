//城市级联
function getAreaID(){
	var area = 0;          
	if ($("#seachcity").val() != "0"){
		area = $("#seachcity").val();
	}else{
		area = $("#seachprov").val();
	}
	return area;
}

function showAreaID() {
	//地区码
	var areaID = getAreaID();
	//地区名
	var areaName = getAreaNamebyID(areaID) ;
	alert("您选择的地区码：" + areaID + "      地区名：" + areaName);            
}

//根据地区码查询地区名
function getAreaNamebyID(areaID){
	var areaName = "";
	if(areaID.length == 2){
		areaName = area_array[areaID];
	}else if(areaID.length == 4){
		var index1 = areaID.substring(0, 2);
		areaName = area_array[index1] + " " + sub_array[index1][areaID];
	}else if(areaID.length == 6){
		var index1 = areaID.substring(0, 2);
		var index2 = areaID.substring(0, 4);
		areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
	}
	return areaName;
}
//比率级联
var ratio=[
     ["15%-30%起","30%-50%","50%以上"],
     ["5%-15%起","15%-30%","30%-50%","50%以上"],
     ["15%-30%起","30%-50%","50%以上"]
     ];
 
function getCity(){
     //获得类型下拉框的对象
     var sel=document.getElementById('sel');
     //获得比率下拉框的对象
     var choose=document.getElementById('choose');
     //alert(sltProvince.selectedIndex);
     //得到对应类型的比率
     var provinceCity=ratio[sel.selectedIndex - 1];
    
     //清空比例下拉框，仅留提示选项
     choose.length=1;

     //将比率数组中的值填充到比率下拉框中
     for(var i=0;i<provinceCity.length;i++){
         choose[i+1]=new Option(provinceCity[i],provinceCity[i]);
     }
}

	$(function(){
		//点击语音
		$('.add_voice').click(function(){
			alert('下载资芽APP可在线私聊留言');
		})
		//城市级联
		initComplexArea('seachprov', 'seachcity', area_array, sub_array, '0', '0', '0');

		//传文件
		$('.uf_file2').change(function(){
			$('.enter_box').val($(this).val());
		})

		//传图片
		$(".up_pic2").change(function() {
			$('.image_container').show().css('margin-top','55px');
			$('.ec .ecp_word').css('margin-left','108px');
			var $file = $(this);
			var fileObj = $file[0];
			var windowURL = window.URL || window.webkitURL;
			var dataURL;
			var $img = $(".preview");
 
			if(fileObj && fileObj.files && fileObj.files[0]){
				dataURL = windowURL.createObjectURL(fileObj.files[0]);
				$img.attr('src',dataURL);
			}else{
				dataURL = $file.val();
				var imgObj = $(".preview");
			
			// 1、在设置filter属性时，元素必须已经存在在DOM树中，动态创建的Node，也需要在设置属性前加入到DOM中，先设置属性在加入，无效；
			// 2、src属性需要像下面的方式添加，上面的两种方式添加，无效；
				imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
				imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;
			 
			}
		});
        //点击服务地区
        $('.please').click(function(event) {
            $('.coverpop,.province').show();
        });
        //取值
        $('.sure').click(function(event) {
            var temp = "";
            var arr=[];
            var inum=0;
            $('.prov tr td input').each(function(index, element) {
                //var inp = $(element).children('input');
                // if($(inp).is(':checked')){
                //     var val = $(element).children('input').val();
                //     $('.please').html(val);
                // }
                var val = $(element).val();

                if($(element).is(':checked')){
                    inum=index;
                    arr.push(inum);
                    //alert(val);
                    //temp +=val;
                    temp = temp + val +",";
                    //temp=temp.substring(0,temp.length-1)
                    $('.please').html(temp);
                    $('#ServiceArea').val(temp);
                }
            });
            if(arr.length==0){
                temp ='';
                $('.please').html('请选择');
            }

            $('.coverpop,.province').hide();
        });
        $('.revoke').click(function(event) {
            $('.coverpop,.province').hide();
            return false;

        });

	});