<form method="post" class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page; ?>?mode=result">
	<div class="row">
		<div class="col-sm-12">
			<fieldset>
				<legend>
					ข้อมูลบริษัท
				</legend>			
				<div class="col-xs-12 col-sm-12">
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							ประเภทผู้ประกอบการ :
						</div>
						<div class="col-xs-6">
							<select class="form-control" name="comp_type">
								<option value="">--กรุณาระบุ--</option>
								<option value="human">บุคคล</option>
								<option value="con">กิจการค้าร่วม (Consortium)</option>
								<option value="joint">กิจการร่วมค้า (Joint Venture)</option>
								<option value="ltd">นิติบุคคล</option>
								<option value="ltde">นิติบุคคลต่างประเทศ</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 dv-type">
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right">
							ประเภทผู้ประกอบการ :
						</div>
						<div class="col-xs-6">
							<select class="form-control ddl-type ddl-human">
								<option value="">--กรุณาระบุ--</option>
								<option value="">บุคคลธรรมดา</option>
								<option value="">คณะบุคคล</option>
								<option value="">ห้างหุ้นส่วนสามัญ</option>
							</select>
							<select class="form-control ddl-type ddl-ltd ddl-ltde">
								<option value="">--กรุณาระบุ--</option>
								<option value="">ห้างหุ้นส่วนสามัญนิติบุคคล</option>
								<option value="">ห้างหุ้นส่วนจำกัด</option>
								<option value="">บริษัทจำกัด</option>
								<option value="">บริษัทมหาชนจำกัด</option>
								<option value="">มูลนิธิ</option>
								<option value="">สมาคม</option>
							</select>
							<select class="form-control ddl-type ddl-con">
								<option value="">กิจการค้าร่วม (Consortium)</option>
							</select>
							<select class="form-control ddl-type ddl-joint">
								<option value="">กิจการร่วมค้า (Joint Venture)</option>
							</select>
						</div>
					</div>
				</div>

				<div id="company_info">
					<div class="col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="col-xs-6 col-sm-2 control-label no-padding-right">
								เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน :
							</div>
							<div class="col-xs-6 col-sm-2">
								<div class="input-group">
									<input type="text" class="form-control right number">
									<span class="input-group-btn">
										<button class="btn btn-sm" type="button">
											<i class="fa fa-search"></i>
										</button> </span>
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
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="col-xs-6 col-sm-2 control-label no-padding-right">
								ที่อยู่ :
							</div>
							<div class="col-xs-12 col-sm-6">
								<input type="text" class="form-control">
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
									<input type="text" class="form-control center" style="width:40px;">
									<span class="input-group-addon">เดือน</span>
									<select class="form-control" style="width:60px;">
										<option value="">ม.ค.</option>
										<option value="">ก.พ.</option>
									</select>
									<span class="input-group-addon">ถึง</span>
									<span class="input-group-addon">วันที่</span>
									<input type="text" class="form-control center" style="width:40px;">
									<span class="input-group-addon">เดือน</span>
									<select class="form-control" style="width:60px;">
										<option value="">ธ.ค.</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-2 control-label no-padding-right dv-con-budget">
								มูลค่าสัญญา รวมภาษีมูลค่าเพิ่ม :
							</div>
							<div class="col-xs-12 col-sm-2 dv-con-budget">
								<div class="input-group">
									<input type="text" class="form-control right number">
									<span class="input-group-addon">บาท</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 dv-add-comp">
					<div class="form-group">
						<div class="col-xs-6 col-sm-2 control-label no-padding-right"></div>
						<div class="col-xs-6 col-sm-3">
							<button type="button" class="btn btn-primary btn-add-comp">
								<i class="fa fa-plus"></i>เพิ่มคู่สัญญา
							</button>
						</div>
					</div>
				</div>
			</fieldset>
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
<script>
	$(document).ready(function() {
		hide_select();
		$("[name=comp_type]").change(function() {
			var select_val = $(this).val();
			hide_select();
			$(".dv-type").show();
			$(".ddl-" + select_val).show();
			if (select_val == 'con') {
				$('.dv-add-comp').show();
				$('.dv-con-budget').show();
			} else {
				$('.dv-add-comp').hide();
				$('.dv-con-budget').hide();
			}
		})

		$(".btn-add-comp").click(function(){
		    content = $("#company_info").html();
		    console.log(content);
		    $( content ).insertBefore( $(".dv-add-comp") );
		    //$(".dv-add-comp").before().append(content);
		})
	});

	function hide_select() {
		$(".dv-type").hide();
		$(".ddl-type").hide();
		$('.dv-add-comp').hide();
		$('.dv-con-budget').hide();
	}
