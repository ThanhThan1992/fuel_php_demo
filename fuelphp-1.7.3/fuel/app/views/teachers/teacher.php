<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <?php echo Asset::js('jquery-1.8.3.js'); ?>
        <?php echo Asset::css('view.css'); ?>
        <?php echo Asset::css('bootstrap.css');?>
	
</head>
<div class="chat">
    <div id="main" class = "messages">
        <tr>
            <td><form action = "teacher/insert/" method = "post"><button>INSERT NEW TEACHER</button></form></td>
        </tr>
        <table align = "center" border = "1" cellspacing = "2" cellpadding = "2">
            <tr>
                <th><font face = "Arial, Helvetica, sans-serif"> ID </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Name </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Age </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Porn </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Action </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Delete </font></th>
                <th><font face = "Arial, Helvetica, sans-serif"> Image </font></th>
            </tr>
            <?php
            foreach ($teachers as $row):
                $id = $row->id;
                $name = $row->name;
                $dob = $row->dob;
                $class = $row->class;
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><a href = "teacher/detail/<?php echo $id; ?>"</a><?php echo $name; ?></td>
                    <td><?php echo $dob; ?></td>
                    <td><?php echo $class; ?></td>
                    <td>
                        <a href = "teacher/edit/<?php echo $id ?>">Edit</a>
                    </td>
                    <td>
                        <form action　=　"teacher/delete" method="post">
                            <input type = "hidden" name="id" value = "<?php echo $id ?>"</input>
                            <input type = "submit"value = "Delete" name = "Delete" />
                        </form>
                    </td>
                    
                </tr>
            <?php endforeach ?>
        </table>    
    </div>
</div>
<html>



