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
      <span class="title-law1">ตรวจสอบเลขคุมสัญญา </span>
      <div class="line1">&nbsp;</div>

      <div class="panel panel-default">
        <div class="panel-heading">ค้นหา</div>
        <div class="panel-body">
          <form>
          <div class="row">
            <div class="col-sm-5">
              <label for="search">เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน</label>
              <input name="comp_id" type="text" class="form-control" required="" value="3989248799123">
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
<?php if(@$_GET['comp_id']!=''):?>
      <div class="panel panel-primary">
        <div class="panel-body" >
          <b>เลขประจำตัวผู้เสียภาษี/เลขประจำตัวประชาชน : </b> <b style="color:blue">3989248799123</b><br>
          <b>ชื่อคู่สัญญา : </b> <b style="color:blue">บริษัท ทดสอบ จำกัด</b>
        </div>
      </div>

      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>ลำดับ</th>
          <th>เลขที่สัญญา</th>
          <th>เลขคุมสัญญา</th>
          <th style="width:280px;">ชื่อสัญญา</th>
          <th >มูลค่าสัญญา</th>
          <th style="width:280px;">หน่วยงานเจ้าของสัญญา</th>
          <th style="width:200px;">แหล่งที่มา</th>
        </tr>
        <tr>
          <td align="center">1</td>
          <td>3450009466</td>
          <td>N570113144</td>
          <td>ซื้อรถประจำตำแหน่งผู้บริหาร</td>
          <td align="right">3,940,000.00</td>
          <td align="center">ฝ่ายจัดหางานส่วนกลาง 1</td>
          <td >สำนักงาน ป.ป.ช.	</td>
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
