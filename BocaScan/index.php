<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <title>BocaScan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" 
    rel="stylesheet">

</head>
<body>

<div class="wrapper">

        <nav class="navbar">
            
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a class="active" href="manga.php">Mangás</a></li>
                <li><a class="active" href="manhua.php">Manhuas</a></li>
                <li><a class="active" href="manhwa.php">Manhwas</a></li>
                <li><a class="active" href="sobre.php">Sobre</a></li>
            </ul>
    
        </nav>

        <div class="center">
            <h1>BocaScan</h1>
            <h2>Tradução de fã para fã</h2>
        <div class="buttons">
            <button>
                <a href="pagina.php">Contato</a>
            </button>
            <button class="btn">
                <a href="https://www.instagram.com/bocascan/">Rede Social</a>
            </button>
            
            
            <body link="white" vlink="white">
        </div>
        </div>

       

</div>

</body>

<style>

*{
    margin: 0;
    padding: 0;
}

body{
    background-color: #1C1C1C;
}
 
.navbar{
    width: 100%;
    height: 80px;
    background: #7FFFD4;
}    

.navbar ul{
    float: right;
    margin-right: 20px;
}

.navbar ul li{
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 80px;
}

.navbar ul li a{
    text-decoration: none;
    color: #1C1C1C;
    font-size: 20px;
    font-family: 'Russo One', sans-serif;
    padding: 6px 13px;
    transition: .4s;
}

.navbar ul li a.active{
    background: white;
    border-radius: 2px;
}

.logo{
    width: 80px;
    height: 80px;
    padding: 0 0px;
}

.wrapper .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family:'Russo One', sans-serif;
    user-select: none;
}

.center h1{
    color: #7FFFD4;
    font-size: 70px;
    font-weight: bold;
    width: 900px;
    text-align: center;
}

.center h2{
    color: #7FFFD4;
    font-size: 70px;
    font-weight: bold;
    width: 850px;
    margin-top: 10px;
    text-align: center;
}

.center .buttons{
    margin: 30px 270px;
}

.buttons button{
    height: 70px;
    width: 170px;
    font-size: 22px;
    font-weight: bold;
    color: white;
    background-color: red;
    border: 5px solid #cc0000;
    outline: none;
    cursor: pointer;
    transition: .5s;
}



.buttons button:hover{
    background-color: #cc0000;
}

a{
    text-decoration: none;
}
</style>

</html>