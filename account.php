<?php
$con=mysqli_connect("localhost","root","","projet_web");
if(!$con) 
{
die ('erreur').mysqli_connect_error();
}
if (isset($_POST["cin"]) && isset($_POST["nom"]) && isset($_POST["pren"])&& isset($_POST["email"]) && isset($_POST["tel"]) && isset($_POST["mdp"]))
    { if (!empty($_POST["cin"]) && !empty($_POST["nom"]) && !empty($_POST["pren"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["mdp"])) 
        {
            $cin = $_POST['cin'];
            $n= $_POST['nom'];
            $p=$_POST['pren'];
            $em=$_POST['email'];
            $tel=$_POST['tel'];
            $mot=$_POST['mdp'];
            $type = 'user';
            $req="INSERT INTO inscription VALUES ('$cin','$n','$p','$em','$tel','$mot','$type')";
            if (mysqli_query($con,$req))
            {
                header("location: index.php"); 
            }
            else
            {
            echo " erreur d inscription";
            }
            mysqli_close($con);
        }

     }

?>

<!DOCTYPE html>
<html>
<head>
<title>
 9oFty.tn    
</title>
<link rel="shortcut icon" href="chariot.png">
<link rel="stylesheet" href="acc.css">
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="acc.js"></script>
<script src="https://kit.fontawesome.com/8622b4cd6e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo"><i class="fa-regular fa-cart-shopping">9oFty.tn</i></h2>
        </div>
        <div class="menu">
            <ul>   
                <li><a href="catalogues.html" >PRODUITS</a></li>
                <li><a href="#footer" >CONTACT</a></li>
                <li><a href="index.php" >LOGIN</a></li>
                <li><a href="account.php" >REGISTER</a></li>
            </ul>
        </div>
        
       

    </div> 
    <form name="f" class="form" method="POST" action="account.php">
        <table>
            <tr>
                <h2> create account</h2>
                <td><label>cin</label></td>
                <td><input type="number" name="cin" required></td>
            </tr>
            <tr>
            <td><label>nom</label></td>
            <td><input type="text" id="n" name="nom" maxlength="30" required onkeyup="nom()"></td>
            </tr>
            <tr>
                <td><label>prenom</label></td>
                <td><input type="text" id="p" name="pren" maxlength="30" required onkeyup="prenom()"></td>
            </tr>
            <tr>
                <td><label>email</label></td>
                <td><input type="email" id="e" name="email" required onchange="mail()"></td>
            </tr>
            <tr>
                <td><label>date de naissance</label></td>
                <td><input type="date" required></td>
            </tr>
            <tr>
                <td><label>tel</label></td>
                <td><input type="tel" name="tel" required ></td>
            </tr>
            <tr>
                <td><label>mot de passe</label></td>
                <td><input type="password" name="mdp"  required>
            </tr>
            <tr>
                <td><label>confirmez mot de passe</label></td>
                <td><input type="password" name="cmdp" required >
                    
            </tr>
            
        </table>
        <input class="envoyer" type="submit" value="envoyer" onclick="verif()">
        <input class="annuler" type="reset"  value="annuler">
        <p>log in with</p>
        
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
    </form> 

<footer id="footer">

    <p class="Fin">Find us on : </p> <br>
    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>

    <br><br> 
    <div class="num">
    <p>Contact us</p>
    <p>+216 33 428 215</p>
    <p>9oFty1234@gmail.com</p>
    </div>
</footer>
</body>

</html>

