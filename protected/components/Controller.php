<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    public $userData;

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = 'application.views.layouts.column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
                'actions' => array('login'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function init() {
        $this->statistics();
    }

    public function checkAccess($controller, $action) {
        $val = Yii::app()->db->createCommand()
                ->select('access')
                ->from('{{acl}}')
                ->where('LOWER(controller)="' . $controller . '" AND LOWER(actions)="' . $action . '" AND group_id=' . Yii::app()->user->group . ' AND controller_type=0')
                ->queryScalar();
        if (empty($val)) {
            $val = 1;
        } else {
            $val = $val;
        }
        return $val;
    }

    public function statistics() {
        $model = new Visitor;
        $model->user_type = 0;
        $model->user_id = Yii::app()->user->id;
        $model->user_name = Yii::app()->user->name;
        $model->server_time = new CDbExpression('NOW()');
        $model->page_title = $this->pageTitle;
        $model->page_link = Yii::app()->request->url;
        $model->browser = Yii::app()->browser->getBrowser();
        $model->visitor_ip = $_SERVER['REMOTE_ADDR'];
        $model->save();
    }

    public function get_latest_post($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title')
                ->from('{{content}}')
                ->where('state=1 AND catid=' . $catid . ' OR catid IN(SELECT c.id FROM {{content_category}} c WHERE c.parent_id=' . $catid . ')')
                ->limit('10')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading"><h3 class="panel-title">' . ContentCategory::getCategoryName($catid) . '</h3></div>';
        echo '<div class="panel-body">';
        echo '<div class="recent-blogs">';
        echo '<ul>';
        foreach ($array as $key => $values) {
            echo '<li>';
            echo CHtml::link($values['title'], array('/content/view', 'id' => $values['id']));
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    public function get_latest_updates($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title,introtext')
                ->from('{{content}}')
                ->where('state=1 AND catid=' . $catid . ' OR catid IN(SELECT c.id FROM {{content_category}} c WHERE c.parent_id=' . $catid . ')')
                ->limit('5')
                ->order('created DESC, id DESC')
                ->queryAll();
        echo '<div class="media">';
        foreach ($array as $key => $values) {
            echo '<a class="pull-left" href="#">';
            echo '<img class="media-object" src="' . Yii::app()->theme->baseUrl . '/img/research.jpg" alt="Blog Message">';
            echo '</a>';
            echo '<div class = "media-body">';
            echo '<h4 class = "media-heading">' . CHtml::link($values['title'], array('/content/view', 'id' => $values['id'])) . '</h4>';
            echo mb_substr(CHtml::decode($values['introtext']), 0, 100, 'UTF-8');
            echo '</div>';
        }
        echo '</div>';
    }

    public function get_gallery_category($catid) {
        $array = Yii::app()->db->createCommand()
                ->select('id,title')
                ->from('{{banner_category}}')
                ->where('published=1 AND parent_id=' . $catid)
                ->order('title ASC')
                ->queryAll();
        foreach ($array as $key => $values) {
            echo '<li>';
            echo CHtml::link($values['title'], array('gallery/index', 'id' => $values['id']), array('class' => ''));
            echo '</li>';
        }
    }

    public function get_gallery_recent() {
        $array = Yii::app()->db->createCommand()
                ->select('id,name,banner')
                ->from('{{banner}}')
                ->where('published=1')
                ->limit('4')
                ->order('created_on DESC, id DESC')
                ->queryAll();
        foreach ($array as $key => $values) {
            echo '<div class="col-md-3 col-sm-6">';
            echo '<div class="thumbnail">';
            $filePath = Yii::app()->basePath . '/../uploads/banners/' . $values['banner'];
            if ((is_file($filePath)) && (file_exists($filePath))) {
                $image = CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $values['banner'], 'Picture', array('alt' => $values['name'], 'class' => 'img-responsive', 'title' => $values['name'], 'style' => ''));
                echo CHtml::link($image, array('gallery/view', 'id' => $values['id']), array('target' => '_blank'));
            }
            echo '</div>';
            echo '</div>';
        }
    }

}