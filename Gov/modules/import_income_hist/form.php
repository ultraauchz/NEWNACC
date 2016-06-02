<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $current_page;?>?mode=list">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">เลือกไฟล์สำหรับนำเข้าข้อมูล <span class="red">*</span></label>
		<div class="col-sm-9">
			<input type="file" class="form-control" accept=".xml, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
		</div>
	</div>
	<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">หมายเหตุ  </label>
        <div class="col-sm-9">
            <textarea class="form-control"></textarea>
        </div>
    </div>
	<div class="clearfix form-actions">
		<label class="col-sm-3"></label>
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				เริ่มการนำเข้า
			</button>

			&nbsp; &nbsp; &nbsp;
			<a href="<?php echo $current_page;?>?mode=list">
			<button class="btn" type="button">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				ย้อนกลับ
			</button> </a>
		</div>
	</div>
</form>
<div class="space space-8"></div>