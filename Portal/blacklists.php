<html>
<head>
    <?php include 'layout/_meta.php';?>
  </head>
  <body>
<div class="navbar navbar-default navbar-static-top" id="top">
<div class="container" style="min-height:1000px;">
    <?php include 'layout/_header.php';?>
    <?php include 'layout/_menu.php';?>

    <div id="news-law">
      <span class="title-law1">รายชื่อผู้ขาดคุณสมบัติการเป็นคู่สัญญากับหน่วยงานของรัฐ </span>
      <div class="line1">&nbsp;</div>

      <div class="panel panel-default">
        <div class="panel-heading">ค้นหา</div>
        <div class="panel-body">
          <form>
          <div class="row">
            <div class="col-sm-5">
              <label for="search">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</label>
              <input type="text" name="comp_id" class="form-control">
            </div>
            <div class="col-sm-7">
              <label for="search">ชื่อบุคคล/นิติบุคคล</label>
              <input type="text" class="form-control">
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
          <th style="width:280px;">ชื่อบุคคล/นิติบุคคล</th>
          <th style="width:280px;">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</th>
          <th>วันที่ประกาศ</th>
          <th>เลขที่คำสั่ง</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td>บริษัท ทดสอบระบบ จำกัด</td>
          <td>1234567890123</td>
          <td>26/07/2558</td>
          <td align="center">ปช.../...</td>          
        </tr>
        <tr>
          <td align="center">2</td>
          <td>บริษัท ทดสอบระบบ 2 จำกัด</td>
          <td>1234567890124</td>
          <td>26/07/2558</td>
          <td align="center">ปช.../...</td>
        </tr>
      </table>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 2 รายการ 1 หน้า
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
					<li class="paginate_button next disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
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
