<?php
    
  require_once ("style.php");

  require_once('boot.php');
  if (isset($_GET['id'])) {
    $mode = 'update';
    // formulaire en mode update
    $user = User::findById($_GET['id']);
    //var_dump($user);
  } else {
    $mode = 'insert';
    // formulaire en mode insert
    // créer un user vide pour éviter "notice: undefined variable/property" (attributs value des input du formulaire)
    $user = new User();
  }
  if (isset($_POST['submit'])) {
    // formulaire envoyé
    // utiliser la classe User
    // pour insérer en DB les données postées
    // instanciation d'un objet vide
    $user = new User();
    // hydratation de l'objet
    $user->firstName = $_POST['firstName'];
    $user->lastName = $_POST['lastName'];
    $user->email = $_POST['email'];
    // déterminer au submit si on est en mode update ou en mode insert
    if (isset($_POST['id'])) {
      //echo 'mode update';
      $user->id = $_POST['id'];
      $user->update();
      

    } else {
      //echo 'mode insert';
      $user->insert();
      
    }
    redirect ('index.php');
  }
?>
<div class="container">
    <div class="well">
      <a href="index.php" class="btn btn-info" >Retour à la liste</a>
      <h1>Add a new user</h1>
        <form action="" method="post">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name" value="<?= $user->firstName?>"  name="firstName">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="<?= $user->lastName?>" name="lastName">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email?>">
            </div>
            <?php
                if($mode == 'update') {
                  echo '<input type="hidden" name="id" value="'.$user->id.'">';
                }
            ?>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
