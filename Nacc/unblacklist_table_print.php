<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<style>

table{
  font-size:16px;
}
</style>
<script language="javascript">
function printpr()
{
var OLECMDID = 7;
/* OLECMDID values:
* 6 - print
* 7 - print preview
* 1 - open window
* 4 - Save As
*/
var PROMPT = 1; // 2 DONTPROMPTUSER
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
WebBrowser1.ExecWB(OLECMDID, PROMPT);
WebBrowser1.outerHTML = "";
}
</script>
</head>

<body style="">

<div id="page">
<div style="text-align:center">
  <input type="button" value="Print this page" onclick="window.print()">
  <input type="button" value="ส่งออกเป็นไฟล์ Word" >
  <input type="button" value="ส่งออกเป็นไฟล์ PDF" >
</div>

<div id="print">
<div class="right" style="font-size:14px;">1/1</div>
<div class="logo">
  <strong>รายชื่อแนบ</strong>
</div>
<div>
  <table border="1" cellpadding="2" cellspacing="0" width="100%">
    <tr>
      <th>ลำดับ</th>
      <th>เลขที่หนังสือออก</th>
      <th>ชื่อผู้ประกอบการ</th>
    </tr>
    <tr>
      <td align="center">1</td>
      <td>ที่ ปช 0035/</td>
      <td>บริษัท ทดสอบ จำกัด </td>
    </tr>
  </table>
</div>
</div><!--print-->








</div>
</body>
</html>
