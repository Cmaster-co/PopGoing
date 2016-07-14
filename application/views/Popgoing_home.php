<!DOCTYPE html>
<html lang="en" ><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Pop-going</title>
  <!-- 浮层 -->
	<meta name="section" content="/">

	<link rel="stylesheet" href="<?=base_url().'css/normalize.css'?>">

</head>


<body style="opacity: 1; height: 6766px;">
<!-- 导航栏 -->
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
<section id="hero" class="flex">
  <div class="shapes home">
    <div class="floating-stuff level-03">
      <svg version="1.1" id="oval-stroke" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0.5 0 279.5 279.5" enable-background="new 0.5 0 279.5 279.5" xml:space="preserve" data-start="transform: translate(0px, 0px); opacity: 1" data-50="transform: translate(0px, 15px)" data-800="transform: translate(0px, -375px);opacity: 0" style="transform: translate(0px, 0px); opacity: 1;" class="skrollable skrollable-between"> -->
        <!-- 移动 -->
         <g transform="translate(-533.000000, -236.500000)">
          <!-- ai直接保存成.svg格式 -->
          <path fill="#41CBE8" d="M673.2,516c-77.1,0-139.8-62.7-139.8-139.8s62.7-139.8,139.8-139.8S813,299.2,813,376.2
            S750.3,516,673.2,516z M673.2,244.5c-72.6,0-131.8,59.1-131.8,131.8c0,72.6,59.1,131.8,131.8,131.8
            c72.6,0,131.8-59.1,131.8-131.8C805,303.6,745.9,244.5,673.2,244.5z"></path>
        </g>
      </svg>
    </div>
    <div class="floating-stuff level-03">
      <svg version="1.1" id="red-dots" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0.5 0 6.5 117.5" enable-background="new 0.5 0 6.5 117.5" xml:space="preserve" data-start="transform: translate(60px, -170px); opacity: 1" data-50="transform: translate(60px, -155px)" data-800="transform: translate(60px, -770px);opacity: 0" style="transform: translate(60px, -170px); opacity: 1;" class="skrollable skrollable-between">
          <g>
            <ellipse fill="#F35950" cx="3.7" cy="3.3" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="31" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="58.7" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="86.4" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="114.3" rx="3.3" ry="3.3"></ellipse>
          </g>
      </svg>
    </div>
    <div class="floating-stuff level-03">
      <svg version="1.1" id="yellow-dots" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0.5 0 6.5 117.5" enable-background="new 0.5 0 6.5 117.5" xml:space="preserve" data-start="transform: translate(-500px, 240px); opacity: 1" data-50="transform: translate(-500px, 255px)" data-800="transform: translate(-500px, -640px);opacity: 0" style="transform: translate(-500px, 240px); opacity: 1;" class="skrollable skrollable-between">
          <g>
            <ellipse fill="#F35950" cx="3.7" cy="3.3" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="31" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="58.7" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="86.4" rx="3.3" ry="3.3"></ellipse>
            <ellipse fill="#F35950" cx="3.7" cy="114.3" rx="3.3" ry="3.3"></ellipse>
          </g>
      </svg>
    </div>

   <div class="floating-stuff level-03">
      <svg version="1.1" id="oval-fill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0.5 52 52" enable-background="new 0 0.5 52 52" xml:space="preserve" data-start="transform: translate(115px, -60px); opacity: 1" data-50="transform: translate(115px, -45px)" data-800="transform: translate(115px, -560px);opacity: 0" style="transform: translate(115px, -60px); opacity: 1;" class="skrollable skrollable-between">
        <g transform="translate(-783.000000, -316.500000)">
          <circle fill="#F35950" cx="809" cy="343" r="26">
          </circle>
        </g>
      </svg>
    </div>
    <div class="floating-stuff level-03">
      <svg version="1.1" id="angled-rectangle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0.4 0 306.2 315.9" enable-background="new 0.4 0 306.2 315.9" xml:space="preserve" data-start="transform: translate(-70px, 70px); opacity: 1" data-50="transform: translate(-70px, 85px)" data-800="transform: translate(-70px, -260px);opacity: 0" style="transform: translate(-70px, 70px); opacity: 1;" class="skrollable skrollable-between">
        <g transform="translate(-441.000000, -256.500000)">
          <rect x="583" y="206" transform="matrix(-0.7193 0.6947 -0.6947 -0.7193 1310.0835 299.6919)" fill="#FDDC66" width="23" height="417"></rect>
        </g>
      </svg>
    </div>
  </div>
  <article>
    <h2>Welcome to Pop-going!</h2>
    <p>一见钟情是种缘分，你呆在那里别动，我带着满满的诚意来见你</p>
  </article>
