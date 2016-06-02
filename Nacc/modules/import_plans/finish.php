<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $current_page;?>?mode=confirm">
	<p class="alert alert-info">
		 <i class="ace-icon fa fa-check"></i> ทำการอัพโหลดไฟล์เสร็จสมบูรณ์ <br>การนำเข้าข้อมูลระบบจำทำการอัพโหลดไฟล์ขึ้นไปที่เซิฟเวอร์ และจะเริ่มดำเนินการนำเข้าข้อมูลเมื่อถึงเวลาที่ผู้ดูแลระบบได้ทำการกำหนดไว้
	</p>
	<p class="alert alert-success">
		 <i class="ace-icon fa fa-check"></i> ทำการนำเข้าข้อมูลเสร็จสมบูรณ์
	</p>
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<a href="<?php echo $current_page; ?>?mode=list">
				<button class="btn" type="button">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					กลับไปหน้ารายการ
				</button> </a>
			</div>
		</div>
</form>
<div class="space space-8"></div>
