<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Calculator</title>
        <link rel="stylesheet" href="style.css">
        
        <script>
            function onlyNumberKey(evt) { 
                // Only ASCII charactar in that range allowed 
                var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
                if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
                    return false; 
                return true; 
            } 
        </script>
    </head>
    <body>
    <!-- PHP code -->
        <?php
           if (isset($_POST['submit'])) {
                if (empty($_POST['num1'])) {
                    echo '<script>alert("Fill the first Field")</script>';
                } else {
                    $first = $_POST['num1'];
                }

                if (empty($_POST['num2'])) {
                    echo '<script>alert("Fill the second Field")</script>';
                } else {
                    $second = $_POST['num2'];
                }

                $operator = $_POST['operator'];

                switch($operator) {
                        case "None": $result = "Select an operator";
                            break;
                        case "Add": $result = $first + $second;
                            break;
                        case "Subtract": $result = $first - $second;
                            break;
                        case "Multiply": $result = $first * $second;
                            break;
                        case "Divide": $result = $first / $second;
                            break;
                        default: $result = "Error occured";
                            break;
                }
           }
        ?>

    <!-- Create the form -->
        <div class="calc">
            <h2 class="title">Calculator</h2>
            <form method="POST" action="" onsubmit="">
                <input type="text" name="num1" class="num" placeholder="First Number" onkeypress="return onlyNumberKey(event)">
                <input type="text" name="num2" class="num" placeholder="Second Number" onkeypress="return onlyNumberKey(event)">

                <select name="operator" class="operate">
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>Multiply</option>
                    <option>Divide</option>
                </select>

                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        
            <?php
                if (isset($_POST['submit'])) { ?>
                    <input type="text" value="<?php echo $result; ?>" class="num" readonly>
                    <?php } else{ ?>
                        <input type="text" value="0" class="num">
                    <?php } ?>  
        </div>
    </body>
</html>