</script>
<div id="modal-form" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content" style="width:750px!important;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue bigger">ระบุโครงการที่ต้องการบันทึกข้อมูลคู่สัญญา</h4>
			</div>
			<div class="modal-body">
				<div id="dv-search-project">
					<div class="row">
						<div class="input-group col-sm-8">
							<span class="input-group-addon">
								ค้นหาโครงการ
							</span>
							<input type="text" class="form-control search-query" placeholder="กรอกชื่อโครงการ">
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
					<div class="row right">
						<div class=""><input id="btn-new-project" type="button" class="btn btn-sm btn-primary" value="เพิ่มโครงการ"></div>
					</div>
					<div class="row">
					<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr role="row">
									<th class="center sorting_disabled hidden-480" rowspan="1" colspan="1">ลำดับ</th>
									<th>โครงการ</th>
									<th>งบประมาณ</th>
									<th>ปีงบประมาณ</th>
									<th>ประเภทเงินงบประมาณ</th>
									<th>เลือก</th>
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd">
									<td class="center hidden-480" >1</td>
									<td>โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</td>
									<td class="right">40,800,000</td>
									<td>2559</td>
									<td> ในแผนงบประมาณ</td>
									<td>
										<button class="btn btn-sm" data-dismiss="modal">
											<i class="ace-icon fa fa-check"></i>
											เลือก
										</button>
									</td>
								</tr>
								<tr role="row" class="event">
									<td class="center hidden-480" >3</td>
									<td>ระบบสื่อสารผ่านจอภาพแบบบูรณาการ ตำบลตลาดขวัญ อำเภอเมือง จังหวัดนนทบุรี</td>
									<td class="right">40,800,000</td>
									<td>2559</td>
									<td> ในแผนงบประมาณ</td>
									<td>
										<button class="btn btn-sm" data-dismiss="modal">
											<i class="ace-icon fa fa-check"></i>
											เลือก
										</button>
									</td>
								</tr>
								<tr role="row" class="event">
									<td class="center hidden-480" >4</td>
									<td>โครงการเพิ่มประสิทธิภาพการใช้ระบบเทคโนโลยีสารสนเทศ แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร</td>
									<td class="right">3,150,000</td>
									<td>2559</td>
									<td> ในแผนงบประมาณ</td>
									<td>
										<button class="btn btn-sm" data-dismiss="modal">
											<i class="ace-icon fa fa-check"></i>
											เลือก
										</button>
					        </td>
								</tr>
								<tr role="row" class="event">
									<td class="center hidden-480" >5</td>
									<td>ก่อสร้างอู่จอดรถโดยสารอู่เมกาบางนา ต.บางแก้ว อ.บางพลี จังหวัดสมุทรปราการ</td>
									<td class="right">2,801,500</td>
									<td>2559</td>
									<td> ในแผนงบประมาณ</td>
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
				<div id="dv-new-project">
					<form class="form-horizontal" role="form" enctype="multipart/form-data" action="plans">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">รหัสโครงการ</label>
							<div class="col-sm-9">
								<input type="text" name="project_id" value="" class="col-xs-12 col-sm-5" readonly="true">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">ปีงบประมาณ<span class="red">*</span></label>
							<div class="col-sm-9">
								<select name="budget_year" class="col-xs-12 col-sm-5">
									<option value="">--กรุณาระบุ--</option>
									<option value="" selected="selected">2559</option>
									<option value="">2558</option>
									<option value="">2557</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">กระทรวง<span class="red">*</span></label>
							<div class="col-sm-5">
								<select class="select2" >
									<option value="">--กรุณาระบุ--</option>
									<option value="กระทรวงการคลัง" selected="selected">กระทรวงการคลัง</option>
									<option value="กระทรวงแรงงาน">กระทรวงแรงงาน</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">กรม<span class="red">*</span></label>
							<div class="col-sm-5">
								<select class="select2" >
									<option value="">--กรุณาระบุ--</option>
									<option value="" selected="selected">สำนักงานปลัดกระทรวงการคลัง</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">ประเภทเงินงบประมาณ<span class="red">*</span></label>
							<div class="col-sm-9">
								<select name="sec_code" class="col-xs-12 col-sm-5">
									<option value="">--กรุณาระบุ--</option>
									<option value="" selected="selected">ในแผนงบประมาณ</option>
									<option value="">นอกแผนงบประมาณ</option>
									<option value="">อื่น ๆ </option>
								</select>
								&nbsp;โปรดระบุ <input type="text" class="input-sm">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">ชื่อโครงการ<span class="red">*</span></label>
							<div class="col-sm-9">
								<textarea name="project_name" class="form-control">โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">หมวดรายจ่าย<span class="red">*</span></label>
							<div class="col-xs-12 col-sm-5">
								<select name="sec_code" class="col-xs-12 col-sm-5">
									<option value="">--กรุณาระบุ--</option>
									<option value="" selected="selected">ครุภัณฑ์</option>
									<option value="">ค่าจ้างชั่วคราว</option>
									<option value="">ค่าจ้างประจำ</option>
									<option value="">ค่าใช้สอย</option>
									<option value="">ค่าตอบแทน</option>
									<option value="">ค่าวัสดุ</option>
									<option value="">รายจ่ายอื่น</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">งบประมาณ<span class="red">*</span></label>
							<div class="col-xs-12 col-sm-2">
								<input type="text" class="form-control number right" value="4,500,000.00">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">สถานะโครงการ<span class="red">*</span></label>
							<div class="col-sm-9">
								<select name="sec_code" class="col-xs-12 col-sm-5">
									<option value="">--กรุณาระบุ--</option>
									<option value="" selected="selected">อยู่ในระหว่างดำเนินการ</option>
									<option value="">เสร็จสิ้น</option>
									<option value="">ยกเลิก</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">หมายเหตุ</label>
							<div class="col-sm-9">
								<textarea name="project_name" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">สร้างโดย</label>
							<div class="col-sm-9">
								นายทดสอบ  ทดสอบ  <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
								<br><span class="green">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right">แก้ไขล่าสุดโดย</label>
							<div class="col-sm-9">
								นายทดสอบ  ทดสอบ  <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
								<br><span class="green">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</span>
							</div>
						</div>
						<div class="clearfix form-actions">
							<label class="col-sm-3"></label>
							<div class="col-md-offset-3 col-md-9">
								<button class="btn btn-info" type="submit" data-dismiss="modal">
									<i class="ace-icon fa fa-check bigger-110"></i>
									บันทึก
								</button>

								&nbsp; &nbsp; &nbsp;
								<button id="btn-cancel-new" class="btn" type="button">
									<i class="ace-icon fa fa-undo bigger-110"></i>
									ย้อนกลับ
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".dv-standard").hide();
	$('#modal-form').on('shown.bs.modal', function () {
		  $("#dv-search-project").show();
			$("#dv-search-body").hide();
			$("#dv-new-project").hide();
	})

	$("#btn-show-search-project").click(function(){
			$("#dv-search-body").show();
	})

	$("#btn-new-project").click(function(){
			$("#dv-search-project").hide();
			$("#dv-new-project").show();
	})

	$("#btn-cancel-new").click(function(){
			$("#dv-new-project").hide();
			$("#dv-search-project").show();
			$("#dv-search-body").hide();
			$("#dv-new-project").hide();
	})

	$("select[name=standard_type]").click(function(){
		var standard_type = $(this).val();
		$(".dv-standard").hide();
		$(".dv-standard-"+standard_type).show();
	})
})
</script>
