<?php

class page_jsonhelper extends page
{
	protected function _content()
	{
		?>
		<div class="container">
			<div class="row myjumbotron">
				<textarea class="col-xs-12" rows="20" placeholder="Enter JSON to Format" autofocus=true id="textarea_json">
				</textarea>
			</div>
			<div class="row">
				<button type="button" class="btn btn-primary" id="btn_check">
					<span class="glyphicon glyphicon-play"></span>GO!
				</button>
			</div>
			<br>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Valid JSON
			</div>
			<div class="alert alert-warning alert-dismissable">
				<div id="msg_warning">
				</div>
			</div>
		</div>
		<?php
	}

	protected function _title()
	{
		?>
		Cindy's JSON Helper
		<?php
	}

	protected function _header()
	{
		?>
		<div class="page-header">
			<h1>JSON Helper
				<small>
					format your json data with comments
				</small>
			</h1>
		</div>
		<?php
	}

	protected function _getJSIncludes()
	{
		$jsIncludes = parent::_getJSIncludes();
		$jsIncludes[] = 'jsonhelper.js';
		return $jsIncludes;
	}
}