</section>



<section id="winner">
  <div class="shapes">
    <div class="floating-stuff level-03 overlay skrollable skrollable-between" data-start="opacity: 0" data-50p="opacity: 0" data-85p="opacity: 1" data-200p="opacity: 1" data-220p="opacity:0" style="opacity: 0;"></div>
    <div class="floating-stuff level-02 animation bounce-1">

    </div>

  </div>

  
  <header>
    <h1>人气网红</h1>
    <a href="＃" target="_blank"><img src="./images/01.bec396d9.jpg" class="woty"></a>
  </header>

  <article>
    <h2><a href="#" target="_blank">Pop-going 虚位以待</a></h2>
    <div class="container">
      <div class="col-1">
        <p>这个时代，最昂贵的是情怀。这是一个比电影真实的世界，如果你的生活里有令人向往的影子，请加入我们。我们相信就算你们不在这里卖高跟鞋、开餐饮店，做其它事业也会成功，但依旧希望你们可以在这里分享你们品味。</p>
        <div class="credits">
          <span style="font-size: 8px;">联系方式</span>
          <span class="by"><a href="#" target="_blank">pop_going@163.com</a></span><span class="by"><a href="#" target="_blank">86-15167192345</a></span>
        </div>
      </div>
      <div class="col-2">
        <div class="score">
          <span class="number">7.8</span>
          <span>2016年</span>
        </div>
        <ul class="share">
          <li><a href="http://www.facebook.com/sharer.php?u=http://www.bbqcultures.com/" class="fa fa-facebook-square" target="_blank"></a></li>
          <li><a href="https://twitter.com/share?url=http://www.bbqcultures.com/&amp;text=Weber%20-%20BBQ%20Cultures%20has%20won%20%20the%20@CSSDesignAwards%20Website%20of%20the%20Year%20Award!" class="fa fa-twitter" target="_blank"></a></li>
          <li><a href="https://pinterest.com/pin/create/bookmarklet/?media=http://cssdesignawards.com/woty/assets/images/webs/06/1.jpg&amp;url=http://www.bbqcultures.com/&amp;description=Weber%20-%20BBQ%20Cultures%20has%20won%20the%20@CSSDesignAwards%20Website%20of%20the%20Year%20Award!" class="fa fa-pinterest"></a></li>
        </ul>
      </div>
    </div>

  </article>
  
</section>


