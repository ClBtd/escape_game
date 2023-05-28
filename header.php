<html>
    
    <head>
        <meta charset="UTF-8">
        <?php if (isset($title)) : ?>
            <title><?=$title?></title>
        <?php endif; ?>
        <?php if (isset($description)) : ?>
            <meta name="description" content="<?=$description?>">
        <?php endif; ?>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        
            <header>
                <img src="img/logo.png" alt="Logo de Dédales du temps">
                <h1>Les dédales du temps</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="index.php" title="Accueil">Accueil</a>
                        </li>
                        <li>
                            <a href="mission.php" title="Missions">Mission</a>
                            <ul class="deroulant">
                                <li>
                                    <a href="mission.php#tombeau">Le tombeau perdu d'Isis</a>
                                </li>
                                <li>
                                    <a href="mission.php#prophetie">La prophétie de l'Ordre du Temple</a>
                                </li>
                                <li>
                                    <a href="mission.php#quartier">Les mystères du quartier des ombres</a>
                                </li>
                                <li>
                                    <a href="mission.php#enigma">Opération Enigma</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="info.php" title="Informations pratiques">Contact</a>
                            <ul>
                                <li>
                                    <a href="info.php#localisation">Nous trouver</a>
                                </li>
                                <li>
                                    <a href="info.php#contact">Nous contacter</a>
                                </li>
                                <li>
                                    <a href="info.php#tarifs">Tarifs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="ranking.php" title="Classement">Classement</a>
                        </li>
                    </ul>
                </nav>
            </header>