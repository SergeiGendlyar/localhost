<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title> water contract form </title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/btn.css">


</head>

	<body>

	<div class="wrapper">
	<div class="container">
		<div class="col-lg-12">

			<center><h2>contract form</h2></center>

			<form id="registraion_form" class="form-horizontal">

				<div class="form-group">

				<label class="col-sm-3 control-label">Name</label>
				<div class="col-sm-6">
				<input type="text" id="txt_fullname" class="form-control" placeholder="enter your full name or the name of organization" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Email</label>
				<div class="col-sm-6">
				<input type="text" id="txt_email" class="form-control" placeholder="enter email" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Address</label>
				<div class="col-sm-6">
				<input type="text" id="txt_address" class="form-control" placeholder="enter address" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Phone number</label>
				<div class="col-sm-6">
				<input type="text" id="txt_phonenumber" class="form-control" placeholder="enter phone number" />
				</div>
				</div>

				<div id ="form_hidden" class="form_hidden">
				<label class="col-sm-3 control-label">Contract number</label>
				<div class="col-sm-6">
				<input type="text" id="txt_hidden" class="form-control" placeholder="enter contract number" />
				</div>
				</div>


				<div class = "form-group">
				<div class = "col-sm-offset-3 col-sm-6 m-t-15">
				<input type="button" id="btn_hide_txt_field" class="show_button_false" value="Form for individuals" />
				<input type="button" id="btn_showt_txt_field" class="show_button_true" value="Form for organisations" />
				</div>
				</div>


				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6 m-t-15">
				<button type="submit" id="btn_register" class="btn btn-success">Submit order</button>
				</div>
				</div>

				<div class="form-group">
					<div id="message" class="col-sm-offset-3 col-sm-6 m-t-15"></div>
				</div>

			</form>

		</div>
	</div>
	</div>

	<script src="js/jquery-1.12.4-jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script>

	$('#form_hidden').hide();

	$('#btn_hide_txt_field').click(function()
	{
	$('#form_hidden').hide();
	});

	$('#btn_showt_txt_field').click(function()
	{
	$('#form_hidden').show();
	});

	</script>


	<script>

		$(document).on('click','#btn_register',function(e){

			e.preventDefault();

			var fullname = $('#txt_fullname').val();
			var email 	 = $('#txt_email').val();
			var address = $('#txt_address').val();
			var phonenumber = $('#txt_phonenumber').val();
			var contractnumber = $('#txt_hidden').val()


			var atpos  = email.indexOf('@');
			var dotpos = email.lastIndexOf('.com');

			if(fullname == ''){ // check username not empty
				alert('please enter your full name !');
			}
			else if(!/^[a-z A-Z]+$/.test(fullname)){ // check username allowed capital and small letters
				alert('only capital and small letters are allowed !');
			}
			else if(email == ''){ //check email not empty
				alert('please enter email address !');
			}
			else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
				alert('please enter valid email address !');
			}
			else if (address ==''){// check valid address
				alert('please enter address !')
			}
			else if (!/^[0-9]+$/.test(phonenumber)){// check phonenumber
				alert('please enter phone number !')
			}else if
			else{
				$.ajax({
					url: 'process.php',
					type: 'post',
					data:
						{newfullname:fullname,
						 newemail:email,
						 newaddress:address,
						 newphonenumber:phonenumber,
						 newcontractnumber:contractnumber
						},
					success: function(response){
						$('#message').html(response);
					}
				});

				$('#registraion_form')[0].reset();
			}
		});

	</script>

	</body>
</html>
