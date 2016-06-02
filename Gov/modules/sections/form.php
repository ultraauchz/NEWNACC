<form class="form-horizontal" role="form" enctype="multipart/form-data" action="plans">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสกรม</label>
		<div class="col-sm-5">
			<input type="text" name="project_id" value="" class="col-xs-12 col-sm-3" readonly="true">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">กระทรวง<span class="red">*</span></label>
		<div class="col-sm-3">
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
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ชื่อกรม<span class="red">*</span></label>
		<div class="col-sm-3">
			<input type="text" class="form-control">
		</div>
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
			<a href="plans">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				ย้อนกลับ
			</button> </a>
		</div>
	</div>
</form>
<div class="space space-8"></div>