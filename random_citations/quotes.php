<?php
function generate_citation()
{
    $citations = [
        ["La vie, c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre.", "Albert Einstein"],
        ["Le succès, c'est tomber sept fois, se relever huit.", "Proverbe japonais"],
        ["Ils ne savaient pas que c'était impossible, alors ils l'ont fait.", "Mark Twain"],
        ["La seule façon de faire du bon travail, c'est d'aimer ce que vous faites.", "Steve Jobs"],
        ["Le plus grand risque est de ne prendre aucun risque.", "Mark Zuckerberg"],
        ["L'échec est simplement l'opportunité de recommencer, cette fois plus intelligemment.", "Henry Ford"],
        ["Faites que le rêve dévore votre vie afin que la vie ne dévore pas votre rêve.", "Antoine de Saint-Exupéry"],
        ["Le courage n'est pas l'absence de peur, mais la capacité de la vaincre.", "Nelson Mandela"],
        ["La logique vous mènera d'un point A à un point B. L'imagination vous emmènera partout.", "Albert Einstein"],
        ["On ne voit bien qu'avec le cœur. L'essentiel est invisible pour les yeux.", "Antoine de Saint-Exupéry"],
        ["Le bonheur est la seule chose qui se double si on le partage.", "Albert Schweitzer"],
        ["Celui qui ouvre une porte d'école ferme une prison.", "Victor Hugo"],
        ["La plus grande gloire n'est pas de ne jamais tomber, mais de se relever à chaque chute.", "Confucius"],
        ["L'éducation est l'arme la plus puissante qu'on puisse utiliser pour changer le monde.", "Nelson Mandela"],
        ["Rien de grand ne s'est accompli dans le monde sans passion.", "Georg Wilhelm Friedrich Hegel"],
        ["Ne jugez pas chaque jour à la récolte que vous faites, mais aux graines que vous semez.", "Robert Louis Stevenson"],
        ["Tout le monde est un génie. Mais si vous jugez un poisson à sa capacité à grimper à un arbre, il passera sa vie à croire qu'il est stupide.", "Albert Einstein"],
        ["Les grandes choses ne sont pas accomplies par la force, mais par la persévérance.", "Samuel Johnson"],
        ["La vie est courte. Ne la gâchez pas en étant triste. Soyez heureux et positivez.", "Inconnu"],
        ["Agissez comme s'il était impossible d'échouer.", "Winston Churchill"],
        ["Le secret du changement, c'est de concentrer toute son énergie non pas à lutter contre le passé, mais à construire l'avenir.", "Socrate"],
        ["Le seul vrai échec est d'abandonner.", "Inconnu"],
        ["Si vous voulez aller vite, allez seul. Si vous voulez aller loin, allez ensemble.", "Proverbe africain"],
        ["Les opportunités ne se produisent pas, vous les créez.", "Chris Grosser"],
        ["Soyez vous-même, les autres sont déjà pris.", "Oscar Wilde"],
        ["Ce n'est pas la force, mais la persévérance, qui fait les grandes œuvres.", "Samuel Johnson"],
        ["Il faut viser la lune, car même en cas d'échec, on atterrit dans les étoiles.", "Oscar Wilde"],
        ["On peut tout ce que l'on veut quand on le veut vraiment.", "Benjamin Franklin"],
        ["N'attendez pas d'avoir tout pour profiter de la vie, vous avez déjà la vie pour en profiter.", "Inconnu"],
        ["Ne laisse pas le bruit des opinions des autres étouffer ta propre voix intérieure.", "Steve Jobs"],
        ["Il faut toujours viser la perfection, car c'est en la poursuivant qu'on atteint l'excellence.", "Vince Lombardi"],
        ["Le plus grand échec est de ne pas avoir le courage d'oser.", "Abbé Pierre"],
        ["La simplicité est la sophistication suprême.", "Léonard de Vinci"],
        ["Un pessimiste voit la difficulté dans chaque opportunité, un optimiste voit l'opportunité dans chaque difficulté.", "Winston Churchill"],
        ["Le meilleur moyen de prédire l'avenir, c'est de le créer.", "Peter Drucker"],
        ["L'homme qui déplace une montagne commence par déplacer de petites pierres.", "Confucius"],
        ["Ce que nous accomplissons à l'intérieur modifie la réalité extérieure.", "Plutarque"],
        ["Si vous traversez l'enfer, continuez d'avancer.", "Winston Churchill"],
        ["Ne rêve pas ta vie, vis tes rêves.", "Inconnu"],
        ["Les gagnants trouvent des moyens, les perdants des excuses.", "F. D. Roosevelt"],
        ["Un voyage de mille lieues commence toujours par un premier pas.", "Lao Tseu"],
        ["On ne change pas le monde avec des idées, mais avec des actes.", "Inconnu"],
        ["L'impossible recule toujours devant celui qui avance.", "Antoine de Saint-Exupéry"],
        ["La patience est une clé essentielle du succès.", "Bill Gates"],
        ["Les défaites sont les marches du succès.", "Lao Tseu"],
        ["La créativité, c'est l'intelligence qui s'amuse.", "Albert Einstein"],
        ["Rêvez grand, commencez petit, agissez maintenant.", "Robin Sharma"],
        ["Faites aujourd’hui ce que les autres ne veulent pas faire, demain vous vivrez comme les autres ne peuvent pas.", "Inconnu"]
    ];
    return $citations[array_rand($citations)];
}

if (basename($_SERVER["SCRIPT_FILENAME"]) === basename(__FILE__)) {
    header('Content-Type: application/json');
    echo json_encode(generate_citation());
}