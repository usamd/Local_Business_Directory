<!DOCTYPE html>
<html>
<head>
	<title>Landing page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="LandPage.css">
</head>
<body>
	<div class="main">

		<div class="navbar">
			<div class="icon">
				<img class="logo" src="assest/Biznest 1.png" alt="logo">
			</div>

			<div class="menu">
				<ul>
					<li><a href="">Categories</a></li>
					<li><a href="">Home</a></li>
					<li><a href="">Trending</a></li>
					<li><a href="">About Us</a></li>
				</ul>
			</div>

			<div class="button">
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signup" href="">Sign Up</button></a>
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="signin" href="">Sign In</button></a>
			</div>
		</div>
	<div>
		<img class="pic1" src="assest/IMG-20240607-WA0014 .jpg" alt="">
	</div>

	<div class="h1">
		<h1 align="center">Search Your Need</h1>
	</div>

	<div class="srch">
		<form action="search" method="get">
			<input type="text" value="Job title, Keyword" name="search">
			<select name="category">
				<option value="all">Location</option>
				<option value="op1">Polonnaruwa</option>
				<option value="op2">Ratnapura</option>
				<option value="op3">Kandy</option>
				<option value="op4">Jaffna</option>
				<option value="op5">Colombo</option>
			</select>
			<button type="submit" href="">Search</button>
		</form>
	</div>

	<div class="pic">
		<ul>
			<li><img src="assest/1.png"><p1>Job</p1><p>17098</p></li>
			<li><img src="assest/2.png"><p1>User</p1><p>112096</p></li>
			<li><img src="assest/3.png"><p1>Location</p1><p>3309</p></li>
		</ul>
	</div>

	<div class="bank">
		<ul>
			<li><img src="assest/a.png"></li>
			<li><img src="assest/b.png"></li>
			<li><img src="assest/c.png"></li>
			<li><img src="assest/d.png"></li>
			<li><img src="assest/e.png"></li>
			<li><img src="assest/f.png"></li>
		</ul>
	</div>
	<div class="h2">
		Featured Post
	</div>
	<div class="h3">
		Know your worth and find the job that qualify your life
	</div>

	<div class="job1">
		<img class="assest/j1" src="j1.jpg">
	</div>
	<div class="job2">
		<img class="assest/j2" src="j2.jpg">
	</div>

	<div class="brws">
		<button type="submit" href="">Browse All</button>
	</div>
	<div class="para1">
		Loreum epusm flow in dwty nor acrc
	</div>
	<div class="list">
		<ul>
			<li><img class="pic2" src="assest/IMG-20240607-WA0015.jpg"></li>
			<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac quis urna, enim, ut. Et nec justo aliquet vitae cum in. Tincidunt commodo ac nulla sit malesuada in vulputate. Volutpat ullamcorper pulvinar suspendisse mauris ipsum consequat suspendisse ullamcorper. Sed nibh ultrices in justo sed. Elit tortor, suscipit nullam aliquet. Vel malesuada morbi donec mattis eu lacus, odio at. Ut nibh massa ornare eleifend vestibulum.</p><p>Ac erat hendrerit diam risus vitae facilisis a ultricies. Massa eget vulputate maecenas imperdiet dictum malesuada.</p><p>purus enim facilisis cursus cursus est, vitae arcu.</p></li>
		</ul>
	</div>

	<div class="expl">
		<button type="submit" href="">Explore Now</button>
	</div>

	<div class="container">
	<div class="rev">Customer Reviews</div>
	</div>

	<section class="testimonials">
		<div class="content">
			<div class="testimonials-content">
				<div class="swiper testimonials-slider js-testimonials-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide testimonials-item">
							<div class="info">
								<img src="assest/c1.jpg">
								<div class="textbox">
									<h3 class="name">John doe</h3>
									<span class="job">Web developer</span>
								</div>
							</div>
							<p>aaaaa a aaa aaa aaaa  aa  aaaaaaaaaaaaaaa a  aaaaaaaa a aaaaaa aaaaaaa aaaaaaaaaaaaa aaaaaa aaaaaaaaa aaaaa aaa aaaaa aaaaaaaa a aaaaaaaaaaaa aaaaa aaaaaaaaa  aaaaaaaaaaa aaaaaa aaaaaaaaaa aaaaa.</p>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<div class="swiper-slide testimonials-item">
							<div class="info">
								<img src="assest/c2.jpg">
								<div class="textbox">
									<h3 class="name">John doe</h3>
									<span class="job">Web developer</span>
								</div>
							</div>
							<p>bbb bbb bbbbbbbbbbbbbbb bbb bbbbbbbbbb bbbbbbb bbbbb bbbbbbbbb bbbb b bbbbbbbb  bbbbbbbbb bb bbbbbbbb bbbbbbbbbbb bbbbbbbbb bbbbbb bb bbbbbbbb bbbbbbbbbbbbb bbbbbbbbbbbbbbbb bbbbbb</p>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<div class="swiper-slide testimonials-item">
							<div class="info">
								<img src="assest/c3.jpg">
								<div class="textbox">
									<h3 class="name">John doe</h3>
									<span class="job">Web developer</span>
								</div>
							</div>
							<p>c cccccccc cccc ccccccccccccc ccccccccccc cccccccccc ccccc ccccccc cccccccccccccc ccccccc cccccccc cccc cccc cccccc ccccccc c ccccccccc ccccc cccccccccc ccccc cccccc cccccc cccccccccccccc </p>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
						<div class="swiper-slide testimonials-item">
							<div class="info">
								<img src="assest/c4.jpg">
								<div class="textbox">
									<h3 class="name">John doe</h3>
									<span class="job">Web developer</span>
								</div>
							</div>
							<p>ddd d dddddddd ddddddddddddd ddddd d dddddddddd dddddddddddd dddddddddd ddddddddddddddd dddd dddd dddddd d dddddd dddddd ddddddddd dddddd dddddddddddd dddddddddd dddddddddddd dddddddddd.</p>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination js-testimonials-pagination"></div>
			</div>
		</div>
	</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper('js-testimonials-slider', {
		grabCursor: true,
		spaceBetween: 30,
		pagination:{
			el: '.js-testimonials-pagination',
			clickable: true
		},
		breakpoints:{
			767:{
				slidesPerView: 2
			}
		}
	});
