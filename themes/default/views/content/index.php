<?php

$this->pageTitle = ContentCategory::getCategoryName($_GET['id']) . ' - ' . Yii::app()->name;
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>