<?php

/**
 * This is the model class for table "{{content}}".
 *
 * The followings are the available columns in table '{{content}}':
 * @property string $id
 * @property string $title
 * @property string $alias
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $catid
 * @property string $created
 * @property string $created_by
 * @property string $modified
 * @property string $modified_by
 * @property string $publish_up
 * @property string $publish_down
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property string $hits
 * @property integer $featured
 */
class Content extends CActiveRecord {

    public $file;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Content the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{content}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, catid, introtext, state', 'required'),
            array('state, ordering, featured', 'numerical', 'integerOnly' => true),
            array('title, alias', 'length', 'max' => 255),
            array('catid, created_by, modified_by, hits', 'length', 'max' => 10),
            array('created, modified, publish_up, publish_down, metakey, metadesc', 'safe'),
            array('images', 'file', 'types' => 'jpg,jpeg,gif,png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 5, 'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            array('file', 'file', 'types' => 'jpg, jpeg, gif, png', 'allowEmpty' => true, 'minSize' => 2, 'maxSize' => 1024 * 1024 * 2, 'tooLarge' => 'The file was larger than 2MB. Please upload a smaller file.', 'wrongType' => 'File format was not supported.', 'tooSmall' => 'File size was too small or empty.'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, alias, introtext, fulltext, state, catid, created, created_by, modified, modified_by, publish_up, publish_down, ordering, metakey, metadesc, hits, featured', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'introtext' => 'Content',
            'fulltext' => 'Fulltext',
            'state' => 'Published',
            'catid' => 'Category',
            'created' => 'Created',
            'created_by' => 'Created By',
            'modified' => 'Modified',
            'modified_by' => 'Modified By',
            'publish_up' => 'Publish Up',
            'publish_down' => 'Publish Down',
            'ordering' => 'Ordering',
            'metakey' => 'Metakey',
            //'metadesc' => 'Metadesc',
            'metadesc' => 'Event Time/Testimonial Identity',
            'hits' => 'Hits',
            'featured' => 'Featured',
            'images' => 'Images',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('alias', $this->alias, true);
        $criteria->compare('introtext', $this->introtext, true);
        $criteria->compare('fulltext', $this->fulltext, true);
        $criteria->compare('state', $this->state);
        $criteria->compare('catid', $this->catid, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('modified', $this->modified, true);
        $criteria->compare('modified_by', $this->modified_by, true);
        $criteria->compare('publish_up', $this->publish_up, true);
        $criteria->compare('publish_down', $this->publish_down, true);
        $criteria->compare('ordering', $this->ordering);
        $criteria->compare('metakey', $this->metakey, true);
        $criteria->compare('metadesc', $this->metadesc, true);
        $criteria->compare('hits', $this->hits, true);
        $criteria->compare('featured', $this->featured);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
            'sort' => array('defaultOrder' => 'created DESC, id DESC')
        ));
    }

    /**
     * Retrieves User name by ID.
     * @return string.
     */
    public function getUserName($id) {
        $returnValue = Yii::app()->db->createCommand()
                ->select('name')
                ->from('{{user_admin}}')
                ->where('id=:id', array(':id' => $id))
                ->queryScalar();

        return $returnValue;
    }

    /**
     * Retrieves Category name by ID.
     * @return string.
     */
    public function getCategoryName($id) {
        $value = ContentCategory::model()->findByAttributes(array('id' => $id));
        if (empty($value->title)) {
            return null;
        } else {
            return $value->title;
        }
    }

    public static function get_date_time($date) {
        if (empty($date) || $date == '0000-00-00' || $date == '0000-00-00 00:00:00') {
            return null;
        } else {
            return date("F j, Y", strtotime($date));
        }
    }

    public static function get_date_notice($date) {
        if (empty($date) || $date == '0000-00-00' || $date == '0000-00-00 00:00:00') {
            return null;
        } else {
            return '<span>' . date("j", strtotime($date)) . '</span>' . date("F", strtotime($date));
        }
    }

    public static function get_meta_desc($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        if (empty($value->metadesc)) {
            return null;
        } else {
            return $value->metadesc;
        }
    }

    public static function get_meta_key($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        if (empty($value->metakey)) {
            return null;
        } else {
            return $value->metakey;
        }
    }

    public static function get_title($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        if (empty($value->title)) {
            return null;
        } else {
            return $value->title;
        }
    }

