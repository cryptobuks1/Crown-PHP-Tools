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
This will allocate an account on the Crown client. The user is show the account address for them to use in some way.