</script>
<div class="detail">
	<h4>Your One-Stop Shop for Business Success</h4>

	<p>BIZNEST is your comprehensive business directory designed to empower entrepreneurs and established businesses alike. We connect you with the resources you need to thrive, all in one convenien location.</p>

	<h4>Find What You Need, When You Need It</h4>
	<ul>
		<li>Effortless Searching: Effortlessly search for anything related to your business needs. Whether you're seeking specific materials, tools, or services, BIZNEST puts the best options at your fingertips.</li>
		<li>Develop Your Business: Go beyond basic listings. BIZNEST helps you discover resources to propel your business forward. Find the right° artners, equipment, and expert advic to nurture your venture from concept to success.</li>
	</ul>

	<h4>BIZNET: More Than Just a Directory</h4>
	<h5>Think of BIZNEST as your launchpad for business growth. We provide the connections and information you need to:</h5>

	<ul>
		<li>Source Materials: Locate the best places to acquire essential supplies and equipment for your business.</li>
		<li> Make Informe Decisions: Gain valuable insights and connect with industry experts to make strategic choices for your business.¯</li>
		<li>Streamline Operations: Discover tools and services that can optimize your workflow and save you valuable time and resources.</li>
	</ul>

	<h6>BIZNES is your partner in building a successful and sustainable business</h6>
</div>

<div class="adve">
	<h6>Latest Advertiesments</h6>
</div>

</div>
</body>
