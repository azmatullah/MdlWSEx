<?php 
//load the config
$conf = parse_ini_file (dirname(__FILE__) . '/.conf');
extract($conf);

//show the request
echo '<html><head></head><body>';
echo  PHP_EOL . '<h1>================================= LIST OF Moodle script tests =====================</h1>' . PHP_EOL;
echo '<b>Important!</b> To run the tests such as update/delete you should first provide the record "id(s)" in the appropriate test file before running it!';

$prev = '';
foreach (scandir(__DIR__) as $file) {  
  if(substr($file,0,5) == 'core_') {
    $parts = explode('_',$file);
    
    if($parts[1] != $prev) {
      echo '<h2>' . $parts[1] . '</h2>';
      $prev = $parts[1];
    }
    
    echo '<a href="/'.$file.'" target=_blank>' . basename($file, '.php') .'</a><br/>' ;
  }
}
echo '<br/>See the <a href="'. $domainname .'/admin/webservice/documentation.php" target=_blank>webservices documentation here</a>!';
echo '</body></html>';
