<?php
/*
��Ȩ����:֣�ݵ���Ƽ��������޹�˾;
��ϵ��ʽ:0371-69663266;
��˾��ַ:����֣�ݾ��ü��������������־�����·ͨ�Ų�ҵ԰��¥����;
��˾���:֣�ݵ���Ƽ��������޹�˾λ���й��в�����-֣��,������2007��1��,�����ڰѻ����Ƚ���Ϣ����������ͨ�ż���������ѹ�����ҵ��ʵ���ռ���������ҵ�ͻ��Ĺ�����ҵ���»�У�ȫ���ṩ��������֪ʶ��Ȩ�Ľ������������������������������в�������ĸ�У����������������СѧУ���������ṩ�̡�Ŀǰ�����ж�Ҹ�ְ����ְ��ԺУʹ��ͨ���в��з����Ŀ����������ͷ���;

��������:����Ƽ��������������Լܹ�ƽ̨,�Լ��������֮����չ���κ���������Ʒ;
����Э��:���ֻ�У԰��ƷΪ��ҵ����,��������ΪLICENSE��ʽ;����CRMϵͳ��SunshineCRMϵͳΪGPLV3Э������,GPLV3Э�����������뵽�ٶ�����;
��������:������ʹ�õ�ADODB��,PHPEXCEL��,SMTARY���ԭ��������,���´���������������;
*/

require_once( "lib.inc.php" );
$sessionkey = returnsesskey( );
$GLOBAL_SESSION = returnsession( );
$SUNSHINE_USER_NAME = $_SESSION['SUNSHINE_USER_NAME'];
$filetablename = "cashout";
$NEWAIINIT_VALUE_SYSTEM = "select  stockinmain.tabledate,   sum(stockinmain.amt) allpaymoney  from  stockinmain   where  ( stockinmain.user_id='{$SUNSHINE_USER_NAME}' )  group by stockinmain.tabledate";
$NEWAIINIT_VALUE_SYSTEM_NUM = "select  count(stockinmain.tabledate) as num from  stockinmain   where  ( stockinmain.user_id='{$SUNSHINE_USER_NAME}' )  group by stockinmain.tabledate";
require_once( "include.inc.php" );

//create view cashout AS select  stockinmain.tabledate,   sum(stockinmain.amt) allpaymoney  from  stockinmain   where  ( stockinmain.user_id='{$SUNSHINE_USER_NAME}' )  group by stockinmain.tabledate
?>