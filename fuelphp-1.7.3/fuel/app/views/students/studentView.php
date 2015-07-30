<?php ?>
<div class="chat">
    <div id="messages" class="messages">
        <table align="center" border="1" cellspacing="2" cellpadding="2">
            <tr>
                <th><font face="Arial, Helvetica, sans-serif">ID</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Name</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Age</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Porn</font></th>
                <th><font face="Arial, Helvetica, sans-serif">Action</font></th>
            <a href="studentView.php"></a>
            <th><font face="Arial, Helvetica, sans-serif">Delete</font></th>
            </tr>
            <?php
            //echo '<pre>';
            //var_dump(pg_numrows($students));die;
            foreach ($students as $row):
//                $id = $row["id"];
//                $name = $row["name"];
//                $age = $row["age"];
//                $porn = $row["porn"];
                $id = $row->id;
                $name = $row->name;
                $age = $row->dob;
                $porn = $row->class;
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $porn; ?></td>
                    <td>
                        <a href="student/edit/<?php echo $id ?>">Edit</a>
                        <form action="student/edit" method="post"><button>Submit</button></form>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>    
    </div>
</div>
<script type="text/javascript" src="http://localhost/Demo/public/assets/js/chat.js"></script>

