<?php
 $ch = curl_init($tokenendpoint);
curl_setopt( $ch,  CURLOPT_RETURNTRANSFER, 1 );
//curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
//curl_setopt( $ch, CURLOPT_ENCODING, "" );
//curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
//curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
curl_setopt( $ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($body));
$response = curl_exec($ch);
curl_close($ch);
