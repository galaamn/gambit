<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('media/jui/css/bootstrap.min.css');
$doc->addStyleSheet('media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('templates/' . $this->template . '/js/main.js', 'text/javascript');

// Adjusting content width
switch (($this->countModules('position-2') > 0) + ($this->countModules('position-3') > 0) + ($this->countModules('position-4') > 0))
{
	case 3:
		$span_top = "span4";
		break;
	case 2:
		$span_top = "span6";
		break;
	default:
		$span_top = "span12";
		break;
}
switch (($this->countModules('position-9') > 0) + ($this->countModules('position-10') > 0) + ($this->countModules('position-11') > 0))
{
	case 3:
		$span_bottom = "span4";
		break;
	case 2:
		$span_bottom = "span6";
		break;
	default:
		$span_bottom = "span12";
		break;
}
switch (($this->countModules('position-7') > 0) + ($this->countModules('position-8') > 0))
{
	case 2:
		$span_component = "span6";
		break;
	case 1:
		$span_component = "span9";
		break;
	default:
		$span_component = "span12";
		break;
}

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
		<?php if (($this->countModules('position-2') > 0) + ($this->countModules('position-3') > 0) + ($this->countModules('position-4') > 0)) : ?>
		<!-- top -->
		<div class='row'>
			<?php if ($this->countModules('position-2')) : ?>
			<div class='<?php echo $span_top; ?>'>
				<jdoc:include type="modules" name="position-2" title="Top Left" style="onlycontent" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('position-3')) : ?>
			<div class='<?php echo $span_top; ?>'>
				<jdoc:include type="modules" name="position-3" title="Top Center" style="onlycontent" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('position-4')) : ?>
			<div class='<?php echo $span_top; ?>'>
				<jdoc:include type="modules" name="position-4" title="Top Right" style="onlycontent" />
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<!-- mid container - includes main content area and right sidebar -->
		<div class='row'>
			<?php if ($this->countModules('position-7')) : ?>
			<!-- left sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-7" title="Left Sidebar" style="nice" />
			</div>
			<?php endif; ?>
			<!-- main content area -->
			<div class='<?php echo $span_component; ?>'>
				<jdoc:include type="modules" name="position-5" title="Banner" style="xhtml" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="position-6" title="Breadcrumb" style="onlycontent" />
			</div>
			<?php if ($this->countModules('position-8')) : ?>
			<!-- right sidebar -->
			<div class='span3'>
				<jdoc:include type="modules" name="position-8" title="Right Sidebar" style="nice" />
			</div>
			<?php endif; ?>
		</div>
		<?php if (($this->countModules('position-9') > 0) + ($this->countModules('position-10') > 0) + ($this->countModules('position-11') > 0)) : ?>
		<!-- bottom -->
		<div class='row'>
			<?php if ($this->countModules('position-9')) : ?>
			<div class='<?php echo $span_bottom; ?>'>
				<jdoc:include type="modules" name="position-9" title="Bottom Left" style="nice" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('position-10')) : ?>
			<div class='<?php echo $span_bottom; ?>'>
				<jdoc:include type="modules" name="position-10" title="Bottom Center" style="nice" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('position-11')) : ?>
			<div class='<?php echo $span_bottom; ?>'>
				<jdoc:include type="modules" name="position-11" title="Bottom Right" style="nice" />
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
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
