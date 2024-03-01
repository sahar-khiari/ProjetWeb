<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inscription</title>
  <style>
    header, footer {
      
      
      text-align: start;
    }
 
    
    img {
      display: block;
      margin: auto;
    }
  
  
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="#home">home</a>
      <a href="#projet et taches">projet et taches</a>
      <a href="#liste employes">liste employes</a>
      <a href="inscription.html">inscription</a>
  
      <hr>
    </nav>
    <img src="img1.png">
  </header>
  <main>
    <h2>Inscription au Site</h2>
    <form action="Verification.php" method="post">
        <label for="firstname">nom:</label>
        <input type="text" id="firstname" name="fname" required ><!-- pattern="[A-Za-z]+" title="invalide"   minlenght="2"  --> 
        <span id="errornom"style='color:red'></span><br>
        <label for="lastname">prenom:</label>
        <input type="text" id="lastname"name="lname"required >
        <span id="errorprenom"style='color:red'></span><br>
        <label for="email">Email:</label>
        <input type="email" id="email"name="email" >
        <span id="erroremail"style='color:red'></span> <br>
        <label for="hone">tel:</label>
        <input type="phone" id="phone"name="tel" required><!-- required  pattern="[0-9]{8}" --> 
        <span id="errortel"style='color:red'></span> <br>
        <label for="date">Date de naissance:</label>
        <input type="ddob" id="dob"name="dob" required  >
        <span id="errordate"style='color:red'></span><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password"name="pwd" required><!--minlength="8"---> 
        <span id="errorpwd"style='color:red'></span><br>
        <!--<input type="submit" value="S'inscire"onclick="validerDateOfBirth()"/>-->
        <input type="submit"value="S'inscire"/>
        <script src="inscription.js"></script>
      </form>
   

  </main>
  <hr>
  <footer>
    <p>Vous pouvez nous contacter par email : <a href="mailto:contact@esprit.tn">contact@esprit.tn</a></p>
    <p>Adresse: ghazela, tunis</p>
  </footer>
  
</body>
</html>