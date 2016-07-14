<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>The Awards - CSS Design Awards 2015</title>

    <meta name="section" content="">

    <link rel="stylesheet" href="<?=base_url().'css/normalize.css'?>">

    <link href="<?=base_url().'css/css(1)'?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url().'css/css(2)'?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?=base_url().'css/bootstrap.min.css'?>" />
    <script type="text/javascript" src="<?=base_url().'jq/jquery-1.9.1.min.js'?>"></script>
    <script type="text/javascript" src="<?=base_url().'js/jquery.qqFace.js'?>"></script>
</head>
<style>
    .comment{width:680px; margin:20px auto; position:relative}
    .comment h3{height:28px; line-height:28px}
    .com_form{width:100%; position:relative}
    .input{width:99%; height:60px; border:1px solid #ccc}
    .com_form p{height:28px; line-height:28px; position:relative}
    span.emotion{width:42px; height:20px; background:url(images/icon.gif) no-repeat 2px 2px; padding-left:20px; cursor:pointer}
    span.emotion:hover{background-position:2px -28px}
    .qqFace{margin-top:4px;background:#fff;padding:2px;border:1px #dfe6f6 solid;}
    .qqFace table td{padding:0px;}
    .qqFace table td img{cursor:pointer;border:1px #fff solid;}
    .qqFace table td img:hover{border:1px #0066cc solid;}
    #show{width:680px; margin:20px auto}

    .sub_btn {
        position:absolute; right:0px; top:0;
        display: inline-block;
        zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
        *display: inline;
        vertical-align: baseline;
        margin: 0 2px;
        outline: none;
        cursor: pointer;
        text-align: center;
        font: 14px/100% Arial, Helvetica, sans-serif;
        padding: .5em 2em .55em;
        text-shadow: 0 1px 1px rgba(0,0,0,.6);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        box-shadow: 0 1px 2px rgba(0,0,0,.2);
        color: #e8f0de;
        border: solid 1px #538312;
        background: #64991e;
        background: -webkit-gradient(linear, left top, left bottom, from(#7db72f), to(#4e7d0e));
        background: -moz-linear-gradient(top,  #7db72f,  #4e7d0e);
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#7db72f', endColorstr='#4e7d0e');
    }
    .sub_btn:hover {
        background: #538018;
        background: -webkit-gradient(linear, left top, left bottom, from(#6b9d28), to(#436b0c));
        background: -moz-linear-gradient(top,  #6b9d28,  #436b0c);
        filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#6b9d28', endColorstr='#436b0c');
    }
</style>
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
        <article class="award">
            <header>
                <h1>圣罗兰纯魅唇膏#12</h1>
                <p>以其迷人的色调赋予了双唇锦缎般的奢华色泽。将唇膏均匀地涂抹于唇部，顺滑诱人的奶油质地即刻呈现。</p>
                <p>色彩与营养结合，温和滋润唇部，勾勒出柔美而动人的唇部弧线。清新芒果香味弥散氤氲，沁人心脾，美妙独特的触感令人心神荡漾。传奇的卡珊德拉（Cassandra）标志“腰带”清晰地表明该支口红的独特色彩。</p>
                <div class="haveday">
                    <div class="lxftime" endtime="7/11/2016 24:0:0" lxfday="no"></div>
                </div>
                <p></p>
                <input id="productid" value="<?=$product['Id'] ?>" type="hidden">
                <button type=button>预购</button>
                <button id="submit" type=button>加入购物车</button>
            </header>
            <div class="image">
                <img src="<?=base_url().'images/ysl1.jpg'?>" alt="Website of the Year Award">
            </div>
        </article>
        <article class="certificate">
            <header>
                <h1>产品说明</h1>
                <p>生产日期：2016/1/8</p>
                <p>保质期：3年（开封后6个月）</p>
                <p>产地：法国</p>
                <p>避免阳光直射</p>
            </header>
            <div class="image">
                <img src="<?=base_url().'images/ysl3.jpg'?>" alt="Website of the Year Certificate">
            </div>

        </article>

    </section>

</div>

<div>
    <h3 style="padding-left: 300px;">评论区</h3>
    <div id="show"></div>
    <div class="comment" style="width: 500px">
        <div class="com_form">
            <textarea class="input" id="saytext" name="saytext"></textarea>
            <p><input type="button" class="sub_btn" value="提交"><span class="emotion">表情</span></p>
        </div>
    </div>
    <br/>
    <br/>
</div>

<script src="./pro_des_files/plugins.js"></script>

<script src="./pro_des_files/main.js"></script>

<script type="text/javascript">
    $(function(){
        $('.emotion').qqFace({
            id:'facebox', //表情盒子的ID
            assign:'saytext', //给那个控件赋值
            path:'images/face/'	//表情存放的路径
        });
        $(".sub_btn").click(function(){
            var str = $("#saytext").val();
            $("#show").html("<hr/>"+"用户A："+replace_em(str));
//            $("#show").html(str);
        });
    });
    //查看结果
    function replace_em(str){
        str = str.replace(/\</g,'&lt;');
        str = str.replace(/\>/g,'&gt;');
        str = str.replace(/\n/g,'<br/>');
        str = str.replace(/\[em_([0-9]*)\]/g,'<img src="images/face/$1.gif" border="0" />');
        return str;
    }
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
<script src="<?=base_url().'js/plugins.js'?>"></script>
<script src="<?=base_url().'js/main.js'?>"></script>
<script src="<?=base_url().'js/jquery-3.0.0.min.js'?>"></script>
<script src="<?=base_url().'js/addcart.js'?>"></script>
</body></html>