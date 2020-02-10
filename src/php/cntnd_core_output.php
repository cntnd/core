<?php
// cntnd_core_output

// assert framework initialization
defined('CON_FRAMEWORK') || die('Illegal call: Missing framework initialization - request aborted.');

// editmode and more
$editmode = cRegistry::isBackendEditMode();

// input/vars


// includes
/*
cInclude('module', 'includes/class.cntnd_booking.php');
if ($editmode){
  cInclude('module', 'includes/script.cntnd_booking_output.php');
}
*/

// other/vars
$smarty = cSmartyFrontend::getInstance();

?>
