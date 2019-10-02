<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['firstName']) || empty($_POST['firstName'])) {
            $firstNameError = "Veuillez indiquer votre nom.";
        };
        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $emailError = "Veuillez indiquer votre adresse email.";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter a valid email";
        };

        if (!isset($_POST['message']) || empty($_POST['message'])) {
            $messageError = "Veuillez indiquer votre message.";
        };
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
