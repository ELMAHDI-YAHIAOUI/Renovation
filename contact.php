<?php
    require "partials/header.php"
?>
    
    
    <?php
// Spécifiez les valeurs par défaut
$subject = "Valinco";
$your_email = 'douaeelh2@gmail.com';
$default_subject = 'Valinco';
$name_not_specified = 'Veuillez entrer un nom valide';
$message_not_specified = 'Veuillez entrer un message valide';
$email_was_sent = 'Message envoyé !';
$server_not_configured = 'Désolé, le serveur de messagerie n\'est pas configuré';

$errors = array();

if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])) {
        $sender_name = stripslashes(strip_tags(trim($_POST['name'])));
    }
    if (!empty($_POST['email'])) {
        $sender_email = stripslashes(strip_tags(trim($_POST['email'])));
    }
    if (!empty($_POST['phone'])) {
        $sender_phone = stripslashes(strip_tags(trim($_POST['phone'])));
    }
    if (!empty($_POST['message'])) {
        $message = stripslashes(strip_tags(trim($_POST['message'])));
    }

    if (empty($sender_name)) {
        $errors[] = $name_not_specified;
    }

    if (empty($message)) {
        $errors[] = $message_not_specified;
    }

    $from = (!empty($sender_email)) ? 'From: ' . $sender_email : '';

    $subject = (!empty($subject)) ? $subject : $default_subject;

    $message = "Nom: $sender_name\n\nEmail: $sender_email\n\nTéléphone: $sender_phone\n\nMessage: $message\n";

    if (empty($errors)) {
        if (mail($your_email, $subject, $message, $from)) {
            echo $email_was_sent;
        } else {
            $errors[] = $server_not_configured;
            echo implode('<br>', $errors);
        }
    } else {
        echo implode('<br>', $errors);
    }
}
?>

<section id="pageCover" class="row">
        <img src="images/contactCover.png" alt="" class="pageCover">
        <div class="row pageTitle">Contactez nous</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index.php">acceuil</a></li>
              <li class="active">contact</li>
            </ol>
        </div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="row m0">
                    <div class="col-sm-6">
                        <div class="row m0">
                            <h3>Prenez contact avec nous</h3>
                            <p>Prenez contact avec notre équipe dévouée dès maintenant pour obtenir des réponses à toutes vos questions et bénéficier de nos services exceptionnels. Que ce soit pour une demande de renseignements, une prise de rendez-vous ou une assistance technique, nous sommes là pour vous aider. </p>
                            <ul class="list-inline">
                                <li><i class="fa fa-home"></i> 16 RUE ANATOLE FRANCE 95190 GOUSSAINVILLE</li>
                                <li><i class="fa fa-phone"></i> +33 7 77 30 41 66</li>
                                <li><i class="fa fa-envelope"></i> info@domain.com</li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="row m0 commentForm">
                        <div class="row m0 commentForm">
                            <form class="row m0" id="contactForm" method="post" name="contact">
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit" name="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>

                            <?php if (!empty($errors)) : ?>
                                <div id="error">
                                    <span>
                                        <p><?php echo implode('<br>', $errors); ?></p>
                                    </span>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($success_message)) : ?>
                                <div id="success">
                                    <span class="green textcenter">
                                        <p><?php echo $success_message; ?></p>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>                       
                    </div>
                </div>                
            </div>            
        </div>
    </section>
    
    <?php
    require "partials/footer.php"
    ?>