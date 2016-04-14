<?php 

//load the config
$conf = parse_ini_file (dirname(__FILE__) . '/.conf');
extract($conf);

$serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token. '&wsfunction='. basename($_SERVER["SCRIPT_FILENAME"], '.php') . '&moodlewsrestformat=json';

//show the request
echo '<html><head></head><body>';
echo  PHP_EOL . '<h1>================================= REQUEST =======================================</h1>' . PHP_EOL;
echo '<h2>Webservice function: ' . basename($_SERVER["SCRIPT_FILENAME"], '.php') . '</h2>';
echo '<h3>URL: </h3>' . $serverurl . PHP_EOL;
echo '<h3>Parameters: </h3>' . PHP_EOL;
echo '<pre>';
print_r($params);
echo '</pre>';

//execute
require_once('./curl.php');
$curl = new curl;
$resp = $curl->post($serverurl, $params);

//show the result
echo  PHP_EOL . '<h1>================================= RESPONSE ======================================</h1>' . PHP_EOL;
$r = json_decode($resp);
if(empty($r)) {
  echo '<h3>Response emtpy!</h3>';
  if(empty($curl->error) && $curl->info['http_code'] == 200) {
    echo '<h4 style="color:green">Probably everythign is fine.</h4>';
  }else{
    echo '<h4 style="color:red">Something went wrong!</h4>';
    echo '<h5>Curl Info</h5>';
    var_dump($curl->info);
    echo '<h5>Curl Error</h5>';
    var_dump($curl->error);   
  }
}else{
  echo '<pre>' ;
  print_r($r);
  echo '</pre>' ;
}
echo '<br/>See the <a href="'. $domainname .'/admin/webservice/documentation.php" target=_blank><b>' . basename($_SERVER["SCRIPT_FILENAME"], '.php')  . '</b> documentation here</a> for detailed information on this webservice response!';
echo '</body></html>';