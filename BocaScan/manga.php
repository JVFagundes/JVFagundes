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



<div class="series-card">

<a class="series-link" href="#">

<img class="thumb-img" src="haijime.png"/>
</a>
</div>
<div class="series-box">
<a href="#">
<h5 class="series-title">
Haijime no Ippo</h5>
</a>
</div>



</body>

<style>

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
    top: 45%;
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
    margin: 35px 280px;
}

.buttons button{
    height: 50px;
    width: 150px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    background-color: red;
    border: 1px solid #cc0000;
    outline: none;
    cursor: pointer;
    transition: .5s;
}

.buttons button:hover{
    background-color: #cc0000;
}

.thumb-img{
	border-radius: 10px;
    height: 100%;
    object-fit: fill;
    object-position: top;
    position: absolute;
    width: 50%;
    transition: 0.2s ease-in-out;
    left: 24%;
}

.thumb-img:hover{
	transform: scale(1.1);
}

.series-title{
	font-size: 30px;
	text-align: center;
}

.series-box{
	display: flex;
    align-items: center;
    justify-content: center;
}

.series-card{
	border-radius: 10px;
    margin-bottom: 5px;
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border-radius: 5px;

}


@media (max-width: 440px){
	.series-card{
		height: 240px;
	}      
}



@media (min-width: 440px) AND (max-width: 768px){
	.series-card{
		height: 256px;
	}      
}

    @media (min-width: 769px) AND (max-width: 800px){
        .series-card{
		height: 280px;
	}
    }

    @media(min-width: 801px) AND (max-width:962px){
        .series-card{
		height: 300px;
	}
    }

    @media(min-width: 1025px) AND (max-width: 1400px){
        .series-card{
		height: 412px;
	}
    }

    @media(min-width:1400px) {
        .series-card{
		height: 260px;
	}
    }


@media(min-width:1200px) AND (max-width: 1400px){
        .series-card{
		height: 260px;
	}
    }

@media(min-width:500px) AND (max-width: 768px){
        .series-card{
		height: 290px;
	}
    }


@media(min-width:963px) AND (max-width: 1024px){
        .series-card{
		height: 400px;
	}
    }

</style>
</html>
