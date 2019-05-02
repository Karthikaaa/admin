<?php
session_start();
?>
<HTML>
<script type="text/javascript">
var myvar='<?php echo $_SESSION['check'];?>';
if(myvar!='')
{
	alert("<?php echo $_SESSION['check'];?>");
}
</script>
<HEAD>
<TITLE>ADMIN | ASE EATS</TITLE>
<style type="text/css">
@import url(style.css);
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
</style>
</HEAD>
<link rel="stylesheet" type="text/css" href="cs1.css">
<style type="text/css">
body {
    background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: top;
  background-size: cover;
   }
.white-box {
	border-radius: 15px 50px;
    background-color: #EBEBEB;
    color: black;
    width: 450px;
  	height: 250px;
  	padding: 50px;
  	position: relative;
  	left: 395px;
}
</style>
<BODY id="body">
	<FONT face="Verdana" size="4" color="grey">
<div class="page-header">
	<h1><center>ADMINISTRATOR</center></h1>
   <center><img src="log.png"  /></center>
</div>
<SECTION>
<MAIN>
<div class="white-box">
<B><P>Welcome ADMIN to ASE Eats Online! 
        <br />
		Select the option you want to perform.
		<br /></P></B></FONT>
<SECTION align="center"><IMG src="clickhere.gif" width="100" height="50"></IMG></SECTION>
<div id="form-content">
	<div class="welcome" style="display: block;">
		<center><a href="updatestatus.php" style="color:#000000">Update Status of Orders and add Dues</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<center><a href="updatemenu.php" style="color:#000000">Update Menu</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<center><a href="availability.php" style="color:#000000">Update product availability</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <center><a href="esttime.php" style="color:#000000">Add Estimated time for an order to get delivered.</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <center><a href="notify.php" style="color:#000000">Notify User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <center><a href="deleteuser.php" style="color:#000000">Delete User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<center><a href="ban.php" style="color:#000000">Ban a User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
		<script>
		if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) 
        	{
        		window.location.href='log.php';
    			alert("You cannot go back to the home page! Login if you want to!");
			}
		</script>
	</div>	
</div>
</SECTION>
</div>
</MAIN><BR><HR width="1000">
<FOOTER >
<FONT size="2" color="white">
Save time, be smart!</FONT>
</FOOTER>
</BODY>
</HTML>