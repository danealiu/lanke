<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>添加广告</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">添加广告 【<a href="<?php echo U('Flash/index');?>">返回广告列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('saveflash');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">广告标题：</td>
    <td width="91%" height="35"><input name="title" type="text" class="FormSmall" style="width: 320px;"> 
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" class="FormSmall" value="0" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>

  <tr>
    <td>广告类型：</td>
    <td height="35">
      <select name="type" style="height:28px;">
          <option value="1">幻灯片广告</option>
          <option value="2">图组广告</option>
          <option value="3">单图广告</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>广告链接：</td>
    <td height="35"><input name="link" type="text" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>广告图片：</td>
    <td height="35"><input type='file'  name='photo'></td>
  </tr>

  <tr>
    <td>广告描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 400px; height: 70px;"></textarea>
    </td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="添加" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>