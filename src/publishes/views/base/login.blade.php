@include('admin.base.partials.plugins')

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="icon" type="image/png" href="/admin_assets/images/icon.png">

        @yield('head')
        @yield('css')
    </head>
    <body class="pace-top bg-white">
        <div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(/admin_assets/images/login_bg.jpg)"></div>
				<div class="news-caption">
					{{-- <h4 class="caption-title"><b>Color</b> Admin App</h4>
					<p>
						Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p> --}}
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand text-center">
						<img src="/admin_assets/images/logo.png" alt="Tejuino">
					</div>
					<div class="icon">
						<i class="fa fa-sign-in"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="/login" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<div class="input-group">
                                <span class="input-group-addon"><i class="icon-user" style="line-height: 32px;"></i></span>
                                <input name="email" type="text" class="form-control form-control-lg" placeholder="Usuario o email" required />
                            </div>
						</div>
						<div class="form-group m-b-15">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-key" style="line-height: 32px;"></i></span>
                                <input name="password" type="password" class="form-control form-control-lg" placeholder="Password" required />
                            </div>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							{{-- Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register. --}}
						</div>
						<hr />
						<p class="text-center text-grey-darker">
							&copy; Tejuino All Right Reserved {{ now()->year }}
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
	</div>

        @yield('js')
        <script>
            $(document).ready(function () {
                $('#openAbout').on({
                    click: function(e){
                        e.preventDefault();
                        $.gritter.add({
                			title: 'Tejuino Admin Platform V 2.0',
                			text: 'Administrador de contenidos',
                			image: '/admin_assets/images/tejuino.png',
                			sticky: false,
                			time: '20000',
                            before_open: function() {
                				if($('.gritter-item-wrapper').length === 1) {
                					return false;
                				}
                			}
                		});
                    }
                });
            });
        </script>
    </body>
</html>
