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
        
        }
        button {
            border: 0;
            color: white;
            font-size: 15px;
            background: #db5757;
            border-radius: 5px;
            font-family: tahoma;
            padding: 6px;
            margin: 4px;
            position: relative;
            left: 50%;
            transform: translate(-50%, 0);
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
        <form method ="post">
            <input type = "text" name = "tasks" placeholder = "enter tasks" style="align: center;"><br>
            <button type="submit" name="formSubmit">Send task</button>
        </form>
        <?php echo "<h3 style='text-align: center;'>Today (".date("d.m.Y").") you can create blog!</h3>";?>
    </div>
    
    <?php 
        if(isset($_POST['formSubmit'])){
            $tasks = $_POST['tasks'];
            $link=mysql_connect("127.0.0.1","root","") or die("Could not connect"); 
            $LL=mysql_select_db("to-do",$link) or die("Not dataBase");
            $result= mysql_query("INSERT INTO tasks(task) VALUES ('$tasks')");
       }
    ?>
</body>
</html>
