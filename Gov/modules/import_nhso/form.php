<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo $current_page; ?>?mode=list">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">เลือกไฟล์สำหรับนำเข้าข้อมูล <span class="red">*</span></label>
        <div class="col-sm-9">
            <input type="file" class="form-control" accept=".xml, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">หมายเหตุ </label>
        <div class="col-sm-9">
            <textarea class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"></label>
        <div class="col-sm-9">
            <div class="checkbox">
                <label>
                    <input name="form-field-checkbox" type="checkbox" class="ace">
                    <span class="lbl"> นำเข้าทันที เมื่อทำการอัพโหลดไฟล์</span> </label>
            </div>
        </div>
    </div>
    <div class="clearfix form-actions">
        <label class="col-sm-12 center red"> *สำหรับ การนำเข้าข้อมูลระบบจำทำการอัพโหลดไฟล์ขึ้นไปที่เซิฟเวอร์ และจะเริ่มดำเนินการนำเข้าข้อมูลเมื่อถึงเวลาที่ผู้ดูแลระบบได้ทำการกำหนดไว้ </label>
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon  fa fa-upload bigger-110"></i>
                อัพโหลดไฟล์
            </button>

            &nbsp; &nbsp; &nbsp;
            <a href="<?php echo $current_page; ?>?mode=list">
            <button class="btn" type="button">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                ย้อนกลับ
            </button> </a>
        </div>
    </div>
</form>
<div class="space space-8"></div>