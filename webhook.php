<?php
//=======================================================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================================================

$webhookurl = "https://discordapp.com/api/webhooks/654827471304392709/kOcBVRyt5G1rLUAryxl61vhXycichdf_6lbuCGcriV2ezYG6rg31pYogOYV1vzF1ysB2";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$msg = "Test **message** [https://krasin.space(<URL>)";

$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);

$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
//If you need to debug, or find out why you can't send message uncomment line below, and execute script.
//echo $response;

?>

