<!DOCTYPE html>
<<<<<<< HEAD
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
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BizNest</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}


            body {
                background: linear-gradient(135deg, #15202B 40%, #09a509 100%);
                color: white;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;

            }

            .container {
                display: flex;
                align-items: center;
                position: relative;
                max-width: 1200px; /* Added max-width */
                width: 100%; /* Added width */
                margin: 0 auto; /* Centering the container */
            }

            .left-column {
                flex: 1;
                padding: 20px;
                margin-right: 20px;
            }

            .right-column {
                flex: 1; /* Changed to 1 */
                padding: 20px;
            }

            .logo {
                display: block;

            }

            .business-info {
                color: rgb(255, 255, 255);
                font-weight: bold;
                margin-bottom: 20px;
                text-align: center;
                font-size: 20px;
            }

            .partnership {
                font-weight: bold;
                margin-bottom: 20px;
                text-align: center;
                font-size: 40px;
                margin-bottom: 20px;
            }

            .vertical-line {
                width: 2px;
                background-color: green;
                height: 100% !important;
                position: absolute;
                top: 0;
                bottom: 0;
                left: calc(50% - 1px); /* Changed to 50% */
                margin-left: -1px; /* Added to adjust position */
            }

            .partnership-desc {
                margin-bottom: 20px;
                text-align: center;
                margin-top: 20px;

            }

            .card {
                padding: 30px; /* Increased padding */

                width: 100%; /* Added width */
                height: 100%;
                background: rgba(255, 255, 255, 0.2);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.3);
                border: 1px solid rgba(255, 255, 255, .25);
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
            }

            .card-title {
                color: white;
                font-weight: lighter;
                font-size: 1.5rem;
                margin-bottom: 1rem;

            }

            .btn-custom {
                font-size: 1rem;
                letter-spacing: 0.05rem;
                padding: 0.75rem 1rem;
                color: white !important;
                background-color:rgb(1, 73, 1);
                border: none;
                border-radius: 25px;
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
                display: block;
                transition: background-color 0.3s ease;
            }

            .btn-custom:hover {
                background-color: darkgreen;
            }

            @media screen and (max-width: 768px) {
                .container {
                    flex-direction: column;
                    align-items: center;
                }

                .vertical-line {
                    display: none;
                }

                .left-column, .right-column {
                    width: 100%;

                }
            }
    </style>
</head>
    <body class="antialiased">
        <div class="container">
            <div class="left-column">
                <img src="/images/logo.png" alt="Logo" class="logo">
                <div class="business-info">Local Business Directory</div>
                <div class="partnership">Partnership for business growth</div>
                <div class="partnership-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            <div class="vertical-line"></div>
            <div class="right-column ">
                <div class="card">
                    <h5 class="card-title text-center mb-4">{{ __('Welcome Back Exclusive Partner') }}</h5>
                    <div class="d-grid mb-2 button-container">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-custom btn-lg fw-bold text-uppercase">{{ __('Home') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-custom btn-lg fw-bold text-uppercase">{{ __('Log in') }}</a>
                        @endauth
                    </div>
                    @if (Route::has('register'))
                        <div class="d-grid">
                            <a href="{{ route('register') }}" class="btn btn-custom btn-lg fw-bold text-uppercase">{{ __('Register') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
>>>>>>> main
