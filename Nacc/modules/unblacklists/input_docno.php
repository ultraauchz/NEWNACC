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
							<div class="col-sm-4">
								<label for="search">วันที่ออกหนังสือเพื่อขออนุมัติ</label>
								<div class="input-group">
									<span class="input-group-addon">ระหว่าง</span>
									<input type="text" name="start_date" value="" placeholder="" class="form-control number">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<span class="input-group-addon">ถึง</span>
									<input type="text" name="end_date" value="" placeholder="" class="form-control number">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								</div>
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
<?php if(@$_GET):
?>
<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer" style="overflow-y:scroll;overflow-x:none;">
	<div class="row">
		<div class="col-xs-6">
			<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
				มีทั้งหมด 30 รายการ
			</div>
		</div>
	</div>
	<div style="min-width:800px!important;">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled " rowspan="1" colspan="1">ลำดับ</th>
					<td class="">เลขที่หนังสือออก</td>
					<td class="">วันที่ออกหนังสือ</td>
					<th>เลขประจำตัวผู้เสียภาษี</th>
					<th >คู่สัญญา</th>
					<td class="">วันที่ออกหนังสือเพื่อขออนุมัติ</td>
				</tr>
			</thead>

			<tbody>
				<tr role="row" class="odd">
					<td class="center " >1</td>
					<td><input type="text" class="form-control"></td>
					<td><div class="input-group">
						<input type="text" name="doc_date" value="" placeholder="" class="form-control number">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div></td>
					<td class="">1516478489356</td>
					<td class="">บริษัท AAA จำกัด (มหาชน) </td>
					<td>20/01/2559</td>
				</tr>
				<tr role="row" class="odd">
					<td class="center " >2</td>
					<td><input type="text" class="form-control"></td>
					<td><div class="input-group">
						<input type="text" name="doc_date" value="" placeholder="" class="form-control number">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div></td>
					<td class="">2424241515112</td>
					<td class="">บริษัท BBB จำกัด (มหาชน) </td>
					<td>20/01/2559</td>
				</tr>
				<tr role="row" class="odd">
					<td class="center " >3</td>
					<td><input type="text" class="form-control"></td>
					<td><div class="input-group">
						<input type="text" name="doc_date" value="" placeholder="" class="form-control number">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div></td>
					<td class="">1345684578903</td>
					<td class="">บริษัท CCC จำกัด (มหาชน) </td>
					<td>20/01/2559</td>
				</tr>
			</tbody>
		</table>
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
<?php endif; ?>
<div class="space space-8"></div>
