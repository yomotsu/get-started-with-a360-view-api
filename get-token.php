<?php

  // replace XXX... and YYY... to your setting

  $MY_CONSUMER_KEY    = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
  $MY_CONSUMER_SECRET = 'YYYYYYYYYYYYYYYY';
  $url    = 'https://developer.api.autodesk.com/authentication/v1/authenticate';
  $data   = 'client_id='.$MY_CONSUMER_KEY.'&client_secret='.$MY_CONSUMER_SECRET.'&grant_type=client_credentials';
  $header = array( 'Content-Type: application/x-www-form-urlencoded' );

  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );   // --data
  curl_setopt( $ch, CURLOPT_HTTPHEADER, $header ); // --header
  curl_exec( $ch );
  curl_close( $ch );

?>
