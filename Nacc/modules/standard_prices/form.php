<style>
.table-nobordered{
	margin-bottom:0px;
}
.table-nobordered td{
	border-top:0px!important;
	padding:0px!important;

}
</style>
<form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page;?>">
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
	<div class="dv-main-standard">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">รหัสโครงการ</label>
		<div class="col-xs-12 col-sm-5 col-lg-2">
			<input type="text" name="project_id" class="form-control" readonly="true" value="59046158745">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ชื่อโครงการ<span class="red">*</span></label>
		<div class="col-xs-12 col-sm-9 col-lg-5">
			<a href="#modal-form" role="button" class="btn btn-sm btn-default" data-toggle="modal"><i class="fa fa-search"></i> เลือกโครงการ </a>
			<textarea name="project_name" class="form-control" readonly="readonly">โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง แขวงสามเสนใน เขตพญาไท จังหวัดกรุงเทพมหานคร</textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">เรื่อง<span class="red">*</span></label>
		<div class="col-xs-12 col-sm-9 col-lg-5">
			<textarea name="project_name" class="form-control" >ซื้อครุภัณฑ์โครงการปรับปรุงระบบสำรองข้อมูลเชื่อมโยงหน่วยงานในสังกัดกระทรวงการคลัง</textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">เงินงบประมาณที่ได้รับจัดสรร<span class="red">*</span></label>
		<div class="col-xs-5 col-sm-3 col-lg-2">
			<div class="input-group">
			<input type="text" name="budget" class="form-control right" value="450,000.00" readonly="readonly">
			<span class="input-group-addon">บาท</span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ประเภทการจัดซื้อจัดจ้าง<span class="red">*</span></label>
		<div class="col-xs-12 col-sm-9 col-lg-5">
			<select name="standard_type" class="select2">
				<option value="">--กรุณาระบุ--</option>
				<option value="1">งานก่อสร้าง</option>
				<option value="2" >การจ้างควบคุมงาน</option>
				<option value="3" >การจ้างออกแบบ</option>
				<option value="4" >การจ้างที่ปรึกษา</option>
				<option value="5" >การจ้างงานวิจัยหรือเงินสนับสนุนให้ทุนการวิจัย</option>
				<option value="6" >การจ้างพัฒนาระบบคอมพิวเตอร์</option>
				<option value="7" >การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ประเภทย่อย<span class="red">*</span></label>
		<div class="col-xs-12 col-sm-9 col-lg-5">
			<select name="sec_code" class="select2">
				<option value="">--กรุณาระบุ--</option>
				<option value="1">ซื้อ</option>
				<option value="1">เช่าซื้อ</option>
				<option value="1">เช่า</option>
				<option value="1">การจ้างจัดกิจกรรมหรือจัดงาน (Event)</option>
				<option value="1">การจ้างบริการ</option>
				<option value="1">แลกเปลี่ยน</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ราคากลาง (ราคาอ้างอิง)<span class="red">*</span></label>
		<div class="col-xs-5 col-sm-3 col-lg-2">
			<div class="input-group">
			<input type="text" name="budget" class="form-control right" value="450,000.00">
			<span class="input-group-addon">บาท</span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">วันที่อนุมัติราคากลาง<span class="red">*</span></label>
		<div class="col-xs-6 col-sm-6 col-lg-2">
			<div class="input-group">
				<input type="text" class="form-control" name="publish_date" value="" placeholder="31/01/2559" data-provide="datepicker" data-date-language="th-th"></input>
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">วันที่ประกาศราคากลาง<span class="red">*</span></label>
		<div class="col-xs-6 col-sm-6 col-lg-2">
			<div class="input-group">
				<input type="text" class="form-control" name="publish_date" value="" placeholder="31/01/2559" data-provide="datepicker" data-date-language="th-th"></input>
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ขอบเขตดำเนินการ (TOR)<span class="red">*</span></label>
		<div class="col-xs-5 col-sm-3 col-lg-6">
			<div class="input-group">
			  <input type="file" class="form-control btn btn-sm" style="padding-top:5px;" accept=".pdf,.zip">
			  <span class="input-group-addon">วันที่ประกาศ TOR</span>
				<input type="text" class="form-control" name="publish_date" value="" placeholder="31/01/2559" data-provide="datepicker" data-date-language="th-th"></input>
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
	</div>
	<div class="dv-standard dv-standard-1">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">บัญชีประมาณการราคากลาง</label>
			<div class="col-sm-9">
				<a name="btn_new_file" class="btn btn-sm btn-success"> เพิ่มรายการเอกสารแนบ </a>
				<table style="margin-bottom:0px!important;" class="table table-striped table-bordered">
					<tr>
						<td width="30" valign="middle" align="center">1</td>
						<td><a class="btn btn-sm btn-primary"> <i class="fa fa-download"></i> แบบแสดงรายการปริมาณงานและราคา.pdf </a><a class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
					</tr>
					<tr>
						<td width="30" valign="middle" align="center">2</td>
	          <td><a class="btn btn-sm btn-primary"> <i class="fa fa-download"></i> แบบสรุปค่าก่อสร้าง.pdf </a><a class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
	        </tr>
					<tr>
						<td width="30" valign="middle" align="center">3</td>
						<td>
						<input type="file" class="btn btn-sm" accept=".pdf,.zip">
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อคณะกรรมการกำหนดราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-2">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าตอบแทนบุคลากร<span class="red">*</span></label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="450,000.00">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับหัวหน้าโครงการ<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับผู้ดำเนินงาน<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับผู้ช่วย<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าวัสดุอุปกรณ์/ค่าวัสดุ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายอื่น ๆ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อผู้รับผิดชอบในการกำหนดค่าใช้จ่าย/ดำเนินการ/ขอบเขตดำเนินการ (TOR)<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ที่มาของราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-3">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าตอบแทนบุคลากร<span class="red">*</span></label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="450,000.00">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับหัวหน้าโครงการ<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับผู้ดำเนินงาน<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ระดับผู้ช่วย<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าวัสดุอุปกรณ์/ค่าวัสดุ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายอื่น ๆ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อผู้รับผิดชอบในการกำหนดค่าใช้จ่าย/ดำเนินการ/ขอบเขตดำเนินการ (TOR)<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ที่มาของราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-4">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าตอบแทนบุคลากร<span class="red">*</span></label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="450,000.00">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ประเภทที่ปรึกษา<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-7">
				<table class="table table-nobordered" style="margin-top:8px;">
					<tr>
						<td>
							เลือกกลุ่มงาน
							<select class="select2">
								<option value="">กรุณาระบุ</option>
								<option value="" selected="selected">กลุ่มงานวิชาชีพทั่วไป</option>
								<option value="">กลุ่มงานวิชาชีพเฉพาะ</option>
								<option value="">กลุ่มงานเชียวชาญเฉพาะ</option>
							</select>
						</td>
						<td>
							เลือกสาขา
							<select class="select2">
								<option value="">ด้านการบริหารจัดการ</option>
								<option value="">ด้านประชาสัมพันธ์</option>
							</select>
						</td>
						<td style="vertical-align: bottom;">
							<button type="button" name="btn_add" class="btn btn-sm btn-info">
								<i class="fa fa-plus"></i> เพิ่ม
							</button>
						</td>
					</tr>
				</table>
				<table class="table table-bordered">
					<tr>
						<th>กลุ่มงาน</th>
						<th>สาขา</th>
						<th>ลบ</th>
					</tr>
					<tr>
						<td>กลุ่มงานวิชาชีพทั่วไป</td>
						<td>ด้านการบริหารจัดการ</td>
						<td >
							<button type="button" name="btn_add" class="btn btn-sm btn-danger">
								<i class="fa fa-trash"></i> ลบ
							</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">คุณสมบัติที่ปรึกษา<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">จำนวนที่ปรึกษา<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าวัสดุอุปกรณ์</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายในการเดินทางไปต่างประเทศ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายอื่น ๆ</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อผู้รับผิดชอบในการกำหนดค่าใช้จ่าย/ดำเนินการ/ขอบเขตดำเนินการ (TOR)<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ที่มาของราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-5">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">หมวดค่าตอบแทน<span class="red">*</span></label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="450,000.00">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ประเภทนักวิจัย<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-8">
				<ul style="column-count:3;list-style:none;margin-top:8px;margin-left:0px;">
					<li><input type="checkbox">สาขาวิทยาศาสตร์กายภาพและคณิตศาสตร์</li>
					<li><input type="checkbox">สาขาวิทยาศาสตร์การแพทย์</li>
					<li><input type="checkbox">สาขาวิทยาศาสตร์เคมีและเภสัช</li>
					<li><input type="checkbox">สาขาเกษตรและชีววิทยา</li>
					<li><input type="checkbox">สาขาวิศวกรรมศาสตร์และอุตสาหกรรมวิจัย</li>
					<li><input type="checkbox">สาขาปรัชญา</li>
					<li><input type="checkbox">สาขานิติศาสตร์</li>
					<li><input type="checkbox">สาขารัฐศาสตร์และรัฐประศาสนศาสตร์</li>
					<li><input type="checkbox">สาขาสังคมวิทยา</li>
					<li><input type="checkbox">สาขาเทคโนโลยีสารสนเทศและนิเทศศาสตร์</li>
					<li><input type="checkbox">สาขาการศึกษา</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">คุณสมบัตินักวิจัย<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">จำนวนนักวิจัย<span class="red">*</span></label>
			<div class="col-xs-3 col-sm-3 col-lg-2">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">หมวดค่าจ้าง</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">หมวดค่าใช้สอย</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าวัสดุ</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าครุภัณฑ์</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายในการศึกษาดูงานหรือค้นคว้าข้อมูลไปต่างประเทศ (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-5 col-lg-3">
				<div class="input-group">
					<input type="text" name="budget" class="form-control right" value="">
					<span class="input-group-addon">คน</span>
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายอื่น ๆ</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชือเจ้าหน้าที่ของรัฐ (ผู้รับผิดชอบ)ที่เกี่ยวกับการจ้างงานวิจัยหรือสนับสนุนทุนวิจัย และTOR<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ที่มาของราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="price_source" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-6">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่า Hardware</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่า Software</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าพัฒนาระบบ</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ค่าใช้จ่ายอื่น ๆ</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<div class="input-group">
				<input type="text" name="budget" class="form-control right" value="">
				<span class="input-group-addon">บาท</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อผู้รับผิดชอบในการกำหนดค่าใช้จ่าย/ดำเนินการ/ขอบเขตดำเนินการ (TOR)<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ที่มาของราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="price_source" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="dv-standard dv-standard-7">
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">ราคาต่อหน่วย (ถ้ามี)</label>
			<div class="col-xs-5 col-sm-3 col-lg-2">
				<input type="file" class="btn btn-sm" accept=".pdf,.zip">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">แหล่งที่มาของราคากลาง</label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="price_source" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">รายชื่อเจ้าหน้าที่ผู้กำหนดราคากลาง<span class="red">*</span></label>
			<div class="col-xs-12 col-sm-9 col-lg-5">
				<textarea name="committee_list" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">URL ข้อมูลราคากลางที่ประกาศบนเว็บไซต์ของหน่วยงาน<span class="red">*</span></label>
		<div class="col-xs-5 col-sm-3 col-lg-6">
			<textarea class="form-control"></textarea>
			<a href="http://www.google.go.th" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-external-link"></i> ไปยังหน้าเว็บไซต์</a>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">URL ข้อมูลราคากลางที่ประกาศบนเว็บไซต์ e-GP<span class="red">*</span></label>
		<div class="col-xs-5 col-sm-3 col-lg-6">
			<textarea class="form-control"></textarea>
			<a href="http://www.google.go.th" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-external-link"></i> ไปยังหน้าเว็บไซต์</a>
		</div>
	</div>
	<hr>
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
			<a href="<?php echo $current_page;?>">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				ย้อนกลับ
			</button> </a>
		</div>
	</div>
</form>
<div class="space space-8"></div>
<div id="modal-form" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content" style="width:750px!important;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="blue bigger">ระบุโครงการที่ต้องการบันทึกข้อมูลราคากลาง</h4>
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
	//$(".dv-standard-5").show();
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
