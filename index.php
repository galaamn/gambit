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
	<div class="flags">
		<img src="templates/<?php echo $this->template; ?>/images/flags.png" alt="" />
	</div>
	<div class="search">
		<jdoc:include type="modules" name="position-0" title="Search" style="onlycontent" />
	</div>
	<!-- main container -->
	<div class='container'>
		<!-- header -->
		<div class='row'>
			<div class='span12'>
				<div class='header'></div>
			</div>
		</div>
		<!-- navbar -->
		<div class='row'>
			<div class='span12'>
				<jdoc:include type="modules" name="position-1" title="Navigation" style="onlycontent" />
			</div>
		</div>
		<!-- top -->
		<div class='row'>
			<div class='span4'>
				<jdoc:include type="modules" name="position-2" title="Top Left" style="onlycontent" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-3" title="Top Center" style="onlycontent" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-4" title="Top Right" style="onlycontent" />
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
				<jdoc:include type="modules" name="position-6" title="Breadcrumbs" style="onlycontent" />
			</div>
			<!-- right sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-8" title="Right Sidebar" style="nice" />
			</div>
		</div>
		<!-- bottom -->
		<div class='row'>
			<div class='span4'>
				<jdoc:include type="modules" name="position-9" title="Bottom Left" style="nice" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-10" title="Bottom Center" style="nice" />
			</div>
			<div class='span4'>
				<jdoc:include type="modules" name="position-11" title="Bottom Right" style="nice" />
			</div>
		</div>
		<!-- footer -->
		<footer role="contentinfo">
			<div class="row">
					<div class='span12'>
						<jdoc:include type="modules" name="position-12" title="Footer" style="onlycontent" />
					</div>
			</div>
		</footer>
	</div>
	<jdoc:include type="modules" name="debug" title="Debug" style="onlycontent" />
</body>
</html>
