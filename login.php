<?php
$title = "Authentification";
$content = "Accéder aux classements des missions";
require 'elements/header.php';
$error = NULL;

if (!empty($_POST["identifiant"]) && !empty($_POST["password"])) {
    $users = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $_POST['mission'] . '.csv');
    foreach ($users as $user) {
        $info_user = explode("\t", $user);
        if ($info_user[0] == $_POST['identifiant'] && $info_user[1] === $_POST['password']) {
                session_start();
                $_SESSION["connecte"] = 1;
                $_SESSION["team_name"] = $info_user[0];
                header('Location: /ranking.php#'.$_POST['mission']);
                exit();
        }
        else {
            $error = true;
        }
    } 
}

if (authentification()) {
    header('Location: /ranking.php');
    exit();
}
?>
<main>

    <h1 class="login">Authentification</h1>

    <div class="login">
        <p>Pour accéder aux classements, veuillez sélectionnez la mission à laquelle vous avez participé. Puis, entrez votre nom d'équipe et le code qui vous a été fourni.</p>

        <?php if ($error !== NULL) : ?>
            <p>Nom d'équipe et/ou code incorrect. Veuillez réessayer.</p>
        <?php endif; ?>

        <form method="post" action="">
            <label for="mission_choice">Mission :</label>
                <select name="mission" id="mission_choice">
                    <option value="tombeau">Le tombeau perdu d'Isis</option>
                    <option value="prophetie">La prophétie de l'Ordre du Temple</option>
                    <option value="quartier">Les mystères du quartier des ombres</option>
                    <option value="enigma">Opération Enigma</option>
                </select>
            <br>
            <label for="identifiant">Nom d'équipe : </label>
            <input type="text" name="identifiant" id="identifiant" required>
            <br>
            <label for="password">Code :</label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</main>

<?php require 'elements/footer.php'; ?>