# Crown-PHP-Tools
Different PHP functions for Crown(CRW) including Wordpress  

## Introduction
We're attempting to compile some useful PHP functions for anyone to use within their website.  

## How to use
They're simple to use, just replace RPCUSER:RPCPASS with your Crown RPC details.  

## "sendtoaddress.php" Function
If you're not using wordpress then you will need to create your own method of obtaining a Users Crown(CRW) address.  
If you are using wordpress take note of 'get_user_crown_address'.  
```$getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);```  
This is a manually setup metatag made using the Ultimate Member plugin.  
The plugin allows admins to customise their registration form.  
Using edit, make a new form box and call it get_user_crown_address.  
The code will now pull the users address when they're logged in.  

## "getaccountaddress.php" Function
If you're not using wordpress then you will need to create your own method of obtaining usernames.  
If you are using wordpress then all is taken care of.  
This will allocate an account on the Crown client. The user is shown the account address for them to use in some way.  

## "getaddressesbyaccount.php" Function
If you're not using wordpress then you will need to create your own method of obtaining usernames.  
If you are using wordpress then all is taken care of.  
This will get the users account address from the Crown client. The user is shown the account address for them to use in some way.  

## "sendtoaccount.php" Function
This is a wordpress only function.  
It will send from the admin wallet "0" account and sent to the logged in user.  

## "getnewaddress.php" Function
This function has two uses.  
If you would like a user to just get a random address then user the function without wordpress features.  
If you would like to generate another account address for the logged in user then use the wordpress function.  

## "listtransactions.php" Function
For non wordpress use, this function will show the last 50 transactions made from the admin/owerner wallet.  
For wordpress use, this function shows the logged in user their last n number of transactions.

## "getbalance.php" Function
For non wordpress use, this function will show the total balance of the admin/owerner wallet.  
For wordpress use, this function shows the logged in users account balance