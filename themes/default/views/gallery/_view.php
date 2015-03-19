<?php
/* @var $this GalleryController */
/* @var $data Banner */
?>
<div class="col-sm-3">
    <?php
    $filePath = Yii::app()->basePath . '/../uploads/banners/' . $data->banner;
    if ((is_file($filePath)) && (file_exists($filePath))) {
        $image = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $data->banner, 'Picture', array('alt' => $data->name, 'class' => 'img-responsive', 'title' => $data->name, 'style' => 'margin-bottom:30px;'));
        echo CHtml::link($image, array('gallery/view', 'id' => $data->id), array('class' => '', 'target' => '_blank'));
    } else {
        echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/profile.jpg', 'Picture', array('alt' => $data->name, 'class' => 'img-responsive', 'title' => $data->name, 'style' => ''));
    }
    ?>
</div>