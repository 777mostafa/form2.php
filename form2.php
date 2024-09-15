<html>
    <head>
        <title>session 15</title>
        <style type="text/css">
            *{margin:0; padding:0}
            input,label, select, textarea{display: block; margin:5px}
        </style>
    </head>
    <body>
        <?php
            if(isset($_GET['calculate'])){
                // url: form1.php?firstNumber=50&secondNumber=50&calculate=calculate
               $_GET['test'] = "WELCOME";
               print_r($_GET);
               $firstNumber = $_GET['firstNumber'];
               $secondNumber = $_GET['secondNumber'];
            }
           
        ?>
        <form action="form1.php" method="GET">
            <label>first number</label>
            <input type="text" name="firstNumber" />
            <label>second number</label>
            <input type="text" name="secondNumber" />
            <input type="submit" name="calculate" value="calculate"/>
        </form>
    </body>
</html>
