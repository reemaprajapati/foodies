<?php 
   	session_start();
	include("includes/connection.php");	
	
	$error_msg = '';
	
	if(isset($_POST['btnLogin']) && $_POST['btnLogin']=='Login')
	{						
		$uName = $_POST['txtUsername'];
		$pass = $_POST['txtPassword'];					
				
		$query="SELECT * FROM user WHERE Username='$uName' AND Password='$pass' AND IsActive=1";
		$result=mysql_query($query);					
		
		$row = mysql_fetch_array($result);
		
		if($row)
		{			
			$_SESSION['user']=$uName;			
			$url = "dashboard";									
					
			echo "<script>window.location='".$url."';</script>";
			exit();
		}
		else
		{			
			$error_msg = "<div class='errormsg'> Login Failed </div>";
		}
	}
?>
<html>
	<head> 
		<title> Dashboard </title>
		<link rel="stylesheet" type="text/css" href="css/admin_style.css"/>
		<style>
			.errormsg{
				display: block;
				width: 250px;
				height: 22px;
				line-height: 22px;
				font-size : 13px;
				color: white;
				font-weight: bold;
				background: #FF9D9D url(images/stop.gif) no-repeat 10px center; 
				padding: 3px 10px 3px 40px;
				margin: 10px 0;
				border: 1px solid #FF0000;
				/* border-bottom: 2px solid #FF0000; */
			}
			
		</style>
	</head>
	
	<body> 
		<form name="f1" method="POST">   	        
    	<div style="padding-top:200px;"> 
    		<div style="border:1px solid gray; width:330px; margin:0 auto;">		        		        
        	<table width="330px" align="center" style="border-collapse: collapse; font-size:14px" cellpadding="10px">
        		<tr bgcolor="#4F8ECB">				
					<td colspan=2"">  <b> Login </b></td>						
				</tr>
        		<tr>				
					<td width="130"> Username </td>
					<td width="200"> <input type="text" name="txtUsername">  </td>
				</tr>							 	
                <tr>				
					<td> Password </td>
					<td> <input type="password" name="txtPassword">  </td>
				</tr>	
				<tr>				
					<td>&nbsp;  </td>
					<td> <input name="btnLogin" type="submit" value="Login"> </td>
				</tr>
				<tr>				
					<td colspan="2"> <?php echo $error_msg; ?> </td>
				</tr>
        	</table>
        	</div>          	        		
		</div>	
		</form>
	</body>
</html>
