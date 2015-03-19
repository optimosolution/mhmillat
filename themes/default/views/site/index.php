<!-- Services -->
<div class="row">
    <div class="col-md-12">
        <div class="services">
            <ul>
                <li>
                    <i class="fa fa-briefcase fa-3x"></i>
                    <p>Professionalism</p>
                </li>
                <li>
                    <i class="fa fa-cloud-upload fa-3x"></i>
                    <p>Empathy</p>
                </li>
                <li>
                    <i class="fa fa-laptop fa-3x"></i>
                    <p>Patience</p>
                </li>
                <li>
                    <i class="fa fa-gears fa-3x"></i>
                    <p>Up to date</p>
                </li>
                <li>
                    <i class="fa fa-compass fa-3x"></i>
                    <p>Not squeamish</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Welcome message -->
    <div class="col-md-8">
        <div class="block-header">
            <h2>
                <span class="title"><?php echo Content::get_title(1); ?></span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
            </h2>
        </div>
        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/about.jpg" class="img-about img-responsive" alt="About">
        <?php echo Content::get_introtext(1); ?>
    </div>
    <!-- Last updated -->
    <div class="col-md-4">
        <div class="block-header">
            <h2>
                <span class="title">Last Updates</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
            </h2>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#blog" data-toggle="tab">Research</a></li>
            <li><a href="#comments" data-toggle="tab">Publications</a></li>
            <li><a href="#events" data-toggle="tab">Clippings</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="blog">
                <?php $this->get_latest_updates(2); ?>               
            </div>
            <div class="tab-pane" id="comments">
                <?php $this->get_latest_updates(3); ?>  
            </div>
            <div class="tab-pane" id="events">
                <?php $this->get_latest_updates(4); ?>  
            </div>
        </div>
    </div>
</div>
<!-- Recent Works -->
<div class="row">
    <div class="col-md-12 block-header">
        <h2>
            <span class="title">Recent Picture</span><span class="decoration"></span><span class="decoration"></span><span class="decoration"></span>
        </h2>
    </div>
</div>
<div class="row">
    <?php $this->get_gallery_recent(); ?>
    
</div>