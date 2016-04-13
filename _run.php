<?php 
date_default_timezone_set ('Europe/Riga');
//----------------settings --------------------
$conf = parse_ini_file (dirname(__FILE__) . '/.conf');
extract($conf);

/// XML-RPC CALL
header('Content-Type: text/plain');
$serverurl = $domainname . '/webservice/xmlrpc/server.php'. '?wstoken=' . $token;
require_once('./curl.php');

echo  PHP_EOL . '================================= REQUEST =======================================' . PHP_EOL;
echo 'URL: ' . $serverurl . PHP_EOL;
print_r($params);

$curl = new curl;
$post = xmlrpc_encode_request($functionname, array($params));

$resp = xmlrpc_decode($curl->post($serverurl, $post));
echo  PHP_EOL . '================================= RESPONSE ======================================' . PHP_EOL;
print_r($resp);