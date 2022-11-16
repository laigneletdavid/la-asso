# la-asso
Evaluation HTML, Bootstrat, Git - LAIGNELET David

Voici une explication rapide de ma réalisation, comment et pourquoi j'ai fait certains choix en fonction des consignes.

1 - Réalisation du code

    Pour commencer et éviter la ducplication de code, j'ai commencé à faire une strcuture avec layout et un fichier index.php en dynamique qui gérait l'appel à mes différentes vues. Les vues appelaient mon layout et les différntes éléments de la page, le tout avec la gestion des url en dynamique, afin de passer du local à la prod sans problème.
    Dans un second temps comme il fallait livrer un site static j'ai tout passé en static et en changeant mes différentes urls.

    J'ai travaillé avec l'éditeur VS Code et en local je travail abvec Wamp Server.

    La version de Bootstrap est la 5.2.2.

2 - Présentation du git

    Sur mon GIT, il y a 2 branches principales, la branche master qui représente ma prod (voir le 3), et ma branche dev.
    Dev représente mon environnement de développement enregistré en local.
    J'ai essayé de créer une nouvelle branche pour chaque feature ou fonctionnalité, ces branches étaient mergées sur ma branche dev et si c'était bon je mergeais dev en prod.
    Sur VS Code, je me suis servi de l'extension Git Graph qui propose un interface graphique à Git et qui permet une gestion plus aisée des branches et des commits.

3 - Mise en ligne délpoiement continue

    j'ai mis en ligne le projet sur un sous-domaine de mon site personnel, ce que j'ai trouvé plus pratique que d'utiliser Heroku ou une autre solution comme celle-là, l'adresse est https://asso.laignelet.ovh
    Afin de me mettre en situation réelle et appliquer un des préceptes de la méthode Agile, j'ai travaillé en déploiement continue, ce que vous pourrez voir dans mon Git.
    A chaque fois que j'avais terminé une feature représenté par une branche, je poussais le site en prod. Je n'ai fais que quelques modif ou correction de bug sur la prod, principalement en lien avec les URLs, passage du local en ligne et du dynamique au static.

4 - Structrure du site

    Comme demandé dans les consignes, j'ai réalisé le site d'une association fictive, qui contient une page d'acceuil et une page d'évènement. 
    J'ai également ajouté des "pages", un formulaire de contact, un formulaire d'inscription à l'évènement, et une page WIP.
    Ainsi, il n'y a pas de lien "vide ou perdu" sur le site, tous les liens ou élements cliquables le sont et donne une réponse adaptée. 
    J'ai vérifié la compatibilité de mon code et des élements Bootstrap, le site a été testé avec les 4 principaux navigateurs, Chrome, Safari, Firefox et Edge, et s'affiche correctement.


Je vous remerci pour tout et j'attends votre retour.

David LAIGNELET
