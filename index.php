<?php 
$title = "Les Dédales du Temps";
$description = "Page d'accueil de l'escape game Les Dédales du temps";
require_once "elements/header.php";
?>
 <main>

    <div class="intro">
        <h1 class="title">les dedales du temps</h1>
        <h2>ESCAPE GAME LYON</h2>
        <h3>Saurez-vous échapper à votre destin pour revenir dans le présent ?</h3>
    </div>

    <div class="presentation">
        <p>Bienvenue dans <strong class="title">les dedales du temps</strong>, une expérience immersive qui vous transporte à travers les méandres du passé ! Préparez-vous à un voyage captivant où chaque seconde compte.</p>
        <p>Votre mission est simple, mais périlleuse : affronter les épreuves du passé qui vous attendent pour revenir sains et saufs dans le présent. Une erreur, un paradoxe non résolu et le futur tel que vous le connaissez pourrait être à jamais modifié. Votre équipe devra faire preuve de logique, d'ingéniosité et de coopération pour résoudre les énigmes, déjouer les pièges.</p>
        <p>Explorez des décors extraordinaires qui vous transporteront selon votre choix dans vers les pharaons égyptiens, auprès des templiers du Moyen Âge, dans les ruelles londoniennes de l'époque victorienne ou au cœur de la seconde guerre mondiale. Chaque salle est un véritable tableau vivant, une fenêtre ouverte sur des époques révolues où l'atmosphère et les détails historiques sont minutieusement reconstitués.</p>
    </div>

    <div class="presentation" id="escape">
        <img src="img/logo.png" alt="Logo des Dédales du temps">
        <div>
            <h3>Êtes vous prêts à relever le défi ?</h3>
            <ul>
                <li><strong>temps limite</strong> : Selon la salle, vous ne disposez que d'une à deux heures pour résoudre les énigmes et vous échapper, alors faites-vite !</li>
                <li><strong>enquete</strong> : A vous de découvrir tous les indices cachés, les objets et les symboles pour vous en sortir.</li>
                <li><strong>logique et reflexion</strong> :  Réveillez la pensée logique et l'esprit de déduction et d'analyse qui sommeillent en vous pour résoudre les énigmes.</li>
                <li><strong>collaboration</strong> : Travaillez en équipe, en utilisant leurs compétences individuelles de chacun et en communiquant efficacement pour surmonter les défis.</li>
                <li><strong>immersion</strong> : Plongez dans le passé, avec des ambiances et des histoires captivantes, pour découvrir des univers uniques.</li>
            </ul>
        </div>
    </div>

    <div class="presentation">
        <h3 class="title">nos missions</h3>
        <div id="mission">
            <div>
                <h4>Le tombeau perdu d'Isis</h4>
                <img src="img/tombeau.jpg" alt="Déesse de l'Egypte antique">
                <p>Dans le légendaire tombeau perdu d'Isis, prouvez votre valeur et déjouez les énigmes mortelles de la reine égyptienne pour libérer ses pouvoirs mystiques et vous échapper avant que les ténèbres ne vous engloutissent.</p>
                <a href="mission.php#tombeau">decouvrir</a>
            </div>
            <div>
                <h4>La prophétie de l'Ordre du Temple</h4>
                <img src="img/prophetie.jpg" alt="Heaume de chevalier">
                <p>Capturés par l'Ordre du Temple en raison d'une prophétie mystérieuse, vous devez résoudre des énigmes ancestrales, percer les secrets de l'Ordre et vous échapper des donjons avant que la prophétie ne s'accomplisse.</p>
                <a href="">decouvrir</a>
            </div>
            <div>
                <h4>Les mystères du quartier des ombres</h4>
                <img src="img/quartier.jpg" alt="Ruelle de Londres de nuit">
                <p>Plongez dans les ténèbres du Londres victorien, traquez un tueur en série redoutable et résolvez des énigmes macabres pour mettre fin à son règne de terreur dans les bas-fonds sinistres de la ville.</p>
                <a href="">decouvrir</a>
            </div>
            <div>
                <h4>Opération Enigma</h4>
                <img src="img/enigma.jpg" alt="Poste de commande militaire">
                <p>Infiltrés chez l'ennemi pendant la Seconde Guerre mondiale, votre équipe de résistants doit trouver des informations vitales et échapper à la capture pour aider à décrypter la redoutable machine Enigma.</p>
                <a href="">decouvrir</a>
            </div>
        </div>
    </div>

 </main>



<?php require_once "elements/footer.php"; ?>