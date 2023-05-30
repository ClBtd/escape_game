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

<main>

    <h1>Classements</h1>

    <ul>
        <li>
            <a href="#tombeau">Le tombeau perdu d'Isis</a>
        </li>
        <li>
            <a href="#propethie">La prophétie de l'Ordre du Temple</a>
        </li>
        <li>
            <a href="#quartier">Les mystères du quartier des ombres</a>
        </li>
        <li>
            <a href="#enigma">Opération Enigma</a>
        </li>
        <li>
            <a href="logout.php">Se déconnecter</a>
        </li>
    </ul>
    
    <div id="tombeau">
        <h2>Le tombeau perdu d'Isis</h2>
        <table>
            <tr>
                <td>Rang</td>
                <td>Equipe</td>
                <td>Temps</td>
            </tr>
            <?php foreach ($tombeau as $k => $rank) : 
                if ($rank[0] === $_SESSION['team_name']) : ?>
                    <tr class="current">
                        <td><?=$k + 1?></td>
                        <td><?=$rank[0]?></td>
                        <td><?=$rank[2]?></td>
                    </tr>
                <?php else : 
                    switch ($k): 
                        case 0: ?>
                            <tr class="first">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 1: ?>
                            <tr class="second">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 2: ?>
                            <tr class="third">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        default: ?>
                            <tr>
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                    <?php endswitch;
                endif;
            endforeach; ?>
        </table>
    </div>

    <div id="prophetie">
        <h2>La prophétie de l'Ordre du Temple</h2>
        <table>
            <tr>
                <td>Rang</td>
                <td>Equipe</td>
                <td>Temps</td>
            </tr>
            <?php foreach ($prophetie as $k => $rank) : 
                if ($rank[0] === $_SESSION['team_name']) : ?>
                    <tr class="current">
                        <td><?=$k + 1?></td>
                        <td><?=$rank[0]?></td>
                        <td><?=$rank[2]?></td>
                    </tr>
                <?php else : 
                    switch ($k): 
                        case 0: ?>
                            <tr class="first">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 1: ?>
                            <tr class="second">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 2: ?>
                            <tr class="third">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        default: ?>
                            <tr>
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                    <?php endswitch;
                endif;
            endforeach; ?>
        </table>
    </div>

    <div id="quartier">
        <h2>Les mystères du quartier des ombres</h2>
        <table>
            <tr>
                <td>Rang</td>
                <td>Equipe</td>
                <td>Temps</td>
            </tr>
            <?php foreach ($quartier as $k => $rank) : 
                if ($rank[0] === $_SESSION['team_name']) : ?>
                    <tr class="current">
                        <td><?=$k + 1?></td>
                        <td><?=$rank[0]?></td>
                        <td><?=$rank[2]?></td>
                    </tr>
                <?php else : 
                    switch ($k): 
                        case 0: ?>
                            <tr class="first">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 1: ?>
                            <tr class="second">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 2: ?>
                            <tr class="third">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        default: ?>
                            <tr>
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                    <?php endswitch;
                endif;
            endforeach; ?>
        </table>
    </div>

    <div id="enigma">
        <h2>Opération Enigma</h2>
        <table>
            <tr>
                <td>Rang</td>
                <td>Equipe</td>
                <td>Temps</td>
            </tr>
            <?php foreach ($enigma as $k => $rank) : 
                if ($rank[0] === $_SESSION['team_name']) : ?>
                    <tr class="current">
                        <td><?=$k + 1?></td>
                        <td><?=$rank[0]?></td>
                        <td><?=$rank[2]?></td>
                    </tr>
                <?php else : 
                    switch ($k): 
                        case 0: ?>
                            <tr class="first">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 1: ?>
                            <tr class="second">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        case 2: ?>
                            <tr class="third">
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                            <?php break;
                        default: ?>
                            <tr>
                                <td><?=$k + 1?></td>
                                <td><?=$rank[0]?></td>
                                <td><?=$rank[2]?></td>
                            </tr>
                    <?php endswitch;
                endif;
            endforeach; ?>
        </table>
    </div>

</main>

<?php require_once 'elements/footer.php'; ?>