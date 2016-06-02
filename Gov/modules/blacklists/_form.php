<form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page; ?>">
	<div id="pageone" class="tab-pane active row">
		<div class="col-sm-12">
			<fieldset>
				<legend>
					ข้อมูลคู่สัญญา
				</legend>
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<div class="col-xs-6 col-sm-4 control-label no-padding-right">
							เลขประจำตัวผู้เสียภาษี :&nbsp;&nbsp;&nbsp;
						</div>
						<div class="col-xs-4 input-group">
							<input type="text" class="form-control" value="1597489636945">
							<span class="input-group-btn">
								<button class="btn btn-sm">
									<i class="fa fa-search"></i>
								</button> </span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-4 right">
							ชื่อ :
						</div>
						<div class="col-xs-6">
							บริษัท ทดสอบ จำกัด (มหาชน)
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-4 right">
							ที่อยู่ :
						</div>
						<div class="col-xs-6">
							-
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-4 right">
							เบอร์โทรศัพท์ :
						</div>
						<div class="col-xs-6">
							-
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-4 right">
							รอบระยะเวลาบัญชี :
						</div>
						<div class="col-xs-6">
							1 ม.ค. 2559 - 31 ธันวาคม 2559
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="col-sm-12">
			<fieldset>
				<legend>
					ข้อมูลสัญญาที่ทำกับหน่วยงานของรัฐแล้วยังไม่ได้ยื่นบัญชีรายรับรายจ่าย
				</legend>
				<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer" style="overflow-y:scroll;overflow-x:none;">
					<div style="min-width:800px!important;">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr role="row">
									<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
									<th>เลขที่สัญญา</th>
									<th>เลขที่คุมสัญญา</th>
									<th >คู่สัญญา</th>
									<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >โครงการ</th>
									<th class="sorting_disabled" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" >มูลค่าสัญญา</th>
									<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">ปีภาษี</th>
									<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1">รอบบัญชี</th>
									<th class="sorting_disabled " tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1">สถานะ</th>
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
									<td class="">2559</td>
									<td class="">ม.ค. - ก.พ.</td>
									<td class=""><span class="label label-sm label-danger">เกินกำหนด</span></td>
									<td nowrap="nowrap">
									<div class="hidden-sm hidden-xs action-buttons">
										<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
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
													<a href="<?php echo $current_page; ?>?mode=view" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View"> <span class="blue"> <i class="ace-icon fa fa-print bigger-120"></i> </span> </a>
												</li>
											</ul>
										</div>
									</div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
	<div class="space space-8"></div>
	<fieldset>
		<legend>
			การตรวจสอบ
		</legend>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>สถานะ</th>
					<th>หมายเหตุ</th>
					<th>วันที่</th>
					<th>ผู้บันทึก</th>
					<th>หน่วยงาน</th>
				</tr>
			</thead>
			<tr>
				<td><span class="label label-danger">ขึ้นทะเบียนแบล็คลิสต์</span></td>
				<td>มีการแจ้งคู่สัญญาให้เข้าชี้แจงแล้วแต่ไม่ปฏิบัติตามที่กำหนดไว้</td>
				<td>01/04/2559 09:56:30</td>
				<td>นางสาวสดใส สดใส</td>
				<td> ศูนย์กำกับการจัดซื้อจัดจ้างภาครัฐ
				<br>
				สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ </td>
			</tr>
			</tr>
			<tr>
				<td><span class="label label-sm label-success">ปลดทะเบียนแบล็คลิสต์</span></td>
				<td>คู่สัญญาได้ทำการเข้ามาชี้แจงข้อเท็จเจริงแล้ว มีคำสั่งให้ปลดทะเบียนแบล็คลิสต์</td>
				<td>06/04/2559 15:06:30</td>
				<td>นางสาวสดใส สดใส</td>
				<td> ศูนย์กำกับการจัดซื้อจัดจ้างภาครัฐ
				<br>
				สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ </td>
			</tr>
		</table>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">สถานะการตรวจสอบ</label>
			<div class="col-sm-9">
				<select name="status" class="col-sm-3">
					<option value="">--กรุณาระบุ--</option>
					<option value="">ขึ้นทะเบียนแบล็คลิสต์</option>
					<option value="">ปลดทะเบียนแบล็คลิสต์</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">หมายเหตุ</label>
			<div class="col-sm-9">
				<textarea name="project_name" class="form-control"></textarea>
			</div>
		</div>
		<div class="clearfix form-actions">
			<label class="col-sm-3"></label>
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					บันทึก
				</button>

				&nbsp; &nbsp; &nbsp;
				<a href="<?php echo $current_page; ?>">
				<button class="btn" type="button">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					ย้อนกลับ
				</button> </a>
			</div>
		</div>
	</fieldset>
</form>