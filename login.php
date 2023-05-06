<!doctype html>
<html>
<head>
<title>Capt'Ouvre</title>
    <link rel="SHORT ICON" href="LOGO-museum.png" type="image/jpg">
<style type="text/css">
body{
    box-sizing: border-box;
    align-items: center;
    height: 90vh;
    display: flex;
    justify-content: center;
    background:rgb(244, 238, 238);
}
.container{
    width:50%;
    margin: 0 auto;
    padding: 60px;
    display: flex;
    justify-content: space-around;
    text-align: center;
    align-items: baseline;
    background: white;
    border: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}
a{
    text-decoration: none;
}
.client{
    border-radius: 10px;
    width: 40%;
    padding: 20px;
    box-shadow:0 0 12px rgba(0, 0, 0, 0.2);
}
.Visiteur{
    border-radius: 10px;
    margin-top: -5%;
    width: 30%;
    padding: 20px;
    box-shadow:0 0 12px rgba(0, 0, 0, 0.2);
}
input{
    outline: none;
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    width: 70%;
    height: 30px;
    border-radius: 5px;
    border-style: none;
    border: #ccd0d5;
    background:#f5f6f7;
    border-bottom: 2px solid black;
    box-shadow:0 0 12px rgba(0, 0, 0, 0.2);
}
button{
    margin-top: 20px;
    border: none;
    border-radius: 10px;
    width: 100px;
    height: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    background: rgb(219, 245, 221);
}
button:hover{
    background: rgb(143, 189, 147);
}
.p{
    color: #1c1e21;
    font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif;
    font-size: 18px;
    line-height: 38px;
    margin-bottom: 10px;
}
.inscrire{
    margin-top: 10px;
    display: flex;
    justify-content: center;
}
</style>
</head>
<body>
    <div class="container">
        <div class="Visiteur">
        <form action="login-db.php" method="post">
            <p class="p">Connexion visiteur</p>
            <form action="" method="post">
            <input name="code" class="inpt" type="text" placeholder="Code client" required>
            <button name="login-code" value="submit">Login</button>
</form>
        </div>
        <div class="client">
            <p class="p">Connexion client</p>
            <form action="login-db.php" method="post">
                <input name="email" class="inpt" type="text" placeholder="Email" required>
                <input name="password" class="inpt" type="password" placeholder="Mot de passe" required>
                <button name="login-client" value="submit">Login</button>
                <div class="inscrire"><p>N'avez pas de compte ? <a class="insc" href="register.php"> S'inscrire</a></p></div>
</form>    
            </div>
</div>
</body>
</html>
<?php
 @session_start();
 if(isset($_SESSION['error'])){
    echo '
    <script>
    setTimeout(()=>{alert("'.$_SESSION['error'].'")},10);
    </script>'
    ; 
    $_SESSION['error']=null;
 }

 ?>