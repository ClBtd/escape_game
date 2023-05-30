<?php 
$title="Missions";
$description="Découvrez les différentes missions proposées aux Dédales du Temps.";
require_once 'elements/header.php';
?>

<main>

    <div class = "intro">
        <h1>Nos missions</h1>
        <p>Découvrez une expérience immersive et palpitante dans nos salles d'escape game uniques. Que vous soyez un amateur d'aventure, un passionné d'énigmes ou simplement en quête d'une activité captivante à partager entre amis, chacune de nos salles vous plongera au coeur d'une époque révolue grâce à leurs décors incroyables et leurs scénarios palpitants.</p>
    </div>

    <div class="mission" id="tombeau">
        <h2>Le tombeau perdu d'Isis</h2>
        <img src="img/tombeau.jpg" alt="Déesse de l'Egypte antique">
        <p>
            Vous et votre équipe d'archéologues intrépides avez découvert une piste menant au légendaire tombeau perdu d'Isis, une reine égyptienne vénérée pour sa sagesse et ses pouvoirs mystiques. Déterminés à percer les secrets de cette illustre souveraine, vous vous frayez un chemin à travers les couloirs sombres et ornés de hiéroglyphes de sa tombe millénaire.<br>
            Mais à peine avez-vous pénétré à l'intérieur que les portes massives se referment derrière vous, vous laissant pris au piège. La voix d'Isis résonne mystérieusement dans la salle, révélant que seuls ceux qui prouvent leur valeur et leur dévotion auront le privilège de quitter le tombeau vivants.<br>
            Votre quête commence alors que vous vous aventurez plus profondément dans le labyrinthe souterrain. Des énigmes complexes, des mécanismes cachés et des pièges mortels jalonnent votre chemin. Vous devrez décoder des hiéroglyphes, résoudre des énigmes mathématiques et déchiffrer des énigmes ésotériques pour avancer. Le temps presse, car les ténèbres menaçantes se rapprochent et le tombeau pourrait rester scellé pour toujours.
        </p>
        <ul>
            <li><strong>Niveau</strong> : Débutant</li>
            <li><strong>Nombre de joueurs</strong> : 3 à 7 joueurs</li>
            <li><strong>Durée</strong> : 1h</li>
            <li><strong>Age</strong> : à partir de 10 ans</li>
        </ul>
        <h3>Tarifs</h3>
        <table>
            <tr>
                <?php foreach (PRICE["tombeau"] as $players => $individual_price) : ?>
                <td><?= $players ?> joueurs</td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach (PRICE["tombeau"] as $players => $individual_price) : ?>
                <td><?= total_price($players, $individual_price) ?> euros (<?= $individual_price ?>€/personne)</td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>

    <div class="mission" id="prophetie">
        <h2>La prophétie de l'Ordre du Temple</h2>
        <img src="img/prophetie.jpg" alt="Heaume de chevalier">
        <p>
            Plongés au cœur du Moyen Âge, vous vous retrouvez emprisonnés dans les sombres donjons de l'Ordre du Temple, une puissante confrérie secrète. Les templiers, convaincus d'une prophétie millénaire qui prédit la chute de leur ordre aux mains d'un groupe d'étrangers venus du futur, vous ont capturés, vous prenant pour les protagonistes de cette prédiction obscure.<br>
            Coincés entre des murs de pierre froids et inhospitaliers, vous découvrez que la clé de votre liberté réside dans la résolution d'énigmes ésotériques et de défis médiévaux soigneusement disséminés dans les profondeurs du château templier. Les indices, dispersés par des initiés de l'Ordre, vous guident vers des salles secrètes, des passages souterrains et des chambres mystiques, révélant progressivement les secrets bien gardés de la prophétie.<br>
            Le temps est votre ennemi. Vous avez jusqu'à la nuit de la pleine lune pour accomplir votre mission et révéler le pouvoir caché que la prophétie renferme. Les enjeux sont élevés, car l'avenir de l'Ordre et votre propre liberté sont en jeu. Parviendrez-vous à prouver votre innocence, à déjouer le complot diabolique qui menace l'Ordre du Temple et à vous échapper des griffes du passé avant que les derniers rayons de lune ne disparaissent à jamais ?
        </p>
        <ul>
            <li><strong>Niveau</strong> : Intermédiaire</li>
            <li><strong>Nombre de joueurs</strong> : 4 à 7 joueurs</li>
            <li><strong>Durée</strong> : 1h30</li>
            <li><strong>Age</strong> : à partir de 13 ans</li>
        </ul>
        <h3>Tarifs</h3>
        <table>
            <tr>
                <?php foreach (PRICE["prophetie"] as $players => $individual_price) : ?>
                <td><?= $players ?> joueurs</td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach (PRICE["prophetie"] as $players => $individual_price) : ?>
                <td><?= total_price($players, $individual_price) ?> euros (<?= $individual_price ?>€/personne)</td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
    
    <div class="mission" id="quartier">
        <h2>Les mystères du quartier des ombres</h2>
        <img src="img/quartier.jpg" alt="Ruelle de Londres de nuit">
        <p>
            Plongez au cœur des sombres bas-fonds du Londres victorien, une époque où le crime et la misère règnent en maîtres. Vous et votre équipe de détectives hors pair êtes confrontés à une enquête complexe. Un tueur en série impitoyable sévit dans les ruelles étroites et malfamées de Whitechapel, laissant derrière lui des énigmes macabres.<br>
            Votre mission est de traquer le criminel notoire, de décrypter ses messages codés et de collecter les preuves nécessaires pour l'arrêter avant qu'il ne frappe à nouveau. Vous vous frayez un chemin au travers des bordels clandestins, des tavernes sombres et des repaires de gangs, résolvant des énigmes inquiétantes et dévoilant des secrets sinistres.<br>
            En utilisant vos compétences d'observation, votre logique et votre perspicacité, vous devez reconstituer le puzzle de l'identité du tueur et découvrir ses motivations obscures. Les horloges tournent et chaque minute compte, car une nouvelle victime pourrait tomber entre les mains du meurtrier.
        </p>
        <ul>
            <li><strong>Niveau</strong> : Expert</li>
            <li><strong>Nombre de joueurs</strong> : 6 à 9 joueurs</li>
            <li><strong>Durée</strong> : 2h</li>
            <li><strong>Age</strong> : à partir de 16 ans</li>
        </ul>
        <h3>Tarifs</h3>
        <table>
            <tr>
                <?php foreach (PRICE["quartier"] as $players => $individual_price) : ?>
                <td><?= $players ?> joueurs</td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach (PRICE["quartier"] as $players => $individual_price) : ?>
                <td><?= total_price($players, $individual_price) ?> euros (<?= $individual_price ?>€/personne)</td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>

    <div class="mission" id="enigma">
        <h2>Opération Enigma</h2>
        <img src="img/enigma.jpg" alt="Poste de commande militaire">
        <p>
            Vous et votre équipe de résistants courageux êtes infiltrés en territoire ennemi au cœur de la Seconde Guerre mondiale. Votre mission cruciale est de localiser des informations vitales pour aider à percer le secret de la machine Enigma, un dispositif de chiffrement utilisé par l'ennemi pour communiquer ses plans stratégiques.<br>
            Enfermés dans un repaire secret, vous devez vous frayer un chemin à travers les obstacles et les pièges soigneusement dissimulés par les forces ennemies. Des codes, des symboles et des énigmes complexes vous attendent, vous obligeant à utiliser votre esprit d'équipe, votre logique et vos compétences en décodage pour progresser.<br>
            Votre ingéniosité et votre détermination seront mises à l'épreuve alors que vous vous plongez dans l'intensité de la guerre, dans une course contre la montre pour obtenir les informations nécessaires à la sécurité de votre nation et à la défaite de l'ennemi. Parviendrez-vous à trouver les renseignements cruciaux, à résoudre les énigmes complexes et à échapper aux griffes de l'ennemi avant qu'il ne découvre votre présence ?
        </p>
        <ul>
            <li><strong>Niveau</strong> : Intermédiaire</li>
            <li><strong>Nombre de joueurs</strong> : 5 à 8 joueurs</li>
            <li><strong>Durée</strong> : 1h30</li>
            <li><strong>Age</strong> : à partir de 13 ans</li>
        </ul>
        <h3>Tarifs</h3>
        <table>
            <tr>
                <?php foreach (PRICE["enigma"] as $players => $individual_price) : ?>
                <td><?= $players ?> joueurs</td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach (PRICE["enigma"] as $players => $individual_price) : ?>
                <td><?= total_price($players, $individual_price) ?> euros (<?= $individual_price ?>€/personne)</td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>

</main>

<?php require_once 'elements/footer.php'; ?>