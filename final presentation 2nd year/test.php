
<?php
            $t='nir';
?>

<!DOCTYPE html>
<html>  
    <head>
        <title>php test</title>
    </head>


    <body>

                <form action="test.php" method="post">
                        Name: <input type="text" name="name"><br>
                        E-mail: <input type="text" name="email"><br>
                        <input type="hidden" name="var" value="<?php echo $t ?>" />
                        <input type="submit">
                </form>

                Welcome <?php   echo $_POST['var'] ."<br>";

                                
                                if(isset($_POST['name']))
                                {
                                    
                                    echo $_POST["email"] . '<br>';
                                }

                                if(isset($_POST['name']))
                                {
                                    echo $_POST["name"];
                                    
                                }
                                ?>


    </body>



</html>