<?php
/* @var $this VideoController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = 'Video Gallery - ' . Yii::app()->name;
?>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
