<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>发布推荐</title>
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
          <div class="templatemo-top-nav-container">
              <div class="row">
                  <nav class="templatemo-top-nav col-lg-12 col-md-12">
                      <ul class="text-uppercase">
                          <li><a href="./popgoing_Wchat.html" class="active">推荐商品上传</a></li>
                      </ul>
                  </nav>
              </div>
          </div>

          <div class="templatemo-content-container">
              <div class="templatemo-content-widget white-bg">
                  <h2 class="margin-bottom-10">推荐商品上传</h2>
                  <p>在这里管理上传您所推荐的商品。</p>
                  <form action="/index.php/wh/datainput" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                      <div class="row form-group">
                          <div class="col-lg-6 col-md-6 form-group">
                              <label class="control-label" for="inputName">商品名称</label>
                              <input type="text" class="form-control" name="name" id="inputName" placeholder="商品名称">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                              <label class="control-label" for="inputName">商品价格</label>
                              <input type="text" class="form-control" name="price" id="inputprice" placeholder="商品价格">
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col-lg-6 col-md-6 form-group">
                              <label for="inputID">商家ID</label>
                              <input type="text" class="form-control" name="produce" id="inputID" placeholder="商家ID">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                              <label for="inputnum">库存数量</label>
                              <input type="text" class="form-control" name="num" id="inputnum" placeholder="库存数量">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-lg-12">
                              <label class="control-label templatemo-block">插入第一张图片</label>
                              <input type="file" name="file" id="pictureToUpload1" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
                              <p>上传图片不得大于 5 MB.</p>
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-lg-12 form-group">
                              <label class="control-label" for="inputNote">商品介绍</label>
                              <textarea class="form-control" name="info" id="inputNote" rows="5" placeholder="商品详情"></textarea>
                          </div>
                      </div>
                      <div class="form-group text-right">
                          <button type="submit" class="templatemo-blue-button">上传</button>
                          <button type="reset" class="templatemo-white-button">重置</button>
                      </div>
                  </form>
              </div>
              <footer class="text-right">
                  <p>Copyright &copy; 2084 Pop-Going
                      | Designed by <a href="#" target="_parent">Pop-Going</a></p>
              </footer>
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
