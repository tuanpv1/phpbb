<?php
//------------------------------------------------------------------------------
// bbmedia.php v1.0 [31.05.2012]
// Copyright 2012 Evgeny Vrublevsky <veg@tut.by> http://vrublevsky.org/
//------------------------------------------------------------------------------

ob_start('ob_gzhandler');
$cache_file = 'cache/bbmedia.js';
$cache_time = 3600*24;

function download($host, $uri)
{
	$request = "GET {$uri} HTTP/1.0\r\n"
		. "Host: {$host}\r\n"
		. "Referer: ".(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}")."\r\n"
		. "User-Agent: bbmedia.php/1.0\r\n"
		. "Connection: close\r\n\r\n";

	// Send request
	$errno = $errstr = 0;
	$socket = @ fsockopen($host, 80, $errno, $errstr, 10);
	if ($socket === false) throw new exception($errstr, $errno);
	socket_set_timeout($socket, 10);
	fwrite($socket, $request);

	// Read response
	$response = "";
	while(!feof($socket))
	{
		$part = fread($socket, 32);
		$response .= $part;
	}
	$info = stream_get_meta_data($socket);
	if($info['timed_out']) throw new exception('Socket is timed out.');
	fclose($socket);

	// Parse response
	$statusln = explode(' ', substr($response, 0, strpos($response, "\r\n")));
	if ($statusln[1] != 200) throw new exception('Invalid response status (' . $statusln[1] . ').');

	return substr($response, strpos($response, "\r\n\r\n")+4);
}

// Is forced update?
$update = isset($_GET['update']);
if ($update) header('Content-Type: text/plain');

// Update cached bbmedia.js
if(!file_exists($cache_file) || filemtime($cache_file)+$cache_time < time() || $update)
{
	try
	{
		$data = download('phpbbex.com', '/api/bbmedia.js');
		if (!$data) throw new exception('Response is empty.');
		$data .= "\r\n/* Updated: " . date('Y-m-d H:i:s') . " */";
		@file_put_contents($cache_file, $data, LOCK_EX);
		is_writable($cache_file) || @chmod($cache_file, 0666);
		if ($update) die(date('[Y-m-d H:i:s]') . ' OK');
	}
	catch (exception $e)
	{
		if (file_exists($cache_file) && filemtime($cache_file)+$cache_time < time())
		{
			touch($cache_file, time()-intval($cache_time/2));
		}
		if ($update) die(date('[Y-m-d H:i:s]') . ' Error! ' . $e->getMessage());
	}
}

// Send bbmedia.js copy to user
if(file_exists($cache_file))
{
	header('Content-Type: text/javascript');
	header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time()+$cache_time));
	readfile($cache_file);
}
else
{
	header('Content-Type: text/javascript');
	header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	header('Pragma', 'no-cache');
	header('Expires', 'Sat, 24 Oct 1987 07:00:00 GMT');
	echo('alert("Error! Could not download bbmedia.js from phpbbex.com!");');
}
