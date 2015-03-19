<?php
$this->pageTitle = $model->title . ' - ' . Yii::app()->name;
?>
<div class="blog-summary">
    <h4 class=""><?php echo CHtml::link(CHtml::encode($model->title), array('view', 'id' => $model->id)); ?></h4>
    <ul class="text-muted list-inline">
        <li><i class="fa fa-calendar"></i> <?php echo Content::get_date_time(CHtml::encode($model->created)); ?></li>
    </ul>
    <hr>
    <p class="blog-text">
        <?php echo CHtml::decode($model->introtext); ?>
    </p>
</div>