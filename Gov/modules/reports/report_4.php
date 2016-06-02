<!-- search section -->
<?php
/*
    echo "<pre>";
    print_r(@$_GET);
    echo "</pre>";
*/
$option_year = array(
					"2559",
					"2558",
					"2557",
					"2556"
				);
$contract_option = array(
					"2 - 5 ล้าน",
					"5 - 10 ล้าน",
					"10 - 20 ล้าน",
					"20 - 50 ล้าน",
					"มากกว่า 50 ล้าน"
				);

$year_list = array();
foreach ($option_year as $key => $value) :
	$year_list[] = array('year_title' => $value, 'sum_1' => ($key+1)*10, 'sum_2' => ($key+1)*5);
endforeach;
?>
<form method="get" enctype="multipart/form-data">
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-header">
					<h4 class="widget-title">ค้นหา</h4>
					<span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> </span>
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<div class="row">
							<div class="col-sm-3">
								<label for="search">ปีปฏิทิน <span class="red">*</span></label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<?php
										foreach ($option_year as $key => $value) :
											echo '<option value="'.($key+1).'">'.$value.'</option>';
										endforeach;
									?>
								</select>
							</div>
                            <div class="col-sm-3">
								<label for="search" style="display: block;">ช่วงมูลค่าสัญญา</label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<?php
										foreach ($contract_option as $key => $value) :
											echo '<option value="'.($key+1).'">'.$value.'</option>';
										endforeach;
									?>
								</select>
							</div>
                            <div id="list-multiselect" style="display:none;"></div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-12">
								<button name="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> แสดง
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.span -->
	</div>
</form>
<!-- End Search Section -->
<div class="space space-8"></div>

<!-- start charts -->
<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">กราฟ</h4>
				<span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> </span>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<div class="row">
						<div class="col-sm-12">
							<div id="highcharts" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.span -->
</div>
<!-- end charts -->

<div class="space space-8"></div>
<?php if(@$_GET):?>
<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
	<div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 50 รายการ 5 หน้า
			</div>
		</div>
		<div class="col-xs-6">
			<div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
				<ul class="pagination">
					<li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
						<a href="#">ย้อนกลับ</a>
					</li>
					<li class="paginate_button active" aria-controls="dynamic-table" tabindex="0">
						<a href="#">1</a>
					</li>
					<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
						<a href="#">2</a>
					</li>
					<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
						<a href="#">3</a>
					</li>
					<li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
						<a href="#">ถัดไป</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
		<thead>
			<tr role="row">
				<th class="center sorting_disabled hidden-480" rowspan="1" colspan="1">ลำดับ</th>
				<th class="sorting_disabled hidden-480" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">ปี</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >จำนวนคู่สัญญาที่ยื่นบช.1แล้ว</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >จำนวนคู่สัญญาที่ยังไม่ยื่นบช.1</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach ($year_list as $key => $value) :
					$class = ($key%2 == 0)?'odd':'event';
					echo '<tr role="row" class="'.$class.'">';
					echo '<td class="center hidden-480" >'.($key+1).'</td>';
					echo '<td class="hidden-480">'.$value['year_title'].'</td>';
					echo '<td class="right">'.number_format($value['sum_1']).'</td>';
					echo '<td class="right">'.number_format($value['sum_2']).'</td>';
				endforeach;
			?>
		</tbody>
	</table>
	<div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 50 รายการ 5 หน้า
			</div>
		</div>
		<div class="col-xs-6">
			<div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
				<ul class="pagination">
					<li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
						<a href="#">ย้อนกลับ</a>
					</li>
					<li class="paginate_button active" aria-controls="dynamic-table" tabindex="0">
						<a href="#">1</a>
					</li>
					<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
						<a href="#">2</a>
					</li>
					<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
						<a href="#">3</a>
					</li>
					<li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
						<a href="#">ถัดไป</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="space space-8"></div>

<script type="text/javascript">
	$(function () {
		$('#highcharts').highcharts({
			chart: {
				type: 'column',
				spacingBottom: 30
			},
			title: {
				text: 'กราฟสรุปการยื่นข้อมูลบัญชีรายรับรายจ่าย'
			},
			/*
			subtitle: {
				text: 'Source: WorldClimate.com'
			},
			*/
			xAxis: {
				categories: [
					<?php
						foreach ($option_year as $key => $value) :
							echo "'".$value."',";
						endforeach;
					?>
				],
				rotation: -45
			},
			yAxis: {
				min: 0,
				title: {
					text: 'จำนวนโครงการ'
				}
			},
			legend: {
	            enabled: false
	        },
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			tooltip: {
	            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
	                '<td style="padding-left:5px;"> <b>{point.y}</b></td></tr>',
	            footerFormat: '</table>',
	            shared: true,
	            useHTML: true
	        },
			series: [
				{
					name: 'จำนวนคู่สัญญาที่ยื่นบช.1แล้ว',
					data: [
						<?php
							foreach ($year_list as $key => $value) :
								echo $value['sum_1'].', ';
							endforeach;
						?>
						]
				},
				{
					name: 'จำนวนคู่สัญญาที่ยังไม่ยื่นบช.1',
					data: [
						<?php
							foreach ($year_list as $key => $value) :
								echo $value['sum_2'].', ';
							endforeach;
						?>
						]
				},
			]
		});
	});
</script>
