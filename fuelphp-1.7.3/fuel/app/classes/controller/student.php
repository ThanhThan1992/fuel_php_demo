<?php

class Controller_Student extends Controller {

    public function action_index() {
        //$test = new Model_Studentmodel();
        //$students = $test->get_results();
        //$students = Model_Studentmodel::get_results();
        var_dump(1232142142);die;
        $students = Model_Teacher::find("all", array(
                    "where" => array("id" => 1)
        ));

        // INSERT
        $t = new Model_Teacher();
        $t->name = "Model teacher";
        $t->dob = 25121991;
        $t->class = 124;
        $t->save();
//        
//        SELECT
        $t = Model_Teacher::find(3);
        $t->name = "teacher";
        // UPDATE
        $t->save();

        //var_dump($students); die;
        //echo'<pre>';
        //var_dump($students);
        //die();
        $viewstudent = view::forge('students/studentView');
        //$edit = view::forge('students/studentView');
        $viewstudent->set('students', $students);
        //var_dump($students);die();
        //$this->studentView->edit=$edit;
        return $viewstudent;
    }

//    public function get_edit($id) {
//        echo "GET-$id";die;
//        $students = Model_Studentmodel::get_student($id);
//        $students = $students[0];
//        $viewStudent = view::forge('students/editStudent');
//        $viewStudent->set('students', $students);
//        return $viewStudent;
//    }
//
//    public function post_edit() {
//        echo "POST";
//    }

}
