<!-- search section -->
<?php
/*
    echo "<pre>";
    print_r(@$_GET);
    echo "</pre>";
*/
$ministry = array(
				"กระทรวงกลาโหม",
				"กระทรวงการคลัง",
				"กระทรวงการต่างประเทศ",
				"กระทรวงการท่องเที่ยวและกีฬา",
				"กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์",
				"กระทรวงเกษตรและสหกรณ์",
				"การทรวงคมนาคม",
				"กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม",
				"กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร",
				"กระทรวงพลังงาน",
				"กระทรวงพาณิชย์",
				"กระทรวงมหาดไทย",
				"กระทรวงยุติธรรม",
				"กระทรวงแรงงาน",
				"กระทรวงวัฒนธรรม",
				"กระทรวงวิทยาศาสตร์และเทคโนโลยี",
				"กระทรวงศึกษาธิการ",
				"กระทรวงสาธารสุข",
				"กระทรวงอุตสาหกรรม"
			);

$ministry_list = array();
foreach ($ministry as $key => $value) :
	$ministry_list[] = array('min_title' => $value, 'min_sum_project' => ($key+1)*10, 'min_sum_budget' => ($key+1)*1000);
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
								<label for="search">ปีงบประมาณ <span class="red">*</span></label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">2559</option>
									<option value="">2558</option>
									<option value="">2557</option>
								</select>
							</div>
                            <div class="col-sm-3">
								<label for="search" style="display: block;">กระทรวง</label>
                                <select id="min_code" name="min_code" class="form-control multiselect" multiple="">
									<?php
										foreach ($ministry as $key => $value) :
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

	<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
		<thead>
			<tr role="row">
				<th class="center sorting_disabled hidden-480" rowspan="1" colspan="1">ลำดับ</th>
				<th class="sorting_disabled hidden-480" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">กระทรวง</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >จำนวนโครงการ</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >งบประมาณที่ได้รับ</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach ($ministry_list as $key => $value) :
					$class = ($key%2 == 0)?'odd':'event';
					echo '<tr role="row" class="'.$class.'">';
					echo '<td class="center hidden-480" >'.($key+1).'</td>';
					echo '<td class="hidden-480">'.$value['min_title'].'</td>';
					echo '<td class="right">'.number_format($value['min_sum_project']).'</td>';
					echo '<td class="right">'.number_format($value['min_sum_budget']).'</td>';
				endforeach;
			?>
		</tbody>
	</table>
	
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
				text: 'กราฟสรุปโครงการและงบประมาณที่ได้รับจัดสรร'
			},
			/*
			subtitle: {
				text: 'Source: WorldClimate.com'
			},
			*/
			xAxis: {
				categories: [
					<?php
						foreach ($ministry as $key => $value) :
							echo "'".$value."',";
						endforeach;
					?>
				],
				rotation: -45
			},
			yAxis: {
				min: 0,
				title: {
					text: 'งบประมาณ (บาท)'
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
			series: [{
				name: 'งบประมาณ',
				data: [
					<?php
						foreach ($ministry_list as $key => $value) :
							echo $value['min_sum_budget'].', ';
						endforeach;
					?>
					]

			}]
		});
	});
</script>
