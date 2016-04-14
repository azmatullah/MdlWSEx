<?php 
//load the config
$conf = parse_ini_file (dirname(__FILE__) . '/.conf');
extract($conf);

//show the request
echo '<html><head></head><body>';
echo  PHP_EOL . '<h1>================================= LIST OF Moodle script tests =====================</h1>' . PHP_EOL;
echo '<b>Important!</b> To run the tests such as update/delete you should first provide the record "id(s)" in the appropriate test file before running it!';

$prev = '';
$out = array();
foreach (scandir(__DIR__) as $file) {  
  $parts = explode('_',$file);
  if(in_array($parts[0], array('core','enrol'))) {
    
    if($parts[1] == 'manual') $parts[1] = 'enrol';
    
    if($parts[1] != $prev) {
      $prev = $parts[1];
    }
    
    $out[$parts[1]][] = '<a href="/'.$file.'" target=_blank>' . basename($file, '.php') .'</a>' ;
  }
}
foreach($out as $o=>$l){
  echo '<h3>' . ucfirst($o) . '</h3>';
  echo implode('<br/>',$l);
}
echo '<br/><br/>See the <a href="'. $domainname .'/admin/webservice/documentation.php" target=_blank>webservices documentation here</a>!';
echo '</body></html>';
