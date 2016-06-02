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
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
                  <label for="search">ประเภทผู้ประกอบการ</label>
                  <select name="budget_year" class="form-control">
                      <option value="">แสดงทั้งหมด</option>
											<option value="human">บุคคล</option>
											<option value="con">กิจการค้าร่วม (Consortium)</option>
											<option value="joint">กิจการร่วมค้า (Joint Venture)</option>
											<option value="ltd">นิติบุคคล</option>
											<option value="ltde">นิติบุคคลต่างประเทศ</option>
                  </select>
              </div>
							<div class="col-sm-3">
								<label for="search">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="search">ชื่อบริษัท/ชื่อบุคคล</label>
								<input type="text" class="form-control">
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
		<a href="<?php echo $current_page; ?>?mode=new">
		<button name="submit" class="btn btn-primary">
			<i class="fa fa-plus-square fa-plus-square-o"></i> เพิ่มข้อมูลบริษัท
		</button> </a>
	</div>
</div>
<div class="space space-8"></div>
<?php if(@$_GET):?>
<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer" style="overflow-y:scroll;overflow-x:none;">
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
				<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
				<th width="170">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</th>
				<th width="200">ชื่อ</th>
				<th width="170">ที่อยู่</th>
				<th>เบอร์โทรศัพท์</th>
				<th>อีเมล์</th>
				<th width="120" >รอบระยะเวลาบัญชี</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			<tr role="row" class="odd">
				<td class="center " >1</td>
				<td class="">3133263393412</td>
				<td class="">บริษัท ทดสอบ จำกัด (มหาชน)</td>
				<td class="">-</td>
				<td>02-486-4821</td>
				<td>test@test.com</td>
				<td>1 ม.ค. - 31 ธ.ค.</td>
				<td nowrap="nowrap">
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
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
