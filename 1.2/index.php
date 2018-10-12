
<?php
header('Content-type: text/plain');
// echo ': ' .$_SERVER[''] ."\n";
// echo ': ' .getenv('') ."\n";
echo 'PATH: ' .getenv('PATH') ."\n";
echo 'SCRIPT_URL: ' .getenv('SCRIPT_URL') ."\n";
echo 'SCRIPT_URI: ' .getenv('SCRIPT_URI') ."\n";
//echo 'HTTPS: ' .$_SERVER['HTTPS'] ."\n";
echo 'HTTPS: ' .getenv('HTTPS') ."\n";
//echo 'SSL_TLS_SNI: ' .$_SERVER['SSL_TLS_SNI'] ."\n";
echo 'SSL_TLS_SNI: ' .getenv('SSL_TLS_SNI') ."\n";

echo 'HTTP_HOST: ' .$_SERVER['HTTP_HOST'] ."\n";
echo 'HTTP_CONNECTION: ' .$_SERVER['HTTP_CONNECTION'] ."\n";
echo 'HTTP_UPGRADE_INSECURE_REQUESTS: ' .$_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] ."\n";
echo 'HTTP_USER_AGENT: ' .$_SERVER['HTTP_USER_AGENT'] ."\n";
echo 'HTTP_ACCEPT: ' .$_SERVER['HTTP_ACCEPT'] ."\n";
//Undefined index: HTTP_REFERER
echo 'HTTP_REFERER: ' .getenv('HTTP_REFERER') ."\n";
//echo 'HTTP_REFERER: ' .$_SERVER['HTTP_REFERER'] ."\n";
echo 'HTTP_ACCEPT_ENCODING: ' .$_SERVER['HTTP_ACCEPT_ENCODING'] ."\n";
echo 'HTTP_ACCEPT_LANGUAGE: ' .$_SERVER['HTTP_ACCEPT_LANGUAGE'] ."\n";
echo 'HTTP_COOKIE: ' .$_SERVER['HTTP_COOKIE'] ."\n";
//Undefined index: SERVER_SIGNATUR
echo 'SERVER_SIGNATUR: ' .getenv('SERVER_SIGNATUR') ."\n";
//echo 'SERVER_SIGNATUR: ' .$_SERVER['SERVER_SIGNATUR'] ."\n";
echo 'SERVER_SOFTWARE: ' .$_SERVER['SERVER_SOFTWARE'] ."\n";
echo 'SERVER_NAME: ' .$_SERVER['SERVER_NAME'] ."\n";
//Undefined index: SERVER_ADDR
echo 'SERVER_ADDR: ' .getenv('SERVER_ADDR') ."\n";
//echo 'SERVER_ADDR: ' .$_SERVER['SERVER_ADDR'] ."\n";
echo 'SERVER_PORT: ' .$_SERVER['SERVER_PORT'] ."\n";
echo 'REMOTE_ADDR: ' .$_SERVER['REMOTE_ADDR'] ."\n";
echo 'DOCUMENT_ROOT: ' .$_SERVER['DOCUMENT_ROOT'] ."\n";
//Undefined index: (var name)
echo 'REQUEST_SCHEME: ' .$_SERVER['REQUEST_SCHEME'] ."\n";
echo 'CONTEXT_PREFIX: ' .$_SERVER['CONTEXT_PREFIX'] ."\n";
echo 'CONTEXT_DOCUMENT_ROOT: ' .$_SERVER['CONTEXT_DOCUMENT_ROOT'] ."\n";
echo 'SERVER_ADMIN: ' .$_SERVER['SERVER_ADMIN'] ."\n";
//^

echo 'SCRIPT_FILENAME: ' .$_SERVER['SCRIPT_FILENAME'] ."\n";
echo 'REMOTE_PORT: ' .$_SERVER['REMOTE_PORT'] ."\n";
//Undefined index: GATEWAY_INTERFACE
echo 'GATEWAY_INTERFACE: ' .$_SERVER['GATEWAY_INTERFACE'] ."\n";
echo 'SERVER_PROTOCOL: ' .$_SERVER['SERVER_PROTOCOL'] ."\n";
echo 'REQUEST_METHOD: ' .$_SERVER['REQUEST_METHOD'] ."\n";
//Undefined index: QUERY_STRING
echo 'QUERY_STRING: ' .$_SERVER['QUERY_STRING'] ."\n";
echo 'REQUEST_URI: ' .$_SERVER['REQUEST_URI'] ."\n";
echo 'SCRIPT_NAME: ' .$_SERVER['SCRIPT_NAME'] ."\n";
echo 'PHP_SELF: ' .$_SERVER['PHP_SELF'] ."\n";
echo 'REQUEST_TIME_FLOAT: ' .$_SERVER['REQUEST_TIME_FLOAT'] ."\n";
echo 'REQUEST_TIME: ' .$_SERVER['REQUEST_TIME'] ."\n";

?>