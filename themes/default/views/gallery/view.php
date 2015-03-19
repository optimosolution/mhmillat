<?php
/* @var $this GalleryController */
/* @var $model Banner */

$this->pageTitle = $model->name . ' - ' . Yii::app()->name;
?>
<div class="row">
    <div class="col-sm-12"><h3><?php echo $model->name; ?></h3></div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php
        $filePath = Yii::app()->basePath . '/../uploads/banners/' . $model->banner;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $model->banner, 'Picture', array('alt' => $model->name, 'class' => 'img-responsive', 'title' => $model->name, 'style' => ''));
        } else {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/profile.jpg', 'Picture', array('alt' => $model->name, 'class' => 'img-responsive', 'title' => $model->name, 'style' => ''));
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12"><?php echo $model->description; ?></div>
</div>