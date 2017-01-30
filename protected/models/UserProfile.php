<?php

/**
 * This is the model class for table "{{user_profile}}".
 *
 * The followings are the available columns in table '{{user_profile}}':
 * @property integer $id
 * @property integer $user_id
 * @property integer $country_id
 * @property string $job_title
 * @property string $company
 * @property string $company_address
 * @property string $office_phone
 * @property string $office_email
 * @property string $expiry
 * @property integer $state_id
 * @property integer $city_id
 * @property string $address
 * @property string $residence_address
 * @property string $mobile
 * @property string $phone
 * @property string $fax
 * @property string $website
 * @property string $blood_group
 * @property string $birth_date
 * @property string $batch
 * @property string $nick_name
 * @property string $profile_picture
 *
 * The followings are the available model relations:
 * @property User $user
 */
class UserProfile extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user_profile}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id', 'required'),
            array('user_id, country_id, state_id, city_id', 'numerical', 'integerOnly' => true),
            array('job_title, company, office_email, website', 'length', 'max' => 150),
            array('company_address', 'length', 'max' => 250),
            array('office_phone, mobile, phone, fax, batch, nick_name', 'length', 'max' => 100),
            array('address, residence_address, profile_picture', 'length', 'max' => 255),
            array('blood_group', 'length', 'max' => 10),
            array('expiry, birth_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, country_id, job_title, company, company_address, office_phone, office_email, expiry, state_id, city_id, address, residence_address, mobile, phone, fax, website, blood_group, birth_date, batch, nick_name, profile_picture', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'User ID',
            'country_id' => 'Country',
            'job_title' => 'Job Title',
            'company' => 'Company',
            'company_address' => 'Company Address',
            'office_phone' => 'Office Phone',
            'office_email' => 'Office Email',
            'expiry' => 'Expiry',
            'state_id' => 'State',
            'city_id' => 'City',
            'address' => 'Permanent Address',
            'residence_address' => 'Residence Address',
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'website' => 'Website',
            'blood_group' => 'Blood Group',
            'birth_date' => 'Bith Date',
            'batch' => 'Batch',
            'nick_name' => 'Nick Name',
            'profile_picture' => 'Picture',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('country_id', $this->country_id);
        $criteria->compare('job_title', $this->job_title, true);
        $criteria->compare('company', $this->company, true);
        $criteria->compare('company_address', $this->company_address, true);
        $criteria->compare('office_phone', $this->office_phone, true);
        $criteria->compare('office_email', $this->office_email, true);
        $criteria->compare('expiry', $this->expiry, true);
        $criteria->compare('state_id', $this->state_id);
        $criteria->compare('city_id', $this->city_id);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('residence_address', $this->residence_address, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('fax', $this->fax, true);
        $criteria->compare('website', $this->website, true);
        $criteria->compare('blood_group', $this->blood_group, true);
        $criteria->compare('birth_date', $this->birth_date, true);
        $criteria->compare('batch', $this->batch, true);
        $criteria->compare('nick_name', $this->nick_name, true);
        $criteria->compare('profile_picture', $this->profile_picture, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => Yii::app()->params['pageSize'],
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserProfile the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
