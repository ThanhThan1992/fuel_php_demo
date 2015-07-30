<?php echo '<link href="./css/view.css" rel="stylesheet" type="text/css" />'; ?>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/contact_form.css" />
        <script src="contact_form.js"></script>
    </head>
    <body align="center">
        <div id="main">
            <form name = "edit" method = "POST" > 
                <table align="center">
                    <tr>
                        <td>ID:</td><td><input type   = "text" name   = "id" value = "<?php echo $teacher->id ?>" readonly="true" /></td> 
                    </tr>
                    <tr>
                        <td>Name:</td><td><input type = "text" name   = "name" value = "<?php echo $teacher->name ?>" /></td>
                    </tr>
                    <tr>
                        <td>Dob:</td><td><input type  = "text" name   = "dob" value = "<?php echo $teacher->dob ?>" /></td> 
                    </tr>
                    <tr>
                        <td>Class:</td><td><input type = "text" name   = "class" value = "<?php echo $teacher->class ?>" /></td>  
                    </tr>
                    <tr>
                        <td></td><td><input type = "submit"value = "submit" name = "submit" /></td> 
                    </tr>
                    <tr>
                        <td>
                            <?php echo Form::input('file', '', array('style' => 'border: 2px;', 'type' => 'file')); ?>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>
    </body>
</html>