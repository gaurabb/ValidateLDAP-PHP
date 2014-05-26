<?php
include 'validator.php';
$testObj = new safeldap;
$testObj->ValidateInputForSafeLdapQuery('Test1#@%', '@#');
/*
$testObj->ValidateInputForSafeLdapQuery('Test');
$testObj->ValidateInputForSafeLdapQuery('Test123');
$testObj->ValidateInputForSafeLdapQuery('Test@#');
$testObj->ValidateInputForSafeLdapQuery('123T');
$testObj->ValidateInputForSafeLdapQuery('123');
*/
?>
<html>
	<head>
		<title>PHP LDAP validation Test page</title>	
	</head>
	<body>
		<h1>PHP Validator for LDAP Queries</h1>
		
	</body>
</html>