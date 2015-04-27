safeldap - PHP LDAP validation library 
========================================

The library contains three methods:
- ValidateInputForSafeLdapQuery
- CreateWhiteList
- Validate

Functions
---------

*CreateWhiteList*: - creates a custom regular expression based on any additional characters to be whitelisted for a particular call. The default selection is alphanumeric [a-zA-Z0-9]
Parameters: 
- $whiteList - additional characters to be whitelisted

*Validate*: - actual validation of the input query against the regular expression
Parameters:  
- $RegEx - regular expression to be used to validate
- $inputToValidate - input ldap query string to validate
	
*ValidateInputForSafeLdapQuery*: - Accepts ldap query string to validate for ldap insecure characters
The default validation is performed for alphanumeric characters only. Allows the caller to pass in additional characters that needs to be whitelisted for a particular query as needed.
Parameters:  
- inputToValidate - the ldap parameter query to validate
- whiteList - additional characters to be whitelisted for a particular call

