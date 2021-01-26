<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
    <!-- PHP code -->
        <?php

           if (isset($_POST['submit'])) {
               $first = $_POST['num1'];
               $second = $_POST['num2'];
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
            <form method="POST" action="index.php">
                <input type="text" name="num1" class="num" placeholder="First Number">
                <input type="text" name="num2" class="num" placeholder="Second Number">

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
                    <input type="text" value="<?php echo $result; ?>" class="num">
                    <?php } else{ ?>
                        <input type="text" value="0" class="num">
                    <?php } ?>  
        </div>

    </body>
    </html>