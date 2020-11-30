<?php

require_once('JSON.php');
$json = new Services_JSON();

$Department = array(
  'Information' => 'All your Departmental queries are resolved here.',
  'Faculty' => '',
  'Admission' => 'William Dmello (+91 8546931256)',
  'Finance' => 'Salim Khan (+91 7893456125)',
  'Examination' => 'Ramesh Tiwari (+91 9457861237)',
  'Learning' => 'Dinesh Mishra (+91 8794653852)',
  'Paper Re-Evaluation' => 'Amy Santaigo (+91 8645975316)',

);

$College = array(
  'Information' => 'All your College queries are resolved here.',
  'Faculty' => '',
  'Admission' => 'Johnny Lopez (+91 9546931256)',
  'Finance' => 'Jack Daniels  (+91 8693456125)',
  'Examination' => 'Johnny Walker (+91 9567861237)',
  'Learning' => 'Thomas Shelby (+91 7794653852)',
  'Paper Re-Evaluation' => 'Sheldon Cooper(+91 9845975316)',

);

$University = array(
  'Information' => 'All your University queries are resolved here.',
  'Faculty' => '',
  'Admission' => 'Mark Rockwell (+91 9546931256)',
  'Finance' => 'Latika Jha  (+91 8693456125)',
  'Examination' => 'Matt Donovan (+91 9567861237)',
  'Learning' => ' Kurt Cobain (+91 7794653852)',
  'Paper Re-Evaluation' => 'Randy Rhodes (+91 9845975316)',


);




$details = array (
  'Department'  => $Department,
  'College'  => $College,
  'University' => $University,

);

$itemDetail = $details[$_REQUEST['ImageID']];
$output = $json->encode($itemDetail);
print($output);

?>
