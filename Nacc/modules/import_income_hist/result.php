<!-- search section -->
<form method="get" enctype="multipart/form-data">
	<div class="row">
		<div class="col-xs-12">
			<div class="well">
				<h4 class="green smaller lighter">ผลการนำเข้าข้อมูลบัญชีรายรับรายจ่าย</h4>
				<b>โดย : </b> นายทดสอบ  ทดสอบ<br>
				<b>อัพโหลดไฟล์เวลา : </b> 04/03/2559 16:01:20 น.<br>
				<b>เริ่มนำเข้าเวลา : </b> 05/03/2559 00:01:20 น.<br>
				<b>จำนวนข้อมูลทั้งหมด : </b> 5,049 รายการ
				<b>สำเร็จ : </b> 5,048 รายการ
				<b>ผิดพลาด : </b> 1 รายการ<br>
				<b>หมายเหตุ : </b><br>
				<div class="space space-8"></div>
				<a class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Log การนำเข้า</a>
			</div>

			<div class="widget-box">
				<div class="widget-header">
					<h4 class="widget-title">ค้นหา</h4>
					<span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> </span>
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<div class="row">
							<div class="col-sm-3">
								<label for="search">สถานะการตรวจสอบ</label>
								<select name="sec_code" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">รอการตรวจสอบ</option>
									<option value="">อยู่ในระหว่างการตรวจสอบ</option>
									<option value="">ตรวจสอบแล้ว ถูกต้องครบถ้วนในสาระสำคัญ</option>
									<option value="">ตรวจสอบแล้ว รอการแก้ไข</option>
								</select>
							</div>
							<div class="col-sm-3">
                                <label for="search">ปีปฏิทิน</label>
                                <select name="budget_year" class="form-control">
                                    <option value="">แสดงทั้งหมด</option>
                                    <option value="">2559</option>
                                    <option value="">2558</option>
                                    <option value="">2557</option>
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
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-4">
								<label for="search">มูลค่าสัญญา (ขั้นต่ำ 2 ล้านบาท)</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="l_budget" value="" placeholder="" class="form-control number">
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="h_budget" value="" placeholder="" class="form-control number">
								</div>
							</div>
							<div class="col-sm-6">
								<label for="search">วันที่ยื่น</label>
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
				<th>เลขที่สัญญา</th>
				<th>เลขที่คุมสัญญา</th>                
				<th >คู่สัญญา</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >โครงการ</th>
				<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >มูลค่าสัญญา</th>
				<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">วันที่ยื่น</th>
				<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">สถานะการยื่น</th>
				<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">สถานะการตรวจสอบ</th>
				<th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
			</tr>
		</thead>

		<tbody>
			<tr role="row" class="odd">
				<td class="center " >1</td>
				<td class="">31/2558 </td>
				<td class="">N570113812</td>                                
				<td class="">บริษัท เอสวีโอเอ จำกัด (มหาชน) </td>
				<td>โครงการพัฒนาโครงสร้างพื้นฐานด้านเครือข่ายระยะที่ ๒ และโอนย้ายห้องแม่ข่ายศูนย์เทคโนโลยีสารสนเทศ</td>
				<td>33,813,605.00</td>
				<td class="">01/03/2559</td>
				<td class="">ยื่นปกติ ครั้งที่ 1/2559</td>
				<td class=""><span class="label label-sm label-blue">รอการตรวจสอบ</span></td>
				<td nowrap="nowrap">
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