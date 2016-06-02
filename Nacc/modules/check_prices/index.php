<!-- search section -->
<form method="get" enctype="multipart/form-data">
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-header">
					<h4 class="widget-title">ค้นหา</h4>
					<span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> </span>
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<div class="row">
							<div class="col-sm-3">
								<label for="search">สถานะการตรวจสอบ</label>
								<select name="sec_code" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="">รอการตรวจสอบ</option>
									<option value="">อยู่ในระหว่างการตรวจสอบ</option>
									<option value="">ตรวจสอบแล้ว ถูกต้อง</option>
									<option value="">ตรวจสอบแล้ว ไม่ถูกต้อง</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">ประเภทการจัดซื้อจัดจ้าง</label>
								<select name="sec_code" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="" >งานก่อสร้าง</option>
									<option value="" >การจ้างควบคุมงาน</option>
									<option value="" >การจ้างออกแบบ</option>
									<option value="" >การจ้างที่ปรึกษา</option>
									<option value="" >การจ้างงานวิจัยหรือเงินสนับสนุนให้ทุนการวิจัย</option>
									<option value="" >การจ้างพัฒนาระบบคอมพิวเตอร์</option>
									<option value="" >การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">ประเภทย่อย</label>
								<select name="sec_code" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="1">การจ้างให้จัดทำกิจกรรมหรือจัดงาน (Event)</option>
									<option value="1">การจ้างบริการ</option>
									<option value="1">เช่า</option>
									<option value="1">เช่าซื้อ</option>
									<option value="1">แลกเปลี่ยน</option>
								</select>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">กระทรวง</label>
								<select name="min_code" class="select2">
									<option value="">--แสดงทั้งหมด--</option>
									<option value="กระทรวงการคลัง">กระทรวงการคลัง</option>
									<option value="กระทรวงแรงงาน">กระทรวงแรงงาน</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">กรม</label>
								<select name="sec_code" class="select2">
									<option value="">แสดงทั้งหมด</option>
									<option value="">สำนักงานปลัดกระทรวงการคลัง</option>
								</select>
							</div>
							<div class="col-sm-3">
								<label for="search">ปีงบประมาณ</label>
								<select name="budget_year" class="form-control">
									<option value="">แสดงทั้งหมด</option>
									<option value="">2559</option>
									<option value="">2558</option>
									<option value="">2557</option>
								</select>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-4">
								<label for="search">ราคากลาง</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="l_budget" value="" placeholder="ขั้นต่ำ e.g. 99999" class="form-control number">
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="h_budget" value="" placeholder="สูงสุด e.g. 99999" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<label for="search">วันที่ประกาศราคากลาง</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="start_date" value="" placeholder="เริ่ม e.g. 01/01/2559" class="form-control number">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="end_date" value="" placeholder="สิ้นสุด  e.g. 31/12/2559" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-3">
								<label for="search">เลขคุมสัญญาโครงการ</label>
								<input type="text" name="search" value="" placeholder="ชื่อโครงการ" class="form-control">
							</div>
							<div class="col-sm-3">
								<label for="search">ชื่อโครงการ/ชื่อเรื่อง</label>
								<input type="text" name="search" value="" placeholder="ชื่อโครงการ" class="form-control">
							</div>
						</div>
						<div class="space space-8"></div>
						<div class="row">
							<div class="col-sm-12">
								<button name="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> แสดง
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.span -->
	</div>
