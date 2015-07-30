<?php

class Model_Teacher extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'dob',
		'class',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'teachers';
        public static function get_teacher($id)
        {
            return  Model_Teacher::find($id);
        }
        public static function get_AllTeacher()
        {
            try {
                return Model_Teacher::find('all');
                
            } catch (Exception $ex) {
                echo $ex;
            }
        }
//        public function insert_teacher($teacher)
//        {
//            $teacher = new Model_Teacher();
//            $teacher->id =
//        }
        

}
