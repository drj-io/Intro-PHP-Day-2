<?php


$companies = array(
  'madwire' => array(
    'name' => 'madwire',
    'rating' => 5

  ),

  'weblab' => array(
    'name' => 'weblab',
    'rating' => 5

  ),
  'ibm' =>array(
    'name' => 'ibm',
    'rating' => 4

  ),
  array(
    'name' => 'hp',
    'rating' => -3

  )
);




print_r($companies);

print $companies[3]['name']."\r\n";



foreach($companies as $key => $company){
  if($company['rating'] >= 4){
    $best_companies[] = $key;
  }
  print $key. " => ". $company['name'] ."\r\n";
}


print_r ($best_companies);


print "these are the BEST companies \r\n";

foreach($best_companies as $single_best_company){
  print $companies[$single_best_company]['name'].
    " rating: ".
    $companies[$single_best_company]['rating'].
    "\r\n";
}

print array_keys($companies);
