var pageSize = 8;//每页显示多少条
var pageNum = 1;//当前页
$(function () {
    //查询高新项目
    var url = baseUrl + '/api/front/cPersonalInfo/jobList'
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

            if(ret.data.rows.length > 0){
                var _html = '';
                _html += '<div class="w high-salary-project">';
                _html += '<div class="high-salary-project-title">';
                _html += '<div class="high-salary-project-title-box">';
                _html += '<span>高薪项目</span>';
                _html += '<span class="high-salary-project-title-icon"></span>';
                _html += '</div>';
                _html += '</div>';
                _html += '<div class="modified-line"></div>';
                _html += '<div class="see-more" onclick="show_more(this)">查看更多>></div>';
                _html += '<div class="high-salary-project-items">';
                _html += '<ul class="clearfix" id="ul_project">';
                $.each(ret.data.rows,function (index,item){
                    _html += '<li class="high-salary-project-item">';
                    _html += '<a href="javascript:void(0)" onclick="click_login()">'
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
                _html += '</ul>';
                _html += '<div onclick="empty_user_type(this)">换一批<img src="./static/home/images/shuaxing.png" alt="" class="icon"></div>';
                _html += '</div>';
                _html += '</div>';
                $('#project_item').append('').html(_html);
            }


        },
        error: function (data) {
            console.log(data);
        }
    });



});
//如果没有登录的情况
function empty_user_type(objthis) {
    var url = baseUrl + '/api/front/cPersonalInfo/jobList'
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
                    _html += '<a href="javascript:void(0)" onclick="click_login()>';
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
                $('#ul_project').append('').html(_html);
            }else{
                pageNum = 1;
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
                        if(ret.data.rows.length > 0){
                            var _html = '';
                            $.each(ret.data.rows,function (index,item){
                                _html += '<li class="high-salary-project-item">';
                                _html += '<a href="javascript:void(0)" onclick="click_login()>';
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
                            $('#ul_project').append('').html(_html);
                        }
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }


        },
        error: function (data) {
            console.log(data);
        }
    });
}


//登录
function click_login(){
    var login_url2 = $('#logins_url').val();
    var loca_url2 = $('#local_url').val();
    var user_type = $('#user_type').attr('data');
    //console.log(user_type);return;
    if(user_type != 'emptys'){
        location.href = loca_url2;
    }else{
        var loca_url = encodeURIComponent(loca_url2);
        var login_url = login_url2+'?artId='+loca_url;
        location.href = login_url;
    }

}

//搜索
function keyword_search(objthis){
    var keywords = $('#keywords').val();
    var keyword = $.trim(keywords);
    var user_type = $('#user_type').attr('data');
    if(keyword != ''){
        var login_url2 = $(objthis).attr('login_url');
        var loca_url2 = $(objthis).attr('loca_url') + '?keywords=' + keyword;
        var loca_url = encodeURIComponent(loca_url2);
        var login_url = login_url2+'?artId='+loca_url;
        if(user_type != 'emptys'){
            location.href = loca_url2;
        }else{
            location.href = login_url;
        }
    }

}

//查看更多
function show_more(){
    var login_url2 = $('#logins_url').val();
    var loca_url2 = $('#local_url').val();
    var user_type = $('#user_type').attr('data');
    //console.log(user_type);return;
    if(user_type != 'emptys'){
        location.href = loca_url2;
    }else{
        var loca_url = encodeURIComponent(loca_url2);
        var login_url = login_url2+'?artId='+loca_url;
        location.href = login_url;
    }
}