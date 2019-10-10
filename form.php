<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $isValid = true;
        if (!isset($_POST['firstName']) || empty($_POST['firstName'])) {
            $firstNameError = "Veuillez indiquer votre nom.";
            $isValid = false;
        }
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $isValid = false;
            $emailError = "Veuillez indiquer votre adresse email.";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $isValid = false;
            $emailError = "Veuillez indiquer une adresse email valide.";
        }

        if (!isset($_POST['message']) || empty($_POST['message'])) {
            $isValid = false;
            $messageError = "Veuillez indiquer votre message.";
        }
        if ($isValid) {
            $pdo = new PDO (DSN,USER,PASSWORD);
            $query = "INSERT INTO contact(firstname, email, message) VALUES (:firstname, :email, :message)";
            $request = $pdo-> prepare($query);
            $request -> bindValue(':firstname', $_POST['firstName'], PDO::PARAM_STR);
            $request -> bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            $request -> bindValue(':message', $_POST['message'], PDO::PARAM_STR);
            $request -> execute();
        }
    }

?>


    <h2 id="contact" class="contact">Contact</h2>
    <form action ="#contact" method="post">
        <div class="containerFormulaire">
        <div class="formdiv">
            <label for="firstname"> Name </label>
            <input type="text" name="firstName" id="firstname">
            <?php if(isset($firstNameError)) { ?>
            <div class="error" ><?= $firstNameError ?></div>
            <?php } ?>
        </div>
         <div class="formdiv">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
             <?php if(isset($emailError)) { ?>
                 <div class="error" ><?= $emailError ?></div>
             <?php } ?>
        </div>
            <label for="message"> Votre message : </label>
            <textarea name="message" id="message"></textarea>
            <input class="Send" type="submit" value="Envoyer">
            <?php if(isset($messageError)) { ?>
                <div class="error" ><?= $messageError ?></div>
            <?php } ?>
            <br>
        </div>
    </form>
