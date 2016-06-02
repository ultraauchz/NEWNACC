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
			<i class="fa fa-plus-square fa-plus-square-o"></i> เพิ่มข้อมูลหน่วยงาน
		</button> </a>
	</div>
</div>
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
				<th>กระทรวง</th>
				<th>กรม</th>
				<th>หน่วยงาน</th>
				<th width="100"></th>
			</tr>
		</thead>
		<tbody>
			<tr role="row" class="odd">
				<td class="center hidden-480" >1</td>
				<td>กระทรวงพัฒนาสังคมและความมั่นคงของมนุษย์</td>
				<td>สำนักงานปลัดกระทรวง</td>
				<td>กองต่อต้านการค้ามนุษย์</td>
				<td>
				<div class="hidden-sm hidden-xs action-buttons">
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>

					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>

					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</div>
				<div class="hidden-md hidden-lg">
					<div class="inline pos-rel">
						<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
							<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
						</button>

						<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
							<li>
								<a href="<?php echo $current_page; ?>?mode=view" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View"> <span class="blue"> <i class="ace-icon fa fa-search-plus bigger-120"></i> </span> </a>
							</li>

							<li>
								<a href="<?php echo $current_page; ?>?mode=edit" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit"> <span class="green"> <i class="ace-icon fa fa-pencil-square-o bigger-120"></i> </span> </a>
							</li>

							<li>
								<a href="<?php echo $current_page; ?>?mode=delete" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="ace-icon fa fa-trash-o bigger-120"></i> </span> </a>
							</li>
						</ul>
					</div>
				</div></td>
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