<?php
	require_once 'header.php';
	require_once 'stateCheck.php';
?>
			<!-- 内容 -->
			<div class="content">
				<div class="per_info">
				<?php

					echo '<img src="'.$arr_user['img'].'" alt="头像" width="180px" height="180px">
						  <div class="per_details">
							<p id="per_name">'.$arr_user['nickname'].'</p>';
							if($arr_user['sex'] == 1){
								$sex = "男";
							}else{
								$sex = "女";
							}
					echo '<p><span>'.$sex.'</span><span>'.$arr_user['city'].'</span><span>'.$arr_user['occupation'].'</span></p>
							<p id="per_describe">'.$arr_user['introduce'].'</p>
						  </div>';
					if(isset($uid)){
						//如果是访问别人的主页，则不显示编辑资料
					}else{
						echo '<a id="edit" href="perInfoEdit.php">编辑资料</a>';
					}
				?>

				</div>
				<div id="container">
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/1.jpg" data-original=""></div>
						<p>在千万人之中遇见你所想要遇见的人，于千万年之中，时间的无涯的荒野里，没有早一步，也没有晚一步，刚巧就赶上了，没有别的话可说，惟有轻轻地问一声："噢，你怎么也在这里？" </p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/2.jpg" data-original=""></div>
						<p>一生当中，真正属于自己的时光就那么几次。大多数时光里，我们不是在重复自己的生活，就是在重复别人的生活。有时候干脆把自己的生存目标确定为：追求别人那样的生活。其实，真正的幸福，不是活成别人那样，而是能够按照自己的意愿去生活。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/3.jpg" data-original=""></div>
						<p>站在人生的十字路口，我们也许会徘徊不定、犹豫不决。影响我们下决心的因素，往往既不是事情过于复杂，也不是我们的判断力不够，而是对于自己即将放弃的选择心有不甘，既想要鱼，又想要熊掌。这时候我们就要明白，没有舍就没有得，今天所放弃的，明天可能会加倍回报给你。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/4.jpg" data-original=""></div>
						<p>我能看见云的飘，也能闻见花的香，但突然间，一切寡淡，天地间只剩下明亮的你</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/5.jpg" data-original=""></div>
						<p>我们曾经那么盼望的未来， 正以惊人的速度流逝着，现在，只希望可以慢一点，偶尔停下来看看路边的风景。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/6.jpg" data-original=""></div>
						<p>千纸鹤来源于日本，开始时只为了纸折千只鹤祈祷得病的人早日病愈，后来也有祈祷某事情的成功而折叠千纸鹤。千纸鹤，是代表你对被送的人的祝愿，每只千纸鹤承载一点祝愿，最终成为一个愿望。千纸鹤有着美丽的传说和文化底蕴，成为人们的感情寄托。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/7.jpg" data-original=""></div>
						<p>心中只要充满阳光，走到哪里都有希望，一个人要学会时刻激励自己，让自己的内心一直充满着信心，只有自己的鼓励才是最强大的！</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/8.jpg" data-original=""></div>
						<p>每个女孩都是天生的公主，每个女孩都有属于自己的高跟鞋轻移莲步，踩在高高的细长鞋跟上，不自觉的仰着头，告诉你：我不是全世界最好的，但对你来说我是最好的。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/9.jpg" data-original=""></div>
						<p>花开的季节，生命也开始显现出美丽的光彩。在五颜六色的梦境中，我期待我的世界，天蓝草绿，云淡风清。世界很大，而我只需要一个小小的家，不必太过奢华，只要它足够温暖，可以包容我的任性和孤单。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/10.jpg" data-original=""></div>
						<p>如果人生是一段旅途，快乐与悲伤就是那两条长长的铁轨，在我身后紧紧跟随。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/11.jpg" data-original=""></div>
						<p>在转身离开的时候,那么空荡荡的,感受地到阵阵寒风来袭。你不会懂,那些阳光里细微的疼痛,流年染指了悲伤,划破了那年唯美脸庞。时光晕染开寂寞、带走了曾经纯真的笑容。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/12.jpg" data-original=""></div>
						<p>任何美丽而痛苦的回忆，都已成为昨日的乐章.寄情于那曾一度辉煌过的亲切记忆，辗转沉溺于早已虚幻如梦的往日悲欢，便不会看到威力的爱情芳草重生，即使日，月，星辰都从你身边溜走，至少你还拥有一片天空。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/13.jpg" data-original=""></div>
						<p>每一次放弃都必须是一次升华，否则就不要放弃；每一次选择都必须是一次升华，否则不要选择。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/14.jpg" data-original=""></div>
						<p>寂寞是与生俱来的，当繁华散去，当容颜老去，伴随我们的也只剩下寂寞了吧！只是我们习惯了寂寞，就像我们习惯了呼吸，并不会因为一时的遗忘而停止！寂寞和欢乐是在人生路上交叠出现的两个站台，寂寞并不是弃绝红尘，哀叹人情的冷暖，也不是消沉.而欢乐也不是贪慕名利，跟随世俗的车轮随波逐流。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="images/15.jpg" data-original=""></div>
						<p>那些美丽的小鱼，它们睡觉的时候也睁着眼睛。不需要爱情，亦从不哭泣。它们是我的榜样。</p>
						<p class="author"><span>BY</span><a href="">YYL</a></p>
					</div>
				</div>
			</div>
			<footer>©2014 YYL</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/validate.js"></script>
		<script src="js/blocksit.min.js"></script>
		<script src="js/waterfall.js"></script>
	</body>
</html>