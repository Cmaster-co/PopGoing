<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>推荐商品上传管理</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

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
          <h1>pop-going</h1>
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
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">推荐商品删除</h2>
            <p>在这里删除您已经推荐的商品信息。</p>
              <br/>
            <form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group" style="padding-left: 16px;">
                  <div class="panel panel-default table-responsive">
                      <table class="table table-striped table-bordered templatemo-user-table">
                          <thead>
                          <tr>
                              <td><a href="" class="white-text templatemo-sort-by">编号 <span class="caret"></span></a></td>
                              <td><a href="" class="white-text templatemo-sort-by">商品名称 <span class="caret"></span></a></td>
                              <td><a href="" class="white-text templatemo-sort-by">商品详情 <span class="caret"></span></a></td>
                              <td>删除</td>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>

                          <tr>
                              <td>1.</td>
                              <td>商品名称 商品名称 商品名称 </td>
                              <td>商品详情商品详情商品详情</td>
                              <td><a href="" class="templatemo-link">删除</a></td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td>商品名称 商品名称 </td>
                              <td>商品详情商品详情</td>

                              <td><a href="" class="templatemo-link">删除</a></td>
                          </tr>
                          <tr>

                          </tbody>
                      </table>
                  </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>
  </body>
</html>
