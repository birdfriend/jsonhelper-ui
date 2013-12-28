<?php

class page{

	/**
	 * render this page to the front end
	 */
	public function render()
	{
		?>
		<!DOCTYPE html>
		<html>
			<head>
				<!-- jQuery -->
				<script src="https://code.jquery.com/jquery.js"></script>
				<!-- Bootstrap -->
				<link href="/~xwang/assets/ext/bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<script src="/~xwang/assets/ext/bootstrap/js/bootstrap.min.js"></script>
				<?php
				$cssIncludes = $this->_getCSSIncludes();
				foreach($cssIncludes as $item){
					?>
					<link rel="stylesheet" type="text/css" href="/~xwang/assets/css/<?php echo $item; ?>"/>
					<?php
				}
				$jsIncludes = $this->_getJSIncludes();
				foreach($jsIncludes as $item){
					?>
					<script type="text/javascript" src="/~xwang/assets/js/<?php echo $item; ?>"></script>
					<?php
				}
				?>
				<title>
					<?php
					$this->_title();
					?>
				</title>
			</head>
			<body>
				<?php
				$this->_header();
				$this->_content();
				$this->_footer();
				?>
			</body>
		</html>
		<?php
	}

	protected function _title()
	{
		?>
		hello, cindy!
		<?php
	}

	protected function _header()
	{
	}

	protected function _content()
	{
	}

	protected function _footer()
	{
	}

	protected function _getCSSIncludes()
	{
		return array("core.css");
	}

	protected function _getJSIncludes()
	{
		return array();
	}
}