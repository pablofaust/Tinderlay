<?php

$array = [];
$array[] = 'As-tu déjà fait l\'amour, aujourd\'hui ?' ;
$array[] = 'Je m\'embête, qu\'est-ce que tu fais ?';
$array[] = 'Tu serais pas un peu mannequin, par hasard ?';
$array[] = 'Envie d\'aller prendre un verre, en fin de journée ?';
$array[] = 'J\'ai toujours eu envie de me marier sans le dire à personne, qu\'est-ce que t\'en dis ?';
$array[] = 'Comment se passe ta journée/soirée, jusque là ?';
$array[] = 'Je suis fatigué de moi-même, ça te dit d\'aller prendre un verre ?';
$array[] = 'Il y a des films pas trop mal au ciné, en ce moment, ça te tente ?';
$array[] = 'Je te préviens : je suis pas du genre à coucher dès le premier soir.';
$array[] = 'T\'as beau être magnifique, tu ne m\'intimides pas.';
$array[] = 'J\'ai envie de m\'éclater la gueule, tu m\'accompagnes ?';
$array[] = 'Bonjour, Mademoiselle.';
$array[] = 'Est-ce que t\'aurais du temps pour refaire le monde ?';
$array[] = 'Ce week-end on loue une moto/voiture et on se casse à la campagne, ça te dit ?';
$array[] = 'C\'est quoi ton poison ?';
$array[] = 'Ne sois pas timide, je ne te mangerai pas (tout de suite)';
$array[] = 'Viens on sort.';
$array[] = 'Je vais essayer de la jouer un peu intello : ça te tente une expo ?';
$array[] = 'Comment est votre blanquette ?';
$array[] = 'Ca fait combien de temps que t\'es pas allée au zoo ?';
$array[] = 'Allez viens j\'t\'emmène au vent !'; 
$array[] = 'T\'es plutôt chien ou plutôt chat ? (La suite de la conversation dépend entièrement de ta réponse)';
$array[] = 'Dis-moi de quelle couleur est ta culotte, je te dirai qui tu es.';
$array[] = 'Tout le monde m\'a beaucoup déçu jusqu\'à présent : tu voudrais pas relever le niveau ?';
$array[] = 'Que penses-tu de la situation géopolitique en Afrique centrale ?';
$array[] = 'J\'ai fait trop de macarons au fromage, on partage ?';
$array[] = 'Je cherche quelqu\'un pour partager mes cigarettes.';
$array[] = 'Salut, beauté, tu veux faire un tour en métro ? (Ma moto est en réparation)';
$array[] = 'Caleçon ou boxer (la suite de la soirée dépend exclusivement de ta réponse) ?';
$array[] = 'Tu préfères des bougies à la vanille ou aux fruits rouges pour notre dîner aux chandelles ?';
$array[] = 'Ca te dit un footing ? Sinon on peut toujours aller fumer des clopes et boire des verres';
$array[] = 'Je cherche quelqu\'un pour partager mes cigarettes.';



//$array = array($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eigth, $nineth, $tenth, $eleventh, $twelfth, $thirteenth, $fourteenth, $fifteenth, $sixteenth, $seventeenth, $eighteenth, $nineteenth, $twentieth, $twentyfirst, $twentyfourth, $twentyfifth);
//for ($i=0; $i<1; $i++) {
    echo $array[rand(0, count($array) - 1)];
//}

?>