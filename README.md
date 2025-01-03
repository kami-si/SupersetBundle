# Hydra - Superset Bundle

## Environnement de développeur

### 1. Cloner le dépôt depuis la forge gitness

```bash
git clone https://forge.kami.lvmh/git/KAMI/SupersetBundle.git
```

### 2. Installer les dépendances composer

```bash
composer install
```

### 3. Mettre en place la base de données de dev

Pour ça il sera nécessaire de cloner Hydra et de lancer ses containers docker à l'aide de la commande suivante :

```bash
sudo docker compose up -d
```

## Travailler sur une issue

### 1. Important à savoir

Le code concernant les entités, les repository, les messages, les services et les commandes servant pour Superset 
doit être placé dans ce dépôt git, et non dans celui d'Hydra.

Le scheduler symfony (cron etc...) et l'interface graphique quant à eux ne sont pas ici, et doivent être dans Hydra. 

D'autre part c'est un bundle qui a pour vocation à se retrouver parmis les vendor d'Hydra, ce qui veut dire que tout 
le code ici n'est pas forcément nécessaire à son bon fonctionnement (les tests par exemple sont simplement utiles 
pour vérifier le bon fonctionnement de votre code en standalone). Si vous crééez ou rajoutez des fichiers inutiles 
en production il faudra les ajouter dans le fichier `.gitattributes` accompagnés de la mention `export-ignore`.

### 2. Branche

La première étape est de choisir une issue, créer une branche et lier les deux. Par exemple l'issue n°174 aura une 
branche appelée `dev/<nom_du_dev>/174_<nom_de_l'issue>`.

### 3. PHPUnit

Ce dépôt étant un bundle il n'est pas possible de le run de lui-même pour pouvoir le tester. Il faut donc écrire et 
lancer des tests unitaires et d'éventuels mocks pour tester le code avant d'envoyer une pull request.

```bash
php vendor/bin/phpunit
```

### 4. Code style

Pour vous assurer que votre code est correctement formaté, vous avez l'outil php-cs-fixer que vous pouvez lancer via 
la commande suivante :

```bash
php vendor/bin/php-cs-fixer fix
```

### 5. PHPStan

Pour vous assurer de n'avoir fait aucune erreur, notamment de typage, vous avez l'outil phpstan que vous pouvez 
lancer via la commande suivante :

```bash
php vendor/bin/phpstan
```

### 6. Pull request

Une fois le développement terminé, vous ne devrez en aucun cas push ou merge sur la branche main directement, une 
pull request et une review de code seront nécessaires.
