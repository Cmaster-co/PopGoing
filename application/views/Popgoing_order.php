<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Order</title>

    <link rel="stylesheet" href="<?= base_url()."css/normalize.css"?>">
    <link href="<?= base_url()."css/cart.css"?>" rel="stylesheet" type="text/css" media="all">
    <style>
        .button_pinglun {
            /*width: 50%;*/
            background: #ffffff;
            /*border-color: #bd9655;*/
            border: solid #bd9655;
            /*border: 2px;*/
            padding: 10px 15px;
            /*text-transform: uppercase;*/
            /*letter-spacing: 2px;*/
            color:#000000;
            font-size: 14px; }
    </style>
</head>

<body style="opacity: 1; height: 1188px;">

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
    <section id="awards">
        <div class="shapes home">
            <div class="floating-stuff level-03 animation bounce-1" style="animation-play-state: running;">
                <svg width="1047" height="505" viewBox="0 0 1047 505" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(2)" fill="none" fill-rule="evenodd">
                        <circle fill="#FDDC66" cx="288" cy="9.5" r="9.5"></circle>
                        <ellipse stroke="#41CBE8" stroke-width="5" cx="29.413" cy="473.906" rx="28.5" ry="28.5"></ellipse>
                        <circle fill="#F35950" cx="57.913" cy="471.406" r="26"></circle>
                        <path fill="#41CBE8" d="M873.973 106.142l16.544-15.977 154.215 159.693-16.545 15.978zM59 72h204v28H59z"></path>
                    </g>
                </svg>

            </div>
            <div class="floating-stuff level-03 animation bounce-1" style="animation-play-state: running;">
                <svg width="91" height="140" viewBox="0 0 91 140" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(0 -1)" fill="none" fill-rule="evenodd">
                        <path d="M30.94 7.337a5.963 5.963 0 0 1 5.962-5.956 5.96 5.96 0 0 1 5.962 5.956V72.76a5.966 5.966 0 0 1-5.962 5.96 5.956 5.956 0 0 1-5.962-5.955V7.337z" fill="#F8BECA"></path>
                        <rect fill="#FE9844" y="63.279" width="11.924" height="77.34" rx="6"></rect>
                        <rect fill="#F35950" x="78.26" y="10.484" width="11.924" height="77.34" rx="6"></rect>
                    </g>
                </svg>
            </div>
            <div class="floating-stuff level-03 animation bounce-1" style="animation-play-state: running;">
                <svg width="7" height="118" viewBox="0 0 7 118" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#F35950" fill-rule="evenodd">
                        <ellipse cx="3.711" cy="3.329" rx="3.256" ry="3.257"></ellipse>
                        <ellipse cx="3.711" cy="31.016" rx="3.256" ry="3.257"></ellipse>
                        <ellipse cx="3.711" cy="58.704" rx="3.256" ry="3.257"></ellipse>
                        <ellipse cx="3.711" cy="86.391" rx="3.256" ry="3.257"></ellipse>
                        <ellipse cx="3.711" cy="114.342" rx="3.256" ry="3.257"></ellipse>
                    </g>
                </svg>
            </div>
        </div>
        <div class="cart-page">
            <section class="page-content">
                <div class="container">
                    <div class="span9">
                        <h1 class="no-margin">订单</h1>
                    </div>
                    <div class="span3-last text-right">
                        <a class="hide-mobile" href="#"  style="color: #C3A269">继续购物</a>
                    </div>
                </div>
                <p></p>
                <br/>
                <div class="container">
                    <form action="#" method="post">
                        <table class="cart">
                            <tbody>
                            <tr>
                                <th class="text-left">订单号</th>
                                <th class="text-center"></th>
                                <th class="text-center">订单详情</th>
                                <th class="text-right">评论</th>
                            </tr>
                            <?php foreach($orders as $o){?>
                            <tr>
                                <td class="text-left">
                                    <h3 style="padding-top: 30px;color: #C3A269; font-size: 15px;">
                                       <?=$o['Id']?>
                                    </h3>
                                </td>
                                <td class="text-center">
                                    <h3>
                                        <a href="#" class="product-img">
                                            <img src="<?=base_url()."images/".$o['pic'] ?>" alt="Taylor - Candyfloss" style="width: 120px;">
                                        </a>
                                    </h3>
                                </td>
                                <td class="text-left">
                                    <h3>
                                        <a style="color: #C3A269; font-size: 14px;">
                                            <br/>
                                            <?= $o['name']?>及摘要 控制在30字之内
                                            <br/>
                                            <span style="color: #666666;">颜色分类：白色尺码：165/88A/M</span>
                                            <br/>
                                            <span style="color: red;;">价格：¥<?=$o['price']?></span>
                                        </a>
                                    </h3>
                                </td>
                                <td class="text-right">
                                    <br/>
                                    <br/>
                                    <!--点击评价按钮之后，跳转到评论页面，确定之后跳转到商品详情页，要求在评论区出现新的评论-->
                                    <input type="button" name="checkout" value="评论" class="button_pinglun" onclick="window.location.replace('./Popgoing_comment.html')">    <br>
                                    <br/>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <br>

                    </form>
                </div>
            </section>
        </div>
        <!--</div>-->
    </section>
</div>

<script src="./pro_des_files/plugins.js"></script>

<script src="./pro_des_files/main.js"></script>

</body></html>