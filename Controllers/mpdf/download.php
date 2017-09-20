<?php
//$fileContents = stripslashes($_REQUEST['fileContents']);
//$fileContents = stripslashes("../report.php");
/**
 * Created by PhpStorm.
 * User: Fredrick
 * Date: 2/6/2017
 * Time: 11:41 AM
 */
//session_start();
//include "../Core.php";
//include "../env.php";
//$fileContents = stripcslashes($contents);

//$css = $_POST['css'];
$fileName = rand(100000,99999999);

//==============================================================
//==============================================================
//==============================================================
include("mpdf/mpdf.php");
//settup
$mpdf=  new mPDF('c', 'A4-L');
$mpdf->SetDisplayMode('fullpage');
// LOAD a stylesheet
//$stylesheet = file_get_contents($css);
//$mpdf->WriteHTML($stylesheet,1);
// The parameter 1 tells that this is css/style only and no body/html/text

ob_start();
//$getCategory = $_REQUEST['cat'];
//$getCategory = $_REQUEST['booking_id'];

include 'ticket.php';

$template = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($template);
$mpdf->Output($fileName,'I');
//I: send the file inline to the browser. The plug-in is used if available. The name given by filename is used when one selects the "Save as" option on the link generating the PDF.
//D: send to the browser and force a file download with the name given by filename.
//F: save to a local file with the name given by filename (may include a path).
//S: return the document as a string. filename is ignored.
exit;
//==============================================================
//==============================================================
//==============================================================
?>