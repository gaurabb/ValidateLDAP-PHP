<?php
class SafeLdap
{
	/**
	* CreateWhiteList
	* 	creates a custom regular expression based on any additional characters 
	* 	to be whitelisted for a particular call
	* 
	* Parameters:
	*     $whiteList - additional characters to be whitelisted
	*/
	function CreateWhiteList($whiteList)
	{
		$RegEx = "[a-zA-Z0-9]*";
		$RegEx = "/^".$RegEx."[".$whiteList."]*$/";
		return $RegEx;
	}
	
	/**
	* Validate
	* 	actual validation of the input query against the regular expression
	* 
	* Parameters:
	*   $RegEx - regular expression to be used to validate
	*	$inputToValidate - input ldap query string to validate
	*/
	function Validate($RegEx,$inputToValidate)
	{
		print $inputToValidate;
		print $RegEx;
		if(preg_match($RegEx,$inputToValidate))
		{
			print ("\nValid Input ".$inputToValidate);
			return true;
		}
		else 
		{
			print ("\nInvalid Input ".$inputToValidate);
			return false;
		}
	}
	
	/**
	* ValidateInputForSafeLdapQuery
	* 	takes ldap querystring as input and validate that it contains only ldap-safe characters
	* 	default validation is performed for alphanumeric characters only.
	* 	allows the caller to pass in additional characters that needs to be 
	* 	whitelisted for a particular query as needed
	*
	* Parameters:
	* 	inputToValidate - the ldap parameter query to validate
	*	whiteList - additional characters to be whitelisted for a particular call; default is empty		
	*/
	function ValidateInputForSafeLdapQuery($inputToValidate, $whiteList='')
	{
		$RegEx="/^[a-zA-Z0-9]*$/";
		$SafeLdap = new SafeLdap;
		if(strlen($inputToValidate)===0)
		{
			print "Function validateInput invoked without any input to validate! Returned False => Nothing to check!";			
			return false;			
		}
		else
		{
			if(strlen($whiteList)===0) 
			{
				return $SafeLdap->Validate($RegEx,$inputToValidate);
			}
			else
			{
				print "Creating the Regular expression with the characters provided with input";
				$NewWhiteList = $SafeLdap->CreateWhiteList($whiteList);
				return $SafeLdap->Validate($NewWhiteList,$inputToValidate);				
			}			
		}
		return false;
	}	
}
?>
