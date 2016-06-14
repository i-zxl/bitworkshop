<!DOCTYPE html>
<html lang="zh">
<head>
	<!-- 该网站设计于2014/12 -->
	<?php $url = base_url()."asset/" ?>
	<meta charset="UTF-8">
	<meta name="Bitworkshop" content="一个学生团队">
	<meta name="description" content="比特工场，一个极具亲和力、充满激情的校园互联网的学生团队，全称中南民族大学计算机软件工作室。隶属中南民族大学党委学生工作部（处）旗下学生资讯集团。致力于用互联网提高大学生生活水平，改变校园生活。">
	<meta name="keywords" content="比特官方网站">
	<title>比特官网</title>
	<!--插件样式-->
	<link rel="stylesheet" href="<?php echo $url; ?>style/jquery.fullPage.css" />
	<link rel="stylesheet" href="<?php echo $url; ?>style/fotorama.css" />
	<link rel="stylesheet" href="<?php echo $url; ?>style/index.css" />
	<script>var url = "<?php echo base_url(); ?>";</script>
</head>
<body>
	<!--Fullpage插件需要的格式-->
	<div id="fullpage">
		<div class="section welcome">
			<div class="welcome-contain">
				<nav class="nav">
					<?php #var_dump(base_url()); ?>
					<img class="lazy" data-original="<?php base_url(); ?>asset/image/logo.png" alt="LOGO">
					<ul>
						<li><a href="#first">首页</a></li>
						<li><a href="#second">简介</a></li>
						<li><a href="#third">理念</a></li>
						<li><a href="#forth">组别</a></li>
						<li><a href="#fifth">作品 </a></li>
						<li><a href="#sixth">留言/加入</a></li>
					</ul>
				</nav>
				<div class="welcome-content">
					<p class="welcome-title">团队精神</p>
					<p class="welcome-words">一群人可以做出单独一个人所不能做出的事情,这是团队</p>
					<div class="to-next">
						<a href="#second">
							<div class="next-img">
								<div class="next-image">
									<!-- Nothing -->
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--比特简介部分-->
		<div class="section introduce">
			<!--包裹内容的盒子-->
			<div class="introduce-box">
				<div class="introduce-contain">
					<img class="lazy" data-original="asset/image/introduce/banner.png" alt="简介图">
					<div class="introduce-words">
						<h1>ABOUT</h1>
						<p>比特工场，一个极具亲和力、充满激情的校园互联网的学生团队，全称中南民族大学计算机软件工作室。隶属中南民族大学党委学生工作部（处）旗下学生资讯集团。致力于用互联网提高大学生生活水平，改变校园生活。</p>
					</div>
				</div>
				<img class="deck-top" src="asset/image/introduce/decoration-top.png" alt="装饰">
				<img class="deck-bottom" src="asset/image/introduce/decoration-bottom.png" alt="装饰">
			</div>
		</div>
		<!--比特理念部分-->
		<div class="section idea">
			<div class="idea-contain">
				<div class="idea-content">
					<div class="service">
						<div class="idea-logo">
							<span>服务</span>
						</div>
						<p>团队以为用户创造价值、为学生服务为第一原则，以优质的用户体验作为衡量服务质量的重要指标。</p>
					</div>
					<div class="create">
						<div class="idea-logo">
							<span>创新</span>
						</div>
						<p>在以第三宇宙速度运行的互联网世界里，团队以怀疑的理念激发创新， 通过概念、过滤、图纸、用户、沟通、分析的过程， 不断尝试着开发又一次成功的互联网产品。</p>
					</div>
					<div class="grow-up">
						<div class="idea-logo">
							<span>成长</span>
						</div>
						<p>困境是团队的第一关，你需要不断发现自己的临界量，不断激发自己的潜能， 每个团队成员都在这样的反复中成长、辛酸、感动。</p>
					</div>
					<div class="happy">
						<div class="idea-logo">
							<span>快乐</span>
						</div>
						<p>必须快乐地青春，如果那注定是菜园子，快乐就是最大的施肥人。 团队的工作、出游、聚会、拓展串联起来的，是我们安放大学四年的一座菜园子。</p>
					</div>
				</div>
				<div class="idea-image">
					<img class="lazy" data-original="asset/image/idea-clothes.jpg" alt="比特合影">
					<img class="idea-image-last" src="asset/image/idea-group.jpg" alt="比特合影">
				</div>
			</div>
		</div>
		<!--比特组别部分-->
		<div class="section group">
			<div class="group-contain">
				<h1 class="main-title">在比特，我们有这样的小组</h1>
				<h1 class="low-title">不管你是否喜欢，能结识那些有趣的人才是最重要的</h1>
				<div class="group-content">
					<div class="group-product">
						<div class="rotate product-content">
							<div id="product">
								<div>
									<div>
										<h2>运营组</h2>
										<p>我们是用户和设计师、攻城师之间沟通的桥梁，我们以开发出能满足用户需求的应用服务为目标，并且在开发出产品的过程中致力于产品功能、UI设计和创新想法的整体把握</p>
									</div>
								</div>
 							</div>
						</div>
					</div>
					<div class="group-design">
						<div class="rotate design-content">
							<div id="design">
								<div>
									<div>
										<h2>设计组</h2>
										<p>我们并非美工而是设计师，我们主要进行网页、APP及Web APP的界面和交互设计，在这里，你可以发挥你无限的艺术天赋，将你的设计品的完美的呈现出来</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="group-program">
						<div class="rotate program-content">
							<div id="program">
								<div>
									<div>
										<h2>程序组</h2>
										<p>浏览器和android就是我们的世界，我们可以尽情的创造。主要方向：网站开发、功能性APP开发、Web App开发。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="group-photo">
				<div class="group-photo-contain">
					<div class="fotorama photo-product" data-nav="thumbs" data-width="85%" data-height="90%" data-allowfullscreen="true" data-backgroundColor="black" data-loop="true">
						<img class="lazy" data-original="asset/image/group/product-1.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-2.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-3.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-4.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-5.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-6.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-7.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-8.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/product-9.jpg" alt="比特图片">
					</div>l
					<div class="fotorama photo-design" data-nav="thumbs" data-width="85%" data-height="90%" data-allowfullscreen="true" data-backgroundColor="black" data-loop="true">
						<img class="lazy" data-original="asset/image/group/design-1.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/design-2.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/design-3.jpg" alt="比特图片">
					</div>
					<div class="fotorama photo-program" data-nav="thumbs" data-width="85%" data-height="90%" data-allowfullscreen="true" data-backgroundColor="black" data-loop="true">
						<img class="lazy" data-original="asset/image/group/program-1.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/program-2.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/program-3.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/program-4.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/program-5.jpg" alt="比特图片">
						<img class="lazy" data-original="asset/image/group/program-6.jpg" alt="比特图片">
					</div>
				</div>
				<div class="photo-close">
					<span>X</span>
				</div>
			</div>
		</div>
		<!--比特产品介绍-->
		<div class="section product">
			<div class="slide">
				<div class="product-contain">
					<p>作品介绍</p>
					<a href="http://stuzone.com/" target="_blank">
						<img class="lazy" data-original="asset/image/product/ground.jpg" alt="学生地带">
						<span>学生地带是由中南民族大学学生工作部(处)主办,学生资讯集团负责研发运营,以提升大学生活品质为核心定位的学生门户网站。</span>
					</a>
				</div>
			</div>
			<div class="slide">
				<div class="product-contain">
					<a href="http://guwen.stuzone.com/" target="_blank">
						<img class="lazy" data-original="asset/image/product/ask.jpg" alt="故问">
						<span>故问是由比特工场自主研发的校园问答平台，邀请知名校友及学校老师进驻，致力于成为大学生身边的生活顾问。</span>
					</a>
				</div>
			</div>
			<div class="slide">
				<div class="product-contain">
					<a href="http://stuzone.com/zone_video/" target="_blank">
						<img class="lazy"data-original="asset/image/product/camera.jpg" alt="月芽影象">
						<span>月芽网是中南民族大学原创视频门户网站，分为原创版块、记录板块、专题版块、互动版块四大板块。</span>
					</a>
				</div>
			</div>
			<div class="slide">
				<div class="product-contain">
					<a href="http://www.stuzone.com/zone_download/" target="_blank">
						<img class="lazy" data-original="asset/image/product/download.jpg" alt="下载">
						<span>下载专区是一个有着丰富的软件资源、校园应用资源的共享平台。</span>
					</a>
				</div>
			</div>
			<div class="slide">
				<div class="product-contain">
					<a href="http://www.stuzone.com/zixunminda/blog/" target="_blank">
						<img class="lazy" data-original="asset/image/product/message.jpg" alt="咨讯民大">
						<span>
							资讯民大是中南民族大学学生工作部（处）官方微信公众平台，课表、成绩、借阅、校园资讯等大学生刚性需求一网打尽。
						</span>
					</a>
				</div>
			</div>
			<div class="slide">
				<div class="product-contain">
					<a href="http://xunwu.stuzone.com/" target="_blank">
						<img class="lazy" data-original="asset/image/product/found.jpg" alt="寻物"><!--这张照片需要补上-->
						<span>寻物是由比特工场自主研发的一款PC端与移动端相结合的大学生校园失物招领的平台。</span>
					</a>
				</div>
			</div>
		</div>
		<!-- 加入我们 -->
		<div class="section join">
			<div class="join-box" id="join-box">
				<div class="join-contain">
					<div class="join-sign">
						<h1>加入我们</h1>
						<p>与我们分享你的知识，经验和见解</p>
					</div>
					<form id="join-us" class="join-us" method="post">
						<input id="firstName" class="join-firstName" type="text" placeholder="姓">
						<input id="lastName" class="join-lastName" type="text" placeholder="名">
						<input id="join-pro" class="join-all" type="text" placeholder="专业">
						<input id="join-pho" class="join-all" type="text" placeholder="电话">
						<div class="choose-form">
							<span>报名组别</span>
							<div>
								<input type="radio" name="yunying"><span>运营组</span>
								<input type="radio" name="sheji"><span>设计组</span>
								<br>
								<input type="radio" name="chengxu"><span>程序组</span>
							</div>
							<input type="submit" value="提交">
						</div>
					</form>
				</div>
			</div>
			<div class="join-message-box" id="join-message-box">
				<div class="join-message-contain">
					<div class="join-message">
						<div>
							<img class="lazy" data-original="asset/image/join/QQ.png" alt="QQ">
							<span>用户交流QQ群：84061677</span>
						</div>
						<div class="wechat">
							<img class="lazy" data-original="asset/image/join/wechat-box.jpg" alt="微信">
							<span>微信订阅号：iscuecer</span>
						</div>
						<div>
							<a href="http://weibo.com/stuzone" target="_blank">
								<img class="lazy" data-original="asset/image/join/weibo.png" alt="微博">
								<span>新浪微博：中南民族大学学生地带</span>
							</a>
						</div>
						<p class="join-tip">中国湖北省武汉市洪山区</p>
						<p class="join-footer">民族大道182号中南民族大学大学生活动中心105室</p>
						<div id="wechat-box">
							<div class="wechat-mark">
								<p>扫描二维码或搜索微信订阅号：iscuecer</p>
								<img class="lazy" data-original="asset/image/join/wechat.jpg" alt="微信二维码">
								<span>确认</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 我要留言 -->
		<div class="section message">
			<div class="message-box">
				<div class="message-contain">
					<p class="login_in"><a href="<?php base_url() ?>index.php/c_index/login_in">管理员登录</a></p>
					<div class="message-contain-box">
						<div class="message-table">
							<div class="message-banner">
								<div>
									<span>我要<br>留言</span>
								</div>
							</div>
							<div class="message-content">
								<span>如果您需要及时与我们联系, 请加入QQ群咨询：84061677</span>
								<form id="message_form" method="POST" action="index.php/c_index/index_add">
									<input type="text" name="u_name" id="u_name" placeholder="您的昵称" />
									<input type="text" name="u_Professional" id="u_Professional" placeholder="您的专业" />
									<input type="email" name="u_email" id="u_email" placeholder="您的邮箱"/>
									<textarea placeholder="留言内容" name="u_message" id="u_message" rows="7" cols="5" warp="virtual"></textarea>
									<input class="message-button" type="submit" value="提交"/>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="footer">
					<ul class="footer-link">
						<li class="footer-first"><a href="http://www.stuzone.com/" target="_blank">学生地带</a></li>
						<li><a href="http://www.stuzone.com/zone_video/" target="_blank">月芽网</a></li>
						<li><a href="http://guwen.stuzone.com/" target="_blank">故问</a></li>
						<li><a href="http://www.stuzone.com/zone_vision/" target="_blank">视觉</a></li>
						<li><a href="http://www.stuzone.com/zone_deep/" target="_blank">深度</a></li>
						<li><a href="http://xunwu.stuzone.com/" target="_blank">寻物</a></li>
						<li><a href="http://www.stuzone.com/zone_cosa/" target="_blank">杂志</a></li>
					</ul>
					<div class="copyright">
						<span>版权所有 鄂ICP备05003346号 Powered By比特工场</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
