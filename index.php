<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrawOfNames</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <div class="topHeader">
            <h1 class="title"><i class="fa fa-check-circle"></i> DrawOfNames</h1>
        </div>
    </header>
    <main>
    
        <div>
         

            <form action='PHP/sort.php' method='post'>
                    <h3>Adicionar nome: <input id="lbl" type='text' name='name'></h3>
                    <input id="btn1" type='submit' value='Adicionar' name="add">
                    <input id="btn2" type='submit' value='Sortear' name="sort">
                    <input id="btn3" type='submit' value='Refazer' name="reset">
            </form>

            <?php
                
                echo "<div class='outNames'>";
                foreach ($_SESSION['list'] as $names){
                    echo "<span class='names'>".$names."</span>";
                }
                
                echo "</div>";
                echo "<hr>";
                echo "<div class='sorted'>";
                if ($_SESSION['sorted'] == NULL){
                    echo "<span class='nameSorted'>".'Nenhum foi sorteado!'."</span";
                }else{
                   echo "<span class='nameSorted'>"."<p>Sorteado: ".$_SESSION['sorted']."</p>"."</span>";
                } 
                echo "</div>"; 
    
            ?>
        </div>
    </main>
    <footer>
        <div class="end">
            <p>By Development Welberthy Gustavo &copy; 2021</p>
        </div>
    </footer>
</body>
</html>