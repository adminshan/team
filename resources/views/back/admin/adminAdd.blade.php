<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加用户-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                        href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
        </div>
    </div>
    <div class="page ">
        <!-- 会员注册页面样式 -->
        <div class="banneradd bor">
            <div class="baTopNo">
                <span>超级管理员添加子管理员</span>
            </div>
            <div class="baBody">
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;用户名：<input type="text" class="input3" name="admin_name" />
                </div>
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：<input type="password" class="input3" name="password"/>
                </div>
                <div class="bbD">
                    手机号：<input type="tel" class="input3" name="admin_tel"/>
                </div>
                <div class="bbD">
                    管理员角色：
                    <select name="role" id="role">
                        <option value="1">超级管理员</option>
                        <option value="2">商品管理员</option>
                    </select>
                </div>
                <div class="bbD">
                    <p class="bbDP">
                        <button class="btn_ok btn_yes" href="#">提交</button>
                        <a class="btn_ok btn_no" href="#">取消</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- 会员注册页面样式end -->
    </div>
</div>
</body>
</html>
<script>
    $(function(){
        $('.btn_yes').click(function(){
            var admin_name = $("input[name='admin_name']").val();
            var password = $("input[name='password']").val();
            var admin_tel = $("input[name='admin_tel']").val();
            //管理员角色
           var role_id= $("#role option:checked").val();
            var data ={};
            data.admin_name = admin_name;
            data.password = password;
            data.admin_tel = admin_tel;
            data.role_id = role_id;

            $.ajax({
                url:"/adminAddDo",
                type:"post",
                data:data,
                dataType:"json",
                success:function(msg){
                    if(msg.code ==0){
                        alert("管理员添加成功");
                        location.href ="/adminList";
                    }else{
                        alert("管理员添加失败");
                    }
                }
            })
        })

    });
</script>