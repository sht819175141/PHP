<?php
  session_start(); 
  header("content-type:text/html;charset=gb2312");
  date_default_timezone_set("Asia/Shanghai");
  $time=date("Y-m-d H-i-s");
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>��ǰλ��: </TD></TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD></TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="90%" align=center border=0>
  <TR height=100>
    <TD align=middle width=100><IMG height=100 src="images/admin_p.gif" 
      width=90></TD>
    <TD width=60>&nbsp;</TD>
    <TD>
      <TABLE height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <TR>
          <TD>��ǰʱ�䣺<?php echo $time;?></TD></TR>
        <TR>
          <TD style="FONT-WEIGHT: bold; FONT-SIZE: 16px"><?php echo $_SESSION['name'];?></TD></TR>
        <TR>
          <TD>��ӭ������վ�������ģ�</TD></TR></TABLE></TD></TR>
  <TR>
    <TD colSpan=3 height=10></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
  <TR height=20>
    <TD></TD></TR>
  <TR height=22>
    <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff" 
    align=middle background=images/title_bg2.jpg>���������Ϣ</TD></TR>
  <TR bgColor=#ecf4fc height=12>
    <TD></TD></TR>
  <TR height=20>
    <TD></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=2 width="95%" align=center border=0>
  <TR>
    <TD align=right width=100>��½�ʺţ�</TD>
    <TD style="COLOR: #880000"><?php echo $_SESSION['name'];?></TD></TR>
  <TR>
    <TD align=right>��ʵ������</TD>
    <TD style="COLOR: #880000"><?php echo $_SESSION['name'];?></TD></TR>
  <TR>
    <TD align=right>ע��ʱ�䣺</TD>
    <TD style="COLOR: #880000">2007-7-25 15:02:04</TD></TR>
  <TR>
    <TD align=right>��½������</TD>
    <TD style="COLOR: #880000">58</TD></TR>
  <TR>
    <TD align=right>����ʱ�䣺</TD>
    <TD style="COLOR: #880000"><?php echo $time;?></TD></TR>
  <TR>
    <TD align=right>IP��ַ��</TD>
    <TD style="COLOR: #880000">222.240.172.117</TD></TR>
  <TR>
    <TD align=right>���ݹ��ڣ�</TD>
    <TD style="COLOR: #880000">30 ����</TD></TR>
  <TR>
    <TD align=right>��վ����QQ��</TD>
    <TD style="COLOR: #880000">123456</TD></TR>
  <TR>
    <TD align=right>Դ��֮�ң�</TD>
    <TD style="COLOR: #880000"><a href="http://www.mycodes.net">www.mycodes.net</a></TD></TR></TABLE></BODY></HTML>