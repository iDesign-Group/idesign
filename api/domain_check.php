<?php
header('Content-Type: application/json');
$domain = trim(filter_input(INPUT_GET,'domain',FILTER_SANITIZE_SPECIAL_CHARS));
$domain = preg_replace('/\..*/','',$domain);
if(!$domain){echo json_encode(['success'=>false,'message'=>'Domain name required']);exit;}
$tlds=['.com'=>'₹899/yr','.in'=>'₹499/yr','.co.in'=>'₹599/yr','.net'=>'₹999/yr','.org'=>'₹899/yr','.io'=>'₹2499/yr','.store'=>'₹1299/yr','.online'=>'₹399/yr'];
$results=[];
foreach($tlds as $tld=>$price){
  $results[]=['domain'=>$domain.$tld,'available'=>(bool)rand(0,1),'price'=>$price];
}
echo json_encode(['success'=>true,'results'=>$results]);
?>
