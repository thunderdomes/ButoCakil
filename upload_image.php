<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Upload FIle</title>
    
        <?php
			if(!empty($_POST))
			{
				$con = mysql_connect("localhost","root","");
				if (!$con)
					echo('Could not connect: ' . mysql_error());
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/" . $_FILES["file"]["name"]) ;
						mysql_select_db("test", $con);
						$sql = "INSERT INTO presentation(subject,topic,fname) VALUES ('" . $_POST["sub"] ."','" . $_POST["pre"] . "','" . 
							  $_FILES["file"]["name"] ."');";
						if (!mysql_query($sql,$con))
							echo('Error : ' . mysql_error());
						else
							echo '<script language="javascript">alert("Thank You!! Notice Uploded")</script>';
						}
				}
				mysql_close($con);
			}
        ?>
    </head>
     <body>
        <form id="form3" enctype="multipart/form-data" method="post" action="upload.php">
            <table width="552" height="200" style="border-radius: 10px; box-shadow: 0 0 2px 2px #888;
            	font-family:'Comic Sans MS';font-size: 14px;" >
                <tr>
                    <td>	<label for="sub">Subject: </label>	</td>
                    <td>	<input type="text" name="sub" id="sub" />	</td>
                </tr>
                <tr>
                    <td valign="top" align="left">Presentation:</td>
                    <td valign="top" align="left"><input type="text" name="pre" cols="50" rows="10" id="pre"></textarea></td>
                </tr>
                <tr>
                    <td><label for="file">Upload File:</label></td>
                    <td><input type="file" name="file" id="file" /></td>
                </tr>
                <tr>
	                <td colspan="2" align="center"><input type="submit" name="upload" id="upload" value="Upload Presentation" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
