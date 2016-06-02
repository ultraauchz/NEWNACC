<!-- search section -->
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
								<label for="search">เมนู</label>
								<select id="min_code" name="min_code" class="form-control ">
									<option value="">--แสดงทั้งหมด--</option>
									<option value="1">เข้าใช้งานระบบ</option>
									<option value="1">ออกจากระบบ</option>
									<option value="1">แผนประจำปี</option>
									<option value="1">นำเข้าแผนประจำปี</option>
									<option value="1">ราคากลาง</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">ชื่อผู้ใช้</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">กระทรวง</label>
								<select id="min_code" name="min_code" class="form-control ">
									<option value="">--กรุณาระบุ--</option>
									<option value="1">กระทรวงกลาโหม</option>
									<option value="2">กระทรวงการคลัง</option>
									<option value="3">กระทรวงการต่างประเทศ</option>
									<option value="4">กระทรวงการท่องเที่ยวและกีฬา</option>
									<option value="5">กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์</option>
									<option value="6">กระทรวงเกษตรและสหกรณ์</option>
									<option value="7">การทรวงคมนาคม</option>
									<option value="8">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</option>
									<option value="9">กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร</option>
									<option value="10">กระทรวงพลังงาน</option>
									<option value="11">กระทรวงพาณิชย์</option>
									<option value="12">กระทรวงมหาดไทย</option>
									<option value="13">กระทรวงยุติธรรม</option>
									<option value="14">กระทรวงแรงงาน</option>
									<option value="15">กระทรวงวัฒนธรรม</option>
									<option value="16">กระทรวงวิทยาศาสตร์และเทคโนโลยี</option>
									<option value="17">กระทรวงศึกษาธิการ</option>
									<option value="18">กระทรวงสาธารสุข</option>
									<option value="19">กระทรวงอุตสาหกรรม</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">กรม</label>
								<select id="min_code" name="min_code" class="form-control ">
									<option value="">--กรุณาระบุ--</option>
									<option value="1">สำนักบริหารงานกลาง</option>
								</select>
							</div>
							<div class="col-sm-4">
								<label for="search">ชื่อหน่วยงาน</label>
								<input type="text" name="search" value="" placeholder="ชื่อหน่วยงาน" class="form-control">
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">วันที่ทำรายการ</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="start_date" value="" placeholder="01/01/2559" class="form-control" data-provide="datepicker" data-date-language="th-th">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="end_date" value="" placeholder="31/12/2559" class="form-control" data-provide="datepicker" data-date-language="th-th">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
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
<?php if(@$_GET):
?>
<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
	<div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 10 รายการ 1 หน้า
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
					<li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
						<a href="#">ถัดไป</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<table id="dynamic-table" class="table table-striped table-bordered table-hover">
		<thead>
			<tr role="row">
				<th width="50" class="center">ลำดับ</th>
				<th>วันเวลา</th>
				<th>IP-Address</th>
				<th>ชื่อผู้ใช้</th>
				<th>หน่วยงาน</th>
				<th>เมนู</th>
				<th>คำอธิบาย</th>
			</tr>
		</thead>
		<tbody>
			<tr role="row" class="odd">
				<td class="center hidden-480" >1</td>
				<td>25/03/2559 10:20:40</td>
				<td>27.263.54.263</td>
				<td>นายทดสอบ ทดสอบ</td>
				<td>กองต่อต้านการค้ามนุษย์  สำนักงานปลัดกระทรวง กระทรวงพัฒนาสังคมและความมั่นคงของมนุษย์</td>
				<td>ล้อกอินเข้าสู่ระบบ</td>
				<td>ล้อกอินเข้าสู่ระบบ</td>
			</tr>
			<tr role="row" class="odd">
				<td class="center hidden-480" >2</td>
				<td>25/03/2559 10:20:40</td>
				<td>27.263.54.263</td>
				<td>นายทดสอบ ทดสอบ</td>
				<td>กองต่อต้านการค้ามนุษย์  สำนักงานปลัดกระทรวง กระทรวงพัฒนาสังคมและความมั่นคงของมนุษย์</td>
				<td>คู่สัญญา</td>
				<td>เพิ่มรายการ : เลขที่สัญญา 31/2558 เลขที่คุมสัญญา N570113812 โครงการพัฒนาโครงสร้างพื้นฐานด้านเครือข่ายระยะที่ ๒ และโอนย้ายห้องแม่ข่ายศูนย์เทคโนโลยีสารสนเทศ	</td>
			</tr>
		</tbody>
	</table>
	<div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 10 รายการ 1 หน้า
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