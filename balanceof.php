<?php

/////////////////////////////////////////////////////MAINNET//////////////////////////////////////////////////

// Example "balance of" function in PHP.
// Shows the total amount of tokens owned by X address/user.
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // $getUserMeta can be replaced with your own method of obtaining a Crown address.
            $getUserAddress = "CRWLG3bKURbo8UvLGhamenB91EmaqpXS4bkP";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserAddress.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP.
// Shows the amount of tokens owned by X address/user made under X protocol (Owner/admin).
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // $getUserMeta can be replaced with your own method of obtaining a Crown address.
            $getUserAddress = "CRWLG3bKURbo8UvLGhamenB91EmaqpXS4bkP";
            // Change to admin/owners client protocol (You need to make a protocol).
            $protocol = "yourprotocol";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserAddress.'", "'.$protocol.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP for wordpress.
// Shows the amount of tokens owned by X address/user.
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // nftoken param.
            $param = "balanceof";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserMeta.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP for wordpress.
// Shows the amount of tokens owned by X address(user) made under X protocol (Owner/admin).
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // Change to admin/owners client protocol (You need to make a protocol).
            $protocol = "yourprotocol";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserMeta.'", "'.$protocol.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

/////////////////////////////////////////////////////TESTNET//////////////////////////////////////////////////

// Example "balance of" function in PHP.
// Shows the total amount of tokens owned by X address/user.
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // $getUserMeta can be replaced with your own method of obtaining a Crown address.
            $getUserAddress = "CRWLG3bKURbo8UvLGhamenB91EmaqpXS4bkP";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserAddress.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP.
// Shows the amount of tokens owned by X address/user made under X protocol (Owner/admin).
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // $getUserMeta can be replaced with your own method of obtaining a Crown address.
            $getUserAddress = "CRWLG3bKURbo8UvLGhamenB91EmaqpXS4bkP";
            // Change to admin/owners client protocol (You need to make a protocol).
            $protocol = "yourprotocol";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserAddress.'", "'.$protocol.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP for wordpress.
// Shows the amount of tokens owned by X address/user.
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // nftoken param.
            $param = "balanceof";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserMeta.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

// Example "balance of" function in PHP for wordpress.
// Shows the amount of tokens owned by X address(user) made under X protocol (Owner/admin).
function balanceOf(){
            // nftoken param.
            $param = "balanceof";
            // Get current user
            $getUser = wp_get_current_user();
            // Get current user ID
            $getID = $getUser->ID;
            // Custom get current users owner address(Made using ultimate member)
            // $getUserMeta can be replaced with your own method of obtaining the users Crown address.
            $getUserMeta = get_user_meta($getID, $key = 'get_user_crown_address', $single = true);
            // Change to admin/owners client protocol (You need to make a protocol).
            $protocol = "yourprotocol";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "nftoken", "params": ["'.$param.'", "'.$getUserMeta.'", "'.$protocol.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            $tokenCount = json_decode($response);
            echo "Your total tokens<br>".$tokenCount->result;
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
balanceOf();

?>
