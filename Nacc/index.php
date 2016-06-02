<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
        	    require_once 'template/_meta.php';
		?>
		<style>
		@media (min-width:960px) {
		    .main-container{
                  position: fixed !important;
                  top: 40%!important;
                  left: 50%!important;
                  /* bring your own prefixes */
                  transform: translate(-50%, -50%)!important;
		    }
		}
			.login_header {
				color: #FFFFFF;
				font-size: 20px;
			}
			.login_header_sub {
                color: #FFFFFF;
                font-size: 18px;
            }
		</style>
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="center">
						        <div><img src="assets/images/logo.png" height="100" class=""></div>
							    <div class="login_header" style="font-size:23px!important;" >สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ</div>
							    <div class="login_header_sub">
										ระบบกำกับดูแลการจัดซื้อจัดจ้างภาครัฐ  Government Procurement System<br>
										***สำหรับเจ้าหน้าที่สำนักงาน ป.ป.ช.***
									</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="login-container" style="">
							<div class="space-6"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger"><i class="ace-icon fa fa-lock "></i> เข้าสู่ระบบ </h4>
											<div class="space-6"></div>

											<form action="front.php">
												<fieldset>
													<label class="block clearfix"> <span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i> </span> </label>

													<label class="block clearfix"> <span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i> </span> </label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span> </label>
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">เข้าสู่ระบบ</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<!--
											<div>
											<a href="#" data-target="#forgot-box" class="forgot-password-link"> <i class="ace-icon fa fa-arrow-left"></i> I forgot my password </a>
											</div>
											-->
											<!--
											<div>
											<a href="#" data-target="#signup-box" class="user-signup-link"> I want to register <i class="ace-icon fa fa-arrow-right"></i> </a>
											</div>
											-->
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery.1.11.1.min.js"></script>
		<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>" + "<" + "/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if ('ontouchstart' in document.documentElement)
				document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
		</script>
		<script src="assets/js/jquery.fittext.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible');
					//hide others
					$(target).addClass('visible');
					//show target
				});
			});

			$('body').attr('class', 'login-layout blur-login');
			$('#id-text2').attr('class', 'white');
			$('#id-company-text').attr('class', 'light-blue');

			//you don't need this, just used for changing background
			jQuery(function($) {
				$('#btn-login-dark').on('click', function(e) {
					$('body').attr('class', 'login-layout');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-light').on('click', function(e) {
					$('body').attr('class', 'login-layout light-login');
					$('#id-text2').attr('class', 'grey');
					$('#id-company-text').attr('class', 'blue');

					e.preventDefault();
				});
				$('#btn-login-blur').on('click', function(e) {
					$('body').attr('class', 'login-layout blur-login');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'light-blue');

					e.preventDefault();
				});


			});


		</script>
	</body>
</html>
