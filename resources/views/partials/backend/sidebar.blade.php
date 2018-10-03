<div class="page-sidebar toggled sidebar">
	<nav class="sidebar-collapse d-none d-lg-block">
		<i class="ion ion-ios-arrow-forward show-on-collapsed"></i>
		<i class="ion ion-ios-arrow-back hide-on-collapsed"></i>
	</nav>

	<ul class="nav nav-pills nav-stacked" id="sidebar-stacked">
		<li class="d-lg-none">
			<a href="#" class="sidebar-close"><i class="ion ion-ios-arrow-left"></i></a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="{{ url('home')}}"><i class="ion ion-ios-home"></i> <span class="nav-text">Dashboard</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-container dropdown-toggle" data-toggle="collapse" data-parent="#sidebar-stacked" href="#p5">
				<i class="ion ion-ios-list"></i> <span class="nav-text">Tables</span>
			</a>
			<ul class="nav nav-pills nav-stacked collapse" id="p5">
				<li class="nav-item"><a class="nav-link" href="{{ route('kategori.index')}}">Kategori</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('barang.index')}}">Barang</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('galeri.index')}}">Galeri</a></li>
			</ul>
		</li>
	</ul>
</div>