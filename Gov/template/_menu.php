<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.check('main-container', 'fixed')
		} catch(e) {
		}
	</script>

	<!-- #section:basics/sidebar.horizontal -->
	<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
		<script type="text/javascript">
			try {
				ace.settings.check('sidebar', 'fixed')
			} catch(e) {
			}
		</script>
		<ul class="nav nav-list">
			<li id="li_menu_home" class="hover" >
				<a href="front"> <i class="menu-icon fa fa-home"></i> <span class="menu-text"> หน้าแรก </span> </a>
				<b class="arrow"></b>
			</li>

			<li  id="li_menu_plans" class="hover">
				<a href="#" id="menu_plan" class="dropdown-toggle"> <i class="menu-icon fa fa-university"></i> <span class="menu-text"> แผนประจำปี </span> <b class="arrow fa fa-angle-down"></b> </a>

				<b class="arrow"></b>

				<ul class="submenu">

					<li class="hover">
						<a href="plans"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลแผนประจำปี </a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li id="li_menu_standard_prices" class="hover">
				<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> ราคากลาง </span> <b class="arrow fa fa-angle-down"></b> </a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="hover">
						<a href="standard_prices"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลราคากลาง </a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li id="li_menu_contracts" class="hover">
				<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-pencil-square-o"></i> <span class="menu-text"> คู่สัญญา </span> <b class="arrow fa fa-angle-down"></b> </a>

				<b class="arrow"></b>

				<ul class="submenu">
					<li class="hover">
						<a href="contracts"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลคู่สัญญา </a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>
<li id="li_menu_imports" class="hover">
	<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-terminal"></i> <span class="menu-text">นำเข้าข้อมูล</span> <b class="arrow fa fa-angle-down"></b> </a>
	<b class="arrow"></b>
	<ul class="submenu">
		<li class="hover">
			<a href="import_plans"> <i class="menu-icon fa fa-caret-right"></i> นำเข้าข้อมูลแผนประจำปี </a>
			<b class="arrow"></b>
		</li>
		<li class="hover">
			<a href="import_egp"> <i class="menu-icon fa fa-caret-right"></i> นำเข้าข้อมูลคู่สัญญา
			<br>
			(จากระบบ e-GP)</a>
			<b class="arrow"></b>
		</li>

		<li class="hover">
			<a href="import_nhso"> <i class="menu-icon fa fa-caret-right"></i> นำเข้าข้อมูลคู่สัญญา
			<br>
			(จาก สปสช.) </a>
			<b class="arrow"></b>
		</li>
	</ul>
</li>
			<li id="li_menu_report" class="hover">
				<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-bar-chart-o"></i> <span class="menu-text"> รายงาน</span> <b class="arrow fa fa-angle-down"></b> </a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> รายงานแผนประจำปี <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="reports.php?mode=report_1">รายงานสรุปจำนวนโครงการและงบประมาณ </a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> รายงานราคากลาง <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="reports.php?mode=report_2"> รายงานสรุปจำนวนโครงการที่มีและไม่มีการประกาศราคากลาง</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> รายงานข้อมูลคู่สัญญา <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="reports.php?mode=report_3"> รายงานรายชื่อคู่สัญญาโครงการตามช่วงของมูลค่าสัญญา</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> รายงานข้อมูลบัญชี
						<br>
						รายรับรายจ่าย <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="reports.php?mode=report_4"> รายงานสรุปการยื่นข้อมูลบัญชีรายรับรายจ่าย</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover">
						<a href="hist_log"> <i class="menu-icon fa fa-caret-right"></i>รายงานประวัติการใช้งาน </a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li id="li_menu_settings" class="hover">
				<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-cogs"></i> <span class="menu-text"> ตั้งค่าระบบ</span> <b class="arrow fa fa-angle-down"></b> </a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="hover">
						<a href="usergroups"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลกลุ่มผู้ใช้ </a>
						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="users"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลผู้ใช้
						<br>
						และกำหนดสิทธิ์ </a>
						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="ministrys"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลกระทรวง </a>
						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="sections"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลกรม </a>
						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="departments"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลหน่วยงาน </a>
						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="general_settings"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลการตั้งค่าทั่วไป </a>
						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลประเภทการจัดซื้อ<br>จัดจ้าง <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="pm_types"> ข้อมูลประเภทการจัดซื้อจัดจ้างหลัก</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="pm_sub_types"> ข้อมูลประเภทการจัดซื้อจัดจ้างย่อย</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover">
						<a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-caret-right"></i> ข้อมูลประเภทสัญญา <b class="arrow fa fa-angle-right"></b> </a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="ct_types"> ข้อมูลประเภทสัญญาหลัก</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="ct_sub_types"> ข้อมูลประเภทสัญญาย่อย</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>
			</li>

			<li id="li_menu_setting" class="hover">
				<a href="../portal" > <i class="menu-icon fa fa-power-off"></i> <span class="menu-text"> ออกจากระบบ</span> </a>
			</li>

		</ul><!-- /.nav-list -->
		<!-- #section:basics/sidebar.layout.minimize -->

		<!-- /section:basics/sidebar.layout.minimize -->
		<script type="text/javascript">
			try {
				ace.settings.check('sidebar', 'collapsed')
			} catch(e) {
			}
		</script>
	</div>
	<!-- /section:basics/sidebar.horizontal -->
