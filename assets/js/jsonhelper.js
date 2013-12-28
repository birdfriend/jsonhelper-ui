$(document).ready(
	function()
	{
		$(':button#btn_check').click(getFormattedString);
		$('.col-xs-12#textarea_json').val("");
		$('.alert').hide();
	}
);

function getFormattedString(event)
{
	var request = $('.col-xs-12#textarea_json').val();
	$.post("/~xwang/jsonhelper.php",
		{data: request},
		showResult,
		"json"
	);
}

function showResult(response)
{
	//$('.col-xs-12#textarea_json').val("");
	//$('.alert-warning#msg_warning').remove();
	$('.alert').hide();
	console.log(response);
	var result = response['data'];
	if(response['valid'] == true)
	{
		$('.col-xs-12#textarea_json').val(result);
		$('.alert-success').show();
	}
	else
	{
		$('.alert-warning').text(result);
		$('.alert-warning').show();
	}
}