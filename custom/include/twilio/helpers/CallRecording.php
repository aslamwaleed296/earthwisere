<?php 

require_once 'vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$GLOBALS['log']->fatal("CALL RECORDING ENTRY POINT");
$GLOBALS['log']->fatal($_REQUEST);

global $sugar_config;
$response = new VoiceResponse();

if(!empty($_REQUEST['To']) && strlen($_REQUEST['To']) > 0)
{
    $GLOBALS['log']->fatal("CALLING...");
    $number = htmlspecialchars($_REQUEST['To']);

    if (isset($_REQUEST['lead_id']) && !empty($_REQUEST['lead_id'])) {
        $GLOBALS['log']->fatal("OUTBOUND...");
        $leadId = $_REQUEST['lead_id'];
        $callbackUrl = $sugar_config['site_url'] . 'index.php?entryPoint=saveRecording&leadId=' . $leadId;
        $dial = $response->dial('', ['callerId' => $sugar_config['TWILIO_CALLER_ID'], 'record' => 'record-from-ringing-dual', 'recordingStatusCallback' => $callbackUrl, 'recordingStatusCallbackEvent' => 'in-progress completed absent']);
    } else {
        $GLOBALS['log']->fatal("INBOUND...");
        $dial = $response->dial('', ['callerId' => $_REQUEST['From']]);
    }

    // wrap the phone number or client name in the appropriate TwiML verb
    // by checking if the number given has only digits and format symbols
    if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
        $dial->number($number);
    }

    $response = (string)$response;

    $GLOBALS['log']->fatal("RESPONSE IN ENTRY POINT", $response);

    echo $response;
}
