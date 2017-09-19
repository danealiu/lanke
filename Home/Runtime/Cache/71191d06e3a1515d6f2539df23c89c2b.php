<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (C("seo_title")); ?></title>
    <meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
    <meta name="description" content="<?php echo (C("seo_description")); ?>" />
    <meta name="applicable-device"content="pc,mobile">
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
	<link href="../Public/css/bxslider.css" rel="stylesheet">
	<link href="../Public/css/style.css" rel="stylesheet">
	<script src="__PUBLIC__/js/jquery.min.js"></script>
	<script src="../Public/js/bxslider.min.js"></script>
	<script src="../Public/js/common.js"></script>
	<script src="__PUBLIC__/js/bootstrap.js"></script>
	<!--[if lt IE 9]>
	  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>

  <header>

    <div class="top_menu">
      <div class="container">
        <span class="top_name">欢迎光临~<?php echo (C("web_name")); ?></span>
        <div class="language"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp;咨询电话：<?php echo (C("web_tel")); ?>
        
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <a href="<?php echo (C("web_url")); ?>"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" class="logo" alt="<?php echo (C("web_name")); ?>"/></a>
        </div>
 
        <div id="topsearch" class="col-xs-12 col-sm-3 col-md-3">
            <form id="searchform" method="get" action="<?php echo U('Search/index');?>">
                <div class="input-group search_group">
                    <input type="text" name="name" class="form-control input-sm" placeholder="产品搜索">
                       <span class="input-group-btn">
                          <a href="javascript:searchform.submit();" class="btn btn-sm mysearch_btn" type="button">搜 索</a>
                      </span>
                </div>
            </form>
        </div>

      </div>
    </div>
  
<?php echo W('Nav');?>

</header>

 <?php echo W('Flash');?>
    <script type="text/javascript">
        $('.bxslider').bxSlider({
          adaptiveHeight: true,
          infiniteLoop: true,
          hideControlOnEnd: true,
          auto:true
        });
    </script>

<!-- main -->


    <div class="container">    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="about_box">
                    <h2 class="about_h2">公司简介</h2><span class="about_span">ABOUT US</span>
                    <section>
                        <img align="left" src="../Public/images/about.png" alt="公司简介">
                        <?php echo W('About',array('id'=>25,'len'=>380));?>
                        <a href="<?php echo W('Listhref',array('id'=>25));?>" class="about_more">查看详细 &gt;&gt;</a>
                    <section>
                </div>
            </div>
        </div>
    </div>

    <div class="container">    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="index_product">
                    <h2 class="about_h2">产品展示</h2><span class="about_span">PRODUCT DISPLAY</span>
                        <div class="product_list">
                        <?php echo W('List',array('table'=>'Product','bid'=>1,'id'=>1));?>
                        </div>
                </div>

                    <div class="left_nav index_left_nav" id="categories">
                        <h2 class="left_h2">导航栏目</h2>
                         <?php echo W('Left',array('id'=>1,'type'=>'product'));?>
                    </div>
            </div>
        </div>
    </div>

    <div class="container">    
        <div class="row">

            <div class="col-xs-12 col-sm-8 col-md-7">
                <div class="news_box">
                    <h2 class="about_h2">新闻中心</h2><span class="about_span">NEWS CENTER</span>
                    <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2));?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-5">    
                
		<div class="index_contact">
		<h2 class="about_h2">联系我们</h2><span class="about_span">CONTACT US</span>
		    <p style="padding-top:28px;">联系人：<?php echo (C("web_contacts")); ?></p>
		    <p>手 机：<?php echo (C("web_phone")); ?></p>
		    <p>邮 箱：<?php echo (C("web_email")); ?></p>
		    <p>公 司：<?php echo (C("web_name")); ?></p>
		    <p>地 址：<?php echo (C("web_add")); ?></p>
		</div>
                <?php echo W('Link');?>
                <?php echo W('Tags');?>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>
            分享</a>  
            <div class="dropdown-menu webshare">
            <?php echo (C("web_share")); ?>
            </div>
    </div>
    <div class="foot_nav"><a href="tel:<?php echo (C("web_phone")); ?>"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>手机</a></div>
    <div class="foot_nav"><a id="gotocate" href="#"><span class="glyphicon glyphicon-th-list btn-lg" aria-hidden="true"></span>分类</a></div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>顶部</a></div>
</nav>

<footer>
    <div class="copyright">
        <p><?php echo (C("web_copyright")); ?>&nbsp;<?php echo (C("web_icp")); ?> <a href="__ROOT__/sitemap.html" target="_blank">网站地图</a></p>
        <p class="copyright_p">地址：<?php echo (C("web_add")); ?> &nbsp;电话：<?php echo (C("web_tel")); ?> &nbsp;传真：<?php echo (C("web_fax")); ?>&nbsp;<?php echo (C("web_count")); ?></p>
    </div>
    <?php if(C("is_translate")!= 0): ?><div id="translate">
    <!-- Begin TranslateThis Button -->
    <div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/"></a></div>
    <script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
    <script type="text/javascript">
    TranslateThis();
    </script>
    <!-- End TranslateThis Button -->
</div><?php endif; ?> 
</footer>

<?php echo W('Online');?>

  </body>
</html>