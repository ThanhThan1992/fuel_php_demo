<?php

class Controller_Teacher extends Fuel\Core\Controller {

    public function action_index() {
//        $viewTeacher = view::forge('students/test');
//        //$firstName = Input::post('firstName');
//        //var_dump($firstName );die;
//        $t = Model_Teacher::get_teacher(22);
//        //var_dump($t);die;
//        $viewTeacher->set('teacher', $t);
//        return $viewTeacher;
        return $this->get_All_teacher();
    }

    //when click link on bage techer will call action edit and return editeacher
    public function get_edit($id) {
        $teacher = Model_Teacher::get_teacher($id);
        $viewTeacher = view::forge('teachers/editTeacher');
        $viewTeacher->set('teacher', $teacher);
        return $viewTeacher;
    }

    //action when bage techer call action href link detail
    public function get_detail($id) {
        $teacher = Model_Teacher::get_teacher($id);
        $viewTeacher = view::forge('teachers/detail');
        $viewTeacher->set('teacher', $teacher);
        return $viewTeacher;
    }

    //action on bage edit call action use button submit
    public function action_edit() {
        $teacher = Model_Teacher::get_teacher($_POST["id"]);
        $teacher->name = $_POST["name"];
        $teacher->dob = $_POST["dob"];
        $teacher->class = $_POST["class"];
        $teacher->save();
        Response::redirect('http://localhost/fuelphp/fuelphp-1.7.3/public/');
    }

    //return view bage techer
    public function get_All_teacher() {
        $teachers = Model_Teacher::get_AllTeacher();
        $viewTeachers = view::forge('teachers/teacher');
        $viewTeachers->set('teachers', $teachers);
        //Image::load('filename.gif')->preset('mypreset', 'watermark.gif');
        return $viewTeachers;
    }

    //action insert teacher
    public function action_insert() {
        $teacher = new Model_Teacher();
        //check action post submit on page insert 
        ///if submit action insert
        ///else return page insert
        if (isset($_POST["submit"]) && $_POST["submit"]) {
            $teacher->name = $_POST["name"];
            $teacher->dob = $_POST["dob"];
            $teacher->class = $_POST["class"];
            $teacher->save();
            Response::redirect('http://localhost/fuelphp/fuelphp-1.7.3/public/');
        } else {
            $viewTeacher = view::forge('teachers/editTeacher');
            $viewTeacher->set('teacher', $teacher);
            return $viewTeacher;
        }
    }

    //delete teacher and return index view teacher
    public function action_delete() {
        $id = $_POST["id"];
        $teacher = Model_Teacher::get_teacher($id);
        $teacher->delete();
        Response::redirect('http://localhost/fuelphp/fuelphp-1.7.3/public/');
    }
}
