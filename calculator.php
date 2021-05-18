<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* .container{
           background-color:black;
            height: 500px;
        }    */
        #option{
            margin: 100px;
            padding: 6px;
        }
        #number{
            margin-top: 20px;
        }
        #heading{
            font-style: italic;
            font-weight: bold;
            font: 1500;
            color: crimson;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div clas="background">
    <div class="container">
        <div class="screen">
            <div class="screen-body">
                <div class="screen-body-left">
                    <div class="app-title">
                        <div class= "animated infinite pulse" id="heading">
                            CALCULATOR
                            <br>
                        </div>
                    </div>
                </div>
            <div class="screen-body-item" id="number">
            <form method='post'>
                <div class="app-group-form">
                    <input type="number1" name ="firstnumber" placeholder="Enter first number"/>
                
                    <input type="number2" name ="secondnumber" placeholder="Enter second number"/>
                </div>
                <br>
               </div>
                <div class="select-style">
                    <select name="opr">
                        <option  value="add">ADD</option>
                        <option  value="sub">SUBTRACTION</option>
                        <option  value="mult">MULTIPLY</option>
                        <option  value="div">DIVISION</option>
                    </select>
                </div>
                </div>
                <br>
                <div>
                    <input type="submit"  name="submit" value="submit"/>
                </div>
            </form>    
        </div>
        <div>
        <?php
            if(isset($_POST['submit']))
            {
                $num1 = $_POST['firstnumber'];
                $num2  = $_POST['secondnumber'];
                $opr = $_POST['opr']; 
                switch($opr)
                {
                    case "add":
                     $ans = $num1 + $num2;
                      echo "The sum is $ans";
                        break;
                     case "sub":
                     $ans = $num1 - $num2;
                     echo "The difference is $ans";
                         break;
                     case "mult":
                     $ans = $num1 * $num2;
                     echo "The product is $ans";
                        break;
                     case "div":
                     $ans = $num1 / $num2;
                     echo "The quotient is $ans";
                        break;

                }
            }
        ?>
       </div>
    </div>
</div>
   
</body>
</html>