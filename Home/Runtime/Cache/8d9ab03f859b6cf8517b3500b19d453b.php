<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($list["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($list["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($list["description"]); ?>" />
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

<div class="page_bg" style="background: url(__ROOT__/Uploads/<?php echo W('Flash',array('type'=>3,'id'=>8));?>) center top no-repeat;"></div>
   
    <!-- main -->
    <div class="container">    
        <div class="row">

            <!-- right -->
            <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
                <div class="list_box"> 
                  <h2 class="left_h2"><?php echo ($list["name"]); ?></h2>

                  <div class="product_list product_list2">
                    <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-3 col-mm-6 product_img">
                            <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table));?>">
                              <img  src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="opacity_img" alt="<?php echo ($vo["name"]); ?>"/>
                            </a>
                            <p class="product_title"><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table));?>" title="<?php echo ($vo["name"]); ?>"><?php echo (mb_substr($vo["name"],0,30,'utf-8')); ?></a></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>

                    <div class="page">     
                    <?php echo ($page); ?>              
                    </div>
                    
                </div>
            </div>


            <!-- left -->
            <div class="col-xs-12 col-sm-4 col-md-3">
            
                <div class="left_nav" id="categories">
                  <h2 class="left_h2">导航栏目</h2>
                  <?php echo W('Left',array('id'=>$list['bid'],'type'=>$list['type']));?>
                </div>

                <div class="left_news">
                  <h2 class="left_h2">新闻中心</h2>
                  <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2));?>
                </div>
               
		<div class="index_contact">
		<h2 class="about_h2">联系我们</h2><span class="about_span">CONTACT US</span>
		    <p style="padding-top:28px;">联系人：<?php echo (C("web_contacts")); ?></p>
		    <p>手 机：<?php echo (C("web_phone")); ?></p>
		    <p>邮 箱：<?php echo (C("web_email")); ?></p>
		    <p>公 司：<?php echo (C("web_name")); ?></p>
		    <p>地 址：<?php echo (C("web_add")); ?></p>
		</div>
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