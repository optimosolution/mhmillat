<?php $this->beginContent('//layouts/main'); ?>
<div class="section-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Remove the .animated class if you don't want things to move -->
                <h1 class="animated slideInLeft"><span><?php echo Banner::get_title($_GET['id']); ?></span></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>
