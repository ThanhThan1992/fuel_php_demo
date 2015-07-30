<?php

class Model_Studentmodel extends \Model
{

    /*protected static $_table_name = 'student';
	protected static $_properties = array(
		'id',
		'name',
		'age',
		'porn',
	);*/
    public static function get_results()
    {
        
        //$query = DB::select()->from('student')->execute();
        //echo '<pre>';
       //$result = DB::select()->from('student')->excute();
        //var_dump($query);die;
        $query = DB::query('SELECT * FROM student');//var_dump($query);die;
        return $query->execute()->as_array();
    }
    public static function get_student($id)
    {
        $query = DB::query("SELECT * FROM student WHERE id = $id");
        return $query->execute()->as_array();
    }

};

