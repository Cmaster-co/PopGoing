<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>用户管理平台</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
      <link href="<?=base_url()."css/font-awesome.min.css"?>" rel="stylesheet">
      <link href="<?=base_url()."css/bootstrap.min.css"?>" rel="stylesheet">
      <link href="<?=base_url()."css/templatemo-style.css"?>" rel="stylesheet">

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
            <h1>Pop-Going</h1>
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
              <li><a href="/index.php/admin/index"><i class="fa fa-users fa-fw"></i>注册用户管理</a></li>
              <li><a href="/index.php/admin/whmanage" class="active"><i class="fa fa-bar-chart fa-fw"></i>网红管理</a></li>
              <li><a href="/index.php/admin/producemanage"><i class="fa fa-database fa-fw"></i>商家管理</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">

            <div class="panel panel-default table-responsive">

              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>

                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">用户名 <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Email <span class="caret"></span></a></td>
                    <td>修改</td>
                    <td>权限</td>
                    <td>删除</td>
                  </tr>
                </thead>
                <tbody>
                <?php $a=1;?>
                <?php foreach($users as $u) { ?>
                    <tr>
                        <td><?php echo $a++;?>.</td>
                        <td><?= $u['name']?></td>
                        <td><?= $u['email']?></td>
                        <td><a href="" class="templatemo-edit-btn">修改</a></td>
                        <td>网红</td>
                        <td><a href="" class="templatemo-link">删除</a></td>
                    </tr>
                <?php } ?>


                </tbody>
              </table>    
            </div>                          
          </div>

        </div>
      </div>
    </div>

  </body>
</html>