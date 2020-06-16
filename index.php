<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/inc/logic.php';

?><!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" /><?php include_once JPATH_THEMES.'/'.$this->template.'/inc/head.php'; ?>

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102755396-1', 'auto');
  ga('send', 'pageview');

</script> -->
</head>

<body id="origin" class="<?php
  echo (($active == $menu->getDefault()) ? 'front' : 'site')
  . ' ' .$active->alias . ' ' . ($pageclass ? $pageclass.' ' : '');
  echo $option
  . ' view-' . $view
  //. ($task ? ' task-' . $task : ' no-task')
  . ($itemid ? ' itemid-' . $itemid : ' no-itemid')
  . ($parentid ? ' parentid-' . $parentid : ' no-parentid');
  ?>" role="document">

  <?php if ($this->countModules('header-top')) : ?>
    <a href="/nouveautes-legrand" class="banner-top">
      <jdoc:include type="modules" name="header-top" />
    </a>
  <?php endif; ?>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="flex flex-navbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><img class="logo" src="/images/sonew-logo.svg" alt="Logo So New!" /></a>
          <a class="company-brand" href="http://www.sonepar.fr"><img class="logo" src="/images/logo-sonepar-connect.svg" target="_blank" alt="Logo Sonepar Connect" /></a>
        </div>
        <div class="flex flex-nav">
          <p class="slogan">Le magazine de l’innovation électrique par <strong>sonepar</strong></p>
          <div id="navbar" class="collapse navbar-collapse">
            <jdoc:include type="modules" name="navbar" />
            <jdoc:include type="modules" name="navbar-mobile" />
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php if ($this->countModules('breadcrumbs')) : ?>
    <div class="breadcrumbs<?php echo ($pageclass ? ' '.$pageclass : '') ; ?>">
      <div class="container flex">
        <jdoc:include type="modules" name="breadcrumbs" />
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->countModules('pagetitle')) : ?>
    <div class="breadcrumbs">
      <div class="container">
        <jdoc:include type="modules" name="pagetitle" />
      </div>
    </div>
  <?php endif; ?>

  <?php if (($this->countModules('content-above')) && ($itemid)) : ?>
    <div class="content-above">
      <jdoc:include type="modules" name="content-above" />
    </div>
  <?php endif; ?>

  <div class="main-content">
    <div class="container">
      <div class="row">

        <div class="col-xs-12">
          <jdoc:include type="message" />

          <?php if (($this->countModules('component-above')) && ($itemid)) : ?>
              <jdoc:include type="modules" name="component-above" />
          <?php endif; ?>

          <jdoc:include type="component" />

          <?php if (($this->countModules('content-below')) && ($itemid)) : ?>
            <div class="content-below">
              <jdoc:include type="modules" name="content-below" />
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <jdoc:include type="modules" name="footer" />
    </div>
    <a class="company-brand" href="http://www.sonepar.fr"><img class="logo" src="/images/sonepar-connect-logo-footer.svg" target="_blank" alt="Logo Sonepar Connect" /></a>
  </footer>

	<jdoc:include type="modules" name="debug" />

  <script>
    jQuery.noConflict();
    jQuery('#scrollpos-103').scrollLeft(250);
    jQuery('#scrollpos-104').scrollLeft(350);
  </script>
</body>

</html>
