<?php
$current_menu = 'home';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
        require_once 'template/_meta.php';
		?>
		<style>
			@media only screen and (min-width: 992px) {
				.sidebar.h-sidebar {
					margin-top: 0px !important;
				}
			}
		</style>
	</head>
	<body class="no-skin">
		<?php
        require_once 'template/_header.php';
		?>
		<?php
        require_once 'template/_menu.php';
		?>
		<div class="main-content">
			<div class="main-content-inner">
				<div class="page-content">
					<?php
                    require_once 'template/_setting_box.php';
					?>
					<!-- /.breadcrumb
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch(e) {
							}
						</script>

						<ul class="breadcrumb">
							<li class="active">
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="front">หน้าแรก</a>
							</li>
						</ul>
					</div>
					-->
					<div class="space space-4"></div>
					<div class="page-header">
						<h1> ยินดีต้อนรับ </h1>
					</div><!-- /.page-header -->
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<?php
                            switch(@$_GET['mode']) {
                                default :
                                    require_once 'modules/front/index.php';
                                    break;
                            }
							?>
							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<?php
        require_once 'template/_footer.php';
		?>
	</body>
</html>
