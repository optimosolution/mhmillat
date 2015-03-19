<?php $this->beginContent('//layouts/main'); ?>
<!-- Showcase  -->
<div id="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1 class="animated slideInDown">Dr. Md. Habibe Millat, MBBS, FRCS(UK)</h1>
                <div class="list">
                    <ul>
                        <li class="animated slideInLeft first"><span><i class="fa fa fa-cogs"></i> Adult and Pediatric Cardiothoracic Surgeon</span></li>                                   
                    </ul>
                </div>
            </div>
            <div class="col-md-6 hidden-sm hidden-xs">
                <div class="showcase">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/iMac.png" alt="..." class="iMac animated fadeInDown">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/iPad.png" alt="..." class="iPad animated fadeInLeft">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/iPhone.png" alt="..." class="iPhone animated fadeInRight">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php echo $content; ?>                
</div>
<?php $this->endContent(); ?>