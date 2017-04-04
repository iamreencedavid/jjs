<section class="hero is-primary is-medium">
	<!-- Hero header: will stick at the top -->
	<div class="hero-head">
		<header class="nav">
			<div class="container">
				<div class="nav-left">
					<a class="nav-item">
						<img src="images/bulma-type-white.png" alt="Logo">
					</a>
				</div>
				<span class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<div class="nav-right nav-menu">
					<a href="{{ URL::to('/') }}" class="nav-item is-active">
						Back to Site
					</a>
					<a class="nav-item">
						Logout
					</a>
				</div>
			</div>
		</header>
	</div>

	<!-- Hero content: will be in the middle -->
	<div class="hero-body" style="padding:20px 0">
		<div class="container has-text-centered">
			<h1 class="title">
				Welcome to JJS Admin Panel!
			</h1>
		</div>
	</div>

	<!-- Hero footer: will stick at the bottom -->
	<div class="hero-foot">
		<nav class="tabs is-boxed">
			<div class="container">
				<ul>
				<li class="is-active"><a>Jobs</a></li>
					<li><a>News</a></li>
					<li><a>Users</a></li>
					<li><a>Settings</a></li>
				</ul>
			</div>
		</nav>
	</div>
</section>	