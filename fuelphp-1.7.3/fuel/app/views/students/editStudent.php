<?php echo '<link href="./css/view.css" rel="stylesheet" type="text/css" />'; ?>
<html>
    <body align="center">
        <div id="main">
            <form name = "insert" method = "POST" > 
                <table align="center">
                    <tr>
                        <td>ID:</td><td><input type   = "text" name   = "id" value = "<?php echo $students["id"]?>" readonly="true" /></td> 
                    </tr>
                    <tr>
                        <td>Name:</td><td><input type = "text" name   = "name" value = "<?php echo $students["name"]?>" /></td>
                    </tr>
                    <tr>
                        <td>Age:</td><td><input type  = "text" name   = "age" value = "<?php echo $students["age"]?>" /></td> 
                    </tr>
                    <tr>
                        <td>Porn:</td><td><input type = "text" name   = "porn" value = "<?php echo $students["porn"]?>" /></td>  
                    </tr>
                    <tr>
                        <td></td><td><input type = "submit"value="Update" name="Update" /></td> 
                    </tr>
                </table>
            </form> 
        </div>
    </body>
</html>