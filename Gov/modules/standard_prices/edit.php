<form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page; ?>">
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-header widget-header-flat">
					<h4 class="smaller">หน่วยงาน </h4>
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<div class="row">
							<div class="col-xs-4">
								<label>กระทรวง<span class="red">*</span></label>
								<div class="">
									<select name="sec_code" class="form-control">
										<option value="">--กรุณาระบุ--</option>
										<option value="" selected="selected">กระทรวงการคลัง</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
								<label>กรม<span class="red">*</span></label>
								<div class="">
									<select name="sec_code" class="form-control">
										<option value="">--กรุณาระบุ--</option>
										<option value="" selected="selected">สำนักงานปลัดกระทรวงการคลัง</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
								<label>หน่วยงาน<span class="red">*</span></label>
								<div class="">
									<select name="sec_code" class="form-control">
										<option value="">--กรุณาระบุ--</option>
										<option value="" selected="selected">สำนักบริหารงานกลาง</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space space-8"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสโครงการ</label>
		<div class="col-sm-9">
			<input type="text" name="project_id" value="" class="col-xs-12 col-sm-5" readonly="true">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ชื่อโครงการ<span class="red">*</span></label>
		<div class="col-sm-9">
			<button type="button" name="btn_search">
				<i class="fa fa-search"></i> เลือกโครงการ
			</button>
			<textarea name="project_name" class="form-control" readonly="readonly">โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">เงินงบประมาณที่ได้รับจัดสรร<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="text" name="budget" class="col-xs-12 col-sm-3 right" readonly="readonly">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ประเภทการจัดซื้อจัดจ้าง<span class="red">*</span></label>
		<div class="col-sm-9">
			<select name="sec_code" class="col-xs-12 col-sm-5">
				<option value="">--กรุณาระบุ--</option>
				<option value="" selected="selected">งานก่อสร้าง</option>
				<option value="" >การจ้างควบคุมงาน</option>
				<option value="" >การจ้างออกแบบ</option>
				<option value="" >การจ้างที่ปรึกษา</option>
				<option value="" >การจ้างงานวิจัยหรือเงินสนับสนุนให้ทุนการวิจัย</option>
				<option value="" >การจ้างพัฒนาระบบคอมพิวเตอร์</option>
				<option value="" >การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ราคากลาง (ราคาอ้างอิง)<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="text" name="budget" class="col-xs-12 col-sm-3 right">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">วันที่ประกาศราคากลาง<span class="red">*</span></label>
		<div class="col-sm-9">
			<div class="input-group col-xs-3">
				<input type="text" class="form-control" name="publish_date" value="" placeholder="31/01/2559">
				</input>
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง<span class="red">*</span></label>
		<div class="col-sm-9">
			<table style="margin-bottom:0px!important;" class="table table-striped table-bordered table-condensed">
				<tr>
					<td>
					<input type="file" class="btn btn-sm" accept=".pdf">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">เอกสารประกอบการเผยแพร่<span class="red">*</span></label>
		<div class="col-sm-9">
			<a name="btn_new_file" class="btn btn-sm btn-success"> เพิ่มรายการเอกสารแนบ </a>
			<table style="margin-bottom:0px!important;" class="table table-striped table-bordered">
				<tr>
					<td><a class="btn btn-sm btn-primary"> <i class="fa fa-download"></i> สรุปผลการประมาณราคาก่อสร้าง.pdf </a><a class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
				</tr>
				<tr>
					<td><a class="btn btn-sm btn-primary"> <i class="fa fa-download"></i> แบบประเมินราคางานก่อสร้างทาง สะพาน และท่อเหลี่ยม.pdf </a><a class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
				</tr>
				<tr>
					<td>
					<input type="file" class="btn btn-sm" accept=".pdf,.zip">
					</td>
				</tr>
			</table>

		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 right">สถานะการตรวจสอบราคากลาง</label>
		<div class="col-sm-9">
			<span class="label label-danger">ตรวจสอบแล้วไม่ถูกต้อง รอการแก้ไข</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 right">หมายเหตุ</label>
		<div class="col-sm-9">
			รายการเอกสารที่ใช้ในการเผยแพร่ราคากลางไม่ครบถ้วน
		</div>
	</div>
	<hr>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">สร้างโดย</label>
		<div class="col-sm-9">
			นายทดสอบ  ทดสอบ <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
			<br>
			<span class="green">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">แก้ไขล่าสุดโดย</label>
		<div class="col-sm-9">
			นายทดสอบ  ทดสอบ <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
			<br>
			<span class="green">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</span>
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
</form>
<div class="space space-8"></div>