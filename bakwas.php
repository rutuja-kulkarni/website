
<?php
 // include the Tera-WURFL file
require_once('/path/to/tera_wurfl.php');
 
// instantiate the Tera-WURFL object
$wurflObj = new tera_wurfl();
 
// get the capabilities from the object
if ( $wurflObj->GetDeviceCapabilitiesFromAgent($agent) ) {
    $caps       = $wurflObj->capabilities;
    $callstring = $caps['xhtml_ui']['xhtml_make_phone_call_string'];
}
 
?>
 
<!-- some HTML here -->
 
<?php if ( $callstring != 'none' ) : ?>
 
<p><a href="<?php echo $callstring; ?>1234567">Click Here</a>.</p>
 
<?php endif; ?>
 
<!-- some more HTML -->
$smsstring = $caps['xhtml_ui']['xhtml_send_sms_string'];
 
?>
 
<?php if ( $smsstring != 'none' ) : ?>
 
<p><a href="<?php echo $smsstring; ?>1234567?body=The Quick Brown
Fox">Click Here</a>.</p>
 
<?php endif; ?>

