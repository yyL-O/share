/*---------------------------
	validate.js
	author:yyL
	time:2014-6-23
-----------------------------
*/
// tab选项卡
$(function() {
	var tab_content_li = $(".tab_content li"),
		editbase_form = $(".editbase_form");
		tab_content_li.click(function() {
		var tab_content_li_number = $(this).index();
		for(var i=0;i<tab_content_li.length;i++){
			tab_content_li.removeClass('current');
		}
		editbase_form.hide();
		$(editbase_form[tab_content_li_number]).show();
		$(this).addClass("current");
	});
});

// 下拉菜单
$(function(){
	var user_b = $(".user")
	var user_img = $(".user_pic");
	var user_menu = $(".user_choice");
	user_b.click(function(){
		user_menu.toggle();
	});
});

// 注册表单验证
$(function(){
	var v_email = $("#email");
	var v_nickname = $("#nickname");
	var v_password = $("#password");

	var v_email_error = $("#email_error");
	var v_nickname_error = $("#nickname_error");
	var v_password_error = $("#password_error")

	v_email.blur(function(){
		var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
		if(v_email.val() == ""){
			v_email_error.html("邮箱不能为空");
		}else if(!reg.test(v_email.val())){
			v_email_error.html("邮箱格式错误");
		}else{
			$.ajax({
				type:"post",
				url:"checkInfo.php",
				data:{
					ajax:'checkEmail',
					email:v_email.val()
				},
				success:function(result){
					var json = $.parseJSON(result.toString());
					if(json.flag){
						v_email_error.html("");
					}else{
						v_email_error.html("此邮箱已注册")
					}
				}
			});
		}
	});
	v_nickname.blur(function(){
		var reg = /^[\u4E00-\u9FA5a-zA-Z]/;
		if(v_nickname.val() == ""){
			v_nickname_error.html("昵称不能为空！");
		}else if(!reg.test(v_nickname.val())){
			v_nickname_error.html("昵称只能输入中文或字母！");
		}else{
			$.ajax({
				type:"post",
				url:"checkInfo.php",
				data:{
					ajax:'checkNickname',
					nickname:v_nickname.val()
				},
				success:function(result){
					var json = $.parseJSON(result.toString());
					if(json.flag){
						v_nickname_error.html("");
					}else{
						v_nickname_error.html("此昵称已被占用");
					}
				}
			})
		}
	});
	v_password.blur(function(){
		if(v_password.val()==""){
			v_password_error.html("密码不能为空");
		}else if(v_password.val().length<6||v_password.val().length>15){
			v_password_error.html("密码长度应为6到15位");
		}else{
			v_password_error.html("");
		}
	});
	v_email.focus(function(){
		v_email_error.html("");
	});
	v_nickname.focus(function(){
		v_nickname_error.html("");
	});
	v_password.focus(function(){
		v_password_error.html("");
	});

	// 注册提交验证
	$(".reg_submit").click(function(){
		var reg1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
		var reg2 = /^[\u4E00-\u9FA5a-zA-Z]/;
		if(v_email.val() == ""){
			v_email_error.html("邮箱不能为空");
			return false;
		}else if(!reg.test(v_email.val())){
			v_email_error.html("邮箱格式错误");
			return false;
		}else if(v_nickname.val() == ""){
			v_nickname_error.html("昵称不能为空！");
			return false;
		}else if(!reg.test(v_nickname.val())){
			v_nickname_error.html("昵称只能输入中文或字母！");
			return false;
		}else if(v_password.val()==""){
			v_password_error.html("密码不能为空");
			return false;
		}else if(v_password.val().length<6||v_password.val().length>15){
			v_password_error.html("密码长度应为6到15位");
			return false;
		}else if(v_email_error.val()!=""||v_nickname_error.val()!=""||v_password_error.val()!=""){
			return false;
		}else{
			return true;
		}
	});

});
// 个人信息编辑表单验证
$(function(){
	var e_email = $("#email_e");
	var e_nickname = $("#nickname_e");
	var e_city = $("#city_e");
	var e_occupation = $("#occupation_e");
	var e_introduce = $("#introduce_e");

	var e_email_error = $("#email_e_error");
	var e_nickname_error = $("#nickname_e_error");
	var e_city_error = $("#city_e_error");
	var e_occupation_error = $("#occupation_e_error");
	var e_introduce_error = $("#introduce_e_error");

	e_email.blur(function(){
		var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
		if(e_email.val() == ""){
			e_email_error.html("邮箱不能为空");
		}else if(!reg.test(e_email.val())){
			e_email_error.html("邮箱格式错误");
		}else{
			e_email_error.html("");
		}
	});
	e_nickname.blur(function(){
		var reg = /^[\u4E00-\u9FA5a-zA-Z]/;
		if(e_nickname.val() == ""){
			e_nickname_error.html("昵称不能为空");
		}else if(!reg.test(e_nickname.val())){
			e_nickname_error.html("昵称只能输入中文或字母！");
		}else{
			e_nickname_error.html("");
		}
	});
	e_city.blur(function(){
		if(e_city.val() == ""){
			e_city_error.html("城市不能为空");
		}else{
			e_city_error.html("");
		}
	});
	e_occupation.blur(function(){
		if(e_occupation.val() == ""){
			e_occupation_error.html("职业不能为空");
		}else{
			e_occupation_error.html("");
		}
	});
	e_introduce.blur(function(){
		if(e_introduce.val() == ""){
			e_introduce_error.html("关于自己内容不能为空");
		}else{
			e_introduce_error.html("");
		}
	});
	e_email.focus(function(){
		e_email_error.html("");
	});
	e_nickname.focus(function(){
		e_nickname_error.html("");
	});
	e_city.focus(function(){
		e_city_error.html("");
	});
	e_occupation.focus(function(){
		e_occupation_error.html("");
	});
	e_introduce.focus(function(){
		e_introduce_error.html("");
	});

	// 修改信息提交验证
	$("#base_edit_btn").click(function(){
		var reg1 = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
		var reg2 = /^[\u4E00-\u9FA5a-zA-Z]/;
		if(e_email.val() == ""){
			e_email_error.html("邮箱不能为空");
			return false;
		}else if(!reg.test(e_email.val())){
			e_email_error.html("邮箱格式错误");
			return false;
		}else if(e_nickname.val() == ""){
			e_nickname_error.html("昵称不能为空");
			return false;
		}else if(!reg.test(e_nickname.val())){
			e_nickname_error.html("昵称只能输入中文或字母！");
			return false;
		}else if(e_city.val() == ""){
			e_city_error.html("城市不能为空");
			return false;
		}else if(e_occupation.val() == ""){
			e_occupation_error.html("职业不能为空");
			return false;
		}else if(e_introduce.val() == ""){
			e_introduce_error.html("关于自己内容不能为空");
			return false;
		}else{
			return true;
		}
	});
});

// 提示
$("#add_content").click(function(){
	alert("此功能尚未完善，正在开发中，敬请期待！");
});