<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = 'Picture Gallery - ' . Yii::app()->name;
?>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>