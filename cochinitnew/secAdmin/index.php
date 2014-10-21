<?php
session_start();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

</title>
    <style type="text/css">
        .auto-style1 {
            width: 42%;
            height: 210px;
            margin-left: 0px;
        }
        .auto-style2 {
            height: 23px;
        }
        .auto-style3 {
            height: 34px;
        }
    </style>
    <script>
    function valid()
	{
	
		var name=document.getElementById("Textname").value;
		var pass=document.getElementById("Textpass").value;
		if(name=="")
		{
			alert("enter name");
			return false;
		}
		if(pass=="")
		{
		alert("ente password");
		return false;	
		}
		return true;
	}
    
    
    </script>
</head>
<body style="background-color:whitesmoke">
    <form method="post" action="logincheck.php" id="form1">

    <div style="width: 330px; top: 151px; left: 380px; position: absolute; height: 242px; background-color: #CCCCCC;">
    
    
        <table class="auto-style1">
            <tr>
                <td colspan="2"><h3>Second Admin Login</h3>&nbsp;</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>
                    <input name="Textname" type="text" id="Textname" style="border-color:#669900;border-width:1px;border-style:Solid;height:25px;width:250px;"  />
                </td>
            </tr>
            <tr>
                <td class="auto-style2"></td>
                <td class="auto-style2"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input name="Textpass" type="password" id="Textpass" style="border-color:#669900;border-width:1px;border-style:Solid;height:25px;width:250px;" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style3"></td>
                <td class="auto-style3">
                    <input type="submit" name="Button1" value="Login" id="Button1" style="color:White;background-color:#669900;border-style:None;font-family:Raavi;width:70px;" onclick="return valid();"/>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                  
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <span id="Label1"></span>
                   
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
    </form>
</body>
</html>
