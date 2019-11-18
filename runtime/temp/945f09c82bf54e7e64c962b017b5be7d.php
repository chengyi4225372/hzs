<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:105:"C:\Users\Administrator\Desktop\phpEnv5.6.0-Green\www\hzs\public/../application/home\view\index\index.html";i:1574065324;}*/ ?>
<!DOCTYPE>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>惠找事</title>
  <link rel="stylesheet" href="/static/home/css/base.css">
  <link rel="stylesheet" href="/static/home/css/index.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/static/home/js/clamp.js"></script>
  <script src='/static/home/js/index.js'></script>
  <script src='/static/common/js/public.js'></script>
</head>

<body>

  <div class='container'>

    <!-- 导航部分 -->
    <div class="nav-box">
      <div class="w nav-container clearfix">
        <!-- logo图 -->
        <div class="logo clearfix">
          <img src="/static/home/images/logo.png" alt="">
        </div>
        <!-- nav部分 -->
        <div class="nav">
          <ul class="clearfix">
            <li><a href="<?php echo config('curl.website'); ?>">首页</a></li>
            <li><a  href="<?php echo url('/home/optimal/index'); ?>">惠优税</a></li>
            <li><a href="<?php echo config('curl.hlg'); ?>">惠灵工</a></li>
            <li><a href="<?php echo url('/home/many/index'); ?>">惠多薪</a></li>
            <li><a href="<?php echo url('/home/business/index'); ?>">惠创业</a></li>
            <li class="nav-active"><a href="<?php echo url('/home/index/index'); ?>">惠找事</a></li>
            <li><a href="<?php echo url('/home/launch/index'); ?>">惠启动</a></li>
          </ul>
        </div>
        <!-- 登陆注册 -->
        <?php if(empty($userinfo['mobile'])): ?>
        <div class="loging clearfix">
          <div class="register-btn"><a href="<?php echo config('curl.ge_login_url'); ?>">
            登陆
          </a></div>
          <div class="loging-btn"><a href="<?php echo config('curl.gr_register_url'); ?>">注册</a></div>
        </div>
        <?php else: ?>
        <!-- 头像部分 -->
        <div class="user-icon-box">
          <img class="user-icon" src="/static/home/images/icon.png" alt="">
          <span class="phone"  id="mobile_phone"><?php echo $userinfo['mobile']; ?></span>
          <div class="login-out">
            <ul>
              <li><a href="javascript:void(0)" data-token="<?php echo $userinfo['token']; ?>" onclick="user_logout(this)" location_url="<?php echo url('/home/index/index'); ?>" data-url="<?php echo url('/home/login/logout'); ?>">退出登录</a></li>
            </ul>
          </div>
        </div>
        <?php endif; ?>


      </div>

    </div>

    <!-- 头部 -->
    <div class='header-box' style="background: url(<?php echo $chart['imgs']; ?>) no-repeat center bottom;">
      <div class='w header-container clearfix'>
        <div class="header-icon">
          <div><img src="/static/home/images/headericon.png" alt=""></div>
          <div><span></span></div>
          <div>没事找事 就要<span>惠找事</span>
          </div>
        </div>
        <div class="header-search">
          <input type="text">
          <div>搜索</div>
        </div>
        <div class="focus-icon">
          热门搜索:
          <a href="javascript:void(0)">服务员</a>
          <a href="javascript:void(0)">餐饮工</a>
          <a href="javascript:void(0)">促销导购</a>
          <a href="javascript:void(0)">麦当劳</a>
          <a href="javascript:void(0)">海底捞</a>
          <a href="javascript:void(0)">星巴克</a>
        </div>
      </div>

    </div>

    <!-- 高薪项目 -->
    <div class="high-salary-project-box">
      <div class="w high-salary-project">
        <div class="high-salary-project-title">
          <div class="high-salary-project-title-box">
            <span>高薪项目</span>
            <span class="high-salary-project-title-icon"></span>
          </div>
        </div>
        <div class="modified-line"></div>
        <div class="see-more">查看更多>></div>
        <div class="high-salary-project-items">
          <ul class="clearfix">
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
            <li class="high-salary-project-item">
              <a href="javascript:void(0)">
                <div class="high-salary-project-item-img">服务员</div>
                <p class="title">肯德基直聘全职服务员全职服务员全职服务员</p>
                <div class="require">
                  <span>汉口</span>
                  <span>3-5年经验</span>
                  <span>招188人</span>
                </div>
                <div class="high-salary-project-item-title clearfix">
                  <p>2600<span>元</span></p>
                  <p>次结</p>
                </div>
              </a>
            </li>
          </ul>
          <div>换一批<img src="/static/home/images/shuaxing.png" alt="" class="icon"></div>
        </div>
      </div>
    </div>

    <!-- 多种方式开始创收 -->
    <div class="create-income-box">
      <div class="clearfix create-income w">
        <div class="create-income-title">
          <div class="create-income-title-box">
            <span>多种方式开始创收</span>
          </div>
        </div>
        <div class="modified-line"></div>
        <div class="create-income-content">
          <div class="create-income-left">
            <div class="create-income-shade"></div>
            <div class="create-income-content-box">
              <p class="icon">
                <img src="/static/home/images/tishi.png" alt="">
              </p>
              <p>自主创客</p>
              <p>技能价值化，成就更好自我</p>
              <div class="content">
                <p>项目联结更契合，协作产能更高效；</p>
                <p>实现创意冲动，同时享受工作与生活！</p>
                <p>适用人群：摄影、设计师、写手、画家、程序员、主持人等掌握一种或多种专业技能的自由职业者</p>
              </div>
            </div>
          </div>
          <div class="create-income-right create-income-active">
            <div class="create-income-shade"></div>
            <div class="create-income-content-box">
              <p class="icon">
                <img src="/static/home/images/xiaojuchang.png" alt="">
              </p>
              <p>自由务工</p>
              <p>技能价值化，成就更好自我</p>
              <div class="content">
                <p>选择更全面，结薪有保障，</p>
                <p>高度灵活，选优质用工单位做快乐事！</p>
                <p>适用人群：季节性务工、传单派发、服务员、审核录入、问卷调查、打包分拣......</p>
              </div>
            </div>
            <div class="create-income-shade"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 我们的服务 -->
    <div class="our-services-box">
      <div class="w our-services">
        <div class="our-services-title">
          <div class="our-services-title-box">
            <span>我们的服务</span>
          </div>
        </div>
        <div class="modified-line"></div>
        <div class="our-services-items">
          <ul class="clearfix">
            <li class="our-services-item">
              <a href="javascript:void(0)">
                <div>
                  <span>
                    <img class="our-services-active1" src="/static/home/images/yonghuicon.png" alt="">
                    <img class="our-services-active2" src="/static/home/images/tucengsi.png" alt="">
                  </span>
                </div>
                <div>灵活用工</div>
                <div>
                  <p>云端操作,高效极简信息化管理</p>
                  <p>共享经济,高效社会化用工调配</p>
                </div>
              </a>
            </li>
            <li class="our-services-item">
              <a href="javascript:void(0)">
                <div>
                  <span>
                    <img class="our-services-active1" src="/static/home/images/shezhi.png" alt="">
                    <img class="our-services-active2" src="/static/home/images/tucengsi.png" alt="">
                  </span>
                </div>
                <div>薪酬管理</div>
                <div>
                  <p>开票无忧,发放全托管制</p>
                  <p>安全稳定,零风险零差错</p>
                </div>
              </a>
            </li>
            <li class="our-services-item">
              <a href="javascript:void(0)">
                <div>
                  <span>
                    <img class="our-services-active1" src="/static/home/images/mingpian.png" alt="">
                    <img class="our-services-active2" src="/static/home/images/tucengsi.png" alt="">
                  </span>
                </div>
                <div>岗位外包</div>
                <div>
                  <p>定制岗位外包，规避劳动纠纷</p>
                  <p>降低管理成本，缩减管理幅度</p>
                </div>
              </a>
            </li>
            <li class="our-services-item">
              <a href="javascript:void(0)">
                <div>
                  <span>
                    <img class="our-services-active1" src="/static/home/images/mingpian.png" alt="">
                    <img class="our-services-active2" src="/static/home/images/tucengsi.png" alt="">
                  </span>
                </div>
                <div>劳务派遣</div>
                <div>
                  <p>降低用人成本，拒绝虚高</p>
                  <p>解决编制不足，提高产能</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 覆盖行业 -->
    <div class="cover-industry-box">
      <div class="w cover-industry">
        <div class="cover-industry-title">
          <div class="cover-industry-title-box">
            <span>覆盖行业</span>
          </div>
        </div>
        <div class="modified-line"></div>
        <div class="cover-industry-items">
          <ul class="clearfix">
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/shenghuo.png" alt=""></div>
                <div>生活服务</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/yunshu.png" alt=""></div>
                <div>物流配送</div>
                <div></div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/tuantongshouyi.png" alt=""></div>
                <div>传统行业</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/hulianwnag.png" alt=""></div>
                <div>互联网</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/zixun2.png" alt=""></div>
                <div>咨询营销</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/peixunfazhan.png" alt=""></div>
                <div>培训服务</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/ditie.png" alt=""></div>
                <div>出行行业</div>
              </div>
            </li>
            <li class="cover-industry-item">
              <div class="shade"></div>
              <div class="cover-industry-item-content">
                <div><img src="/static/home/images/zixun.png" alt=""></div>
                <div>电话客服</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 广告位 -->
    <div class="advertising-box">
      <div class="w advertising">
        <a href="javascript:void(0)"><img src="/static/home/images/guanggaowei.png" alt=""></a>
      </div>
    </div>

    <!-- 合作伙伴 -->
    <div class="partner-box">
      <div class="w partner">
        <div class="partner-title">
          <div class="partner-title-box">
            <span>合作伙伴</span>
          </div>
        </div>
        <div class="modified-line"></div>
        <div class="partner-img">
          <img src="/static/home/images/hezuohuoban2x.png" alt="">
        </div>
      </div>
    </div>

    <!-- 底部 -->
    <div class="fotter-box">
      <div class="w fotter">
        <div class='partener_titile'>用智“慧”创造优“惠”</div>
        <div class='parterne_info'>
          深耕税筹行业多年，合作企业多达几千家。专业为个人和企业解决税务难题。为您提供一站式金融、税务和人力外包服务，以及专业的税筹划分析，最安全、高效、合理的节税措施。我们有最成熟的专家团队和各行业实操经验！作为国内领先的标准化税筹服务互联网平台，我们得到了上海、安徽、江西、湖北等各地政府的大力支持，为企业节税保驾护航！
        </div>
        <div class='parter_catefories'>
          <dl>
            <dt><a href="javascript:void(0)">服务产品</a></dt>
            <dd><a href="javascript:void(0)">服务型税筹</a></dd>
            <dd><a href="javascript:void(0)">门户型税筹</a></dd>
            <dd><a href="javascript:void(0)">人力资源</a></dd>
          </dl>
          <dl>
            <dt><a href="javascript:void(0)">招商政策</a></dt>
            <dd><a href="javascript:void(0)">招商政策网</a></dd>
          </dl>
          <dl>
            <dt><a href="javascript:void(0)">合作</a></dt>
            <dd><a href="javascript:void(0)">代理合作</a></dd>
          </dl>
          <dl>
            <dt><a href="javascript:void(0)">公司信息</a></dt>
            <dd><a href="javascript:void(0)">瑟维斯有限公司</a></dd>
            <dd><a href="javascript:void(0)">惠创优产业联盟</a></dd>
            <dd><a href="javascript:void(0)">中兴瑞华有限公司</a></dd>
          </dl>
          <dl>
            <dt><a href="javascript:void(0)">联系我们</a></dt>
            <dd><a href="javascript:void(0)">400-150-9896</a></dd>
            <dd><a href="javascript:void(0)">hcylm008@dingtalk.com</a></dd>
            <dd><a href="javascript:void(0)">武汉市硚口区南国大武汉H座18楼</a></dd>
          </dl>

        </div>
        <div class='concat_icon clearfix'>
          <div><img src="/static/home/images/tie.png" alt=""></div>
          <div><img src="/static/home/images/wx.png" alt=""></div>
          <div><img src="/static/home/images/bo.png" alt=""></div>
        </div>
      </div>
    </div>

    <!-- 返回顶部 -->
    <div class='goTop' id="goTop">
      <i></i>
      <div>返回顶部</div>
    </div>

    <!-- 弹框 -->
    <!-- <div class="pop-up-box" id="popbox"> -->
    <!-- 内容区域 -->
    <!-- <div class="form">
                <div class="form-titile">
                    <p>方案咨询</p>
                    <span class="turnoff" id="turnoff"></span>
                </div>
                <div class="form-content">
                    <div><span class="title">您的姓名</span><input type="text" placeholder="请输入你的名字"></div>
                    <div><span class="title">联系方式</span><input type="text" placeholder="请输入你的联系方式"></div>
                    <div><span class="title">您的公司</span><input type="text" placeholder="请输入你的公司"></div>
                    <div class="form-btn">获取方案</div>
                </div> -->
    <!-- 提交成果后弹窗 -->
    <!-- <div class="mask-box">
                    <span></span>
                    <p class="mask-box-title">提交成功</p>
                    <p class="mask-box-content">我们会在一个工作日内联系您</p>
                </div>
            </div>

        </div> -->


  </div>
