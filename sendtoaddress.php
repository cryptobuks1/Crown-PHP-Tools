<?php

/////////////////////////////////////////////////////MAINNET//////////////////////////////////////////////////

// Example "sendtoaddress" function in PHP
function sendToAddress(){
            // Replace this variable with something that asks or automatically pulls users address.
			// The address used is only for example.
            $getUserAddress = "CRWLG3bKURbo8UvLGhamenB91EmaqpXS4bkP";
            // Set the amount you would like to give, in Crown.
            $getAmount = "0.01";
            // Request to Crown client.
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_PORT => "9341",
            // Enter your Crown RPC username and password here.
            CURLOPT_URL => "http://RPCUSER:RPCPASS@localhost:9341",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "sendtoaddress", "params": ["'.$getUserAddress.'", '.$getAmount.']}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
				$response = curl_exec($curl);
				 $response; 
				 $err = curl_error($curl);

				curl_close($curl);
				if ($err) {

					echo "cURL Error #:" . $err;
				} else {
					return $response;
				} 
}

// Execute the function
sendToAddress();

// Example "sendtoaddress" function in PHP for Wordpress
function sendToAddress(){
			// Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // Set the amount you would like to give, in Crown.
            $getAmount = "0.01";
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_PORT => "9341",
            // Enter your Crown RPC username and password here.
            CURLOPT_URL => "http://RPCUSER:RPCPASS@localhost:9341",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "sendtoaddress", "params": ["'.$getUserMeta.'", '.$getAmount.']}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
				$response = curl_exec($curl);
				 $response; 
				 $err = curl_error($curl);

				curl_close($curl);
				if ($err) {

					echo "cURL Error #:" . $err;
				} else {
					return $response;
				} 
}

// Execute the function
sendToAddress();

/////////////////////////////////////////////////////TESTNET//////////////////////////////////////////////////

// Example "sendtoaddress" function in PHP
function sendToAddress(){
            // Replace this variable with something that asks or automatically pulls users address.
			// The address used is only for example.
            $getUserAddress = "tCRWHT2nySnhteUgP2icpUEPtk1u2EZHitJZ3";
            // Set the amount you would like to give, in Crown.
            $getAmount = "0.01";
            // Request to Crown client.
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_PORT => "19341",
            // Enter your Crown RPC username and password here.
            CURLOPT_URL => "http://RPCUSER:RPCPASS@localhost:19341",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "sendtoaddress", "params": ["'.$getUserAddress.'", '.$getAmount.']}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
				$response = curl_exec($curl);
				 $response; 
				 $err = curl_error($curl);

				curl_close($curl);
				if ($err) {

					echo "cURL Error #:" . $err;
				} else {
					return $response;
				} 
}

// Execute the function
sendToAddress();

// Example "sendtoaddress" function in PHP for Wordpress
function sendToAddress(){
			// Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // Set the amount you would like to give, in Crown.
            $getAmount = "0.01";
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_PORT => "19341",
            // Enter your Crown RPC username and password here.
            CURLOPT_URL => "http://RPCUSER:RPCPASS@localhost:19341",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "sendtoaddress", "params": ["'.$getUserMeta.'", '.$getAmount.']}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
				$response = curl_exec($curl);
				 $response; 
				 $err = curl_error($curl);

				curl_close($curl);
				if ($err) {

					echo "cURL Error #:" . $err;
				} else {
					return $response;
				} 
}

// Execute the function
sendToAddress();

?>
