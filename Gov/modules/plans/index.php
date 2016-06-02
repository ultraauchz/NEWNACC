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
								<label for="search">ปีงบประมาณ</label>
								<select name="budget_year" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="">2559</option>
									<option value="">2558</option>
									<option value="">2557</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">กระทรวง</label>
								<select name="min_code" class="select2">
									<option value="กระทรวงการคลัง" selected="selected">กระทรวงการคลัง</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">กรม</label>
								<select name="sec_code" class="select2">
									<option value="" selected="selected">สำนักงานปลัดกระทรวงการคลัง</option>
								</select>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">ประเภทเงินงบประมาณ</label>
								<select name="budget_year" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="">ในแผนงบประมาณ</option>
									<option value="">นอกแผนงบประมาณ</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">หมวดรายจ่าย</label>
								<select name="budget_year" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="" selected="selected">ครุภัณฑ์</option>
									<option value="">ค่าจ้างชั่วคราว</option>
									<option value="">ค่าจ้างประจำ</option>
									<option value="">ค่าใช้สอย</option>
									<option value="">ค่าตอบแทน</option>
									<option value="">ค่าวัสดุ</option>
									<option value="">รายจ่ายอื่น</option>
								</select>
							</div>
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
							<div class="col-sm-3">
								<label for="search">เลขคุมสัญญาโครงการ</label>
								<input type="text" name="search" value="" placeholder="เลขคุมสัญญาโครงการ" class="form-control">
							</div>
							<div class="col-sm-3">
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
<div class="row">
	<div class="col-sm-12">
	    <a href="plans?mode=new">
		<button name="submit" class="btn btn-primary">
			<i class="fa fa-plus-square fa-plus-square-o"></i> เพิ่มโครงการ
		</button>
		</a>
	</div>
</div>
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
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr role="row">
				<th>ลำดับ</th>
				<th>กระทรวง</th>
				<th>กรม</th>
				<th>เลขคุมสัญญาโครงการ</th>
				<th>โครงการ</th>
				<th>งบประมาณ</th>
				<th>ปีงบประมาณ</th>
				<th>ประเภทเงินงบประมาณ</th>
				<th>สถานะโครงการ</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td class="center">1</td>
				<td class="hidden-480">กระทรวงการคลัง</td>
				<td>สำนักงานปลัดกระทรวงการคลัง</td>
				<td>5903002000001</td>
				<td>โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</td>
				<td class="right">40,800,000</td>
				<td align="center">2559</td>
				<td> ในแผนงบประมาณ</td>
				<td class="hidden-480"><span class="label label-sm label-primary">ดำเนินการ</span></td>
				<td nowrap>
				<div class="action-buttons">
					<a class="blue" href="plans?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="plans?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<!--
					<a class="red btn_delete" href="plans?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				-->
				</div>
				</td>
			</tr>
			<tr>
				<td class="center">2</td>
				<td class="hidden-480">กระทรวงการคลัง</td>
				<td>สำนักงานปลัดกระทรวงการคลัง</td>
				<td>5903002000002</td>
				<td>โครงการทดแทน GFMIS Terminal Set และอุปกรณ์</td>
				<td class="right">55,410,000.00</td>
				<td align="center">2559</td>
				<td>ในแผนงบประมาณ</td>
				<td class="hidden-480"><span class="label label-sm label-primary">ดำเนินการ</span></td>
				<td nowrap>
				<div class="action-buttons">
					<a class="blue" href="plans?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="plans?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="plans?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</div>
				</td>
			</tr>
			<tr>
				<td class="center">2</td>
				<td class="hidden-480">กระทรวงการคลัง</td>
				<td>สำนักงานปลัดกระทรวงการคลัง</td>
				<td>5903002000003</td>
				<td>โครงการประชุมสัมมนาการบูรณาการการป้องกันและปราบปรามการทุจริตและประพฤติมิชอบในภาครัฐของหน่วยงานราชการในสังกัดกระทรวงการคลัง</td>
				<td class="right">361,700.00</td>
				<td align="center">2559</td>
				<td> ในแผนงบประมาณ</td>
				<td class="hidden-480"><span class="label label-sm label-primary">ดำเนินการ</span></td>
				<td nowrap>
				<div class="action-buttons">
					<a class="blue" href="plans?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="plans?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="plans?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</div>
				</td>
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
<?php endif; ?>
<div class="space space-8"></div>
