<?php
	require_once 'header.php';
	require_once 'stateCheck.php';
?>
			<!-- 内容 -->
			<div class="content">
				<!-- 修改个人信息表单 -->
					<!-- 修改头像部分 -->
				<form class="" action="updateUserInfo.php?m=img" method="post" enctype="multipart/form-data">
					<div class="pic_edit">
						<div class="pic_show">
					
					<?php
						if(isset($arr_user['img'])){
							echo '<img src="'.$arr_user['img'].'" alt="头像" width="180px" height="180px">';
						}else{
							echo '<img src="images/userPic.jpg" alt="头像" width="180px" height="180px">';
						}
					?>
						
							<div class="upload">
								<p>可以上传jpg,gif,png格式的图片，且文件小于2M</p>
								<input class="upload_btn" type="file" name="file" />
								<input class="editpic_btn" type="submit" value="保存头像">
								<!-- <a class="editpic_btn" href="">修改头像</a> -->
							</div>
						</div>
					</div>

					</form>
					<div class="tab_change">
						<ul class="tab_content">
							<li class="current"><a href="javascript:void(0);">基本信息</a></li>
							<li><a href="javascript:void(0);">密码</a></li>
						</ul>
					</div>
					<form class="editbase_form base_form current_form" action="updateUserInfo.php" method="post" enctype="multipart/form-data">
					<!-- 修改基本信息部分 -->
					<!-- 修改邮箱 -->
					<div class="base_edit">
					<div class="edit_box">
						<label for="email_e">邮箱</label>
						<?php
							if(isset($arr_user['email'])){
								echo '<input type="email" id="email_e" class="edit_field" name="email" value="'.$arr_user['email'].'">';
							}else{
								echo '<input type="email" id="email_e" class="edit_field" name="email" value="" placeholder="输入你的常用邮箱">';
							}

						?>
						
						<div id="email_e_error" class="edit_tip"></div>
					</div>
					<!-- 修改昵称 -->
					<div class="edit_box">
						<label for="nickname_e">昵称</label>
						<?php
							if(isset($arr_user['nickname'])){
								echo '<input type="text" id="nickname_e" class="edit_field" name="nickname" value="'.$arr_user['nickname'].'">';
							}else{
								echo '<input type="text" id="nickname_e" class="edit_field" name="nickname" value="" placeholder="请为自己取一个喜欢的昵称:-D">';
							}
						?>
						<div id="nickname_e_error" class="edit_tip"></div>
					</div>
					<!-- 性别 -->
					<div class="edit_box box_sex">
						<label for="sex">性别</label>
						<div class="sex_choice">
						<?php
							if(isset($arr_user['sex'])){
								if($arr_user['sex'] == 1){
									echo '<input type="radio" class="editsex_field" name="sex" checked="checked" value="1">男
										  <input type="radio" class="editsex_field" name="sex" value="0">女';
								}else{
									echo '<input type="radio" class="editsex_field" name="sex" value="1">男
										  <input type="radio" class="editsex_field" name="sex" checked="checked" value="0">女';
								}
							}

						?>
						</div>
					</div>

					<!-- 城市 -->
					<div class="edit_box">
						<label for="city_e">城市</label>
						<?php
							if(isset($arr_user['city'])){
								echo '<input type="text" id="city_e" class="edit_field" name="city" value="'.$arr_user['city'].'">';
							}else{
								echo '<input type="text" id="city_e" class="edit_field" name="city" value="" placeholder="你所在的城市呢？">';
							}
						?>
						
						<div id="city_e_error" class="edit_tip"></div>
					</div>


					<!-- 职业 -->
					<div class="edit_box">
						<label for="occupation_e">职业</label>
						<?php
							if(isset($arr_user['occupation'])){
								echo '<input type="text" id="occupation_e" class="edit_field" name="occupation" value="'.$arr_user['occupation'].'">';
							}else{
								echo '<input type="text" id="occupation_e" class="edit_field" name="occupation" value="" placeholder="你的职业是什么呢？">';
							}
						?>
						
						<div id="occupation_e_error" class="edit_tip"></div>
					</div>
					<!-- 关于自己 -->
					<div class="edit_box">
						<label for="introduce_e">关于自己</label>
						<?php
							if(isset($arr_user['introduce'])){
								echo '<textarea id="introduce_e" class="introduce_field" name="introduce" cols="20" maxlength="150">'.$arr_user['introduce'].'</textarea>';
							}else{
								echo '<textarea id="introduce_e" class="introduce_field" name="introduce" cols="20" maxlength="150" placeholder="介绍一下你自己吧！最多150个字哦！:-D"></textarea>';
							}
						?>
						
						<div id="introduce_e_error" class="edit_tip"></div>
					</div>
					<!-- 提交 -->
					<div class="edit_sub_box">
						<input id="base_edit_btn" type="submit" class="edit_sub" value="保存设置">
					</div>
					</div>
				</form>
				<!-- 修改密码部分 -->
				<form class="editbase_form psw_form" action="updateUserInfo.php?m=pwd" method="post" >
					<div class="base_edit">
						<!-- 当前密码 -->
						<div class="edit_box">
							<label for="password">当前密码</label>
							<input type="password" id="password" class="edit_field" name="password" value="" placeholder="输入您的当前密码">
							<div class="edit_tip"></div>
						</div>
						<!-- 新密码 -->
						<div class="edit_box">
							<label for="new_password">新密码</label>
							<input type="password" id="new_password" class="edit_field" name="new_password" value="" placeholder="输入您的当前密码">
							<div class="edit_tip"></div>
						</div>
						<!-- 确认新密码 -->
						<div class="edit_box">
							<label for="confirm">确认新密码</label>
							<input type="password" id="confirm" class="edit_field" name="confirm_password" value="" placeholder="输入您的当前密码">
							<div class="edit_tip"></div>
						</div>
						<div class="edit_sub_box">
							<input type="submit" class="edit_sub editpwd_sub" value="保存设置">
						</div>
					</div>
				</form>
			</div>
			<footer>©2014 YYL</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/validate.js"></script>
	</body>
</html>