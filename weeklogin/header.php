<?php
    session_start();
    header("content-type:text/html;charset=gb2312");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" 
background="images/header_bg.jpg" border=0>
  <TR height=56>
    <TD width=260><IMG height=56 src="images/header_left.jpg" 
    width=260></TD>
    <TD style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px" 
      align=middle>��ǰ�û���<?php echo $_SESSION["name"];?> &nbsp;&nbsp; <A style="COLOR: #fff" 
      href="" 
      target=main>�޸Ŀ���</A> &nbsp;&nbsp; <A style="COLOR: #fff" 
      onclick="if (confirm('ȷ��Ҫ�˳���')) return true; else return false;" 
      href="" target=_top>�˳�ϵͳ</A> 
    </TD>
    <TD align=right width=268><IMG height=56 
      src="images/header_right.jpg" width=268></TD></TR></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TR bgColor=#1c5db6 height=4>
    <TD></TD></TR></TABLE></BODY></HTML>