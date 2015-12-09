<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/common.css')?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/main.css')?>">
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/colResizable-1.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/common.js')?>"></script>
<script type="text/javascript">
$(function(){
	$(".list_table").colResizable({
		liveDrag:true,
		gripInnerHtml:"<div class='grip'></div>", 
		draggingClass:"dragging", 
		//minWidth:30
	}); 
}); 
</script>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：网站信息</div>
    <div class="main_top">
        <div class="main_left fl span6">
            <div class="box pr5">
                <div class="box_border">
                    <div class="box_top">
                        <div class="box_top_l fl"><b class="pl15">数据统计</b></div>
                        <div class="box_top_r fr pr15"><a href="#" class="color307fb1">更多</a></div>
                    </div>
                    <div class="box_center">center</div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="main_center">
        <div class="span3 fl pt10">
            <div class="box pr5">
                <div class="box_border">
                    <div class="box_top">top</div>
                    <div class="box_center">center</div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="button" class="mt10">
        <input type="button" name="button" class="btn btn82 btn_add" value="新增">
        <input type="button" name="button2" class="btn btn82 btn_del" value="删除">
        <input type="button" name="button2" class="btn btn82 btn_config" value="配置">
        <input type="button" name="button2" class="btn btn82 btn_count" value="统计">
        <input type="button" name="button2" class="btn btn82 btn_checked" value="全选">
        <input type="button" name="button2" class="btn btn82 btn_nochecked" value="取消">
        <input type="button" name="button2" class="btn btn82 btn_export" value="导出">
        <input type="button" name="button2" class="btn btn82 btn_recycle" value="回收站">
        <input type="button" name="button2" class="btn btn82 btn_search" value="查询">
    </div>
    <div id="search_bar" class="mt10">
        <div class="box">
            <div class="box_border">
                <div class="box_top"><b class="pl15">搜索</b></div>
                <div class="box_center pt10 pb10">
                    <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>姓名</td>
                            <td><input type="text" name="name" class="input-text lh25" size="10"></td>
                            <td>性别</td>
                            <td><span class="fl">
                                <div class="select_border">
                                    <div class="select_containers ">
                                        <select name="select" class="select">
                                            <option>男</option>
                                            <option>女</option>
                                        </select>
                                    </div>
                                </div>
                            </span></td>
                        </tr>
                    </table>
                </div>
                <div class="box_bottom pb5 pt5 pr10" style="border-top:1px solid #dadada;">
                    <div class="search_bar_btn" style="text-align:right;">
                        <input type="submit" value="确定" class="ext_btn ext_btn_submit">
                        <input type="button" value="返回" onClick="location.href='javascript:history.go(-1)'" class="ext_btn">
                        <input type="button" class="ext_btn ext_btn_success" value="成功">
                        <input type="button" class="ext_btn ext_btn_error" value="错误">
                        <a href="" class="ext_btn"><span class="add"></span>添加</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div id="table" class="mt10">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th width="30">#</th>
                    <th width="100">标题</th>
                    <th width="100">标题</th>
                    <th>标题</th>
                </tr>
                <tr class="tr">
                    <td class="td_center"><input type="checkbox"></td>
                    <td>aad</td>
                    <td>aad</td>
                    <td>aad</td>
                </tr>
                <tr class="tr">
                    <td class="td_center"><input type="checkbox"></td>
                    <td>aad</td>
                    <td>aad</td>
                    <td>aad</td>
                </tr>
                <tr class="tr">
                    <td class="td_center"><input type="checkbox"></td>
                    <td>aad</td>
                    <td>aad</td>
                    <td>aad</td>
                </tr>
            </table>
            <div class="page mt10">
                <div class="pagination">
                    <ul>
                        <li class="first-child"><a href="#">首页</a></li>
                        <li class="disabled"><span>上一页</span></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">下一页</a></li>
                        <li class="last-child"><a href="#">末页</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="forms" class="mt10">
        <div class="box">
            <div class="box_border">
                <div class="box_top"><b class="pl15">表单</b></div>
                <div class="box_center">
                    <form action="" class="jqtransform">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">输入框：</td>
                                <td class=""><input type="text" name="name" class="input-text lh30"></td>
                            </tr>
                            <tr >
                                <td class="td_right">下拉框：</td>
                                <td class=""><span class="fl">
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="select" class="select">
                                                <option>北京</option>
                                                <option>天津</option>
                                                <option>上海</option>
                                                <option>重庆</option>
                                            </select>
                                        </div>
                                    </div>
                                </span></td>
                            </tr>
                            <tr>
                                <td class="td_right">文本框：</td>
                                <td class=""><textarea name="textarea" id="textarea" cols="30" rows="10" class="textarea"></textarea></td>
                            </tr>
                            <tr>
                                <td class="td_right">单选：</td>
                                <td class=""><input type="radio" name="status">
                                    可用
                                    <input type="radio" name="status">
                                    不可用 </td>
                            </tr>
                            <tr>
                                <td class="td_right">多选：</td>
                                <td class=""><input type="checkbox" name="check" >
                                    1
                                    <input type="checkbox" name="check" >
                                    2
                                    <input type="checkbox" name="check" >
                                    3 </td>
                            </tr>
                            <tr>
                                <td class="td_right">文件：</td>
                                <td class=""><input type="file" name="file" class="input-text lh30" size="10"></td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td class=""><input type="button" name="button2" class="btn btn82 btn_save2" value="保存">
                                    <input type="button" name="button2" class="btn btn82 btn_res" value="重置"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>