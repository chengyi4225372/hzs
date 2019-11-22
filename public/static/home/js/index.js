var baseUrl2 = 'http://172.26.2.210:8089';
var pageSize = 8;//每页显示多少条
var pageNum = 1;//当前页
$(function () {
    //查询高新项目
    var userType = $('#user_type').val();
    if (userType == '' || userType == undefined) {
        var url = baseUrl2 + '/api/front/cPersonalInfo/jobList'
        $.ajax({
            type: "get",
            url: url,
            data: '',
            headers: {
                "Content-Type": "application/json",
                "pageSize": pageSize,
                "pageNum": pageNum
            },
            dataType: 'json',
            success: function (ret) {
                var _html = '';
                if(ret.data.rows.length > 0){

                    $.each(ret.data.rows,function (index,item){
                        _html += '<li class="high-salary-project-item">';
                        _html += '<a href="javascript:void(0)">'
                        _html += '<div class="high-salary-project-item-img">'+item.industryName+'</div>';
                        _html += '<p class="title">'+item.jobTitle+'</p>';
                        _html += '<div class="require">';
                        _html += '<span>'+item.jobAddress+'</span>';
                        _html += '<span>'+item.experienceRequire+'年经验</span>';
                        _html += '<span>招'+item.customerNum+'人</span>';
                        _html += '</div>';
                        _html += '<div class="high-salary-project-item-title clearfix">';
                        _html += '<p>'+item.amount+'<span>元</span></p>';
                        _html += '<p>次结</p>';
                        _html += '</div>';
                        _html += '</a>';
                        _html += '</li>';
                    });
                }
                $('#project_item').append('').html(_html);

            },
            error: function (data) {
                console.log(data);
            }
        });
    }



});
//如果没有登录的情况
function empty_user_type(objthis) {
    var url = baseUrl2 + '/api/front/cPersonalInfo/jobList'
    ++pageNum;
    $.ajax({
        type: "get",
        url: url,
        data: '',
        headers: {
            "Content-Type": "application/json",
            "pageSize": pageSize,
            "pageNum": pageNum
        },
        dataType: 'json',
        success: function (ret) {
            console.log(ret.data.rows.length);
            if(ret.data.rows.length > 0){
                var _html = '';
                $.each(ret.data.rows,function (index,item){
                    _html += '<li class="high-salary-project-item">';
                    _html += '<a href="javascript:void(0)">'
                    _html += '<div class="high-salary-project-item-img">'+item.industryName+'</div>';
                    _html += '<p class="title">'+item.jobTitle+'</p>';
                    _html += '<div class="require">';
                    _html += '<span>'+item.jobAddress+'</span>';
                    _html += '<span>'+item.experienceRequire+'年经验</span>';
                    _html += '<span>招'+item.customerNum+'人</span>';
                    _html += '</div>';
                    _html += '<div class="high-salary-project-item-title clearfix">';
                    _html += '<p>'+item.amount+'<span>元</span></p>';
                    _html += '<p>次结</p>';
                    _html += '</div>';
                    _html += '</a>';
                    _html += '</li>';
                });
                $('#project_item').append('').html(_html);
            }


        },
        error: function (data) {
            console.log(data);
        }
    });
}