<HTML>
<head>
<meta name="title" content="JavaScript Made Easy:  Free JavaScripts, Tutorials, Example Code, Reference, Resources, And Help">
<META NAME="description" CONTENT="Large Collection of JavaScript source code. Choose from thousands of free scripts. JavaScript tutorials with example code. Excellent reference material for JavaScript. If you need help with JavaScript. JavaScript Made Easy is the place to find it.">
<META NAME="keywords" CONTENT="javascript, jsmadeeasy, script, source code, code, source, online, internet, programing, DHMTL, Navigation, html, developer, develop, css, dhtml, netscape, www.javascript.com, javascript.com">
<META NAME="keyphrase" CONTENT="javascript, jsmadeeasy, script, source code, code, source, online, internet, programing, DHMTL, Navigation, html, developer, develop, css, dhtml, netscape, www.javascript.com, javascript.com">
<META NAME="generator" CONTENT="Microsoft FrontPage 4.0">
<META NAME="author" CONTENT="webmaster@jsmadeeasy.com">
<META NAME="robots" CONTENT="index,follow">
<META NAME="rating" CONTENT="General">
<META NAME="author" CONTENT="JSMadeEasy - CSIWorks">
<META NAME="revisit" CONTENT="30 days">
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="distribution" CONTENT="global">
<META NAME="copyright" CONTENT="(C) Copyright 1999-2000 ~ jsmadeeasy.com">
<META NAME="language" CONTENT="english">
<META NAME="theives" CONTENT="JavaScript Made Easy">
<META HTTP-EQUIV="expires" CONTENT="0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pics-label" content='(pics-1.1 "http://www.icra.org/ratingsv02.html" l gen true for "http://www.jsmadeeasy.com" r (cb 1 lz 1 nz 1 oz 1 vz 1) "http://www.rsac.org/ratingsv01.html" l gen true for "http://www.jsmadeeasy.com" r (n 0 s 0 v 0 l 0))'>

<!----------------------------------------- START DEMONSTRATION HERE  --------->

