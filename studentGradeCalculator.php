<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #9ba9e5ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: #ffffff;
            padding: 25px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #062a4fff;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #062a4fff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: #f1f2f6;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Student Grade Calculator</h2>

        <form method="POST">
        <input type="number" name="s1" placeholder="Subject 1 Marks" required>
        <input type="number" name="s2" placeholder="Subject 2 Marks" required>
        <input type="number" name="s3" placeholder="Subject 3 Marks" required>
        <input type="number" name="s4" placeholder="Subject 4 Marks" required>
        <input type="number" name="s5" placeholder="Subject 5 Marks" required>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
        if(isset($_POST['calculate'])){
            $s1=$_POST['s1'];
            $s2=$_POST['s2'];
            $s3=$_POST['s3'];
            $s4=$_POST['s4'];
            $s5=$_POST['s5'];

            $total=$s1+$s2+$s3+$s4+$s5;
            $percentage=($total/500)*100;

            if($percentage>=90){
                $grade='A';
            }elseif($percentage>=80){
                 $grade='B';
            }elseif($percentage>=70){
                $grade='C';
            }elseif($percentage>=60){
                $grade='D';
            }else{
                $grade="Fail";
            }

            echo "<div class='result'>";
            echo "<p><strong>Total Marks:</strong> $total</p>";
            echo "<p><strong>Percentage:</strong> " . round($percentage, 2) . "%</p>";
            echo "<p><strong>Grade:</strong> $grade</p>";
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>