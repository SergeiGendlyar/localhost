<?php

require_once "dbconfig.php";

if(isset($_POST["newfullname"]) && isset($_POST["newemail"]) && isset($_POST["newaddress"]) && isset($_POST["newphonenumber"] && isset($_POST["newcontractnumber"]))
{
	$fullname = $_POST["newfullname"];

	$email = $_POST["newemail"];

	$address = $_POST["newaddress"];

	$phonenumber = $_POST["newphonenumber"];

	$contractnumber = $_POST["newcontractnumber"];

	$stmt=$db->prepare("INSERT INTO tbl_client(fullname,
											 email,
											 address,
										 	 phonenumber,
										 	 contractnumber)
										VALUES
										    (:uname,
											 	 :uemail,
											 	 :uaddress,
											 	 :uphonenumber,
												 :ucontractnumber)";


	$stmt->bindParam(":uname",$fullname);
	$stmt->bindParam(":uemail",$email);
	$stmt->bindParam(":uaddress",$address);
	$stmt->bindParam(":uphonenumber",$phonenumber);
	if($stmt->execute())
	{
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>
					order successfull
			 </div>';
	}
	else
	{
		echo  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>
					failed to order
			   </div>';
	}
}

?>