<!----------------------------------------- END DEMONSTRATION HERE  ----------->
<TITLE>5 Kotak</TITLE>
<!----------------------------------------- FOLD OUT MENU ---------------------> 
<SCRIPT LANGUAGE="javascript" SRC="/jsexternal/foldernav.js"></SCRIPT>
<!----------------------------------------- CONTROLS TEXT ROLLOVER COLOR ------> 
<STYLE>
A:link {text-decoration: none; text-decoration:none; color:#0066CC; }
A:visited {text-decoration: none; text-decoration:none; color:#0066CC; }
A:hover	{text-decoration: text-decoration:none; color:red}

#SubMenu
{
	position: absolute;
    top: 85px;
	left: 243px;
    width: 180px;
	border: 1px solid #999;
	visibility: hidden;
}


A.list {
color:white;
text-decoration:none;
font-size:7pt;
font-family:verdana;
}

A.list:visited {
color:white;
text-decoration:none;
font-size:7pt;
font-family:verdana;
}

A.list:hover {
color:#ffcb10;
text-decoration:none;
}

A.wr {
color:#68B4FF;
text-decoration:none;
font-weight:bold;
font-size:7pt;
font-family:Verdana, Arial, Helvetica, sans-serif
}
A.wr:visited {
color:#68B4FF;
text-decoration:none;
font-weight:bold;
font-size:7pt;
font-family:Verdana, Arial, Helvetica, sans-serif
}
A.wr:hover {
color:white;
text-decoration:underline;
font-weight:bold;
font-size:7pt;
font-family:Verdana, Arial, Helvetica, sans-serif
}

A.dropmenutitle {
color:black;
text-decoration:none;
font-weight:bold;
font-size:7.5pt;
font-family:Verdana
}
A.dropmenutitle:visited {
color:black;
text-decoration:none;
font-weight:bold;
font-size:7.5pt;
font-family:Verdana
}
A.dropmenutitle:hover {
color:black;
text-decoration:none;
font-weight:bold;
font-size:7.5pt;
font-family:Verdana
}

A.dropmenu {
color:#0066CC;
text-decoration:underline;
font-weight:normal;
font-size:7.5pt;
font-family:Verdana
}
A.dropmenu:visited {
color:#0066CC;
text-decoration:underline;
font-weight:normal;
font-size:7.5pt;
font-family:Verdana
}
A.dropmenu:hover {
color:red;
text-decoration:underline;
font-weight:normal;
font-size:7.5pt;
font-family:Verdana
}
body
{
	margin: 0;
}
.gt0 
{
	BORDER-RIGHT: #6487db 1px solid; PADDING: 0px 4px 2px 4px; BORDER-TOP: #6487db 1px solid; FONT-SIZE: 100%; BORDER-LEFT: #6487db 1px solid; BORDER-BOTTOM: #6487db 1px solid
}
.gt1 
{
	BORDER-RIGHT: #a2b7e9 1px solid; PADDING: 0px 4px 2px 4px; BORDER-TOP: #a2b7e9 1px solid; FONT-SIZE: 100%; BACKGROUND: #5B9BE8; BORDER-LEFT: #a2b7e9 1px solid; BORDER-BOTTOM: #a2b7e9 1px solid
}
.gtsep 
{
	PADDING-RIGHT: 1px; PADDING-LEFT: 1px; PADDING-BOTTOM: 2px; FONT: 65% Verdana; COLOR: #a2b7e9; PADDING-TOP: 0px
}
#leftToolbar
{
	font: 70% Verdana;
	border-top: solid 0px #999;
	border-bottom: solid 0px #999;
	background: #F1F1F1;
	padding: 2px 0px 2px 0px;
}

#leftToolbar td
{
	font-size: 100%;
}

#leftToolbar a
{
	font: 70% Verdana;
	color: black;
	text-decoration: none;
}

#SubMenuBlock
{
	font: 70% Verdana;
	border-top: solid 0px #999;
	border-bottom: solid 0px #999;
	background: #F1F1F1;
	padding: 2px 0px 2px 0px;
}

#SubMenuBlock td
{
	font-size: 100%;
}

#SubMenuBlock a
{
	font: 70% Verdana;
	color: black;
	text-decoration: none;
}

.flyoutLink1
{
	border-color: #F1F1F1;
	border-width: 1px;
	border-style: solid;
	font-family: Verdana, Arial, Helvetica;
	font-size: 70%;
	padding-left: 6px;
	padding-right: 25px;
	padding-top: 1px;
	cursor: hand;
	border: solid 1px #999;
	background: #CCC;
	padding: 2px 6px 2px 6px;
}

.flyoutLink0 {
	border-color: #F1F1F1;
	border-width: 1px;
	border-style: solid;
	font-family: Verdana, Arial, Helvetica;
	font-size: 70%;
	padding-left: 6px;
	padding-right: 25px;
	padding-top: 1px;
	cursor: hand;
	border: solid 1px #F1F1F1;
	background: #F1F1F1;
	padding: 2px 6px 2px 6px;
}

#localToolbar
{
	border-top: solid 1px #999;
	border-bottom: solid 1px #999;
	background: #F1F1F1;
	padding: 2px 0px 2px 0px;
	font-size: 100%;
}

#localToolbar td
{
	font-size: 100%;
}

#localToolbar a
{
	font: 70% Verdana;
	color: black;
	text-decoration: none;
}

.lt0
{
	border: solid 1px #F1F1F1;
	background: #F1F1F1;
	padding: 0px 6px 0px 6px;
}

.lt1
{
	border: solid 1px #999;
	background: #CCC;
	padding: 0px 6px 0px 6px;
}

.ltsep
{
	font: 70% Verdana;
	color: #A9A9A9;
	padding: 0px 1px;
}

#homePageLink
{
	width: 176px;
	padding-left: 2px;
}

#homePageLink td
{
	font-size: 100%;
}

#homePageLink a
{
	display: block;
	border: solid 1px #F1F1F1;
	padding: 2px 6px 2px 6px;
	margin: 0px;
	background: #F1F1F1;
	white-space: nowrap;
}

#homePageLink a:hover
{
	display: block;
	border: solid 1px #999;
	padding: 2px 6px 2px 6px;
	margin: 0px;
	background: #CCC;
}

#footer
{
	font: 70% Tahoma, Helvetica;
	border-top: solid 1px #003499;
	position: absolute;
}

#footer td
{
	font-size: 100%;
}

#localFooter
{
	margin: 0px;
	padding-top: 8px;
	padding-left: 10px;
}

#globalFooter
{
	margin: 0px;
	padding-top: 10px;
	padding-bottom: 13px;
	padding-left: 10px;
}

#footer a
{
	color: #03C;
	margin-right: 2px;
	background: transparent;
	font-weight: normal;
}

#footer a:visited
{
	color: #03C;
	background: transparent;
	font-weight: normal;
}

#footer a:hover
{
	color: #F60;
	background: transparent;
	font-weight: normal;
}

#footer nobr
{
	color: #A9A9A9;
	margin-right: 5px;
}



.flyoutHeading {
	font-family: Verdana, Arial, Helvetica;
	font-size: 10pt;
	background-color: #F1F1F1;
	font-weight: bold;
	padding-top: 2px;
	padding-bottom: 4px;
	padding-left: 2px;
	cursor: default;
}
</STYLE>
<script type="text/javascript">
<!--
function changeState(layerRef, state){
	layer = ".all";
	style = ".style";
	eval("document" + layer + "['" + layerRef + "']" + style + ".visibility = '" + state + "'");
}
//-->
</script>
</HEAD>

<!------------------------------------- STYLESHEETS FONT PROPERTIES -->
<LINK REL="stylesheet" HREF="/stylesheet.css">

<BODY BGCOLOR="#FFFFFF" TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0" TEXT="#000000" ALINK="#003399" LINK="#003399" VLINK="#003399"">

<!--Header Start-->
<SPAN ID="TBDownLevelDiv">
<!-- #INCLUDE VIRTUAL="/shared/header1.html" -->
</SPAN>
<!--Header End-->

<!-- #INCLUDE VIRTUAL="/shared/topMenu.htm" -->

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0" HEIGHT="100%">
  <TR>
    <TD WIDTH="160" STYLE="BORDER-RIGHT: solid 1px" BORDERCOLOR="#000000" VALIGN="TOP">
      <table width="150"  border="0" cellspacing="0" cellpadding="0" class="bodytext">
        <tr>
          <td><!-- #INCLUDE VIRTUAL="/shared/leftMenu.htm" --></td>
        </tr>
      </table>
    </TD>
    
<TD WIDTH="15"><IMG SRC="/products/images/spacer.gif" WIDTH="15" HEIGHT="5"></TD>
    
<TD VALIGN="TOP">
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
<tr><td  align="center" VALIGN="TOP" width="100%"><Br><!-- #INCLUDE VIRTUAL="/shared/TopAd.htm" --></td></tr>
<TR>
<TD COLSPAN="3" CLASS="productheadersm"><IMG SRC="/products/images/spacer.gif" WIDTH="1" HEIGHT="10"></TD>
</TR>
 
<TR> 
    
<TD CLASS="bodytext" COLSPAN="2" WIDTH="100%"> 
     
<P CLASS="productheadersm">5 kotak</P>
</TD>
    <td class="bodytext" nowrap> 
      <div align="right"><a class="source" href="five_in_a_row.zip" target="_blank">[-]</a></div>
    </td>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4"> 
      
<HR SIZE="1" WIDTH="100%">
    </TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4">
<DIV ALIGN="CENTER">
<!----------------------------------------- START DEMONSTRATION HERE  --------->
 
 <br><br>
 <form ID=Form1>
 <input type=button value="Start Game" 
 onClick=window.open("xo.htm","game","width=610,height=350,menubar=0,scrollbars=0,resizable=0") ID=Button1>
 </form>
<!----------------------------------------- END DEMONSTRATION HERE  --------->
</DIV>
</TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4">&nbsp;</TD>
</TR>
  
<TR> 
    
<TD CLASS="requiremetssm" COLSPAN="4">&nbsp;</TD>
</TR>
  
<TR> 
    
<TD CLASS="requiremetssm" COLSPAN="4">Insert into &lt;HEAD&gt;</TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4"> 
        
<TEXTAREA STYLE="width=100%" CLASS="bodytext" ROWS="11" NAME="txt" WIDTH="95%" COLS="100" WRAP="OFF"></TEXTAREA>
        <BR>
    </TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4">&nbsp;</TD>
</TR>
  
<TR> 
    
<TD CLASS="requiremetssm" COLSPAN="4">Insert into &lt;BODY&gt;</TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4"> 
        
<TEXTAREA STYLE="width=100%" CLASS="bodytext" ROWS="11" NAME="txt" WIDTH="95%" COLS="100" WRAP="OFF"></TEXTAREA>
        <BR>
    </TD>
</TR>
  
<TR> 
    
<TD CLASS="bodytext" COLSPAN="4">&nbsp;</TD>
</TR>
  
<TR> 
    
<TD CLASS="requiremetssm" COLSPAN="4" WIDTH="100%">Other Options</TD>
</TR>
  
<TR>
    
<TD CLASS="bodytext" COLSPAN="4"> 

        
<TEXTAREA STYLE="width=100%" CLASS="bodytext" ROWS="11" NAME="txt" WIDTH="95%" COLS="100" WRAP="OFF"></TEXTAREA>
        <BR><p align="center"><!-- #INCLUDE VIRTUAL="/shared/moread_advert.asp" --></p>

    </TD>
</TR>
</TABLE>
<!-- #INCLUDE VIRTUAL="/shared/side_bar.htm" -->
</TD>
  </TR>
</TABLE>

<!---------------------------------- FOOTER START -------->
<!-- #INCLUDE VIRTUAL="/shared/footer.html" -->
<!---------------------------------- FOOTER END -------->

</BODY>
</HTML>
