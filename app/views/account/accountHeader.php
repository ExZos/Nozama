<?php
	$accountID =$data['accountID'];	
?>

<html>
<head>
</head>

<body>
	<ul class="nav nav-tabs nav-justified">
		<li>
			<a href="/Nozama/public/accountController/editAccount/<?= $accountID ?>">Account Information</a>
		</li>

		<li>
			<a href="/Nozama/public/addressController/viewAddresses/<?= $accountID ?>">Manage Addresses</a>
		</li>

		<li>
			<a href="/Nozama/public/paymentMethodController/viewPaymentMethods/<?= $accountID ?>">Manage Payment Methods</a>
		</li>
	</ul>
</body>
</html>