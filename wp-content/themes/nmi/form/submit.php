<?php
	if (!isset($_POST['type']) || !isset($_POST['jsval'])) {
	 header($_SERVER['SERVER_PROTOCOL'] . ' ' . 'Forbidden', true, 403);
	 exit();
	} else {
		$sent = false;
		if ($_POST['type'] == 'sales') {
			$to = 'sales@nmiindustrial.com';
			$subject = 'NMI Sales Inquiry';
			$fields = array('Company Name' => 'company',
											'First Name' => 'first',
											'Last Name' => 'last',
											'Job Title' => 'job',
											'Address' => 'address',
											'Address 2' => 'address2',
											'City' => 'city',
											'State' => 'state',
											'Zip Code' => 'zip',
											'Email' => 'email',
											'Send Marketing Materials' => 'marketing',
											'Project Type' => '*ptype',
											'If Other' => 'other',
											'Urgency' => 'urgency');

		} else {
			$to = 'careers@nmiindustrial.com';
			$subject = 'NMI Careers Inquiry';
			$fields = array('First Name' => 'first',
											'Last Name' => 'last',
											'Job Title' => 'job',
											'Address' => 'address',
											'Address 2' => 'address2',
											'City' => 'city',
											'State' => 'state',
											'Zip Code' => 'zip',
											'Email' => 'email',
											'What industries are you interested in' => '*industry');
		}
		
		$msg = '';
		foreach ($fields as $k=>$v) {
			$val = $_POST[$v];
			if ($v[0] == '*') {
				$val = join(', ', $_POST[substr($v, 1)]);
			}
			$msg .= '<strong>'.$k .'</strong>: '. $val .'<br />';
		}
		$msg .= '<br /><br /><strong>Message</strong><br/>';
		$msg .= str_replace("\n", '<br />', $_POST['message']);
		
		$from = 'no-reply@nmiindustrial.com';
		$headers = "Content-type: text/html\n";
		$headers .= 'From: '.$from."\n\n";
		$sent = mail($to, $subject, $msg, $headers);

		if (!$sent) {
			header($_SERVER['SERVER_PROTOCOL'] . ' ' . 'Internal Server Error', true, 500);
		}
	}
?>