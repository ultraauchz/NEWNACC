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
								<label for="search">สถานะการนำเข้า</label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">สำเร็จ</option>
									<option value="">ไม่สำเร็จ</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">กระทรวง</label>
								<select name="min_code" class="form-control">
									<option value="">แสดงทั้งหมด</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">กรม</label>
								<select name="sec_code" class="form-control">
									<option value="">แสดงทั้งหมด</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">ปีงบประมาณ</label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">2559</option>
									<option value="">2558</option>
									<option value="">2557</option>
								</select>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-4">
								<label for="search">งบประมาณ</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="l_budget" value="" placeholder="ขั้นต่ำ e.g. 99999" class="form-control number">
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="h_budget" value="" placeholder="สูงสุด e.g. 99999" class="form-control">
								</div>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-12">
								<label for="search">ชื่อโครงการ</label>
								<input type="text" name="search" value="" placeholder="ชื่อโครงการ" class="form-control">
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
				<th>ลำดับ</th>
				<th>ปีงบประมาณ</th>
				<th>กระทรวง</th>
				<th>กรม</th>
				<th>โครงการ</th>
				<th>งบประมาณ</th>
				<th>สถานะการนำเข้า</th>
				<th>หมายเหตุ</th>
			</tr>
		</thead>

		<tbody>

			<tr role="row" class="odd danger">
				<td class="center" >1</td>
				<td>2558</td>
				<td>กระทรวงการคลัง</td>
				<td>สำนักงานปลัดกระทรวงการคลัง</td>
				<td>โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</td>
				<td class="right">xxx,xxx.xx</td>
				<td><span class="label label-sm label-danger">ไม่สำเร็จ</span></td>
				<td>งบประมาณไม่ถูกต้อง</td>
			</tr>
			<tr role="row" class="event">
				<td class="center" >2</td>
				<td>2558</td>
				<td class="hidden-480">กระทรวงการต่างประเทศ</td>
				<td>สำนักงานปลัดกระทรวงการต่างประเทศ</td>
				<td>โครงการเฉลิมฉลองความสัมพันธ์กับประเทศต่าง ๆ</td>
				<td class="right"> 4,700,000</td>
				<td><span class="label label-sm label-success">สำเร็จ</span></td>
				<td></td>
			</tr>
			<tr role="row" class="odd">
				<td class="center hidden-480" >3</td>
				<td>2558</td>
				<td>กระทรวงสาธารณสุข</td>
				<td>กรมควบคุมโรค</td>
				<td>ระบบสื่อสารผ่านจอภาพแบบบูรณาการ ตำบลตลาดขวัญ อำเภอเมือง จังหวัดนนทบุรี</td>
				<td class="right">40,800,000</td>
				<td><span class="label label-sm label-success">สำเร็จ</span></td>
				<td></td>
			</tr>
			<tr role="row" class="event">
				<td class="center" >4</td>
				<td>2558</td>
				<td>กระทรวงอุตสาหกรรม</td>
				<td>กรมโรงงานอุตสาหกรรม</td>
				<td>โครงการเพิ่มประสิทธิภาพการใช้ระบบเทคโนโลยีสารสนเทศ แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร</td>
				<td class="right">3,150,000</td>
				<td><span class="label label-sm label-success">สำเร็จ</span></td>
				<td></td>
			</tr>
			<tr role="row" class="event">
				<td class="center" >5</td>
				<td>2558</td>
				<td>รัฐวิสาหกิจ</td>
				<td>องค์การขนส่งมวลชนกรุงเทพ</td>
				<td>ก่อสร้างอู่จอดรถโดยสารอู่เมกาบางนา ต.บางแก้ว อ.บางพลี จังหวัดสมุทรปราการ</td>
				<td class="right">2,801,500</td>
				<td><span class="label label-sm label-success">สำเร็จ</span></td>
				<td></td>
			</tr>
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
<div class="clearfix form-actions">
	<label class="col-sm-12 center red"> *สำหรับ การนำเข้าข้อมูลระบบจำทำการอัพโหลดไฟล์ขึ้นไปที่เซิฟเวอร์ และจะเริ่มดำเนินการนำเข้าข้อมูลเมื่อถึงเวลาที่ผู้ดูแลระบบได้ทำการกำหนดไว้ </label>
	<div class="col-md-offset-3 col-md-9">
		<a href="<?php echo $current_page; ?>?mode=finish">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon  fa fa-upload bigger-110"></i>
			ยืนยันข้อมูลที่อัพโหลด
		</button>
   	</a>
		&nbsp; &nbsp; &nbsp;
		<a href="<?php echo $current_page; ?>?mode=new">
		<button class="btn" type="button">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			ย้อนกลับ
		</button> </a>
	</div>
</div>
