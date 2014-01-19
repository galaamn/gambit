<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');

?>
<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- main container -->
	<div class='container'>
		<!-- header -->
		<div class='row'>
			<div class='span12'>Header</div>
		</div>
		<!-- mid container - includes main content area and right sidebar -->
		<div class='row'>
			<!-- main content area -->
			<div class='span9'>
				<jdoc:include type="modules" name="position-3" style="xhtml" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="position-2" style="none" />
			</div>
			<!-- right sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-7" style="well" />
			</div>
		</div>
		<!-- footer -->
		<div class='row'>
			<div class='span12'>Footer</div>
		</div>
	</div>
</body>
</html>