<section id="best">
  <div class="shapes">
    <div class="floating-stuff level-10 animation bounce-1">
      <svg width="350px" height="796px" viewBox="0 0 350 796" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-70p="transform: translate(400px, 100px); opacity: 0;" data-120p="transform: translate(400px, 0px);  opacity: 1" data-600p="transform: translate(400px, -800px);" style="transform: translate(400px, 100px); opacity: 0;" class="skrollable skrollable-before">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-903.000000, 0.000000)">
              <g transform="translate(903.000000, 0.000000)">
                  <rect fill="#41CBE8" transform="translate(241.374661, 224.141615) rotate(-44.000000) translate(-241.374661, -224.141615) " x="229.874661" y="113.141615" width="23" height="222"></rect>
                  <rect fill="#F8BECA" x="164.5" y="0" width="20.2499843" height="195.45637"></rect>
                  <circle fill="#41CBE8" cx="164.5" cy="785.95637" r="9.5"></circle>
                  <circle fill="#673AB7" cx="9.5" cy="106.95637" r="9.5"></circle>
                  <circle fill="#FDDC66" cx="340.5" cy="185.95637" r="9.5"></circle>
              </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="floating-stuff level-01 animation bounce-2">
      <svg width="487px" height="938px" viewBox="0 0 487 938" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-100p="transform: translate(50px, 100px);opacity: 0;" data-120p=" opacity: 1; transform: translate(50px, 0px);" data-600p="transform: translate(50px, -400px);" style="transform: translate(50px, 100px); opacity: 0;" class="skrollable skrollable-before">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-793.000000, -194.000000)">
                  <g transform="translate(789.000000, 195.000000)">
                      <rect fill="#FDDC66" transform="translate(69.027190, 861.302011) rotate(-40.000000) translate(-69.027190, -861.302011) " x="59.1781778" y="766.237636" width="19.6980237" height="190.12875" rx="10"></rect>
                      <path d="M288.5,671.95637 L638.821289,671.95637" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M288.5,687.95637 L638.821289,687.95637" stroke="#F35950" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M333.5,0.956370494 L333.5,79.9816848" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                      <path d="M353.874661,20.6487561 L353.874661,99.6740704" stroke="#202E39" stroke-width="3" stroke-linecap="square"></path>
                  </g>
              </g>
          </g>
      </svg>
    </div>
    <div class="floating-stuff level-02 animation bounce-3">
      <svg width="412px" height="1027px" viewBox="0 0 412 1027" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-100p="transform: translate(-50px, 800px); opacity: 0;" data-120p="transform: translate(-50px, 700px); opacity: 1;" data-600p="transform: translate(-50px, -100px); " style="transform: translate(-50px, 800px); opacity: 0;" class="skrollable skrollable-before">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-137.000000, -255.000000)">
                  <g transform="translate(141.000000, 255.000000)">
                      <ellipse stroke="#41CBE8" stroke-width="8" cx="29" cy="568.45637" rx="28.5" ry="28.5"></ellipse>
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
    <h3>热销商品</h3>
    <p>展示目前最受欢迎的商品，预测潮流走向，这些商品有的因为其本身的特质备受喜爱，有的因为推荐人的人气备受关注，相信总有一款是你喜欢，向下滚动，开启选购之旅。</p>
  </header>
  <article>
    <div class="listing">
      
      
      <a class="item finalist-item" id="web-acme-experience" href="http://cssdesignawards.com/woty/#single-acme-experience" data-slug="acme-experience">
        <div class="image">
          <img src="./images/01-thumbnail.c75d3909.jpg" alt="" class="best-Best Business Site / User Experience">
          
            <span class="best-ribbon">最好的我们最好的少女时代</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">涂鸦印花连衣裙</span></h4>
          <p>by <span class="nomineeAuthor">雪梨</span> <em class="nomineeLocation">Time Road</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-activation-nodeplus" href="http://cssdesignawards.com/woty/#single-activation-nodeplus" data-slug="activation-nodeplus">
        <div class="image">
          <img src="./images/01-thumbnail.c53936bd.jpg" alt="" class="best-Best Agency Site / WebGL">
          
            <span class="best-ribbon">让色彩在脚趾上跳跃</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">马卡龙色全面船袜</span></h4>
          <p>by <span class="nomineeAuthor">呛口小辣椒</span><em class="nomineeLocation">Ququanna</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-admir-hadzic-portfolio" href="http://cssdesignawards.com/woty/#single-admir-hadzic-portfolio" data-slug="admir-hadzic-portfolio">
        <div class="image">
          <img src="./images/01-thumbnail.8155be06.jpg" alt="" class="best-Best Solo Portfolio">
          
            <span class="best-ribbon">治愈系绘本，献给美好的你</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">每件幸福的事里都有一个喜欢的人</span></h4>
          <p>by <span class="nomineeAuthor">面包树</span> <em class="nomineeLocation">北京联合出版公司</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-aerolab" href="http://cssdesignawards.com/woty/#single-aerolab" data-slug="aerolab">
        <div class="image">
          <img src="./images/01-thumbnail.9c34cc60.jpg" alt="" class="best-Best Agency Site / Personality">
          
            <span class="best-ribbon">创意无处不在，烟灰缸也时尚</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">创意复古雕刻金字塔烟灰缸</span></h4>
          <p>by <span class="nomineeAuthor">Aerolab</span> <em class="nomineeLocation">莱真斯旗舰店</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-allstate-out-holding-hands" href="http://cssdesignawards.com/woty/#single-allstate-out-holding-hands" data-slug="allstate-out-holding-hands">
        <div class="image">
          <img src="./images/01-thumbnail.8831404e.jpg" alt="" class="best-Best Community Site">
          
            <span class="best-ribbon">小众香水，拒绝撞香尴尬</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">紫禁桂花</span></h4>
          <p>by <span class="nomineeAuthor">玛吉拉</span><em class="nomineeLocation">暖暖香水海外代购</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-become-a-kingsman" href="http://cssdesignawards.com/woty/#single-become-a-kingsman" data-slug="become-a-kingsman">
        <div class="image">
          <img src="./images/01-thumbnail.24d69b94.jpg" alt="" class="best-Best Entertainment Site">
          
            <span class="best-ribbon">这个夏天是微凉的浅蓝色</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">文艺清新淡雅格子餐垫</span></h4>
          <p>by <span class="nomineeAuthor">管夫人</span><em class="nomineeLocation">极有家</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-ben-lukas-boysen" href="http://cssdesignawards.com/woty/#single-ben-lukas-boysen" data-slug="ben-lukas-boysen">
        <div class="image">
          <img src="./images/01-thumbnail.37da2d16.jpg" alt="" class="best-Best Entertainment Site / Music">
          
            <span class="best-ribbon">化解欧洲杯的熊猫眼危机</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">雅诗兰黛小棕瓶眼霜</span></h4>
          <p>by <span class="nomineeAuthor">雪梨</span> <em class="nomineeLocation">玄子香港站</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-braastad-cognac" href="http://cssdesignawards.com/woty/#single-braastad-cognac" data-slug="braastad-cognac">
        <div class="image">
          <img src="./images/01-thumbnail.c021f0b7.jpg" alt="" class="best-Best Food/Beverage Site">
          
            <span class="best-ribbon">有一种唇色叫Taylor Swift红</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">Chanel炫亮魅力唇膏 99＃海盗红</span></h4>
          <p>by <span class="nomineeAuthor">卓一</span> <em class="nomineeLocation">睿美姿化妆品专营店</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-creations-namale" href="http://cssdesignawards.com/woty/#single-creations-namale" data-slug="creations-namale">
        <div class="image">
          <img src="./images/01-thumbnail.b60c80e3.jpg" alt="" class="best-Best Product Site / Presentation">
          
            <span class="best-ribbon">为锁骨增加魅力值的法宝</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">钥匙锁项链</span></h4>
          <p>by <span class="nomineeAuthor">艾克里里</span> <em class="nomineeLocation">snidel</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-creative-edge-parties" href="http://cssdesignawards.com/woty/#single-creative-edge-parties" data-slug="creative-edge-parties">
        <div class="image">
          <img src="./images/01-thumbnail.3379b3a1.jpg" alt="" class="best-Best Experimental Site">
          
            <span class="best-ribbon">不一样的异域风情，民族风</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">复古民族风刺绣衬衫</span></h4>
          <p>by <span class="nomineeAuthor">回忆专用小马甲</span> <em class="nomineeLocation">小唯原创女装</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-dogstudio" href="http://cssdesignawards.com/woty/#single-dogstudio" data-slug="dogstudio">
        <div class="image">
          <img src="./images/01-thumbnail.d3313024.jpg" alt="" class="best-Best Agency Site / Visual Design">
          
            <span class="best-ribbon">夏天做好防晒才是正经事</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">焦下2016新款太阳伞</span></h4>
          <p>by <span class="nomineeAuthor">教授易小星</span> <em class="nomineeLocation">小时光代购</em></p>
        </div>
      </a>
      
      <a class="item finalist-item" id="web-dream-car-collection" href="http://cssdesignawards.com/woty/#single-dream-car-collection" data-slug="dream-car-collection">
        <div class="image">
          <img src="./images/01-thumbnail.385f88a9.jpg" alt="" class="best-Best Animated Showcase Site">
          
            <span class="best-ribbon">毕业季少女们的学院风裙装</span>
          
          <span class="view_more"></span>
        </div>
        <div class="meta">
          <h4><span class="nomineeTitle">系带连衣裙</span></h4>
          <p>by <span class="nomineeAuthor">伟大的安妮</span><em class="nomineeLocation">空气猫日记</em></p>
        </div>
      </a>
      
    </div>
  </article>
</section>

</div>

<div id="finalists-modal">
  
</div>


	<footer id="footer">
	<div class="inner">
		<h1 class="logo"><a href="＃">Pop-going</a></h1>

		<span class="aerocredit">©2016 Mogujie.com 杭州卷瓜网络有限公司</span>
	</div>
</footer>

<script src="./js/plugins.js"></script>

<script src="./js/main.js"></script>

</body>
</html>