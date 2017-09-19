<?php if (!defined('THINK_PATH')) exit(); if($tags): ?><div class="tags">
	<a class="btn btn-default btn-xs" href="<?php echo U('Tags/index');?>" role="button">全部标签</a>
	      <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="btn btn-default btn-xs" href="<?php echo W('Taghref',array('id'=>$vo['id'],'type'=>$vo['type']));?>" role="button"  target="_blank"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</div><?php endif; ?>