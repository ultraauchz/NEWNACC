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
								<label for="search">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="search">ชื่อคู่สัญญา</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="search">เลขที่คุมสัญญา</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="search">เลขที่สัญญา</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-6">
								<label for="search">วันที่ประกาศแบล้คลิสต์</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="start_date" value="" placeholder="เริ่ม e.g. 01/01/2559" class="form-control number">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="end_date" value="" placeholder="สิ้นสุด  e.g. 31/12/2559" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="search">วันที่ปลดแบล้คลิสต์</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="start_date" value="" placeholder="เริ่ม e.g. 01/01/2559" class="form-control number">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="end_date" value="" placeholder="สิ้นสุด  e.g. 31/12/2559" class="form-control">
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
<div class="row">
	<div class="col-sm-12">
		<a href="<?php echo $current_page; ?>?mode=new">
		<button name="submit" class="btn btn-primary">
			<i class="fa fa-plus-square fa-plus-square-o"></i> เพิ่มข้อมูลBlackList คู่สัญญา
		</button> </a>
	</div>
</div>
<div class="space space-8"></div>

<?php if(@$_GET):
?>
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
	<div style="min-width:800px!important;">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
					<th>เลขประจำตัวผู้เสียภาษี</th>
					<th >คู่สัญญา</th>
					<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">สถานะการขึ้นแบล้คลิสต์</th>
					<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">สถานะการการปลดแบล้คลิสต์</th>
					<th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
				</tr>
			</thead>

			<tbody>
				<tr role="row" class="odd">
					<td class="center " >1</td>
					<td class="">4587963125469</td>
					<td class="">บริษัท เอสวีโอเอ จำกัด (มหาชน) </td>
					<td class=""> ขึ้นทะเบียนแบล้คลิสต์ ณ วันที่ 03/04/2559 </td>
					<td class=""> ปลดทะเบียนแบล้คลิสต์ ณ วันที่ 06/04/2559 </td>
					<td nowrap="nowrap">
					<div class="hidden-sm hidden-xs action-buttons">
					<a class="blue" href="<?php echo $current_page;?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>

					<a class="green" href="<?php echo $current_page;?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>

					<a class="red btn_delete" href="<?php echo $current_page;?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</div>
				<div class="hidden-md hidden-lg">
					<div class="inline pos-rel">
						<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
							<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
						</button>

						<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
							<li>
								<a href="<?php echo $current_page;?>?mode=view" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View"> <span class="blue"> <i class="ace-icon fa fa-search-plus bigger-120"></i> </span> </a>
							</li>

							<li>
								<a href="<?php echo $current_page;?>?mode=edit" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit"> <span class="green"> <i class="ace-icon fa fa-pencil-square-o bigger-120"></i> </span> </a>
							</li>

							<li>
								<a href="<?php echo $current_page;?>?mode=delete" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="ace-icon fa fa-trash-o bigger-120"></i> </span> </a>
							</li>
						</ul>
					</div>
				</div></td>
				</tr>
			</tbody>
		</table>
	</div>
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
