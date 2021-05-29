<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);


$base='ontime';
$AdminPassword='OT2021Free';

if (file_exists('../'.$base."/OnTime.php")){
	$base = '../'.$base;
}	
	
include_once($base."/OnTime.php");

$demo=new OnTime($base);

$base .= '/';

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');

$inside = 'page';




echo "********** <br> Changes to Cass record & data <br> ********** <br> <br>";

$table='bgrepeat';
$demo->CrtBscIn($table,'Values of the background repeat ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('repeat',"The background image is repeated both vertically and horizontally.  The last image will be clipped if it does not fit. This is default",$table, $inside);
$demo->UpnCntIn('repeat-x',"The background image is repeated only horizontally",$table, $inside);
$demo->UpnCntIn('repeat-y',"The background image is repeated only vertically",$table, $inside);
$demo->UpnCntIn('no-repeat',"The background-image is not repeated. The image will only be shown once",$table, $inside);
$demo->UpnCntIn('space',"The background-image is repeated as much as possible without clipping. The first and last images are pinned to either side of the element, and whitespace is distributed evenly between the images",$table, $inside);
$demo->UpnCntIn('round',"The background-image is repeated and squished or stretched to fill the space (no gaps)",$table, $inside);

$table='bgsize';
$demo->CrtBscIn($table,'Values of the background size ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('auto',"Default value. The background image is displayed in its original size",$table, $inside);
$demo->UpnCntIn('cover',"Resize the background image to cover the entire container, even if it has to stretch the image or cut a little bit off one of the edges",$table, $inside);
$demo->UpnCntIn('contain',"Resize the background image to make sure the image is fully visible",$table, $inside);

$table='bgkind';
$demo->CrtBscIn($table,'Kind of bacground image',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('url',"The URL to the image. To specify more than one image, separate the URLs with a comma
",$table, $inside);
$demo->UpnCntIn('linear-gradient',"Sets a linear gradient as the background image. Define at least two colors (top to bottom)",$table, $inside);
$demo->UpnCntIn('radial-gradient',"Sets a radial gradient as the background image. Define at least two colors (center to edges)",$table, $inside);
$demo->UpnCntIn('repeating-linear-gradient',"Repeats a linear gradient",$table, $inside);
$demo->UpnCntIn('repeating-radial-gradient',"Repeats a radial gradient",$table, $inside);



$table='clear';
$demo->CrtBscIn($table,'Clear values ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('none',"Allows floating objects on both sides of the element. This is default",$table, $inside);
$demo->UpnCntIn('left',"No floating objects allowed on the left side of the element",$table, $inside);
$demo->UpnCntIn('right',"No floating objects allowed on the right side of the element",$table, $inside);
$demo->UpnCntIn('both',"No floating objects allowed on either the left or right side of the element",$table, $inside);

$demo->DddAddFld('background-size', array('FldTpe'=>'S','FldDsc'=>'Css Back Ground size','FldVld'=>array('Name'=>'bringin','content'=>'bgsize', 'in'=>'page')));
$demo->DddAddFld('background-repeat', array('FldTpe'=>'S','FldDsc'=>'Css Back Ground size','FldVld'=>array('Name'=>'bringin','content'=>'bgrepeat', 'in'=>'page')));


$demo->RcdAddIn('Css','background-size', array('FldEmp'=>TRUE));


$table = 'MainCss';

$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>'12','SzUnit'=>'px'), 'background-image'=>"url('bg.png')"),$inside);

$demo->UpsTblIn($table , 'HeaderFix', array('Name'=>'Allways in the top', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'),'Top'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed' , 'overflow'=> 'hidden',  'background-color'=> 'marron') , $inside);

$demo->UpsTblIn($table , 'Main', array('Name'=>'Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'block',  'font-family'=> 'Body','background-color'=>'transparent'),$inside);

$demo->UpsTblIn($table , 'TopInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'10','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'MiddleInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'80','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'BottomInside', array('Name'=>'Header float in main', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'10','SzUnit'=>'vh'), 'overflow'=> 'hidden'),$inside);

$demo->UpsTblIn($table , 'Cleft', array('Name'=>'left column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CleftAuto', array('Name'=>'left column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'Cright', array('Name'=>'right column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'right', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CrightAuto', array('Name'=>'right column', 'width'=>array('SzNumber'=>'20','SzUnit'=>'%'), 'float'=>'right', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'CCenter', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'hidden') , $inside);

$demo->UpsTblIn($table , 'CCenterAuto', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);

$demo->UpsTblIn($table , 'main:after', array('Name'=>'Center column', 'float'=>'left', 'position'=>'relative' , 'overflow'=> 'auto') , $inside);


echo "********** <br> Image Albun Record  <br> ********** <br> <br>";

$demo->CrtRcd('Images','Html Layout');
$demo->RcdAddIn('Images','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Images','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Images','Img', array('FldEmp'=>TRUE,'FldVld'=>array('Name'=>'image', 'in'=>'public')));
$demo->RcdAddIn('Images','height', array('FldEmp'=>TRUE),'SizeCss');
$demo->ot_show($demo->errvalid);


$table = 'Images';
$demo->CrtTblIn($table, 'Album of images', 'Images' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'OntimeLogo', array('Name'=>'The ontime logo', 'Img'=> 'ontimer.png', 'height'=> array('SzNumber'=>'100')),$inside);
$demo->ot_show($demo->errvalid);



echo "********** <br> Message Record  <br> ********** <br> <br>";

$demo->CrtRcd('Msg','Html Layout');
$demo->RcdAddIn('Msg','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Msg','Name', array('FldEmp'=>FALSE));


$table = 'Msg';
$demo->CrtTblIn($table, 'Massage stores', 'Msg' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'PageHeader', array('Name'=>'The page header'),$inside);
$demo->ot_show($demo->errvalid);





echo "********** <br> Changes to content record & data <br> ********** <br> <br>";

$demo->DddAddFld('recursive', array('FldTpe'=>'S','FldDsc'=>'Use this field to do filters'));
$demo->RcdAddIn('Content','recursive', array('FldEmp'=>FALSE)); 



$table = 'Content';
$demo->CrtTblIn($table, 'Content', 'Content' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , '40000-100', array('Name'=>'down Nav Bar', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Menu'=>'S','page'=>'S'), 'Deploy'=> 'aref', 'recursive'=> 'FixFooter'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-200', array('Name'=>'License', 'Deploy'=> 'license(1)', 'recursive'=> 'Middle'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-300', array('Name'=>'Logo', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Images'=>'S','page'=>'S'), 'Deploy'=> 'image', 'recursive'=> 'LeftColum'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000-400', array('Name'=>'Logo', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Msg'=>'S','page'=>'S'), 'Deploy'=> 'text', 'recursive'=> 'MidleColum'),$inside);
$demo->ot_show($demo->errvalid);




echo "********** <br> Changes to Layout record & data <br> ********** <br> <br>";

$demo->RcdAddIn('Layout','recursive', array('FldEmp'=>FALSE)); 

$table = 'Layout';
$demo->CrtTblIn($table, 'Page Layout', 'Layout' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , '20000', array('Name'=>'Main', 'CssClass'=> 'Main','Container'=>'Layout', 'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '30000', array('Name'=>'FixHeader', 'CssClass'=> 'HeaderFix',  'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '40000', array('Name'=>'FixFooter', 'CssClass'=> 'FooterFix','Content'=>'Content',  'recursive'=> 'none'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , '21000', array('Name'=>'Header', 'CssClass'=> 'TopInside','Container'=>'Layout',  'recursive'=> 'Main'),$inside);
$demo->UpsTblIn($table , '22000', array('Name'=>'Middle', 'CssClass'=> 'MiddleInside','Content'=>'Content',  'recursive'=> 'Main'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '23000', array('Name'=>'Footer', 'CssClass'=> 'BottomInside',  'recursive'=> 'Main'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , '22000', array('Name'=>'LeftColum', 'CssClass'=> 'CleftAuto','Content'=>'Content', 'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '23000', array('Name'=>'MidleColum', 'CssClass'=> 'CCenterAuto','Content'=>'Content', 'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '24000', array('Name'=>'RightColum', 'CssClass'=> 'CrightAuto',  'recursive'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);













echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>