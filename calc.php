<?php
//calculater
echo $_GET["number1"] / $_GET["number2"];
?>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div>
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter number 1</label>
                <input typ1="number" name="num1" name="number1" class="form-control">
            </div>

            <div>
            <label>Enter number 2</label>
            <input typ1="number" name="num2" name="number2" class="form-control">
            </div>
            <br>
            <div class="alert alert-success">
                <?php
                echo $result
                ?>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>