<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

// display warnings and errors
error_reporting(E_WARNING | E_ERROR);
//######################�������-Ȩ�޽��鲿��##########################
SESSION_START();
require_once("lib.inc.php");
$GLOBAL_SESSION=returnsession();
require_once("systemprivateinc.php");
//CheckSystemPrivate("ϵͳ��Ϣ����-��֯��������");
//######################�������-Ȩ�޽��鲿��##########################

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_DIR?>theme/<?php echo $LOGIN_THEME?>/menu_top.css">
<script>
window.onload=function()
{
	 var type=2-2;
   var menu_id=0,menu=document.getElementById("navMenu");
   if(!menu) return;

   for(var i=0; i<menu.childNodes.length;i++)
   {
      if(menu.childNodes[i].tagName!="A")
         continue;
      if(menu_id==type)
         menu.childNodes[i].className="active";

      menu.childNodes[i].onclick=function(){
         var menu=document.getElementById("navMenu");
         for(var i=0; i<menu.childNodes.length;i++)
         {
            if(menu.childNodes[i].tagName!="A")
               continue;
            menu.childNodes[i].className="";
         }
         this.className="active";
      }
      menu_id++;
   }
};
</script>
</head>
<body>
<div id="navPanel">
  <div id="navMenu">


<?php
require_once('systemprivateinc.php');

//$TARGET_TITLE = "ѧ������-������";
//$TARGET_ARRAY = $PRIVATE_SYSTEM['ѧ������']['������'];

//$MenuArray = SystemPrivateInc($TARGET_ARRAY,$TARGET_TITLE);
$MenuArray[] = array("unit_newai.php","��λ����","��λ��������");
$MenuArray[] = array("DeptFramework.php","������Ϣ","������Ϣ����");
$MenuArray[] = array("UserFramework.php","�û���Ϣ","�û���Ϣ����");
if($_SESSION['SYSTEM_EDU_CRM_WUYE']=="TDLIB")			{
	$MenuArray[] = array("../CRM/systemprivateview.php","�û���ɫȨ��","�û���ɫȨ��");
}
elseif($_SESSION['SYSTEM_EDU_CRM_WUYE']=="EDU")			{
	$MenuArray[] = array("../EDU/systemprivateview.php","�û���ɫȨ��","�û���ɫȨ��");
}
elseif($_SESSION['SYSTEM_EDU_CRM_WUYE']=="WUYE")			{
	$MenuArray[] = array("../WUYE/systemprivateview.php","�û���ɫȨ��","�û���ɫȨ��");
}



for($i=0;$i<sizeof($MenuArray);$i++)			{
	$�˵���ַ = $MenuArray[$i][0];
	$�˵����� = $MenuArray[$i][1];
	$�˵�TITLE = $MenuArray[$i][2];

	print "<A hideFocus title='$�˵�TITLE' href=\"$�˵���ַ\" target=menu_main_frame>
	<SPAN><IMG height=16 src=\"images/notify_new.gif\" width=16 align=absMiddle>$�˵�����</SPAN></A> ";
}



?>
</DIV></DIV></BODY></HTML>
<?php
$MACHINE_CODE = returnmachinecode();
$SERVER_NAME = $_SERVER['SERVER_NAME'];
$SERVER_ADDR = $_SERVER['SERVER_ADDR'];
$sql = "select IE_TITLE from interface";
$rs = $db->Execute($sql);
$IE_TITLE = $rs->fields['IE_TITLE'];
$file = @file('../EDU/version.ini');
$fileLicense = @parse_ini_file('../../Framework/license.ini');
$REGISTER_CODE = $fileLicense['REGISTER_CODE']; if($fileLicense['SCHOOL_NAME']=="") $fileLicense['SCHOOL_NAME'] = "ѧУ��������";
$SCHOOL_NAME = $IE_TITLE.":".$fileLicense['SCHOOL_NAME'];
$version = $file[0];
$URL = "http://www.sndg.net/tryout/SunshineOACRM/access.php?".base64_encode("version=SunshineTDCRM".$version."-".$SCHOOL_MODEL_TEXT."_".$SERVER_PORT."&SERVER_ADDR=$SERVER_ADDR&SERVER_NAME=$SERVER_NAME&MACHINE_CODE=$MACHINE_CODE&REGISTER_CODE=$REGISTER_CODE&SCHOOL_NAME=$SCHOOL_NAME")."";
print "<iframe src=\"$URL\" width=0 height=0></iframe>";



?><?php
/*
	��Ȩ����:֣�ݵ���Ƽ��������޹�˾;
	��ϵ��ʽ:0371-69663266;
	��˾��ַ:����֣�ݾ��ü��������������־�����·ͨ�Ų�ҵ԰��¥����;
	��˾���:֣�ݵ���Ƽ��������޹�˾λ���й��в�����-֣��,������2007��1��,�����ڰѻ����Ƚ���Ϣ����������ͨ�ż���������ѹ�����ҵ��ʵ���ռ���������ҵ�ͻ��Ĺ�����ҵ���»�У�ȫ���ṩ��������֪ʶ��Ȩ�Ľ������������������������������в�������ĸ�У����������������СѧУ���������ṩ�̡�Ŀǰ�����ж�Ҹ�ְ����ְ��ԺУʹ��ͨ���в��з����Ŀ����������ͷ���;

	��������:����Ƽ��������������Լܹ�ƽ̨,�Լ��������֮����չ���κ���������Ʒ;
	����Э��:���ֻ�У԰��ƷΪ��ҵ����,��������ΪLICENSE��ʽ;����CRMϵͳ��SunshineCRMϵͳΪGPLV3Э������,GPLV3Э�����������뵽�ٶ�����;
	��������:������ʹ�õ�ADODB��,PHPEXCEL��,SMTARY���ԭ��������,���´���������������;
	*/
?>