<!DOCTYPE html>
<html>
    <head>
    <?php
	if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["pseudo"]) && isset($_GET["mdp"])&& isset($_GET["email"]) )
	{
		
		$nom=$_GET["nom"];
		$prenom=$_GET["prenom"];
        $pseudo=$_GET["pseudo"];
		$mdp=$_GET["mdp"];
		$email=$_GET["email"];

		echo $nom;

		$bd=new PDO("mysql:host=localhost;dbname=donnees","root","");
		$req=$bd->prepare("insert into users(nom,prenom,pseudo, mdp, email) values ('$nom','$prenom','$pseudo','$mdp','$email')");
		$req->execute();

        


	}
?>

        <title>Inscription</title>
        <meta charset="utf-8">

            <style>
                label {
                    width: 20%;
                    display: inline-block;
                    text-align: left;
                }
                body {
                    width: 50%;
                    font-family: Franklin Gothic;
                    margin: 5px auto;
                    background: #f4f7f8;
                    padding: 20px;
                    color: black;
                }

                fieldset{
                    border-radius: 8px;
                }
                legend {
                    font-size: 1.4em;
                    margin-bottom: 10px;
                }
                input[type="text"] {
                    border-radius: 5px;
                    padding: 10px;
                    width: 70%;
                    background-color: #ffff;
                    margin: 10px;
                }
                input[type="date"]{
                    border-radius: 5px;
                    padding: 10px;
                    width: 70%;
                    background-color: #ffff;
                    margin: 10px;
                }
                input[type="password"]{
                    border-radius: 5px;
                    padding: 10px;
                    width: 70%;
                    background-color: #ffff;
                    margin: 10px;
                }
                button {
                    border-radius: 5px;
                    padding: 10px;
                    width: 70%;
                    background-color: blue;
                    margin: 10px;
                    width: 100%;
                    font-size: 18px;
                    font-style: bold;
                    color: #fff;
                }
                input[type="submit"]{
                    position: relative;
                    padding: 20px;
                    font-size: 18px;
                    border: 1px solid #1abc1a;
                    border-radius: 2px;
                    margin-top: 8px;
                    width: 100%;
                    font-size: 18px;
                    font-style: bold;
                    color: #000;
                }

            </style>
            <link rel="stylesheet" href="style.css">
    </head> 
    <body>
    <header>
        <div class="menu_toggle">
            <span></span>
        </div>
        <div class="logo">
            <p><span>SHOP</span>shoes: Inscription</p>
        </div>
        <ul class="menu">
            <li><a href="index1.php #home">Accueil</a></li>
            <li><a href="index1.php #shoes">Shoes</a></li>
            <li><a href="index1.php #services">Services</a></li>
            <li><a href="index1.php #contact">Contact</a></li>
        </ul>
        
    </header>
        <form method="GET">

            <fieldset>
            
                <legend>inscripnion</legend>

              

                <label>Nom</label><input type="text" name="nom" placeholder="Veuillez entrer votre Nom"/> <br>

                <label>Prenom</label><input type="text" name="prenom" placeholder="Veuillez entrer votre Prenom"/> <br>

                <label>pseudo</label><input type="text" name="pseudo" placeholder="veuillez entrer votre pseudo" value="pseudo"/> <br>

                <label>password</label><input type="password" name="mdp" value="mdp"/> <br>

                <label>Email</label><input type="text" name="email" placeholder="Veuillez entrer votre email"/> <br

                <p style="color: #000;">*Veuillez bien vérifier les informations entrées avant de les valider. </p>

                <button onclick="Confirmer('Inscription réussie! vous êtes connecté!')">Confirmer</button>
                    <script>
                        function Confirmer(msg){
                            alert(msg)
                        }
                    </script>

            </fieldset>
                
        </form>
        <br>
       
    </body>
   <?php echo "inscription réussie!"?>
</html>

