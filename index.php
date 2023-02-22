<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do list</title>
</head>
<body>
    <style>
        body{
            background-color: white!important;
        }
        div{
            color: white;
            background: #2FCC9A;
            border: 2px solid #FFFFFF;
            border-radius: 10px;
            padding: 30px;
            font-family: tahoma;
            padding: 6px;
            margin: 4px;
            position: relative;
            left: 50%;
            transform: translate(-50%, 0);
            
        }
        button {
            border: 0;
            padding: 5px 15px;
            color: white;
            font-size: 15px;
            background: #db5757;
            position: relative;
            border-radius: 5px;
            font-family: tahoma;
            padding: 6px;
            margin: 4px;
            position: relative;
            left: 50%;
            transform: translate(-50%, 0);
            cursor: pointer;
        }
        input{
            margin: 8px;
            padding: 8px;
            width: 90%;

            position: relative;
            left: 50%;
            transform: translate(-50%, 0);

        }
    </style>
    <div>
        <h3 style="text-align: center; font-family:tahoma;">Enter tasks you want to do:</h2>
        <form method ="get">
            <input type = "text" name = "tasks" placeholder = "enter tasks" style="align: center;"><br>
            <button type="submit" name="formSubmit">Send task</button>
        </form>
    </div>
    
    <?php 
        if(isset($_GET['formSubmit'])){
            $nameform = $_GET['tasks'];
            $mysqli = new mysqli("127.0.0.1", "root", "", "to-do");
            if($mysqli->connect_errno){
                echo "sorry, your task wasn't been written";
                exit;
            }
            $tasks = '""'.$mysqli->real_escape_string($nameform).'""';
            $query = "INSERT INTO to-do (tasks) VALUES ($tasks)";
        }
    ?>
</body>
</html>
