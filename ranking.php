<?php
require_once 'functions.php';
is_connected();
$title = "Classements";
$content = "Les classements des missions des Dédales du Temps";
$tombeau = ranking(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'tombeau.csv'));
$prophetie = ranking(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'prophetie.csv'));
$quartier = ranking(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'quartier.csv'));
$enigma = ranking(file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'enigma.csv'));
require 'elements/header.php';
?>

<main class="mission_ranking">

    <h1>Classements</h1>

    <ul>
        <li>
            <a href="#tombeau">Le tombeau perdu d'Isis</a>
        </li>
        <li>
            <a href="#prophetie">La prophétie de l'Ordre du Temple</a>
        </li>
        <li>
            <a href="#quartier">Les mystères du quartier des ombres</a>
        </li>
        <li>
            <a href="#enigma">Opération Enigma</a>
        </li>
        <li id="logout">
            <a href="logout.php">Se déconnecter</a>
        </li>
    </ul>
    
    <div id="tombeau">
        <h2 class="title">le tombeau perdu d'isis</h2>
        <table>
            <thead>
                <tr>
                    <td>Rang</td>
                    <td>Equipe</td>
                    <td>Temps</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tombeau as $k => $rank) {
                    echo ranking_table($k, $rank, $_SESSION['team_name']); 
                } ?>
            </tbody>
        </table>
    </div>

    <div id="prophetie">
        <h2 class="title">la prophetie de l'ordre du temple</h2>
        <table>
            <thead>
                <tr>
                    <td>Rang</td>
                    <td>Equipe</td>
                     <td>Temps</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prophetie as $k => $rank) {
                    echo ranking_table($k, $rank, $_SESSION['team_name']); 
                } ?>
            </tbody>
        </table>
    </div>

    <div id="quartier">
        <h2 class="title">les mysteres du quartier des ombres</h2>
        <table>
            <thead>
                <tr>
                    <td>Rang</td>
                    <td>Equipe</td>
                    <td>Temps</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quartier as $k => $rank) {
                    echo ranking_table($k, $rank, $_SESSION['team_name']); 
                } ?>
            </tbody>
        </table>
    </div>

    <div id="enigma">
        <h2 class="title">operation enigma</h2>
        <table>
            <thead>
                <tr>
                    <td>Rang</td>
                    <td>Equipe</td>
                    <td>Temps</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enigma as $k => $rank) {
                    echo ranking_table($k, $rank, $_SESSION['team_name']); 
                } ?>
            </tbody>
        </table>
    </div>

</main>

<?php require_once 'elements/footer.php'; ?>