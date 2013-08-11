<?php $this->beginContent('webroot.themes.manager.views.layouts.main'); ?>
<div class="container-fluid" id="main-container">
    <div id="sidebar" class="nav-collapse">

        <?php $this->widget('MenuWidget'); ?>

        <div id="sidebar-collapse" class="visible-desktop">
            <i class="icon-double-angle-left"></i>
        </div>
    </div>
    <div id="main-content">

        <?php echo $content; ?>

        <footer>
            <p>2013 &copy; Manager System.</p>
        </footer>
        <a id="btn-scrollup" class="btn btn-circle btn-large" href="javascript:;"><i class="icon-chevron-up"></i></a>
    </div>
</div>
<?php $this->endContent(); ?>