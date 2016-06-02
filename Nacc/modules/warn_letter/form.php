<form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page; ?>">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<fieldset>
						<legend>
							ข้อมูลคู่สัญญา
						</legend>
						<div id="company_info">
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<div class="col-xs-6 col-sm-2 control-label no-padding-right">
										เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน :
									</div>
									<div class="col-sm-3">
										<div class="input-group">
											<input type="text" class="form-control number" value="5196321596321">
											<span class="input-group-btn">
												<a href="#modal-form" role="button" class="btn btn-sm btn-default" data-toggle="modal">
													เลือกคู่สัญญา
												</a> </span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<div class="col-xs-6 col-sm-2 control-label no-padding-right">
										ชื่อ :
									</div>
									<div class="col-xs-12 col-sm-6">
										<input type="text" class="form-control" value="บริษัท ทดสอบ จำกัด">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<div class="col-xs-6 col-sm-2 control-label no-padding-right">
										ที่อยู่ :
									</div>
									<div class="col-xs-12 col-sm-6">
										<input type="text" class="form-control" value="-">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<div class="col-xs-6 col-sm-2 control-label no-padding-right">
										เบอร์โทรศัพท์ :
									</div>
									<div class="col-xs-12 col-sm-2">
										<input type="text" class="form-control">
									</div>
									<div class="col-xs-6 col-sm-2 control-label no-padding-right">
										อีเมล์ :
									</div>
									<div class="col-xs-12 col-sm-2">
										<input type="email" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<div class="col-xs-4 col-sm-2 control-label no-padding-right">
										รอบระยะเวลาบัญชี :
									</div>
									<div class="col-xs-12 col-sm-5">
										<div class="input-group">
											<span class="input-group-addon">วันที่</span>
											<input type="text" class="form-control center" style="width:40px;" value="1">
											<span class="input-group-addon">เดือน</span>
											<select class="form-control" style="width:60px;">
												<option value="">ม.ค.</option>
												<option value="">ก.พ.</option>
											</select>
											<span class="input-group-addon">ถึง</span>
											<span class="input-group-addon">วันที่</span>
											<input type="text" class="form-control center" style="width:40px;" value="31">
											<span class="input-group-addon">เดือน</span>
											<select class="form-control" style="width:60px;">
												<option value="">ธ.ค.</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<fieldset>
				<legend>
					ข้อมูลสัญญาที่ทำกับหน่วยงานของรัฐที่ยังไม่มีการยื่นบัญชีรายรับรายจ่าย
				</legend>
				<div style="min-width:800px!important;">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr role="row">
								<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
								<th>เลขที่สัญญา</th>
								<th>เลขที่คุมสัญญา</th>
								<th>หน่วยงาน</th>
								<th>คู่สัญญา</th>
								<th>โครงการ</th>
								<th>มูลค่าสัญญา</th>
								<th>สถานะ</th>
							</tr>
						</thead>

						<tbody>
							<tr role="row" class="odd">
								<td class="center ">1</td>
								<td class="">31/2558 </td>
								<td class="">N570113812</td>
								<td class="">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</td>
								<td class="">บริษัท ทดสอบ 1234 จำกัด (มหาชน) </td>
								<td>โครงการพัฒนาโครงสร้างพื้นฐานด้านเครือข่ายระยะที่ ๒ และโอนย้ายห้องแม่ข่ายศูนย์เทคโนโลยีสารสนเทศ</td>
								<td>33,813,605.00</td>
								<td class="center"><span class="label label-sm label-danger">เกินกำหนด</span>(160 วัน)</td>
							</tr>
						</tbody>
					</table>
				</div>
			</fieldset>
		</div>
		<div class="clearfix"></div>
		<div class="space space-8"></div>
		<div class="col-sm-12">
			<fieldset>
				<legend>
					บันทึกการออกหนังสือขอให้ชี้แจงข้อเท็จจริงการไม่ยื่นแบบแสดงบัญชีรายรับรายจ่ายของโครงการ
				</legend>
				<div class="col-xs-12 col-sm-12">
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							วันที่ออกหนังสือเพื่อขออนุมัติ :
						</div>
						<div class="col-xs-6 col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							เลขที่หนังสือออก :
						</div>
						<div class="col-xs-3 col-sm-2">
							<input type="text" class="form-control">
						</div>
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							วันที่ออกหนังสือ :
						</div>
						<div class="col-xs-6 col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							ระยะเวลาที่รอให้คู่สัญญาเข้าชี้แจง :
						</div>
						<div class="col-xs-6  col-sm-2" style="padding-top:5px;">
							 <label class="label label-success">20 วัน</label>
							 <label class="label label-warning">27 วัน</label>
							 <label class="label label-danger">31 วัน</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							วันที่คู่สัญญาเข้าชี้แจง :
						</div>
						<div class="col-xs-6  col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							แนบไฟลรายละเอียดการเข้าชี้แจง :
						</div>
						<div class="col-xs-6  col-sm-2">
								<input type="file" class="btn">
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<hr>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">สร้างโดย</label>
			<div class="col-sm-9">
				นายทดสอบ  ทดสอบ <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
				<br>
				<span class="green">ศูนย์เทคโนโลยีสารสนเทศ สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริต</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">แก้ไขล่าสุดโดย</label>
			<div class="col-sm-9">
				นายทดสอบ  ทดสอบ <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
				<br>
				<span class="green">ศูนย์เทคโนโลยีสารสนเทศ สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริต</span>
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
				<a href="<?php echo $current_page;?>">
				<button class="btn" type="button">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					ย้อนกลับ
				</button> </a>
			</div>
		</div>
	</div>
</form>
<div id="modal-form" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content" style="width:750px!important;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue bigger">ข้อมูลคู่สัญญาที่ยังไม่มีการยื่นบัญชีรายรับรายจ่าย</h4>
			</div>
			<div class="modal-body">
				<div id="dv-search-project">
					<div class="row">
						<div class="input-group col-sm-12">
							<span class="input-group-addon">
								ค้นหาเลขประจำตัวผู้วเสียภาษี/เลขประจำตัวประชาชน
							</span>
							<input type="text" class="form-control search-query" placeholder="กรอกเลขประจำตัวผู้วเสียภาษี/เลขประจำตัวประชาชน">
							<span class="input-group-btn">
								<button id="btn-show-search-project" type="button" class="btn btn-default btn-sm">
									<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
									แสดง
								</button>
							</span>
						</div>
					</div>
					<hr>
					<div id="dv-search-body">
					<div class="row">
					<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr role="row">
									<th class="center sorting_disabled hidden-480" rowspan="1" colspan="1">ลำดับ</th>
									<th>เลขประจำตัวผู้เสียภาษี</th>
									<th width="250">ชื่อคู่สัญญา</th>
									<th>จำนวนโครงการที่ยังไม่มีการยื่น</th>
									<th>จำนวนวันที่เกินกำหนด</th>
									<th>เลือก</th>
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd">
									<td class="center hidden-480" >1</td>
									<td>5196321596321</td>
									<td>บริษัท ทดสอบ จำกัด</td>
									<td class="center">1</td>
									<td class="center">160 วัน</td>
									<td>
										<button class="btn btn-sm" data-dismiss="modal">
											<i class="ace-icon fa fa-check"></i>
											เลือก
										</button>
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
				  </div>
				</div>
			  </div>
			</div>
    </div>
	</div>
</div>