    public static function get_introtext($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        if (empty($value->introtext)) {
            return null;
        } else {
            return $value->introtext;
        }
    }

    public static function getData($id, $field) {
        $model = Content::model()->findByPk($id);
        if (empty($model->$field)) {
            return null;
        } else {
            return $model->$field;
        }
    }

    public static function get_image_view($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/images/' . $value->images;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/images/' . $value->images, 'Picture', array('alt' => $value->title, 'class' => 'img-responsive', 'title' => $value->title, 'style' => ''));
        }
    }

    public static function get_images($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/images/' . $value->images;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/images/' . $value->images, 'Picture', array('alt' => $value->title, 'class' => 'img-responsive', 'title' => $value->title, 'style' => ''));
        } else {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/images/default.jpg', 'Picture', array('alt' => $value->title, 'class' => 'img-responsive', 'title' => $value->title, 'style' => ''));
        }
    }

    public static function get_images_thumb($id) {
        $value = Content::model()->findByAttributes(array('id' => $id));
        $filePath = Yii::app()->basePath . '/../uploads/images/' . $value->images;
        if ((is_file($filePath)) && (file_exists($filePath))) {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/images/' . $value->images, 'Picture', array('alt' => $value->title, 'class' => 'img-thumbnail', 'title' => $value->title, 'style' => 'width:100px;'));
        } else {
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/images/default.jpg', 'Picture', array('alt' => $value->title, 'class' => 'img-thumbnail', 'title' => $value->title, 'style' => 'width:100px;'));
        }
    }

    public static function limit_text($text, $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

    public static function get_recent_news($id) {
        $array = Content::model()->findAll(array('condition' => 'catid IN(SELECT c.id FROM {{content_category}} c WHERE c.id=' . (int) $id . ' OR c.parent_id=' . (int) $id . ') AND state=1', 'order' => 'publish_up DESC', 'limit' => '2'));
        foreach ($array as $key => $value) {
            echo '<li>';
            echo '<span class="rel_thumb">';
            echo Content::get_images($value['id']);
            echo '</span>';
            echo '<div class="rel_right">';
            echo '<h4>' . CHtml::link($value['title'], array('content/article', 'id' => $value['id']), array()) . '</h4>';
            echo '<div class="meta">';
            echo '<span class="author">Posted in: ' . CHtml::link(ContentCategory::getCategoryName($value['catid']), array('content/news'), array()) . '</span>';
            echo '<span class="date">on: <a href="#">' . Content::get_date_time($value['publish_up']) . '</a></span>';
            echo '</div>';
            echo Content::limit_text($value['introtext'], 40);
            echo '</div>';
            echo '</li>';
        }
    }

    public static function get_latest_news($id) {
        $array = Content::model()->findAll(array('condition' => 'catid=' . (int) $id . ' AND state=1', 'order' => 'publish_up DESC', 'limit' => '10'));
        foreach ($array as $key => $value) {
            echo '<li>';
            echo '<span class="rel_thumb">';
            echo Content::get_images_thumb($value['id']);
            echo '</span>';
            echo '<div class="rel_right">';
            echo CHtml::link('<h4>' . $value['title'] . '</h4>', array('content/article', 'id' => $value['id']), array());
            echo '<span class="date">Posted: ' . Content::get_date_time($value['publish_up']) . '</span>';
            echo '</div>';
            echo '</li>';
        }
    }

    public static function get_recent_notice($id) {
        $array = Content::model()->findAll(array('condition' => 'catid=' . (int) $id . ' AND state=1', 'order' => 'publish_up DESC', 'limit' => '5'));
        foreach ($array as $key => $value) {
            echo '<li class="related_post_sec single_post">';
            echo '<span class="date-wrapper">';
            echo '<span class="date">' . Content::get_date_notice($value['publish_up']) . '</span>';
            echo '</span>';
            echo '<div class="rel_right">';
            echo '<h4>' . CHtml::link(Content::limit_text($value['title'], 50), array('content/notice', 'id' => $value['id']), array()) . '</h4>';
            echo '<div class="meta">';
            echo '<span class="place"><i class="fa fa-map-marker"></i>' . Content::getData($value['id'], 'metadesc') . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }
    }

    public static function get_recent_event($id) {
        $array = Content::model()->findAll(array('condition' => 'catid IN(SELECT c.id FROM {{content_category}} c WHERE c.id=' . (int) $id . ' OR c.parent_id=' . (int) $id . ') AND state=1', 'order' => 'publish_up DESC', 'limit' => '3'));
        foreach ($array as $key => $value) {
            echo '<li class="related_post_sec single_post">';
            echo '<span class="date-wrapper">';
            echo '<span class="date">' . Content::get_date_notice($value['publish_up']) . '</span>';
            echo '</span>';
            echo '<div class="rel_right">';
            echo '<h4>' . CHtml::link(Content::limit_text($value['title'], 6), array('content/event', 'id' => $value['id']), array()) . '</h4>';
            echo '<div class="meta">';
            echo '<span class="place"><i class="fa fa-map-marker"></i>' . $value['metadesc'] . '</span>';
            echo '<span class="event-time"><i class="fa fa-clock-o"></i>' . Content::get_date_time($value['publish_up']) . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }
    }

    public static function get_latest_event($id) {
        $array = Content::model()->findAll(array('condition' => 'catid IN(SELECT c.id FROM {{content_category}} c WHERE c.id=' . (int) $id . ' OR c.parent_id=' . (int) $id . ') AND state=1', 'order' => 'publish_up DESC', 'limit' => '10'));
        foreach ($array as $key => $value) {
            echo '<li class="related_post_sec single_post">';
            echo '<span class="date-wrapper">';
            echo '<span class="date">' . Content::get_date_notice($value['publish_up']) . '</span>';
            echo '</span>';
            echo '<div class="rel_right">';
            echo '<h4>' . CHtml::link(Content::limit_text($value['title'], 6), array('content/event', 'id' => $value['id']), array()) . '</h4>';
            echo '<div class="meta">';
            echo '<span class="place"><i class="fa fa-map-marker"></i>' . $value['metadesc'] . '</span>';
            echo '<span class="event-time"><i class="fa fa-clock-o"></i>' . Content::get_date_time($value['publish_up']) . '</span>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }
    }

    public static function get_recent_testimonial($id) {
        $array = Content::model()->findAll(array('condition' => 'catid=' . (int) $id . ' AND state=1', 'order' => 'RAND()', 'limit' => '1'));
        foreach ($array as $key => $value) {
            echo '<div class="carousal_content">';
            echo $value['introtext'];
            echo '</div>';
            echo '<div class="carousal_bottom">';
            echo '<div class="thumb">';
            echo Content::get_images($value['id']);
            echo '</div>';
            echo '<div class="thumb_title">';
            echo '<span class="author_name">' . $value['title'] . '</span>';
            echo '<span class="author_designation">' . $value['metadesc'] . '</span>';
            echo '</div>';
            echo '</div>';
        }
    }

    public static function get_recent_paintings($id) {
        $array = Content::model()->findAll(array('condition' => 'catid=' . (int) $id . ' AND state=1', 'order' => 'publish_up DESC', 'limit' => '4'));
        foreach ($array as $key => $value) {
            echo '<div class="col-xs-6 col-sm-3">';
            echo '<div class="aboutImage">';
            $data = Content::get_images($value['id']);
            $data .= '<div class="overlay">';
            $data .= '<p>' . Content::limit_text($value['introtext'], 20) . '</p>';
            $data .= '</div>';
            $data .= '<span class="captionLink">' . $value['title'] . '<span></span></span>';
            echo CHtml::link($data, array('content/view', 'id' => $value['id']));
            echo '</div>';
            echo '</div>';
        }
    }

    public static function get_home_banner($id) {
        $array = Banner::model()->findAll(array('condition' => 'catid=' . (int) $id . ' AND published=1', 'order' => 'ordering'));
        foreach ($array as $key => $value) {
            if ($value['sticky'] == 1) {
                $sticky = 'active';
            } else {
                $sticky = '';
            }
            echo '<div class="item ' . $sticky . '">';
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/banners/' . $value['banner'], $value['name'], array('class' => 'img-responsive'));
            echo '<div class="banner_caption">';
            echo '<div class="container">';
            //echo '<div class="row">';
            //echo '<div class="col-xs-12">';
            //echo '<div class="caption_inner animated fadeInUp">';
            //echo '<h1>' . $value['name'] . '</h1>';
            //echo '<p>' . $value['description'] . '</p>';
            //echo '</div>';
            //echo '</div>';
            //echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }

}
