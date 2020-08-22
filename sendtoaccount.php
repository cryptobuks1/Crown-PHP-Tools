<?php

/////////////////////////////////////////////////////MAINNET//////////////////////////////////////////////////

// Example "sendtoaccount" function in PHP for Wordpress.
// Gets another address for the user to use (Linked to their account.).
function sendToAccount(){
            // Get current user
            $getUser = wp_get_current_user();
            $getUsername = $getUser->user_login;
            // From account (Usually admin/owner)
            $fromAccount = "0";
            // To account (Usually user)
            $toAccount = $getUsername;
            $sendAmount = "0.01";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "move", "params": ["'.$fromAccount.'", "'.$toAccount.'", '.$sendAmount.']}',
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
sendToAccount();

/////////////////////////////////////////////////////TESTNET//////////////////////////////////////////////////

// Example "sendtoaccount" function in PHP for Wordpress.
// Gets another address for the user to use (Linked to their account.).
function sendToAccount(){
            // Get current user
            $getUser = wp_get_current_user();
            $getUsername = $getUser->user_login;
            // From account (Usually admin/owner)
            $fromAccount = "0";
            // To account (Usually user)
            $toAccount = $getUsername;
            $sendAmount = "0.01";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "move", "params": ["'.$fromAccount.'", "'.$toAccount.'", '.$sendAmount.']}',
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
sendToAccount();

?>
