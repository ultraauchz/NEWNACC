<form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo $current_page; ?>">
  <div class="row">
    <div class="col-sm-12">
      <fieldset>
        <legend>
          ข้อมูลคู่สัญญา
        </legend>
        <div id="company_info">
          <div class="col-xs-12 col-sm-12">
            <div class="form-group">
              <div class="col-xs-6 col-sm-2 control-label no-padding-right">
                เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน :
              </div>
              <div class="col-xs-6 col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control right number" value="3239857839012">
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
                <input type="text" class="form-control" value="บริษัท ทดสอบ 1234 จำกัด (มหาชน)">
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
                  <input type="text" class="form-control center" style="width:40px;" value="1">
                  <span class="input-group-addon">เดือน</span>
                  <select class="form-control" style="width:60px;">
                    <option value="">ก.พ.</option>
                  </select>
                  <span class="input-group-addon">ถึง</span>
                  <span class="input-group-addon">วันที่</span>
                  <input type="text" class="form-control center" style="width:40px;" value="31">
                  <span class="input-group-addon">เดือน</span>
                  <select class="form-control" style="width:60px;">
                    <option value="">ม.ค.</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <ul class="nav nav-tabs" id="recent-tab">
		<li class="active">
			<a data-toggle="tab" href="#pageone" aria-expanded="true">ข้อมูลสัญญาที่ยังไม่มีการยื่นบัญชีรายรับรายจ่าย</a>
		</li>
		<li class="">
			<a data-toggle="tab" href="#pagetwo" aria-expanded="false">ประวัติการยื่นบัญชีรายรับรายจ่าย</a>
		</li>
	</ul>
  <div class="tab-content">
	<div id="pageone" class="tab-pane active row">
  <div class="row">
    <div class="col-sm-12">

        <div style="min-width:800px!important;">
          <table class="table table-striped table-bordered table-hover">
        		<thead>
        			<tr role="row">
        				<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
        				<th>เลขที่สัญญา</th>
        				<th>เลขคุมสัญญา</th>
        				<th>หน่วยงาน</th>
        				<th >คู่สัญญา</th>
        				<th>โครงการ</th>
        				<th>มูลค่าสัญญา</th>
        				<th>วันสิ้นสุดรอบระยะเวลาบัญชี</th>
        				<th>ปี</th>
        				<th>สถานะการยื่น</th>
        				<th></th>
        			</tr>
        		</thead>

        		<tbody>
        			<tr role="row" class="odd">
        				<td class="center " >1</td>
        				<td class="">31/2557 </td>
        				<td class="">N570113812</td>
        				<td class="">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</td>
        				<td class="">บริษัท ทดสอบ จำกัด (มหาชน) </td>
        				<td>โครงการพัฒนาโครงสร้างพื้นฐานด้านเครือข่ายระยะที่ ๒ และโอนย้ายห้องแม่ข่ายศูนย์เทคโนโลยีสารสนเทศ</td>
        				<td>33,813,605.00</td>
        				<td class="center ">31/01</td>
        				<td class="">2559</td>
        				<td class=""><span class="label label-sm label-danger">เกินกำหนด</span><br>(160 วัน)</td>
        				<td nowrap="nowrap">
        					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
        				</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </div>
  </div>
  </div>
  <div id="pagetwo" class="tab-pane row">
    <div class="row">
      <div class="col-sm-12">
          <div style="min-width:800px!important;">
            <table class="table table-striped table-bordered table-hover">
        			<thead>
        				<tr role="row">
        					<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
        					<th>เลขที่สัญญา</th>
        					<th>เลขคุมสัญญา</th>
        					<th>หน่วยงาน</th>
        					<th >คู่สัญญา</th>
        					<th>โครงการ</th>
        					<th>มูลค่าสัญญา</th>
        					<th>วันสิ้นสุดรอบระยะเวลาบัญชี</th>
        					<th>วันที่ยื่น</th>
        					<th>รอบการยื่น</th>
        					<th>สถานะการยื่น</th>
        					<th>สถานะการตรวจสอบ</th>
        					<th></th>
        				</tr>
        			</thead>

        			<tbody>
        				<tr role="row" class="event">
        					<td class="center " >1</td>
        					<td class="">31/2557 </td>
        					<td class="">N570113812</td>
        					<td class="">สำนักงานปลัดกระทรวงการคลัง กระทรวงการคลัง</td>
        					<td class="">บริษัท ทดสอบ 1234 จำกัด (มหาชน)</td>
        					<td>โครงการพัฒนาโครงสร้างพื้นฐานด้านเครือข่ายระยะที่ ๒ และโอนย้ายห้องแม่ข่ายศูนย์เทคโนโลยีสารสนเทศ</td>
        					<td>33,813,605.00</td>
        					<td class="center ">31/01</td>
        					<td class="">15/02/2558</td>
        					<td class="">ยื่นปกติ ครั้งที่ 1/2558</td>
        					<td class=""><span class="label label-sm label-success">ปกติ</span><br>(15 วัน)</td>
        					<td class=""><span class="label label-sm label-success">ตรวจสอบแล้ว ถูกต้องครบถ้วนในสาระสำคัญ</span></td>
        					<td class=""><a href="#modal-form" rol="button" data-toggle="modal"><i class="ace-icon fa fa-search-plus bigger-130"></i></a></td>
        				</tr>
        			</tbody>
        		</table>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="space space-8"></div>
<fieldset>
  <legend>
    ข้อมูลการปลดทะเบียน Blacklist
  </legend>
  <div class="form-group">
		<div class="col-xs-6 col-sm-2 control-label no-padding-right">
			วันที่ออกหนังสือเพื่อขออนุมัติ :
		</div>
		<div class="col-xs-6 col-sm-2">
			<div class="input-group">
				<input type="text" class="form-control">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
  <div class="form-group">
		<div class="col-xs-6 col-sm-2 control-label no-padding-right">
			เลขที่คำสั่ง :
		</div>
		<div class="col-xs-3 col-sm-2">
			<input type="text" class="form-control">
		</div>
		<div class="col-xs-6 col-sm-2 control-label no-padding-right">
			วันที่ออกคำสั่ง :
		</div>
		<div class="col-xs-6 col-sm-2">
			<div class="input-group">
				<input type="text" class="form-control">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
  <div class="form-group">
    <div class="col-xs-6 col-sm-2 control-label no-padding-right">สาเหตุ</div>
    <div class="col-sm-9">
      <textarea name="project_name" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-6 col-sm-2 control-label no-padding-right">หมายเหตุ</div>
    <div class="col-sm-9">
      <textarea name="project_name" class="form-control"></textarea>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">สร้างโดย</label>
    <div class="col-sm-9">
      นายทดสอบ  ทดสอบ  <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
      <br><span class="green">ศูนย์กำกับดูแลการจัดซื้อจัดจ้างภาครัฐ สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ</span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right">แก้ไขล่าสุดโดย</label>
    <div class="col-sm-9">
      นายทดสอบ  ทดสอบ  <span class="blue">(เวลา 25/3/2559 10:20:29)</span>
      <br><span class="green">ศูนย์กำกับดูแลการจัดซื้อจัดจ้างภาครัฐ สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ</span>
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
</fieldset>

</form>
