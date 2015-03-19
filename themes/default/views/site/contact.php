<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
?>
<div class="row">
    <!-- Contact us form -->
    <div class="col-sm-8">
        <h2 class="hl top-zero">Contact Us</h2>
        <hr>
        <h5>Get in touch with us by filling <strong>contact form below</strong></h5>
        <p> If you have business inquiries or other questions, please fill out the following form to contact us. Thank you. </p>
        <?php if (Yii::app()->user->hasFlash('contact')): ?>

            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'alerts' => array('contact'),
            ));
            ?>
        <?php else: ?>
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'contact-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>
            <?php echo $form->errorSummary($model); ?>
            <div class="form-group">
                <label for="email">Your email address</label>
                <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Enter email')); ?>
            </div>
            <div class="form-group">
                <label for="name">Your name</label>
                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Enter name')); ?>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <?php echo $form->textField($model, 'subject', array('class' => 'form-control', 'placeholder' => 'Enter subject')); ?>
            </div>
            <div class="form-group">
                <label for="message">Your message</label>
                <?php echo $form->textArea($model, 'body', array('rows' => 3, 'class' => 'form-control', 'placeholder' => 'Enter message')); ?>
            </div>
            <div class="form-group capcha">
                <?php if (CCaptcha::checkRequirements()): ?>
                    <div class="row">
                        <?php //echo $form->labelEx($model, 'verifyCode'); ?>
                        <div>
                            <?php $this->widget('CCaptcha'); ?>
                            <?php echo $form->textField($model, 'verifyCode'); ?>
                        </div>
                        <div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
                        <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php echo CHtml::submitButton('Send request', array('class' => 'btn btn-green')); ?>
            <?php $this->endWidget(); ?>
        <?php endif; ?>
    </div>
    <!-- Right column -->
    <div class="col-sm-4">
        <!-- Out Address -->
        <h4>Our Address</h4>
        <hr>
        <p>
            San Francisco, CA 94101<br />
            1987 Lincoln Street<br />
            Phone: +0 000 000 00 00<br />
            Fax: +0 000 000 00 00<br />
            Email: <a href="#">admin@mysite.com</a>
        </p>
        <hr>
        <!-- Google Maps -->
        <h4>Google Maps</h4>
        <hr>
        <div class="google-maps">
            <iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San+Francisco,+CA,+United+States&amp;aq=0&amp;oq=san+f&amp;sll=37.77493,-122.419416&amp;sspn=0.158751,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=37.774921,-122.419453&amp;spn=0.023745,0.030041&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=San+Francisco,+CA,+United+States&amp;aq=0&amp;oq=san+f&amp;sll=37.77493,-122.419416&amp;sspn=0.158751,0.338173&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=37.774921,-122.419453&amp;spn=0.023745,0.030041&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
    </div>
</div>