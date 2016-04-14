<?php 
date_default_timezone_set ('Europe/Riga');
//----------------settings --------------------
$conf = parse_ini_file (dirname(__FILE__) . '/.conf');
extract($conf);

$serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token. '&wsfunction='. basename($_SERVER["SCRIPT_FILENAME"], '.php') . '&moodlewsrestformat=json';

echo '<html><head></head><body>';
echo  PHP_EOL . '<h1>================================= REQUEST =======================================</h1>' . PHP_EOL;
echo 'URL: ' . $serverurl . PHP_EOL;
echo '<pre>';
print_r($params);
echo '</pre>';

//execute
require_once('./curl.php');
$curl = new curl;

$resp = $curl->post($serverurl, $params);

echo '<pre>' ;
echo  PHP_EOL . '<h1>================================= RESPONSE ======================================</h1>' . PHP_EOL;
print_r(json_decode($resp));

echo '</pre></body></html>';