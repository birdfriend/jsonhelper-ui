<?php
require_once __DIR__ . "/src/bootstrap.php";

if (!empty($_POST) && isset($_POST['data']))
{
	//make a file
	$inputFile = __DIR__ . DIRECTORY_SEPARATOR . '_input.txt';
	$outputFile = __DIR__ . DIRECTORY_SEPARATOR . '_output.txt';
	file_put_contents($inputFile, "");
	file_put_contents($outputFile, "");
	file_put_contents($inputFile, $_POST['data']);
	$command = __DIR__ . "/taffy/bin/taffy --format-json $inputFile --output $outputFile";
	exec(escapeshellcmd($command), $output, $status);
	$output = implode("\n", $output);
	if (preg_match("/Invalid json string(.*)Invalid json file/s", $output, $match))
		echo json_encode(array('valid' => false, 'data' => $match[1]));
	else
	{
		$output = file_get_contents($outputFile);
		echo json_encode(array('valid' => true, 'data' => $output));
	}
}
else
{
	$page = new page_jsonhelper();
	$page->render();
}
exit;