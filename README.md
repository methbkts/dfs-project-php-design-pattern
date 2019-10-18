# dfs-project-php-designPattern

## Sujet

Ce sujet est assez spécial puisqu'il sera en lien avec un autre module concernant les frameworks PHP. Vous porterez donc une attention particulière à celui-ci.

Le thème est assez vaste puisque vous avez libre choix de création. Seulement, il va falloir utiliser pas mal de notions dont vous n'êtes pas forcément accoutumés.

Vous allez devoir réaliser la création d'une application web en créant un "micro-framework", responsive jusqu'à 500px maximum.
Vous DEVREZ utiliser un ou deux design patterns dans votre projet, mais pas n'importe lesquels.
Vous allez devoir penser votre application et tenter de repérer des problèmes pour choisir justement le/les bon/s D.P pour apporter une solution.

Par exemple, et chose conseillée, vous pourrez apprendre à utiliser le D.P Singleton, qui permet de n'instancier une classe qu'une seule fois.

En plus de cela, vous allez devoir implémenter des fonctionnalités, comme :
- Des routes, en intégrant un système de routing
- Des vues
- Des controllers
- D'autres éléments que vous jugerez pertinents.

Étant donné que vous travaillerez avec une base de données, une partie sécurité sera très importante. En effet, vous devrez faire le nécessaire pour protéger vos données, que ce soit par le biais d'un formulaire ou lors de requêtes SQL. Soyez D.R.Y et le plus efficace possible.

Bien évidemment, je vous conseille vivement de travailler en groupe et de manière organisée. Pour cela, la création d'un Trello ou autre pourra vous aider.
En plus de cette réalisation, vous devrez, dans un README, expliquer vos choix. Pourquoi est-ce que vous avez choisi ces design patterns, pour quelle problématique exactement, sur quoi porte votre application web, etc.

Vous avez le temps de le faire, alors ne vous pressez pas, prenez votre temps et surtout, essayez d'en profiter pour vous perfectionner, découvrir des technologies, faire des tests et mieux comprendre/travailler votre logique de code.

Une attention (comme à mon habitude) sera portée sur la structure de votre code, votre logique, sa propreté ainsi que ses bonnes pratiques, les design patterns que vous aurez choisi et les raisons qui vous ont poussé à les utiliser.

Attention : une partie "devOps" vous sera utile. Vous devrez également créer des scripts interactifs pour vos collègues, vous permettant de déployer rapidement votre environnement de travail en récupérant "automatiquement" le contenu de votre projet à jour (Git). Pour ce faire, vous pourrez choisir de travailler avec Vagrant, ou toutes autres technologies que vous
jugerez intéressantes ou importantes d'utiliser (par exemple, apprendre à utiliser Docker pour les plus braves).

## Thème du site

**Farming express** est un site qui vise à promouvoir l'agriculture locale et est destiné aussi bien aux producteurs qu'au grand public.
Nous pensons que chaque producteur est unique, qu'il a une histoire à raconter avec ses produits mais qu'il n'a souvent pas le temps de se consacrer à la diffusion de celle-ci.

Le grand public est de plus en plus sensibilisé aux questions écologiques, notamment la consomation de produits locaux issus d'une culture responsable.
Malgré la volonté de changer les habitudes et de s'engager durablement dans une démarche éco-responsable, un problème persiste encore, celui du temps.
Dans une société de plus en plus chronophage, le temps est devenu un luxe et celui que l'on peut allouer à nos proches est d'autant plus précieux.

**Farming express**, bien conscient des nouveaux enjeux de société vous propose une solution.

Un espace permettant la rencontre entre producteurs et consommateurs, un espace où la sensibilisation joue un rôle important. Un espace où les agriculteurs pourront facilement mettre en avant leurs produits et les vendre facilement sans perdre du temps de travail. Un espace où les consommateurs trouveront les différents produits disponibles près de chez eux et comprendront l'histoire derrière chacun d'eux.

Ce lieu c'est **Farming express**.

## Design pattern

>Modèle-vue-contrôleur ou MVC est un motif d'architecture logicielle destiné aux interfaces graphiques lancé en 1978 et très populaire pour les applications web. Le motif est composé de trois types de modules ayant trois responsabilités différentes : les modèles, les vues et les contrôleurs.
>- Un modèle (Model) contient les données à afficher.
>- Une vue (View) contient la présentation de l'interface graphique.
>- Un contrôleur (Controller) contient la logique concernant les actions effectuées par l'utilisateur.

On utilise le MVC dans chacun de nos projets, il aide pour l'organisation et la logique. Le modèle MVC sert de régles lors d'un projet et évite notamment les conflits sur github.

> En génie logiciel, le singleton est un patron de conception (design pattern) dont l'objectif est de restreindre l'instanciation d'une classe à un seul objet (ou bien à quelques objets seulement). Il est utilisé lorsqu'on a besoin exactement d'un objet pour coordonner des opérations dans un système. Le modèle est parfois utilisé pour son efficacité, lorsque le système est plus rapide ou occupe moins de mémoire avec peu d'objets qu'avec beaucoup d'objets similaires.

On utilise le singleton pour la class Count, celle-ci nous permet d'effectuer des opérations sur différente table.

## Outils utilisés

- PHP,
- Bootstrap,
- Adminer,
- MySql,
- Design pattern,
- Trello,
- GitHub,
- Unsplash,
- FontAwesome.

## Problématiques
- Singleton : Il n'est pas évident de trouver qu'elle class créer avec ce design pattern;
- Update : Le prix doit être mis avec un point en tant que séparation (problème toujours présent)
- Point faible : Trop forts ...
