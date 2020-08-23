<?php

/////////////////////////////////////////////////////MAINNET//////////////////////////////////////////////////

// Example "mnbudget" function in PHP
// This function will show all proposals expected to pass.
function mnBudgetPassing(){
            // mnbudget needs a param to work
            $param = "projection";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "mnbudget", "params": ["'.$param.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            echo "Projected passing proposals<br>";
            print_r($response);
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
mnBudgetPassing();

/////////////////////////////////////////////////////TESTNET//////////////////////////////////////////////////

// Example "mnbudget" function in PHP
// This function will show all proposals expected to pass.
function mnBudgetPassing(){
            // mnbudget needs a param to work
            $param = "projection";
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
            CURLOPT_POSTFIELDS => '{"jsonrpc": "1.0", "id":"curltest", "method": "mnbudget", "params": ["'.$param.'"]}',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                // Enter your Crown RPC username and password here.
                "user: RPCUSER:RPCPASS"
            ),
            ));
            $response = curl_exec($curl);
            echo "Projected passing proposals<br>";
            print_r($response);
            $err = curl_error($curl);

                curl_close($curl);
                if ($err) {

                echo "cURL Error #:" . $err;
                } else {
                    return $response;
                } 
}

// Execute the function
mnBudgetPassing();

?>
