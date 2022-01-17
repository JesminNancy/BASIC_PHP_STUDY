<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .opt{
      width: 100%;
      border: none;
    }
  </style>
</head>

<body>
  <div class="container pt-5">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="text-center pb-2">Simple Calculator:</h2>
    <form method="POST">
            <div class="form-group">
              <input type="text"  class="form-control text-center mb-3" placeholder="Enter Number" name="num1">
            </div>
            <div class="form-group ">
              <input  type="text"   class="form-control text-center mb-3" name="num2"  placeholder="Enter Number" >
            </div>

              <div class="form-group form-control mb-3">
            <select name="operation" class="opt  text-center">
                <option value="add" id="">ADD</option>
                <option value="sub" id="">SUB</option>
                <option value="mult" id="">MULT</option>
                <option value="div" id="">DIV</option>
            </select>
              </div>    
            <div class="form-group"> 
              <input type="submit" name="submit" value="Submit"  class="form-control">
            </div> 
            </form>           
          </div>
      </div>

    
  <div class="row pt-3">
     <div class="col-lg-6">
  
        <p> The Result Here:
            
            <?php
            if (isset($_POST['submit'])) {
  
              $num1 = $_POST['num1'];
              $num2 = $_POST['num2'];
              $operation = $_POST['operation'];
  
              switch ($operation) {
                case "add":
                  $sum = $num1 + $num2;
                  echo "The Addition of two number is {$sum}";
                  break;
  
                case "sub":
                  $sub = $num1 - $num2;
                  echo "The Subtraction of two number is {$sub}";
                  break;
  
                case "mult":
                  $multi = $num1 * $num2;
                  echo "The Multiplication of two number is {$multi}";
                  break;
                case "div":
                  $div = $num1 / $num2;
                  echo "The Division of two number is {$div}";
                  break;
                default:
                  echo "Sorry It's not exists";
              }
            }
            ?>
          </p>
  </div>
</div>
     
 </div>
</body>

</html>