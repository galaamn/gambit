<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('templates/' . $this->template . '/js/main.js', 'text/javascript');

?>
<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl; ?>/media/jui/js/html5.js"></script>
<![endif]-->
</head>
<body>
	<!-- main container -->
	<div class='container'>
		<!-- header -->
		<div class='row'>
			<div class='span12'>
				Header
				<div class="pull-right">
					<jdoc:include type="modules" name="position-0" title="Search" style="none" />
				</div>
			</div>
		</div>
		<!-- navbar -->
		<div class='row'>
			<div class='span12'>
				<jdoc:include type="modules" name="position-1" title="Navigation" style="none" />
			</div>
		</div>
		<!-- top -->
		<div class='row'>
			<div class='span4'>
				<jdoc:include type="modules" name="position-2" title="Top Left" style="none" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-3" title="Top Center" style="none" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-4" title="Top Right" style="none" />
			</div>
		</div>
		<!-- mid container - includes main content area and right sidebar -->
		<div class='row'>
			<!-- left sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-7" title="Left Sidebar" style="xhtml" />
			</div>
			<!-- main content area -->
			<div class='span6'>
				<jdoc:include type="modules" name="position-5" title="Banner" style="xhtml" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="position-6" title="Breadcrumbs" style="none" />
			</div>
			<!-- right sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-8" title="Right Sidebar" style="well" />
			</div>
		</div>
		<!-- bottom -->
		<div class='row'>
			<div class='span4'>
				<jdoc:include type="modules" name="position-9" title="Bottom Left" style="none" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-10" title="Bottom Center" style="none" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-11" title="Bottom Right" style="none" />
			</div>
		</div>
		<!-- footer -->
		<footer role="contentinfo">
			<div class="row">
					<div class='span12'>
						<jdoc:include type="modules" name="position-12" title="Footer" style="none" />
						<p class="pull-right"><a href="#top" id="back-top"><?php echo JText::_('BACKTOTOP'); ?></a></p>
					</div>
			</div>
		</footer>
	</div>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
