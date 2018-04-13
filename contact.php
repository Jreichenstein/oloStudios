<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$branding = $_POST['branding'];
		$website = $_POST['website'];
		$mobile = $_POST['mobile'];
		$marketing = $_POST['marketing'];

		$first_gathered = $branding . "-" . $website . "-" . $mobile . "-" . $marketing;

		// First checkbox complete

		$concept_help = $_POST['concept_help'];
		$prototype_help = $_POST['prototype_help'];
		$design_help = $_POST['design_help'];
		$development_help = $_POST['development_help'];

		$second_gathered = $design_help . "-" . $prototype_help . "-" . $concept_help . "-" . $branding_help . "-" . $development_help;

		// Second checkbox complete

		$client_name = $_POST['user_name'];
		$subject = "New contact from $client_name";
		$email = $_POST['user_email'];
		$message = $_POST['user_message'];

		$msg = "Client Name: " . $client_name . "\r\n\r\n" . "Email: " . $email . "\r\n\r\n" . "Message: " . $message . "\r\n\r\n" . "Services wanted: " . $first_gathered . "\r\n\r\n" . "Stage: " . $second_gathered;

		if (strlen($email)>1) {
			mail("Jesse@olocreative.com", $subject, $msg);
		} else {
			echo "<script>alert('Must enter a valid email.');</script>";
		}

	}
?>
