<form class="form-horizontal" role="form" enctype="multipart/form-data" action="plans">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสผู้ใช้</label>
		<div class="col-sm-9">
			<input type="text" name="project_id" value="" class="col-xs-12 col-sm-5" readonly="true">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">กลุ่มผู้ใช้</label>
		<div class="col-sm-9">
			<select class="col-sm-3">
				<option value="">--กรุณาระบุ--</option>
				<option value="">ผู้ดูแลระบบ</option>
				<option value="">ผู้บริหาร</option>
				<option value="">เจ้าหน้าที่ศูนย์กำกับดูแลการจัดซื้อจัดจ้าง</option>
				<option value="">เจ้าหน้าที่หน่วยงานภาครัฐ</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ชื่อ สกุล<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="text" class="col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">กระทรวง<span class="red">*</span></label>
		<div class="col-sm-3">
			<select id="min_code" name="min_code" class="form-control select2">
				<option value="">--กรุณาระบุ--</option>
				<option value="1">กระทรวงกลาโหม</option><option value="2">กระทรวงการคลัง</option><option value="3">กระทรวงการต่างประเทศ</option><option value="4">กระทรวงการท่องเที่ยวและกีฬา</option><option value="5">กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์</option><option value="6">กระทรวงเกษตรและสหกรณ์</option><option value="7">การทรวงคมนาคม</option><option value="8">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</option><option value="9">กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร</option><option value="10">กระทรวงพลังงาน</option><option value="11">กระทรวงพาณิชย์</option><option value="12">กระทรวงมหาดไทย</option><option value="13">กระทรวงยุติธรรม</option><option value="14">กระทรวงแรงงาน</option><option value="15">กระทรวงวัฒนธรรม</option><option value="16">กระทรวงวิทยาศาสตร์และเทคโนโลยี</option><option value="17">กระทรวงศึกษาธิการ</option><option value="18">กระทรวงสาธารสุข</option><option value="19">กระทรวงอุตสาหกรรม</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">กรม<span class="red">*</span></label>
		<div class="col-sm-3">
			<select id="min_code" name="min_code" class="form-control select2">
				<option value="">--กรุณาระบุ--</option>
				<option value="1">สำนักงานปลัดกระทรวง</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">หน่วยงาน</label>
		<div class="col-sm-3">
			<select id="min_code" name="min_code" class="form-control select2">
				<option value="">--กรุณาระบุ--</option>
				<option value="1">ศูนย์เทคโนโลยีสารสนเทศ</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Username<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="text" class="col-sm-1">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสผ่าน<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="password" class="col-sm-1">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ยืนยันรหัสผ่าน<span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="password" class="col-sm-1">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right"></label>
		<div class="col-sm-9">
			<input type="checkbox">
			เปิดการใช้งาน
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<fieldset>
				<legend>
					สิทธิ์การใช้งาน
				</legend>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<span class="input-group-addon">ระบบ</span>
							<select>
								<option value="">ระบบกำกับการจัดซื้อจัดจ้าง</option>
							</select>
						</div>
					</div>
				</div>
				<div class="space space-8"></div>
				<div class="row">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th width="250">เมนู</th>
								<th >สิทธิ์การใช้งาน</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th colspan="2"> แผนประจำปี </th>
							</tr>
							<tr>
								<td>ข้อมูลแผนประจำปี</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								เพิ่ม
								<input type="checkbox">
								แก้ไข
								<input type="checkbox">
								ลบ </td>
							</tr>
							<tr>
								<td>นำเข้าข้อมูลแผนประจำปี</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								นำเข้า
								<input type="checkbox">
								นำเข้าทันที </td>
							</tr>
							<tr>
								<th colspan="2">ราคากลาง</th>
							</tr>
							<tr>
								<td>ข้อมูลราคากลาง</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								เพิ่ม
								<input type="checkbox">
								แก้ไข
								<input type="checkbox">
								ลบ </td>
							</tr>
							<tr>
								<td>ตรวจสอบข้อมูลราคากลาง</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								แก้ไข
								<input type="checkbox">
								ลบ </td>
							</tr>
							<tr>
								<td>ประวัติการนำเข้าข้อมูลราคากลาง</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<th colspan="2">คู่สัญญา</th>
							</tr>
							<tr>
								<td>ข้อมูลคู่สัญญา</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								เพิ่ม
								<input type="checkbox">
								แก้ไข
								<input type="checkbox">
								ลบ </td>
							</tr>
							<tr>
								<td>นำเข้าข้อมูลคู่สัญญาจากระบบ e-GP</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								นำเข้า
								<input type="checkbox">
								นำเข้าทันที </td>
							</tr>
							<tr>
								<td>นำเข้าข้อมูลคู่สัญญาจาก สปสช.</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								นำเข้า
								<input type="checkbox">
								นำเข้าทันที </td>
							</tr>
							<tr>
								<td>ประวัติการส่งออกข้อมูลคู่สัญญาให้กรมสรรพากร</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<th colspan="2">บัญชีรายรับรายจ่าย</th>
							</tr>
							<tr>
								<td>ตรวจสอบบัญชีรายรับรายจ่าย</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								แก้ไข</td>
							</tr>
							<tr>
								<td>ข้อมูลคู่สัญญาที่ยังไม่มีการยื่นบัญชีรายรับรายจ่าย</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<td>ข้อมูลการขึ้น - ปลด แบล็คลิสต์คู่สัญญา</td>
								<td>
								<input type="checkbox">
								ดู
								<input type="checkbox">
								เพิ่ม
								<input type="checkbox">
								แก้ไข
								<input type="checkbox">
								ลบ </td>
							</tr>
							<tr>
								<td>ประวัติการนำเข้าข้อมูลบัญชีรายรับรายจ่าย</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<th colspan="2">รายงาน</th>
							</tr>
							<tr>
								<td>รายงานแผนประจำปี</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<td>รายงานราคากลาง</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<td>รายงานข้อมูลคู่สัญญา</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
							<tr>
								<td>รายงานข้อมูลบัญชีรายรับรายจ่าย</td>
								<td>
								<input type="checkbox">
								ดู </td>
							</tr>
						</tbody>
					</table>
				</div>
			</fieldset>
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