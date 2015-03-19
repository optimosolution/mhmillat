<?php $this->beginContent('//layouts/main'); ?>
<div class="section-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Remove the .animated class if you don't want things to move -->
                <h1 class="animated slideInLeft"><span><?php echo Content::get_title($_GET['id']); ?></span></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-summary-list">
            <?php echo $content; ?>
        </div>
        <div class="col-sm-4">
            <?php $this->get_latest_post(2); ?>
            <?php $this->get_latest_post(3); ?>
            <?php $this->get_latest_post(4); ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
