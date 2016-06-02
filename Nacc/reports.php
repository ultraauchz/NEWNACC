<?php
$current_menu = 'report';
$report = (@$_GET['mode'])?@$_GET['mode']:'report_1';

switch ($report) {
    case 'report_2':
        $title_report = "รายงานสรุปจำนวนโครงการที่มีและไม่มีการประกาศราคากลาง";
        break;

    case 'report_3':
        $title_report = "รายงานรายชื่อคู่สัญญาโครงการตามช่วงของมูลค่าสัญญา";
        break;

    case 'report_4':
        $title_report = "รายงานสรุปการยื่นข้อมูลบัญชีรายรับรายจ่าย";
        break;

    default:
        $title_report = "รายงานสรุปโครงการและงบประมาณที่ได้รับจัดสรร";
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
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch(e) {
							}
						</script>

						<ul class="breadcrumb">
							<li class="">
								<i class="ace-icon fa fa-newspaper-o"></i>
								รายงาน
							</li>
							<li class="active">
								<?php echo $title_report; ?>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>
					<div class="space space-4"></div>
					<div class="page-header">
						<h1><?php echo $title_report; ?></h1>
					</div><!-- /.page-header -->
					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<?php require_once 'modules/reports/'.$report.'.php'; ?>
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
