<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
	<title>商品展示</title>

	<meta name="section" content="./Popgoing_productshow.html">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="stylesheet" href="<?=base_url().'css/normalize.css'?>">

	<!--<link href="./css/css" rel="stylesheet" type="text/css">-->

    <script async="" src="<?=base_url().'js/analytics.js'?>"></script>

	<link href="<?=base_url().'css/css(1)'?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url().'css/css(2)'?>" rel="stylesheet" type="text/css">

    <style type="text/css">

        .haveday {
            padding: 10px;
            border: 1px dashed #000;
            margin-right: auto;
            margin-left: 0px;
            width: 300px;
        }
    </style>

</head>
<body style="opacity: 1; height: 6132px;" >

<!--导航栏-->
<header id="header">
    <nav>
        <form action="/index.php/search" method="post">
            <h1 class="logo"><a href="/index.php">Pop-going</a></h1>
            <ul id="main-menu">
                <li><a href="/index.php">主页</a></li>
                <li><a href="/index.php/whlist">网络红人</a></li>
                <li><a href="/index.php/productlist">推荐商品</a></li>
                <li><a href="/index.php/checkout">购物车</a></li>
                <li><a href="/index.php/personal">个人</a></li><li></li>

                <li style="width:250px;">
                    <input type="text" name="like" id="search_content" style="width:100%;"></li>
                <li><input id="search" type="submit" value="搜索"></li>

                <?php if(!isset($name)){?>
                    <li><a href="/index.php/login" style="font-size: smaller;color: #1D1D1D; font-family: Arial;">登录</a></li>
                    <li><a href="/index.php/regist" style="font-size: smaller;color: #1D1D1D; font-family: Arial;">注册</a></li>
                <?php }else{?>
                    <li><p style="font-size: smaller;color: #1D1D1D; font-family: Arial;"><?php echo $name;?></p></li>
                    <li><a href="/index.php/logout" style="font-size: smaller;color: #1D1D1D; font-family: Arial;">退出</a></li>
                <?php }?>

            </ul>
        </form>
        <!-- 自适应 -->
        <a href="#" class="burger burger--htx">
            <span>toggle menu</span>
        </a>
    </nav>
</header>


<div id="skrollr-body">
<section id="finalists">
  <div class="shapes">
    <div class="floating-stuff level-10 animation bounce-1" style="animation-play-state: running;">
      <svg width="350px" height="796px" viewBox="0 0 350 796" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-70p="transform: translate(400px, 100px); opacity: 0;" data-120p="transform: translate(400px, 0px);  opacity: 1" data-600p="transform: translate(400px, -800px);" style="transform: translate(400px, 100px); opacity: 0;" class="skrollable skrollable-before">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-9.000000, 0.000000)">
              <g transform="translate(9.000000, 0.000000)">
                  <rect fill="#41CBE8" transform="translate(1.374661, 224.141615) rotate(-44.000000) translate(-1.374661, -224.141615) " x="229.874661" y="113.141615" width="23" height="222"></rect>
                  <rect fill="#F8BECA" x="164.5" y="0" width="20.2499843" height="195.45637"></rect>
                  <circle fill="#41CBE8" cx="164.5" cy="785.95637" r="9.5"></circle>
                  <circle fill="#673AB7" cx="9.5" cy="106.95637" r="9.5"></circle>
                  <circle fill="#FDDC66" cx="340.5" cy="185.95637" r="9.5"></circle>
              </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="floating-stuff level-01 animation bounce-2" style="animation-play-state: running;">
      <svg width="487px" height="938px" viewBox="0 0 487 938" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-100p="transform: translate(50px, 100px);opacity: 0;" data-120p=" opacity: 1; transform: translate(50px, 0px);" data-600p="transform: translate(50px, -400px);" style="transform: translate(50px, 100px); opacity: 0;" class="skrollable skrollable-before">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-7.000000, -1.000000)">
                  <g transform="translate(7.000000, 1.000000)">
                      <rect fill="#FDDC66" transform="translate(69.027190, 861.302011) rotate(-40.000000) translate(-69.027190, -861.302011) " x="59.1781778" y="766.237636" width="19.6980237" height="190.12875" rx="10"></rect>
                      <path d="M2.5,6.95637 L638.821289,671.95637" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M288.5,687.95637 L638.821289,687.95637" stroke="#F35950" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M333.5,0.956370494 L333.5,79.9816848" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M353.874661,20.6487561 L353.874661,99.6740704" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                  </g>
              </g>
          </g>
      </svg>
    </div>
    <div class="floating-stuff level-02 animation bounce-3" style="animation-play-state: running;">
      <svg width="412px" height="1027px" viewBox="0 0 412 1027" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-100p="transform: translate(-50px, 800px); opacity: 0;" data-120p="transform: translate(-50px, 700px); opacity: 1;" data-600p="transform: translate(-50px, -100px); " style="transform: translate(-50px, 800px); opacity: 0;" class="skrollable skrollable-before">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-137.000000, -255.000000)">
                  <g transform="translate(141.000000, 255.000000)">
                      <ellipse stroke="#41CBE8" stroke-width="8" cx="129" cy="568.45637" rx="128.5" ry="128.5"></ellipse>
                      <circle fill="#F35950" cx="246.5" cy="1016.95637" r="9.5"></circle>
                      <circle fill="#F35950" cx="57.5" cy="565.95637" r="26"></circle>
                      <rect fill="#FDDC66" transform="translate(322.379487, 87.984045) rotate(-44.000000) translate(-322.379487, -87.984045) " x="310.879487" y="-23.0159548" width="23" height="222"></rect>
                  </g>
              </g>
          </g>
      </svg>
    </div>
  </div>
  <header>
    <h3>商品列表</h3>
    <p>有时候商品不仅仅是一个生活用品，更是一种<strong>生活态度</strong>。Popgoing在红人们的亲身实用推荐下，致力于提供最好最低价的商品，足不出户，了解商品最新资讯，让每一位用户都拥有顶级生活享受。</p>
  </header>
  <article>
    <div class="listing">

     <!--图片展示 -->

      <?php foreach ( $products as $p ) {?>
      <a class="item finalist-item" id="web-activation-nodeplus" href="#<?=$p['name'] ?>" data-slug="finalists/activation-nodeplus">
        <div class="image">
          <img src="<?=base_url()."images/".$p['pic']?>" alt="" class="best-">
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle"><?=$p['name'] ?></span></h4>
          <p>by <span class="nomineeAuthor"><?=$p['username'] ?></span> <em class="nomineeLocation">China</em></p>
        </div>
      </a>
        <?php } ;?>
      

        <!--图片展示 -->
    </div>
  </article>
