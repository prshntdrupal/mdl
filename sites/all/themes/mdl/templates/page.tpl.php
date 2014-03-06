<div class="page-wrapper">
  <?php if($page['header_top_hidden']): ?>
    <div class="header-top-hidden"> <?php print render($page['header_top_hidden']); ?></div>
  <?php endif ?>
  <div id='header'>
    <div id ="header-inner">
      <div class="mckc-logo">
        <?php global  $base_url;?>
        <a href="<?php print  $base_url; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      </div>
      <div class="mckc-title">
        <?php //echo $site_name; ?>
      </div>
      <?php print render($page['header']); ?>
      <?php print render($page['menubar']); ?>
    </div>
  </div> <!-- header end -->
  <?php if(isset($page['navigation_bar'])): ?>
    <div id="navigation-bar" class="navigation">
     <?php print render($page['navigation_bar']);?>
    </div> <!-- navbar end -->
  <?php endif; ?>
  <div class="page-inner">
    <div id="page">
      <?php if ($page['highlighted']): ?>
        <div id="navigation">
          <div id="nav-inner">
            <div class="limiter clearfix">
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($page['help'] || ($show_messages && $messages)): ?>
      <?php endif; ?>
      <?php if ($page['highlighted']): ?>
        <div id="highlighted">
          <div class="limiter clearfix">
          <?php print render($page['highlighted']); ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="content-container limiter clearfix">
        <?php if($breadcrumb): ?>
          <div class="breadcrumb-wrapper">
            <?php print $breadcrumb; ?>
          </div>
        <?php endif; ?>
        <div id="main-content" class="clearfix">
          <?php if ($page['sidebar_first']): ?>
            <div id="left" class="clearfix">
              <div id="left-inner">
                <?php print render($page['sidebar_first']) ?>
              </div>
            </div>
          <?php endif; ?>
          <div id="content">
            <div class="content-inner">
              <?php print render($title_prefix); ?>
              <?php print render($title_suffix); ?>
              <?php if ($action_links): ?>
                <ul class="links clearfix">
                  <?php print render($action_links); ?>
                </ul>
              <?php endif; ?>
              
              <?php if (isset($tabs)): ?>
                <ul class="links clearfix edit-menu">
                  <?php print render($tabs) ?>
                </ul>
              <?php endif; ?>
              <?php if ($title): ?>
                <h1 class="page-title">
                  <?php print $title ?>
                </h1>
              <?php endif; ?>
              
              <?php if($page['content-top']): ?>
                <div class="content-top">
                  <?php print render($page['content-top']) ?>
                </div>
              <?php endif; ?>
              <?php if($page['help'] || isset($messages)): ?>
                <div id="console">
                  <div class="limiter clearfix">
                    <?php print render($page['help']); ?>
                    <?php if ($show_messages && $messages): print $messages; endif; ?>
                  </div>
                </div>
              <?php endif; ?>

              <div id="content-area" class="clearfix">
                <?php print render($page['content']) ?>
              </div>

              <?php if ($page['content_bottom']): ?>
                <div id="content-bottom">
                  <?php print render($page['content_bottom']); ?>
                </div>
              <?php endif; ?>

              <?php if ($page['content-bottom-left']): ?>
              <div id="content-bottom-left">
                <?php print render($page['content-bottom-left']); ?>
              </div>
              <?php endif; ?>

              <?php if ($page['content-bottom-right']): ?>
              <div id="content-bottom-right">
                <?php print render($page['content-bottom-right']); ?>
              </div>
              <?php endif; ?>

            </div><!-- content inner close-->
          </div><!-- content close-->
          <?php if ($page['sidebar_second']): ?>
            <div id="right" class="clearfix">
              <div id="right-inner">
                <?php print render($page['sidebar_second']) ?>
              </div>
            </div>
          <?php endif; ?>
        </div><!-- main content close-->
      </div> <!-- clearfix for page close -->
    </div> <!-- page  close -->
  </div> <!-- page inner close -->
  <?php if($page['footer']): ?>
    <div id="footer">
      <div id ="footer-inner" class="clearfix">
        <div class="footer-container">
          <?php print render($page['footer']) ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div> <!-- page-wrapper close -->