<script>
  window.onload = function () {

    // 盒子切换

    let left = document.querySelector('.create-income-left')
    let right = document.querySelector('.create-income-right')
    let imgLeft = document.querySelector('.create-income-left .icon img')
    let imgRight = document.querySelector('.create-income-right .icon img')
    console.log(left, right)
    left.onmouseover = function () {
      left.classList.add('create-income-active')

      right.classList.remove('create-income-active')
      imgLeft.src="/static/home/images/tishi2.png"
      imgRight.src="/static/home/images/xiaojuchang2.png"
    }
    right.onmouseover = function () {
      right.classList.add('create-income-active')
      left.classList.remove('create-income-active')
      imgLeft.src="/static/home/images/tishi.png"
      imgRight.src="/static/home/images/xiaojuchang.png"
    }

    // 返回顶部
    window.onscroll = function () {
      var top = document.body.scrollTop || document.documentElement.scrollTop;
      console.log(top)
      console.log(document.body.scrollTop);
      console.log(document.documentElement.scrollTop);

      if (top >= 1080) {
        let goTop = document.getElementById('goTop')
        goTop.style.display = "block"

        // console.log(goTop);
        var timer = null;
        goTop.onclick = function () {
          cancelAnimationFrame(timer);
          //获取当前毫秒数
          var startTime = +new Date();
          //获取当前页面的滚动高度
          var b = document.body.scrollTop || document.documentElement.scrollTop;
          var d = 500;
          var c = b;
          timer = requestAnimationFrame(function func() {
            var t = d - Math.max(0, startTime - (+new Date()) + d);
            document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
            timer = requestAnimationFrame(func);
            if (t == d) {
              cancelAnimationFrame(timer);
            }
          });
        }
      } else if (top < 1080) {

        // 返回顶部样式
        let goTop = document.getElementById('goTop')
        goTop.style.display = "none"

      }
    }






  }
</script>
</body>

</html>