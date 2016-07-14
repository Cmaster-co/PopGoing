<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pop-going</title>
    <!-- 浮层 -->
    <meta name="section" content="/">
    <link rel="stylesheet" href="<?=base_url().'css/normalize.css'?>">
    <link href="<?=base_url().'css/signin.css'?>" rel="stylesheet">
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

            <form class="form-signin" method="post" action="/index.php/user/loginP">
                <h2>登录</h2>
                <p></p>
                <p></p>
                <br/>
                <br/>
                <label for="inputEmail" class="sr-only">邮箱地址</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
                <p></p>
                <label for="inputPassword" class="sr-only">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Password" required="">
                <p></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">确定</button>
            </form>
        </article>
    </section>

</div>
<script src="<?=base_url().'js/jquery-3.0.0.min.js'?>"></script>
</body>
</html>