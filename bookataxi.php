<?php

$address=array("501 folsom street", 
			"24 willie mays plaza",
			"4 privet drive"
			);

 // if the address is not in array, reject the request
    // otherwise, tell them their cab is on its way
    if(!$location = $address[$_REQUEST['Body']]) {
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    echo <Response>;
    echo <Sms>Sorry but that address is not in our system</Sms>;
    echo </Response>;
    }
    elseif
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    echo <Response>;
    echo <Sms>Your cab will arrive at <?php echo $location?> shortly</Sms>;
    echo </Response>;
?>
