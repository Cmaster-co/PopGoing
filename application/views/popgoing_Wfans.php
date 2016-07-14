<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>粉丝管理</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
      <link href="<?=base_url()."css/font-awesome.min.css"?>" rel="stylesheet">
      <link href="<?=base_url()."css/bootstrap.min.css"?>" rel="stylesheet">
      <link href="<?=base_url()."css/templatemo-style.css"?>" rel="stylesheet">
    

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>POP-going</h1>
        </header>
        <div class="profile-photo-container">
            <img src="<?=base_url()."images/profile-photo.jpg"?>" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
            <ul>
                <li><a href="/index.php/wh/addmanage" class="active"><i class="fa fa-home fa-fw"></i>发布推荐</a></li>
                <li><a href="/index.php/wh/delmanage"><i class="fa fa-bar-chart fa-fw"></i>推荐商品删除</a></li>
                <li><a href="/index.php/wh/fsmanage"><i class="fa fa-users fa-fw"></i>粉丝管理</a></li>
                <li><a href="/index.php/wh/commanage"><i class="fa fa-home fa-fw"></i>回复评论</a></li>
            </ul>
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">

        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">亲爱的网红你好：</h2><hr>
              <h2>你一共有xxx个粉丝。</h2>
            </div>

          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">用户用户用户</h2>
                    <p>用户简介用户简介用户简介用户简介用户简介用户简介用户简介用户简介</p>
                  </div>        
                </div>                
              </div>            
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">用户用户用户</h2>
                    <p>用户简介用户简介用户简介用户简介用户简介用户简介用户简介用户简介.</p>
                  </div>
                </div>                
              </div>
                <div class="templatemo-content-widget orange-bg">
                    <i class="fa fa-times"></i>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading text-uppercase">用户用户用户</h2>
                            <p>用户简介用户简介用户简介用户简介用户简介用户简介用户简介用户简介</p>
                        </div>
                    </div>
                </div>
            </div>

          </div> <!-- Second row ends -->

        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>