<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('asset/style.css')}}">

	<title>@yield('title')</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">BLOG SYSTEM</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">DASHBOARD</span>
				</a>
			</li>



            <li class="active">
				<a href="#">
					<i class='bx bxs-users'></i>
					<span class="text">USERS</span>
				</a>
			</li>

            <li class="active">
				<a href="#">
					<i class='bx bxs-categories'></i>
					<span class="text">CATEGORIES</span>
				</a>
			</li>

            <li class="active">
				<a href="#">
					<i class='bx bxs-blogPost' ></i>
					<span class="text">POSTS</span>
				</a>
			</li>

            <li class="active">
				<a href="#">
					<i class='bx bxs-blogPost' ></i>
					<span class="text">LOG OUT</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="">
			</a>
		</nav>
		<!-- NAVBAR -->

        @yield('content')

	</section>
	<!-- CONTENT -->


	<script src="{{asset('asset/script.js')}}"></script>
</body>
</html>