</form>
<!-- End Search Section -->
<div class="space space-8"></div>
<?php if(@$_GET):?>
<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
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
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr role="row">
				<th class="center" rowspan="1" colspan="1">ลำดับ</th>
				<th>หน่วยงาน</th>
				<th width="250">โครงการ</th>
				<th width="250">เรื่อง</th>
				<th width="150">ประเภทการจัดซื้อจัดจ้าง</th>
				<th>งบประมาณ</th>
				<th>ราคากลาง</th>
				<th>ระดับความแตกต่าง</th>
				<th width="100">วันที่ประกาศ</th>
				<th>สถานะการตรวจสอบ</th>
				<th></th>
			</tr>
		</thead>

		<tbody>

			<tr role="row" class="odd">
				<td class="center " >1</td>
				<td class="">กรมการปกครอง </td>
				<td>โครงการมาตรการสำคัญเร่งด่วนเพื่อช่วยเหลือเกษตรการและคนยากจนในการเสริมความเข้มแข็งอย่างยั่งยืน กิจกรรมปลูกมะนาวในวงบ่อซีเมนต์ หมู่ที่ 1,5,6 ตำบลโพสังโฆ โดยวิธีตกลงราคา <br>(เลขคุมสัญญาโครงการ : 59036279422)</td>
				<td>ซื้อโครงการมาตรการสำคัญเร่งด่วนเพื่อช่วยเหลือเกษตรการและคนยากจนในการเสริมความเข้มแข็งอย่างยั่งยืน กิจกรรมปลูกมะนาวในวงบ่อซีเมนต์ หมู่ที่ 1,5,6 ตำบลโพสังโฆ โดยวิธีตกลงราคา</td>
				<td>การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</td>
				<td class="right">40,800,000</td>
				<td class="right">40,800,000</td>
				<td class="center"><label class="label label-sm label-success">ปกติ</label></td>
				<td>01/01/2559</td>
				<td class="center"><span class="label label-sm label-danger" style="height:auto;">ตรวจสอบแล้ว<br>ไม่ถูกต้อง</span></td>
				<td nowrap>
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</td>
			</tr>
			<tr role="row" class="event">
				<td class="center " >2</td>
				<td class="">กรมสนับสนุนบริการสุขภาพ</td>
				<td>โครงการซื้อโต๊ะ เก้าอี้สำนักงาน ชุดโต๊ะ เก้าอี้ ชุดโต๊ะหมู่บูชา และเครื่องเสียงห้องประชุมกรมสนับสนุนบริการสุขภาพ จำนวน 1 ชุด <br>(เลขคุมสัญญาโครงการ : 59036277592) </td>
				<td>ซื้อโต๊ะ เก้าอี้สำนักงาน ชุดโต๊ะ เก้าอี้ ชุดโต๊ะหมู่บูชา และเครื่องเสียงห้องประชุมกรมสนับสนุนบริการสุขภาพ จำนวน 1 ชุด</td>
				<td>การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</td>
				<td class="right"> 4,800,000</td>
				<td class="right"> 4,900,000</td>
				<td class="center"><label class="label label-sm label-warning">เฝ้าระวัง</label></td>
				<td>31/03/2559</td>
				<td class="center"><span class="label label-sm label-warning" style="height:auto;">อยู่ในระหว่าง<br>การตรวจสอบ</span></td>
				<td>
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td class="center " >3</td>
				<td class="">กรมทางหลวง </td>
				<td>โครงการจ้างเหมาพนักงานรักษาความปลอดภัยบริเวณสำนักงานแขวงทางหลวงเชียงใหม่ที่ ๓ และบ้านพัก ต.ดอนแก้ว อ.แม่ริม จ.เชียงใหม่ ตั้งแต่วันที่ ๑ ตุลาคม ๒๕๕๘ - ๓๐ กันยายน ๒๕๕๙</td>
				<td>สอบราคาจ้างเหมาพนักงานรักษาความปลอดภัยบริเวณสำนักงานแขวงทางหลวงเชียงใหม่ที่ ๓ และบ้านพัก ต.ดอนแก้ว อ.แม่ริม จ.เชียงใหม่ ตั้งแต่วันที่ ๑ ตุลาคม ๒๕๕๘ - ๓๐ กันยายน ๒๕๕๙</td>
				<td>การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</td>
				<td class="right">40,800,000</td>
				<td class="right">41,800,000</td>
				<td class="center"><label class="label label-sm label-danger">ผิดปกติ</label></td>
				<td>17/06/2558</td>
				<td class="center"><span class="label label-sm label-success" style="height:auto;">ตรวจสอบแล้ว<br>ถูกต้อง</span></td>
				<td nowrap="nowrap">
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
				</td>
			</tr>
			<tr role="row" class="event">
				<td class="center " >4</td>
				<td class="">กรมชลประทาน</td>
				<td>โครงการเช่ารถขุดชนิดตีนตะขาบจำนวน 1 รายการ</td>
				<td>เช่ารถขุดชนิดตีนตะขาบจำนวน 1 รายการ เลขที่ (ช)นพ.81/2559 ลงวันที่ 10 มีนาคม 2559 โดยวิธีตกลงราคา</td>
				<td>การจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง</td>
				<td class="right">351,316.20</td>
				<td class="right">351,316.20</td>
				<td class="center"><label class="label label-sm label-success">ปกติ</label></td>
				<td>21/03/2559</td>
				<td class="center"><span class="label label-sm label">รอการตรวจสอบ</span></td>
				<td>
					<a class="blue" href="<?php echo $current_page; ?>?mode=view"> <i class="ace-icon fa fa-search-plus bigger-130"></i> </a>
					<a class="green" href="<?php echo $current_page; ?>?mode=edit"> <i class="ace-icon fa fa-pencil bigger-130"></i> </a>
					<a class="red btn_delete" href="<?php echo $current_page; ?>?mode=delete"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a>
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
<?php endif; ?>
<div class="space space-8"></div>
