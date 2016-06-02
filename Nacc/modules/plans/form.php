<form class="form-horizontal" role="form" enctype="multipart/form-data" action="plans">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสคุมโครงการ</label>
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
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				บันทึก
			</button>

			&nbsp; &nbsp; &nbsp;
			<a href="plans">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				ย้อนกลับ
			</button> </a>
		</div>
	</div>
</form>
<div class="space space-8"></div>