</section>

</div>

<?php foreach ( $products as $p ) {?>
<div id="finalists-modal">

    <div class="single" id="<?=$p['name'] ?>">
      <div class="container">
        <div class="inner">
          <div class="info">

            <div>
                <h2>圣罗兰纯魅唇膏#12</h2>
                <h3>ROUGE VOLUPTÉ SHINE</h3>
                <p>以其迷人的色调赋予了双唇锦缎般的奢华色泽。将唇膏均匀地涂抹于唇部，顺滑诱人的奶油质地即刻呈现。色彩与营养结合，温和滋润唇部，勾勒出柔美而动人的唇部弧线。清新芒果香味弥散氤氲，沁人心脾，美妙独特的触感令人心神荡漾。传奇的卡珊德拉（Cassandra）标志“腰带”清晰地表明该支口红的独特色彩。</p>
                <div class="haveday">
                    <div class="lxftime" endtime="7/9/2016 24:0:0" lxfday="no"></div>
                </div>
                <p></p>
                <a href="/index.php/display/<?= $p['Id']?>"><button class="btn btn-lg btn-default")>查看详情</button></a>
                <a href="/index.php/productlist" style="padding-left: 250px;">关闭</a>
            </div> <!-- div -->
          </div><!-- info -->

          <div class="images">

              <div class="image_link">
                  <a target="_blank">
                      <span>
                          <img src="<?=base_url()."images/ysl1.jpg"?>">
                      </span>
                      <!--<span class="link"></span>-->
                  </a>

                  <a target="_blank">
                      <span>
                          <img src="<?=base_url()."images/ysl2.jpg"?>">
                      </span>
                      <!--<span class="link"></span>-->
                  </a>
              </div>

              <div class="image_link">
                <a target="_blank">
                    <span>
                        <img src="<?=base_url()."images/ysl3.jpg"?>">
                    </span>
                    <!--<span class="link"></span>-->
                </a>
              </div>

          </div> <!-- images -->
        </div>  <!-- inner -->
      </div> <!-- container -->
    </div><!-- single -->
</div>
<?php } ;?>
<script src="<?=base_url().'js/plugins.js'?>"></script>

<script src="<?=base_url().'js/main.js'?>"></script>
<script>
    function lxfEndtime(){
        $(".lxftime").each(function(){
            var lxfday=$(this).attr("lxfday");//用来判断是否显示天数的变量
            var endtime = new Date($(this).attr("endtime")).getTime();
            //取结束日期(毫秒值)
            var nowtime = new Date().getTime();
            //今天的日期(毫秒值)
            var youtime = endtime-nowtime;//还有多久(毫秒值)
            var seconds = youtime/1000;
            var minutes = Math.floor(seconds/60);
            var hours = Math.floor(minutes/60);
            var days = Math.floor(hours/24);
            var CDay= days ;
            var CHour= hours % 24;
            var CMinute= minutes % 60;
            var CSecond= Math.floor(seconds%60);
            //"%"是取余运算，可以理解为60进一后取余数，然后只要余数。
            if(endtime<=nowtime){
                $(this).html("已过期")
                //如果结束日期小于当前日期就提示过期啦
            }else{
                $(this).html("<i>剩余时间：</i><span style='color: red; font-size: larger; '>"+CHour+"</span>小时<span style='color: red; font-size: larger;'>"+CMinute+"</span>分<span style='color: red; font-size: larger;'>"+CSecond+"</span>秒");
                //输出没有天数的数据
            }
        });
        setTimeout("lxfEndtime()",1000);
    };
    $(function(){
        lxfEndtime();
    });
</script>

</body></html>