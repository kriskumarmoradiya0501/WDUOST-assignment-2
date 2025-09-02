<html>
    <head>
        <title>PHP Test</title>
    </head>

    <body>
        <form action="#" method = "POST">

            <input type="text" name="txtnum" placeholder="Enter a number">
            <input type="submit" name="btnsubmit" value="Submit">
            <?php
                include 'Myclass.php';

                extract($_REQUEST);
                
                if (isset($_POST['btnsubmit'])) {
                    $number = $_POST['txtnum'];
                    $obj = new Myclass($number);
                    $obj->myfunction();
                    $result = $obj->sum();
                    echo "\nResult: $result\n";
                }
            ?>
        </form>
    </body>


</html>