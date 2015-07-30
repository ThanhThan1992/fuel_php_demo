<?php echo '<link href="./css/view.css" rel="stylesheet" type="text/css" />'; ?>
<html>
    <body align="center">
        <div id="main">
                <table align="center" boder="1">
                    <tr>
                        <td><font face="Arial, Helvetica, sans-serif">ID: <?php echo $teacher->id ?></font></td> 
                    </tr>
                    <tr>
                        <td><font face="Arial, Helvetica, sans-serif">Name: <?php echo $teacher->name ?></font> </td>
                    </tr>
                    <tr>
                        <td>Age: <?php echo $teacher->dob ?> </td> 
                    </tr>
                    <tr>
                        <td>Porn: <?php echo $teacher->class ?></td>  
                    </tr>
                    <tr>
                        <td><a href="http://localhost/fuelphp/fuelphp-1.7.3/public/">BACK</a></td>  
                    </tr>
                </table>
        </div>
    </body>
</html>