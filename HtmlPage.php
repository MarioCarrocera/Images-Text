<?php
//ini_set('display_errors', true);
//error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);


include_once('HtmlClass.php');
$html = new html();
$html->SetPage('page');
$html->SetMeta('screen');
$html->SetGoogle('letters');
$html->SetCss('MainCss');
$html->SetLayOut('Layout');
?>

<!DOCTYPE html>
<html>
	<?php $html->Getheader();
		  $html->GetLayout();?> 
</html>
