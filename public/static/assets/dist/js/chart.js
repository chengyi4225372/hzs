/**
 * chart.js
 */

$('#addchart').click(function () {
    var url = $(this).attr('data-url');
    layer.open({
        type: 2,
        title: '添加',
        shadeClose: true,
        shade: 0.8,
        area: ['40%', '50%'],
        content: url, //iframe的url
    });
});

//取消
$('.cancle').click(function(){
     parent.layer.closeAll();
});

/**
 * 提交
 * @returns {boolean}
 */
 $('.clikadd').click(function(){
    var urls = $(this).attr('data-url');

    var imgs = $('#Images').val();

    if(imgs == '' || imgs == undefined || imgs =='undefined'){
        layer.msg('请上传图片！');
        return false;
    }

    $.post(urls,{'imgs':imgs},function(ret){

         if(ret.code == 200){
             layer.msg(ret.msg,function () {
                 parent.location.reload();
             });
         }

         if(ret.code == 400){
             layer.msg(ret.msg,function () {
                  parent.location.reload();
             });
         }
    },'json')

 });

//上传图片
function uploadFiles() {
    var formData =new FormData();
    formData.append("file",$("#file")[0].files[0]);

    var urls = "uploadImgs";

    $.ajax({
        url: urls,
        type: "post",
        data: formData,
        async:false,
        dataType: 'json',
        cache: false,
        processData : false,
        contentType : false,
        success: function (ret) {
            if (ret.code == 200) {
                $("#imgs").attr('src', ret.path);
                $("#Images").val(ret.path);
                layer.msg(ret.msg,{icon:6});
            } else {
                layer.msg(ret.msg);
            }
        },

    });
    return false;
}


/**
 * 编辑
 */
$('').click(function(){

});


/**
 * 删除
 */
 function del(){
     var url = $(this).attr('data-url');
     var id  = $(this).attr('data-id');

     if(url == '' || url == undefined){
         return false;
     }


     $.post(url,{},)
}
