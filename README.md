# dfs-project-php-oop

## Sujet

Vous allez devoir créer une application qui devra utiliser la POO au maximum.

Elle devra permettre de C.R.U.D des personnages, et la structure du code vous sera propre.
Vous pourrez créer plusieurs fichiers pour gérer vos différentes actions, ou tout regrouper dans une seule classe et différentes méthodes (à vous de juger quelle méthode est la plus pertinente)

Vous devrez donc faire la meilleure utilisation de PHP ainsi que de la P.O.O, et cela passe bien évidemment par la création d'objet et par l'utilisation de méthodes statiques.

Le reste de la validation déprendra de votre créativité et ce que vous ajouterez de manière pertinente à votre projet.


Certains critères seront très surveillés, comme la propreté de votre code (cela passe également par le typehint), la pertinence des données traitées (avec vérification de l'existence de cette donnée, son type, etc)

L'organisation de votre code (fichiers, dossiers) sera évidemment important.



Quelques notions que nous n'avons pas vu s'ajoutent; vous allez devoir les utiliser dans votre projet.

Il va falloir que vous utilisiez au moins deux méthodes ABSTRAITES. Leur utilisation vous sera propre, et pour vous aider, sachez qu'elle nécessite quelque chose que nous avons vu hier.

Secondement, sur une page annexe (ou pas), vous devrez vous documenter sur ce qu'est le principe "d'hydratation" et l'utiliser au moins une fois sur un objet pour l'hydrater.

Ensuite, une autre notion va venir s'ajouter, mais vous devrez la trouver par vous-même. Ce qui est demandé, c'est que deux classes différentes puissent utiliser la même méthode, sans que celle-ci soit stockée dans une classe Mère et sans implanter la même méthode de manière brute dans ces deux classes.
- En guise d'exemple, si vous pouvez faire en sorte que deux classes différentes puissent utiliser une méthode vous connectant à votre DB. 
- Afin de vous aider, sachez qu'il existe plusieurs manière d'arriver à vos fins pour cette étape. L'unes de ces solutions se nomme "Trait".

Faites bon usage de ces notions que vous allez chercher, afin de les utiliser au mieux.
A nouveau, faites très attention à la logique de votre code ainsi qu'à sa propreté, une partie de la note sera portée dessus. Utilisez bien le typehint, essayez de sécuriser votre application au maximum (par exemple protéger votre appli des injections SQL, essayez de protéger votre appli des failles XSS, vérifier le traitement de vos données, etc).