<form class="form-horizontal" role="form" enctype="multipart/form-data" action="plans">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ประเภทสัญญาหลัก<span class="red">*</span></label>
		<div class="col-sm-3">
			<select class="form-control">
				<option value="">--กรุณาระบุ--</option>
				<option value="">สัญญาที่เกี่ยวกับการจัดหาพัสดุหรือการพัสดุ</option>
				<option value="">สัญญาสัมปทาน</option>
				<option value="">สัญญาให้ทุนสนับสนุนเพื่อการวิจัย</option>
				<option value="">สัญญาให้ทุนสนับสนุนเพื่อดำเนินกิจกรรมอย่างใดอย่างหนึ่ง</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">ประเภทสัญญาย่อย<span class="red">*</span></label>
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
			<a href="<?php echo $current_page; ?>">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				ย้อนกลับ
			</button> </a>
		</div>
	</div>
</form>
<div class="space space-8"></div>