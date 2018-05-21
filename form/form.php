<?php
	if ($_POST) {
		$name = $_POST['name'];
		if(empty($name)) {
			echo "<p class=\"login-tip\" style=\"color: #f12229\">Please enter your name.</p>";
			exit();
		}

		$phone = $_POST['phone'];
		if(empty($phone)) {
			echo "<p class=\"login-tip\" style=\"color: #f12229\">Please enter your phone number.</p>";
			exit();
		}

		$email = $_POST['email'];
		$checkmail = "/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";
		if(!preg_match($checkmail,$email)){
			echo "<p class=\"login-tip\" style=\"color: #f12229\">Please enter a valid email address.</p>";
			exit();
        }

		$suburb = $_POST['suburb'];
		if(empty($suburb)) {
			echo "<p class=\"login-tip\" style=\"color: #f12229\">Please enter a suburb.</p>";
			exit();
		}

		$service_required = $_POST['service_required'];
		if(empty($service_required)) {
			echo "<p class=\"login-tip\" style=\"color: #f12229\">Please enter your required service.</p>";
			exit();
		}

		$to = "smaiipol1988@gmail.com";
		$subject = "Byron bay contact form";
		$message = "
		<html>
		<head>
		<title>Contact form</title>
		</head>
		<body>
		<p>
			<strong>Name: </strong>$name
		</p>
		<p>
			<strong>Email: </strong>$email
		</p>
		<p>
			<strong>Phone: </strong>$phone
		</p>
		<p>
			<strong>Suburb: </strong>$suburb
		</p>
		<p>
			<strong>Service required: </strong>$service_required
		</p>
		</body>
		</html>
		";
		$from = "someonelse@example.com";
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
		$headers[] = 'From: Birthday Reminder <birthday@example.com>';
		$headers[] = 'Cc: birthdayarchive@example.com';
		$headers[] = 'Bcc: birthdaycheck@example.com';
		$send = mail($to,$subject,$message,implode("\r\n", $headers));
		// echo "<p class=\"login-tip\" style=\"color: white\">Thank you for your letter, Your email been sent.</p>";
		if ($send) {
			echo '<script>location.href="thanks.html";</script>';
		}
	}

?>