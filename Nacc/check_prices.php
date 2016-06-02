<?php
$current_page = 'check_prices';
$current_menu = 'standard_prices';
switch(@$_GET['mode']) {
    case 'view' :
        $action = 'รายละเอียดรายการ';
        break;
    case 'edit' :
        $action = 'แก้ไขรายการ';
        break;
    case 'new' :
        $action = 'เพิ่มรายการ';
        break;
    default :
        $action = '';
        break;
}
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
<!-- /.breadcrumb
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch(e) {
							}
						</script>

						<ul class="breadcrumb">
							<li class="">
								<i class="ace-icon fa fa-university university-icon"></i>
								ราคากลาง
							</li>
							<li class="active">
								ตรวจสอบข้อมูลราคากลาง
							</li>
						</ul>
					</div>
 -->
					<div class="space space-4"></div>
					<div class="page-header">
						<h1> <i class="menu-icon fa fa-list"></i> ราคากลาง <i class="ace-icon fa fa-angle-right"></i> ตรวจสอบข้อมูลราคากลาง
						    <?php if(@$action!=''):?>
						    <small> <i class="ace-icon fa fa-angle-double-right"></i> <?php echo $action; ?></small>
						    <?php endif;?>
						</h1>
					</div><!-- /.page-header -->
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<?php
                            switch(@$_GET['mode']) {
                                case 'edit' :
                                    require_once 'modules/'.$current_page.'/form.php';
                                    break;
                                case 'new' :
                                    require_once 'modules/'.$current_page.'/form.php';
                                    break;
                                default :
                                    require_once 'modules/'.$current_page.'/index.php';
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
		<div class="clearfix"></div>
		<?php
        require_once 'template/_footer.php';
		?>
	</body>
</html>
