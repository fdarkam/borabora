<?php $racine = $_SERVER['DOCUMENT_ROOT']; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contacts</title>
    <?php include_once $racine .'/borabora/include/head.php' ?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
</head>
<body>
    <?php include_once $racine .'/borabora/include/header.php' ?>
  <!--==============================content================================-->
    <section id="content"></div>
    	<div class="container_12 top">
        	<div class="grid_8">
            	<h2>Comment nous trouver</h2>
                <div class="map img-border">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14774.206724702306!2d166.4719217!3d-22.2191377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6c2807ece69467ef%3A0xce5796562a3092d8!2zTHljw6llIERpY2sgVWtlaXfDqQ!5e0!3m2!1sfr!2sfr!4v1678437661444!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="right-1">
					<h3>Adresse</h3>
                    <p>Le Bora-Bora<br>
                    1 rue de la plage<br>
                    75000 Paris</p>
                    <h3>Téléphone</h3>
                    <p>01 23 45 67 89</p>
                    <h3>Email</h3>
                    <p><a href="mailto:accueil@borabora.com">accueil@borabora.com</a></p>
				</div>
            </div>
            <div class="grid_4">
            	<h2>Formulaire de contact</h2>
            	<form id="form" method="post" >
                    <fieldset>
                      <label><input type="text" value="Nom" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''"></label>
                      <label><input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                      <label><input type="text" value="Téléphone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''"></label>
                      <label><textarea onBlur="if(this.value==''){this.value='Message'}" onFocus="if(this.value=='Message'){this.value=''}">Message</textarea></label>
                      <div class="btns"><a href="#" class="button">Effacer</a><a href="#" class="button" onClick="document.getElementById('form').submit()">Envoyer</a></div>
                    </fieldset>  
                  </form> 
            </div>
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
    <?php include_once $racine .'/borabora/include/footer.php' ?>
  </footer>	
</body>
</html>