<!--脚本-->
<script src="<?php  echo $url;?>/script/jquery-1.11.2.min.js"></script>
<script src="<?php  echo $url;?>/script/jquery.easings.min.js"></script>
<script src="<?php  echo $url;?>/script/jquery.placeholder.js"></script>
<script src="<?php  echo $url;?>/script/jquery.slimscroll.min.js"></script>
<script src="<?php  echo $url;?>/script/jquery.fullPage.min.js"></script>
<script src="<?php  echo $url;?>/script/fotorama.js"></script>
<script src="<?php  echo $url;?>/script/loadLazy.js"></script>
<script src="<?php echo $url; ?>script/happy.js"></script>
<!--[if lt IE 9]
	<script src="<?php echo $url; ?>script/html5shiv.min.js"></script>
<![endif]--><!--解决html5标签在IE浏览器的兼容问题-->
<script src="<?php echo $url; ?>script/index.js"></script>
<script>
	window.onload = function(){
		var Height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;
		var joinHeight = document.getElementById("join-box").offsetHeight;
		var joinMessage = Height - joinHeight;
		document.getElementById('join-message-box').style.height = joinMessage + 'px';
	}
</script>
<script>
	var flip = function(string){
		return string.toString().replace(/^[^\/]+\/\*!?\s?/, '').replace(/\*\/[^\/]+$/, '');
	}
	var consoleWords = flip(function(){/*
	是否对你来说，结识一些有趣的人是最重要的？
	是否对你来说，快乐的成长是最重要的？
	是否对你来说，让大学四年变得有意义是最重要的？
	加入我们，加入大学生互联网团队，你可以获得充实，收获果实！
	如果您需要及时与我们联系, 请加入QQ群咨询：84061677
	*/});
	$(function(){
        $('input, textarea').placeholder();
    });
    console.log(consoleWords);
</script>
</body>
</html>