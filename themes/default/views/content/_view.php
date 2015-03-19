<?php
/* @var $this ContentController */
/* @var $data Content */
?>
<div class="blog-summary">
    <h4 class=""><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id' => $data->id)); ?></h4>
    <ul class="text-muted list-inline">
        <li><i class="fa fa-calendar"></i> <?php echo Content::get_date_time(CHtml::encode($data->created)); ?></li>
    </ul>
    <hr>
    <p class="blog-text">
        <?php echo mb_substr(CHtml::decode($data->introtext), 0, 1000, 'UTF-8'); ?>
        <?php //echo CHtml::decode($data->introtext); ?>
    </p>
</div>