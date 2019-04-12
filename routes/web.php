<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#后台  登录页面
Route::any('/login',function(){
    return view('back.login.login');
});

#检查登录
Route::any('checkLogin',"back\AdminController@checkLogin");
#后台  首页
Route::any('/index',function(){
    return view('back.index.index');
});


#商品管理
#商品添加
Route::any('/goodsAdd',"back\GoodsController@goodsAdd");
#商品列表
Route::any('/goodsList',"back\GoodsController@goodsList");
#分类添加
Route::any('/cateAdd',"back\GoodsController@cateAdd");
#分类展示
Route::any('/cateList',"back\GoodsController@cateList");
#品牌添加
Route::any('/brandAdd',"back\GoodsController@brandAdd");
#品牌展示
Route::any('/brandList',"back\GoodsController@brandList");
#商品类型展示
Route::any('/goodsType',"back\GoodsController@goodsType");


#订单管理
Route::any('/orderList',"back\OrderController@orderList");
#订单查询
Route::any('/getOrder',"back\OrderController@getOrder");
#合并订单
Route::any('/orderMerge',"back\OrderController@orderMerge");
#发货单列表
Route::any('/deliverGoodsList',"back\OrderController@deliverGoodsList");


#后台管理员管理
#管理员添加
Route::any('/adminAdd',function(){
    return view('back.admin.adminAdd');
});
#管理员执行添加
Route::any('/adminAddDo',"back\AdminController@adminAddDo");
#管理员列表ok
Route::any('/adminList',"back\AdminController@adminList");

#角色添加
Route::any('/roleAdd',"back\AdminController@roleAdd");
#角色列表
Route::any('/roleList',"back\AdminController@roleList");

#权限添加
Route::any('/powerAdd',"back\AdminController@powerAdd");
#权限列表
Route::any('/powerList',"back\AdminController@powerList");



//app登录
Route::any('user/login','Login\LoginController@login');
//app退出
Route::any('/quit','Login\LoginController@quit');
//修改密码
Route::any('/checkpwd','Center\CenterController@changepwd');
//收藏删除
Route::any('/delcollect','Center\CenterController@delcollection');

//注册
Route::any('/useradd','Register\RegisterController@userAdd');
//验证码
Route::any('/code','Register\RegisterController@sendcode');

//个人信息展示
Route::any('/Umserlist','Xiu\Xiucontroller@Umserlist');
//个人信息增修
Route::any('/Umserxiu','Xiu\Xiucontroller@Umserxiu');






