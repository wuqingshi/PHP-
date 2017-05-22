<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>新建文章</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo (ADMIN_VIEW_PATH); ?>css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：文章管理-》新建文章</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/index.php/Admin/Chapter/Chapterlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/index.php/Admin/Chapter/chapteradd" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>文章标题</td>
                    <td><input type="text" name="chapter_title" style="width: 500px;" /></td>
                </tr>
                <tr>
                    <td>文章分类</td>
                    <td>
                        <select name="chapter_category" style="width: 300px">
                            <option value="0" >请选择文章分类</option>
                            <?php if(is_array($info)): foreach($info as $key=>$v): ?><option value="<?php echo ($v["category_id"]); ?>"><?php echo ($v["category_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </td>
                <tr>
                    <td>关键字</td>
                    <td><input type="text" name="chapter_key" style="width: 500px;" /></td>
                </tr>
                <!--<tr>-->
                    <!--<td>商品图片</td>-->
                    <!--<td><input type="file" name="f_goods_image" /></td>-->
                <!--</tr>-->
                <tr>
                    <td colspan="2" align="center">文章正文


                        <!-- 加载编辑器的容器 -->
                        <script id="container" name="chapter_text" type="text/plain" style= "width:1024px;height:500px;">
        这里写你的文章内容
    </script>
                        <!-- 配置文件 -->
                        <script type="text/javascript" src="<?php echo (EDIT_PATH); ?>ueditor.config.js"> </script>

                        <!-- 编辑器源码文件 -->
                        <script type="text/javascript" src="<?php echo (EDIT_PATH); ?>ueditor.all.js"></script>
                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                        </script>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center" >
                        <input type="submit" value="添加" >
                        <input type="button" value="清空" >
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>