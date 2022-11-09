<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cont{
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            margin:auto;
            width: 400px;
            height:350px;
            padding:30px;
            margin-left: 30%;
           
            background-image: url('aa.jpg');
            background-repeat: no-repeat;
  >
            box-shadow: 1px 1px 5px 1px #00000050;

        }
        .cont2{
            display: none;
            position: left;
            left: 0;
            width: 200px;
            height:200px;
            padding:30px;
            border-radius: 10px;
            box-shadow: 1px 1px 5px 1px #00000050;
        }
        h2{
            text-align: center;
        }
        body{
        
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
     
        .btn{
            border: none;
            background-color: #6CCFFf;
            padding:10px;
            border-radius: 6px;
            box-shadow: 1px 1px 2px 1px #00000030;
            
        }
    </style>
</head>
<body style="background-image: url('a.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
  <table>
    <h2>Music Mood Recommendation System</h2>
    <tr><td>
    <div class="cont">
        <form action="index.php" method="post">
        <p>Select Mood:</p>
  <input class="qwe" type="radio" id="Happy" name="mood" value="Happy">
  <label for="Happy">Happy</label><br>
  <input class="qwe" type="radio" id="Sad" name="mood" value="Sad">
  <label for="Sad">Sad</label><br>
  <br>  
  <p>Select preferable language:</p>
  <input class="qwe" type="radio" id="lang1" name="lang" value="Telugu">
  <label for="Telugu">Telugu</label><br>
  <input class="qwe" type="radio" id="lang2" name="lang" value="Hindi">
  <label for="Hindi">Hindi</label><br>  
  <input class="qwe" type="radio" id="lang3" name="lang" value="Tamil">
  <label for="Tamil">Tamil</label><br><br><br><br>
            <center>
                <br>
                <br>
                <input class="btn" type="submit">
            </center>
        </form>

        </td>
    <center align="right" style="margin-bottom:50px">
        <br>
    <h3 align="center">You can view the video of random songs by the options you have selected or listen to the music only..!</h3>
    <td>
    <p style="margin-left:50%"><?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mood=$_POST["mood"];
    $lang = $_POST["lang"];
    echo exec('python qwe.py '.$mood.' '.$lang); 
    }
    ?></p>
    </center>
    </div>
</td>
</table>
</body>
</html>