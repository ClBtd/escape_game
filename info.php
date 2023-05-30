<?php
$title = "Informations pratiques";
$description = "Trouver et contacter Les Dédales du Temps";
require_once 'elements/header.php';
date_default_timezone_set('Europe/Paris');
$current_day = date('N') - 1;

if (!empty($_POST)) {
    $email = htmlspecialchars($_POST['email']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Votre message nous a bien été transmis, nous reviendrons vers vous dès que possible.";
    }
    else {
        $message = "L'email entré n'est pas valide, veuillez remplir à nouveau le formulaire de contact.";
    }
}

if (isset($_GET["mission"]) && isset($_GET["players"])) {

    $mission = PRICE[htmlspecialchars($_GET["mission"])];
    $players = htmlspecialchars($_GET["players"]);
    $individual_price = $mission[$players];

    if ($individual_price === NULL) {
        $error = true;
    } 

    else {
        $total_price = $individual_price * $players;
    }

}
?>

<main>

    <h1>Informations pratiques</h1>

    <div id="localisation" class="infos">
        <h2>Nous trouver</h2>
        <h3>Coordonnées</h3>
        <ul>
            <li>
                <img src="img/phone.png" alt="Pictogramme téléphone">
                <p><strong>Téléphone :</strong><br>06 19 95 86 16</p>
            </li>
            <li>
                <img src="img/mail.png" alt="Pictogramme enveloppe">
                <p><strong>Email :</strong><br>contact@dedalesdutemps.fr</p>
            </li>
            <li>
                <img src="img/address.png" alt="Pictogramme localisation">
                <p><strong>Adresse :</strong><br>30 boulevard des Canuts<br>69004 Lyon</p>
            </li>
            <li>
                <img src="img/bus.png" alt="Pictogramme bus">
                <p>
                    <strong>Transports :</strong>
                    <ul>
                        <li>Métro C - Arrêt Croix-Rousse</li>
                        <li>Bus 2 et 33 - Arrêt Les Canuts</li>
                        <li>Vélov - Station Place des Tapis</li>
                    </ul>
                </p>
            </li>
        </ul>
        <h3>Horaires</h3>
        <ul>
            <?php foreach (DAYS as $key => $day) : 
                if ($key === $current_day) : ?>
                    <li><mark><?= $day ?> : <?=show_time(TIME[$key])?></mark></li>
                <?php else : ?>
                    <li><?= $day ?> : <?=show_time(TIME[$key])?></li>
                <?php endif ;
                endforeach ; ?>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.673810566499!2d4.826037975435495!3d45.777727012466265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb1c4b1d50cf%3A0xee7e60a00edf3f5c!2s30%20Bd%20des%20Canuts%2C%2069004%20Lyon!5e0!3m2!1sfr!2sfr!4v1685291218881!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div id="contact" class="infos">
        <h2>Nous contacter</h2>
        <p>Vous souhaitez réserver une session ? Vous souhaitez organiser un évènement dans nos salles ? Vous avez une question ou une remarque ? N'hésitez pas à nous contacter, nous reviendrons vers vous le plus rapidement possible.</p>
        <form action="info.php#contact" method="post">
            <label for="name">Votre nom :</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="email">Votre addresse email :</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="phone">Votre numéro de téléphone (optionnel) :</label>
            <input type="tel" name="phone" id="phone">
            <br>
            <label for="message">Votre message :</label>
            <textarea name="message" id="message" cols="100" rows="5"></textarea>
            <br>
            <button type="submit">Envoyer</button>
        </form>
        <?php if (isset($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>
    </div>

    <div id="tarifs" class="infos">
        <h2>Tarifs</h2>
        <p>Nos tarifs varient en fonction de la durée de la mission et du nombre de joueurs. Plus vous êtes nombreux et moins c'est cher ! Choisissez la mission qui vous intéresse et le nombre de personnes afin d'en connaitre le prix.</p>
        <form action="info.php#tarifs" method="get">
            <label for="mission">Choisissez la mission qui vous intéresse :</label>
            <select name="mission" id="mission">
                <option value="tombeau">Le tombeau perdu d'Isis</option>
                <option value="prophetie">La prophétie de l'Ordre du Temple</option>
                <option value="quartier">Les mystères du quartier des ombres</option>
                <option value="enigma">Opération Enigma</option>
            </select>
            <br>
            <label for="players">Sélectionner le nombre de joueurs :</label>
            <select name="players" id="players">
                <option value="3">3 joueurs</option>
                <option value="4">4 joueurs</option>
                <option value="5">5 joueurs</option>
                <option value="6">6 joueurs</option>
                <option value="7">7 joueurs</option>
                <option value="8">8 joueurs</option>
                <option value="9">9 joueurs</option>
            </select>
            <br>
            <button type="submit">Calculer le tarif</button>
            <?php if (isset($total_price)) : ?>
                <p>Votre mission vous coûtera <?=$total_price?>€, soit <?=$individual_price?>€ par personne.</p>
            <?php elseif (isset($error)) : ?>
                <p>Cette mission n'est pas adaptée au nombre de joureurs sélectionné. Veuillez changer le nombre de joueurs ou choisir une autre mission.</p>
            <?php endif; ?>
        </form>
    </div>

</main>

<?php require_once 'elements/footer.php'; ?>