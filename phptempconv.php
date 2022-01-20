<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEMPERATURE CONVERSION APP</title>
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}
        h1{text-align: center;line-height: 20vh;color: #4185D5;}
        .main_div{width:100%;height: 80vh;display: flex;justify-content: space-around;align-items: center;}
        .left_side img{
            max-width: 400px;
            height: auto;
        }
        .right_side{background-color: #dfe6e9;border-radius: 15px;width: 400px;height: 300px;display: flex;flex-direction: column; justify-content: center;align-items: center;text-align: center;}
        .input1{width: 250px;height: 40px;outline: none;border: 1px solid grey;border-radius: 5px;padding: 5px;}
        .selection{width: 100%;margin: 20px 0;}
        .btn{padding: 10px 16px;outline: none;border: none;border-radius: 5px;background-color: #4185D5;color: white;}
        p{margin-top: 20px;}
    </style>
</head>
<body>
    <header>
        <h1>TEMPERATURE CONVERSION</h1>
        
        <div class="main_div">
            <div class="left_side">
                <img src="img/weather.jpg" alt="weather">
            </div>
            <div class="right_side">
                <form method="POST">
                    <input type="text" name="num" placeholder="enter your number" class="input1">
                    <div class="selection">
                        <label for="">cele</label>
                        <input type="radio" name="units" value="cel">
                        <label for="">faren</label>
                        <input type="radio" name="units" value="feh">
                    </div>
                    <input type="submit" name="submit" value="Convert Now" class="btn">
                </form>
                <div>
                    <p><?php
                        if(isset($_POST['submit'])){
                            $num = $_POST['num'];
                            $temp = $_POST['units'];

                            if($temp == "cel"){
                                $result = ($num * 9/5) + 32;
                                echo "The conversion value of cel in faren is" . $result ;
                            }else{
                                $result = ($num - 32) * 5/9 ;
                                echo "The conversion value of faren in cel is" . $result ;
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </header>
</body>
</html>