<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>话题管理-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                        href="#">管理员管理</a>&nbsp;-</span>&nbsp;意见管理
        </div>
    </div>

    <div class="page">
        <!-- topic页面样式 -->
        <div class="topic">
            <div class="conform">
                <form>

                    <div class="cfD">
                        <input class="addUser" type="text" placeholder="管理员名称" />
                        <button class="button">搜索</button>
                        <a class="addA addA1" href="/adminAdd">添加管理员</a>
                    </div>
                </form>
            </div>
            <!-- topic表格 显示 -->
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="125px" class="tdColor">管理员名称</td>
                        <td width="155px" class="tdColor">电话(邮箱)</td>
                        <td width="175px" class="tdColor">加入时间</td>
                        <td width="190px" class="tdColor">最后登录时间</td>
                        <td width="190px" class="tdColor">管理员角色</td>
                        <td width="130px" class="tdColor">操作</td>
                    </tr>
                    @foreach($adminUserInfo as $k=>$v)
                    <tr>
                        <td>{{$v['admin_id']}}</td>
                        <td>{{$v['admin_name']}}</td>
                        <td>{{$v['admin_tel']}}</td>
                        <td>{{$v['add_time']}}</td>
                        <td>{{$v['last_login_time']}}</td>
                        <td>{{$v['role_name']}}</td>
                        <td>
                            <a href="/adminUpdate"> <img class="operation" src="img/update.png"> </a>
                            <a href="/adminDel">  <img class="operation delban" src="img/delete.png"></a>
                            <a href="/getPower">分配权限</a>
                         </td>
                    </tr>
                    @endforeach
                </table>
                <div class="paging">此处是分页</div>
            </div>
            <!-- topic 表格 显示 end-->
        </div>
        <!-- topic页面样式end -->
    </div>

</div>


<!-- 删除弹出框 -->
<div class="banDel">
    <div class="delete">
        <div class="close">
            <a><img src="img/shanchu.png" /></a>
        </div>
        <p class="delP1">你确定要删除此条记录吗？</p>
        <p class="delP2">
            <a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
        </p>
    </div>
</div>
<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
    // 广告弹出框
    $(".delban").click(function(){
        $(".banDel").show();
    });
    $(".close").click(function(){
        $(".banDel").hide();
    });
    $(".no").click(function(){
        $(".banDel").hide();
    });
    // 广告弹出框 end
</script>
</html>