<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>ระบบกำกับการจัดซื้อจัดจ้างภาครัฐ สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/datepicker.min.css" />
<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="assets/css/chosen.min.css" />
<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->

<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->
<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
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
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="assets/js/dataTables.tableTools.min.js"></script>
<script src="assets/js/dataTables.colVis.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/bootstrap-datepicker-thai.js"></script>
<script src="assets/js/locales/bootstrap-datepicker.th.js"></script>
<!-- select2 scripts -->
<link rel="stylesheet" href="assets/css/select2.min.css" />
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/bootstrap-multiselect.min.js"></script>
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/Highcharts/js/highcharts.js"></script>
<script src="assets/js/Highcharts/js/modules/exporting.js"></script>

<!--
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
-->
<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	$(document).ready(function(){
$('[id^="student_"]').attr('class','hover');<?php if(@$current_menu!=''):?>
$('[id^="li_menu_<?php echo $current_menu; ?>"]').attr('class','hover active open');<?php endif; ?>
	$(".number").keydown(function(e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		// Allow: Ctrl+A, Command+A
		(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true ) ) ||
		// Allow: home, end, left, right, down, up
		(e.keyCode >= 35 && e.keyCode <= 40)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	//datepicker plugin
	//link
	$('.date-picker').datepicker()
	//show datepicker when clicking on the icon
	.next().on(ace.click_event, function() {
		$(this).prev().focus();
	});

	$(".select2").select2();
	$('.chosen-select').chosen({allow_single_deselect:true});

	$('#timepicker1').timepicker({
		minuteStep : 1,
		showSeconds : true,
		showMeridian : false
	}).next().on(ace.click_event, function() {
		$(this).prev().focus();
	});

	//////////////////
	$('.multiselect').multiselect({
		includeSelectAllOption : true,
		enableFiltering : true,
		maxHeight : '300',
		buttonClass : 'btn btn-white btn-primary',
		templates : {
			button : '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
			ul : '<ul class="multiselect-container dropdown-menu"></ul>',
			filter : '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
			filterClearBtn : '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
			li : '<li><a href="javascript:void(0);"><label></label></a></li>',
			divider : '<li class="multiselect-item divider"></li>',
			liGroup : '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
		},
		onChange : function(element, checked) {
			var brands = $('#min_code option:selected');
			var selected = [];
			var input = '';
			$(brands).each(function(index, brand) {
				input += '<input name="multiselect[]" class="form-control multiselect-search" type="text" value="' + $(this).val() + '">';
				//selected.push([$(this).val()]);
			});
			$("#list-multiselect").html(input);
			//console.log(selected);
		}
	});
	///// เพิ่ม css ให้ multiselect-all /////
	$(".multiselect-all a label input").addClass('ace');
	$(".multiselect-all a label input").after('<span class="lbl"></span>');
	///////////////////
	})
</script>
<style type="text/css">
	@font-face {
		font-family: THSarabunNew;
		src: url(assets/fonts/THSarabunNew/THSarabun.woff);
	}
	.thsarabun {
		font-family: THSarabunNew;
	}
	.no-skin .navbar .navbar-toggle {
		background-color: #8f43b7 !important;
	}
	.no-skin .nav-list > li:hover > a {
		color: #463FA7 !important;
	}
	.no-skin .nav-list > li > .submenu:before, .no-skin .nav-list > li > .submenu > li:before {
		border-color: #463FA7 !important;
	}
	.hover-show, .hover-shown > li:hover > a {
		border: #463FA7 !important;
	}
	.navbar-container {
		background-color: #463FA7 !important;
	}
	.navbar {
		background: #463FA7 !important;
	}
	.nav-list {
		border-bottom: 1px solid #463FA7 !important;
	}
	.no-skin .sidebar.h-sidebar .nav-list > li.active, .no-skin .sidebar.h-sidebar .nav-list > li.active+ li, .no-skin .sidebar.h-sidebar .nav-list > li:hover+ li.active {
		border-left-color: #463FA7 !important;
	}
	.no-skin .nav-list > li.active > a {
		color: #463FA7 !important;
	}
	.page-header h1 {
		color: #463FA7 !important;
		font-size:18px;
	}
	.page-header{
		padding-bottom:8px!important;
	}
	.right {
		text-align: right;
	}
	.footer .footer-inner .footer-content {
		line-height: 22px !important;
	}
	.chosen-single{
		border-radius:0 !important;
		background:#FFF !important;
		height:30px !important;
	}

	.select2-container{
		width:100%!important;
	}

	.select2-choice{
		border-radius:0px!important;
		height:34px!important;
		background:#FFF!important;
		padding-top:3px!important;
	}

	.page-content{
		padding-top:0px!important;
	}

	.table{
		margin-bottom:0px;
	}
</style>
