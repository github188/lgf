<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>右侧可展开与隐藏的在线客服代码</title>
<LINK rel=stylesheet type=text/css href="inc/mynotes.css">
<SCRIPT type=text/javascript src="../Enginee/jquery/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript src="../Enginee/jquery/kefu.js"></SCRIPT>
</head>

<body style="text-align:center">

<DIV id="floatTools" class="float0831">
  <DIV class="floatL"><A style="DISPLAY: none" id="aFloatTools_Show" class="btnOpen" title=查看在线客服 onclick="javascript:$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.kaiwo123.com'); });$('#aFloatTools_Show').attr('style','display:none');$('#aFloatTools_Hide').attr('style','display:block');" 
href="javascript:void(0);">展开</A> <A id=aFloatTools_Hide class=btnCtn title=关闭在线客服 onclick="javascript:$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.kaiwo123.com'); });$('#aFloatTools_Show').attr('style','display:block');$('#aFloatTools_Hide').attr('style','display:none');" 
href="javascript:void(0);">收缩</A> </DIV>
  <DIV id=divFloatToolsView class=floatR>
    <DIV class=tp></DIV>
    <DIV class=cn>
      <UL>
        <LI class=top>
          <H3 class=titZx>QQ咨询</H3>
        </LI>
        <LI><SPAN class=icoZx>在线咨询</SPAN> </LI>
        <LI><A class=icoTc href="#">A在线客服</A> </LI>
        <LI><A class=icoTc href="javascript:void(0);">B在线客服</A> </LI>
        <LI><A class=icoTc href="#">C在线客服</A> </LI>
        <LI class=bot><A class=icoTc href="javascript:void(0);">D在线客服</A> </LI>
      </UL>
     
    </DIV>
  </DIV>
</DIV>


</body>
</html>
