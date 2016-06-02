<html>
<head>
    <?php include 'layout/_meta.php';?>
  </head>
  <body>
<div class="navbar navbar-default navbar-static-top" id="top">
<div class="container">
    <?php include 'layout/_header.php';?>
    <?php include 'layout/_menu.php';?>

    <div id="news-law" style="min-height:550px;">
      <span class="title-law1">ประกาศราคากลาง</span>
      <div class="line1">&nbsp;</div>

      <div class="panel panel-default">
        <div class="panel-heading">ค้นหา</div>
        <div class="panel-body">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <label for="search">หน่วยงาน</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="space space-8"></div>
          <div class="row">
            <div class="col-sm-12">
              <label for="search">เลขที่โครงการ/รายการ</label>
              <input type="text" name="search" value="" placeholder="" class="form-control">
            </div>
          </div>
          <div class="space space-8"></div>
          <div class="row">
            <div class="col-sm-7">
              <label for="search">วันที่ประกาศราคากลาง</label>
              <div class="input-group">
                <span class="input-group-addon">ระหว่าง</span>
                <input type="text" name="start_date" value="" placeholder="01/01/2559" class="form-control" data-provide="datepicker" data-date-language="th-th">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <span class="input-group-addon">ถึง</span>
                <input type="text" name="end_date" value="" placeholder="31/12/2559" class="form-control" data-provide="datepicker" data-date-language="th-th">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="space-8"></div>
          <div class="row">
            <div class="col-sm-12">
              <button name="submit" class="btn btn-primary" value="submit">
                <i class="fa fa-search"></i> แสดง
              </button>
            </div>
          </div>
          </form>
        </div>
      </div>
      <?php if(@$_GET['submit']!=''):?>
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>ลำดับ</th>
          <th style="width:280px;">หน่วยงาน</th>
          <th>เรื่อง</th>
          <th>วันที่ประกาศ</th>
          <th>ราคากลาง</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td>องค์การบริหารส่วนตำบลแม่ระกา</td>
          <td><a href="standard_price_detail">จ้างโครงการต่อเติมอาคารศูนย์พัฒนาเด็กเล็ก ตำบลแม่ระกา อำเภอวังทอง จังหวัดพิษณุโลก โดยวิธีตกลงราคา (เลขที่โครงการ : 59055055679)</a></td>
          <td align="center">26/05/2559</td>
          <td align="right">136,200.00</td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td>กรมทรัพยากรน้ำ</td>
          <td><a href="standard_price_detail">ประกวดราคาจ้างโครงการซ่อมปรับปรุงระบบตรวจวัดสภาพน้ำทางไกลอัตโนมัติ 4 ลุ่มน้ำ รายการซ่อมปรับปรุงระบบตรวจวัดสภาพน้ำทางไกลอัตโนมัติ ในพื้นที่ลุ่มน้ำบางปะกง-ปราจีนบุรี โดยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding) (เลขที่โครงการ : 58096024388)</a></td>
          <td align="center">09/10/2558</td>
          <td align="right">12,028,000.00</td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td>องค์การบริหารส่วนตำบลถ้ำพรรณรา</td>
          <td><a href="standard_price_detail">ประกวดราคาจ้างก่อสร้างถนนคอนกรีตเสริมเหล็ก สายสี่แยกบ้านโพธิ์ประสิทธิ์ หมู่ที่ 7 ด้วยวิธีการทางอิเล็กทรอนิกส์ (เลขที่โครงการ : 59045028693)</a></td>
          <td align="center">26/04/2559</td>
          <td align="right">620,000.00</td>
        </tr>
        <tr>
          <td align="center">4</td>
          <td>สำนักงานหลักประกันสุขภาพแห่งชาติ</td>
          <td><a href="standard_price_detail">จ้างเหมาบำรุงรักษาระบบบริหารจัดการความมั่งคงปลอดภัยสารสนเทศ (Outsource Security) โดยวิธีกรณีพิเศษ (เลขที่โครงการ : 58085202766)</a></td>
          <td align="center">25/08/2558</td>
          <td align="right">1,440,000.00</td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td>มหาวิทยาลัยเชียงใหม่</td>
          <td><a href="standard_price_detail">ซื้อวัสดุของใช้ในการแพทย์ (เวชภัณฑ์) จำนวน7 รายการ โดยวิธีตกลงราคา (เลขที่โครงการ : 59055069188)</a></td>
          <td align="center">26/05/2559</td>
          <td align="right">179,610.20</td>
        </tr>
        <tr>
          <td align="center">6</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">7</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">8</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">9</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">10</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 50 รายการ 5 หน้า
			</div>
		</div>
		<div class="col-xs-6" style="text-align:right;">
			<div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
				<ul class="pagination" style="margin:0px!important;">
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
    <?php endif;?>
	</div>
</div>
      <?php include 'layout/_footer.php';?>
</div>
</body>
</html>
