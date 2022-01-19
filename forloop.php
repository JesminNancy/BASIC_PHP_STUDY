<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <?php
            /* for($i = 1; $i <= 10; $i++){
                echo $i . "<br>";
            } */
            // Odd Number
            for($i = 2; $i <=100; $i++)
            if($i % 2 !=0){
                echo $i ."<br>";
            }
        
            ?>
            </div>
            <div class="col-lg-6">
            <ul>
        <?php for($count = 1; $count <= 50; $count++){
            ?>
        
        <li>User <?php echo $count ."<br>"; ?></li>

        <?php    
        } ?>
            </div>
        </div>
    </div>
    

    </ul>
</body>
</html>