
<?php
    session_start();
?>

<?php
    

    $name = $_POST["name"] ?? '';

    if(isset($_SESSION['list']) && !isset($_POST['sort']) && !isset($_POST['reset'])){
        array_push($_SESSION['list'], $name);
        
        header('location:../index.php');

    }else if(!isset($_SESSION['list'])){
        $_SESSION['list'] = array($name);
        header('location:../index.php');
    }

    if(isset($_POST['reset'])){
        unset($_SESSION['list']);
        unset($_SESSION['sorted']);
       
    }


    if(isset($_SESSION['list'])){
        foreach($_SESSION['list'] as $name){
            echo $name."<br>";
            header('location:../index.php'); 
        }
    }

    if(isset($_POST['sort'])){

        $_SESSION['list'] = array_diff($_SESSION['list'], array(''));
        $qtd_names = count($_SESSION['list']);
        
        $sort = rand(0, $qtd_names);
        $_SESSION['sorted'] = $_SESSION['list'][$sort];

        echo $_SESSION['sorted'];
        header('location:../index.php'); 
    
    }

    header('location:../index.php');
?>



