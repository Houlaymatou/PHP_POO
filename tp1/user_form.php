<?php
    require_once('boot.php');
    require_once ("style.php");

    if(isset($_GET['id'])){
      $mode = 'update';
      //formulaire mode edit
     $user = User::findById($_GET['id']);
     //var_dump($user);
    }
    else {
      $mode = 'insert';
      //crée un formulaire vide en mode insert pour eviter "notice undefined"
      $user = new User();
    }

    if(isset($_POST['submit'])){
      //formulaire envoyé
      //utiliser la classe User
      //Pour inserer en DB les données postées

      //instanciatio de l'objet vide
     
      $user = new User();
      //alimentation de l'objet vide
      $user->id = $_POST['id'];
      $user->firstName = $_POST['firstName'];
      $user->lastName = $_POST['lastName'];
      $user->email = $_POST['email'];
  //déterminer le mode 
 var_dump($user);
      if(isset($_POST['id'])){
        $user->update();
      }
      else {
        $user->insert();
      }
        
    

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
