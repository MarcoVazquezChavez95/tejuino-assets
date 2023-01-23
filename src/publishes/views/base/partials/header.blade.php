@section('header')

	<div class="navbar-header">
		<a href="/admin" class="navbar-brand" style="background-image:url(/admin_assets/images/logo.png)"></a>
		<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<ul class="navbar-nav navbar-left">
		<li>
			<form class="navbar-form" id="navBarButtons">
				@yield('navbar')
			</form>
		</li>
	</ul>

	<ul class="navbar-nav navbar-right">
		<li>
			<form class="navbar-form">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Buscar..." />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</li>
		<li class="dropdown">
			<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
				<i class="fa fa-bell"></i>
				<span class="label bg-danger pulse">5</span>
			</a>
			<ul class="dropdown-menu media-list dropdown-menu-right">
				<li class="dropdown-header">NOTIFICATIONS (5)</li>
				<li class="media">
					<a href="javascript:;">
						<div class="media-left">
							<i class="fa fa-bug media-object bg-silver-darker"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
							<div class="text-muted f-s-11">3 minutes ago</div>
						</div>
					</a>
				</li>
				<li class="dropdown-footer text-center">
					<a href="javascript:;">View more</a>
				</li>
			</ul>
		</li>
		<li class="dropdown navbar-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ auth()->user()->image }}" alt="" />
				<span class="d-none d-md-inline">{{ auth()->user()->name }}</span> <b class="caret"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="/admin/profile" class="dropdown-item">Editar perfil</a>
				<a href="/admin/inbox" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
				<a href="/admin/settings" class="dropdown-item">Configuraciones</a>
				<div class="dropdown-divider"></div>
				<a href="/logout" class="dropdown-item">
					<i class="icon-power text-danger"></i> Cerrar sesión
				</a>
			</div>
		</li>
	</ul>
@endsection
