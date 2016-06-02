<html>
<head>
    <?php include 'layout/_meta.php';?>
  </head>
  <body>
<div class="navbar navbar-default navbar-static-top" id="top">
<div class="container">
    <?php include 'layout/_header.php';?>
    <?php include 'layout/_menu.php';?>

    <div id="news-law">
      <span class="title-law1">ข่าวประชาสัมพันธ์</span>
      <div class="line1">&nbsp;</div>

      <div class="panel panel-default">
        <div class="panel-heading">ค้นหา</div>
        <div class="panel-body">
        <form>
          <div class="row">
            <div class="col-sm-12">
              <label for="search">หัวข้อข่าว</label>
              <input type="text" name="search" value="" placeholder="" class="form-control">
            </div>
          </div>
          <div class="space space-8"></div>
          <div class="row">
            <div class="col-sm-7">
              <label for="search">วันที่ประกาศ</label>
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
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>ลำดับ</th>
          <th>วันที่ประกาศ</th>
          <th style="width:280px;">หัวข้อข่าว</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td align="center">10/07/2558</td>
          <td><a href="news_detail">ขอเชิญเข้าร่วมโครงการสัมมนา เรื่อง แนวทางปฏิบัติของคู่สัญญากับหน่วยงานรัฐตามหลักเกณฑ์และวิธีการจัดทำและแสดงบัญชีรายการรับจ่ายของโครงการฯ ส่วนภูมิภาค วันศุกร์ที่ 21 สิงหาคม 2558 ณ โรงแรมเจริญธานี ขอนแก่น จังหวัดขอนแก่น</a></td>
        </tr>
        <tr>
          <td align="center">2</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">3</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">4</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">5</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">6</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">7</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">8</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">9</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center">10</td>
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
	</div>


</div>
      <?php include 'layout/_footer.php';?>
</div>
</body>
</html>
