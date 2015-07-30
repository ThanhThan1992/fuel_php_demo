<?php ?>

<html>
<!--    
//        $article_form = Fieldset::forge('article');
//    $article_form->validation();
//    //$title_field = $article_form->add('article_title', 'Title', array('class' => 'pretty_input'));
//    $form = $article_form->form();
//    $ops = array('male', 'female');
//    $form->add(
//            'gender', '', array('options' => $ops, 'type' => 'radio', 'value' => 'true')
//    );
//    $form->add(
//            'checkbox1', '', array('options' => $ops, 'type' => 'checkbox', 'value' => 'true')
//    );
//    $form->add(
//            'email', 'E-mail', array('type' => 'email', 'class' => 'pretty_input'), array('required', 'valid_email')
//    );
//    $input_values = $article_form->input();
//    echo $article_form;
//
//    
//    
//
////// returns <form action="http://google.com/" accept-charset="utf-8" method="get">
//    echo Form::open(array('action' => 'http://google.com/', 'method' => 'post'));
//    echo Form::button('name', 'submit', array('style' => 'border: 2px;', 'type' => 'submit'));
//    echo 'NameInput: '.Form::input('firstName', 'textboxt', array('style' => 'border: 2px;'));
//    echo Form::label("Male","gener");
//    echo Form::checkbox("gener","Female",true);
//    echo Form::label("Female","gener");
//    echo Form::checkbox("gener","Female",true);
//    echo Form::input('file','', array('style' => 'border: 2px;','type'=>'file'));
//    echo Form::textarea('description', 'enter here', array('rows' => 6, 'cols' => 8));
//    echo Form::select('country', 'none', array(
//    'none' => 'None',
//    'europe' => array(
//        'uk' => 'United Kingdom',
//        'nl' => 'Netherlands'
//    ),
//    'us' => 'United States'
//));
//    echo Form::label('Username', 'username');
//    echo Html::anchor('example', 'Example');
//    echo Html::mail_to('name@domain.com', 'Name');
////        $form_login = Fieldset::forge('login');
////        $form_login->add('username', 'Username:');
////        $form_login->add('password', 'Choose Password:', array('type' => 'password'));
////        $form_login->add('submit', ' ', array('type' => 'submit', 'value' => 'Login'));
////        $form = $form_login->form();-->
<h2>Add an Article</h2>
<p>Publish a new article by filling the form below.</p>

<div class="options">
    <div class="option">
            <?php echo Html::anchor('articles', 'View Articles'); ?>
    </div>
    <div class="option">
        <?php echo Html::anchor('categories/add', 'Add a Category'); ?>
    </div>
</div>

<?php echo $val->show_errors(); ?>
<?php echo Form::open(array('enctype' => 'multipart/form-data')); ?>

<?php $select_categories = array(null => 'Uncategorized'); ?>
<?php foreach ($categories as $category): ?>
<?php $select_categories[$category->id] = $category->name; ?>
<?php endforeach; ?>

<div class="input select">
    <?php echo Form::label('Category', 'category_id'); ?>
    <?php echo Form::select('category_id', e($val->input('category_id')), 
        $select_categories); ?>
</div>

<div class="input text required">
    <?php echo Form::label('Title', 'title'); ?>
    <?php echo Form::input('title', e($val->input('title')), 
        array('size' => '30')); ?>
</div>

<div class="input textarea required">
    <?php echo Form::label('Body', 'body'); ?>
    <?php echo Form::textarea('body', e($val->input('body')), 
        array('rows' => 4, 'cols' => 40)); ?>
</div>

<div class="input textarea required">
    <?php echo FORM::file('filename'); ?> 
</div>

<div class="input submit">
    <?php echo Form::submit('add_article', 'Publish'); ?>
    <?php echo Form::submit('save_draft', 'Save Draft'); ?>
</div>

<?php echo Form::close(); ?>

</html>
