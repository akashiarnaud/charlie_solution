# Charlie solution test technique

### Tech

Les techonologies utilisés:

* [Laravel] - Core!
* [MySQL] - Base de données
* [VueJS] - Partie map
* [NodeJS] - Installation des packages
* [bootstrap] - CSS

Et bien sur le projet elle même sur un [public repository][dill]
 sur GitHub.

### Installation

* Commencer par cloner le projet

* installons les dépendances du projet à partir du composer
```sh
composer install
```
* installons maintenant les dépendances npm
```sh
npm install
npm run dev
```

* passons maintenant à la partie base de données
- Installler tout d'abord MySQL (Si vous ne l'avez pas encore )
- Une fois cela fait, aller dans le fichier config de laravel ".env" qui se trouve dans ```your_project/.env```

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=charlie
DB_USERNAME=root
DB_PASSWORD=root
```
***Verifier bien l'USERNAME et le PASSWORD***
***surtout que vous n'avez PAS de base de nom de CHARLIE (si c'est le cas changer aussi DB_DATABASE dans votre config)***

Une fois toute ces verification faîtes, passons maintenant à l'installation de notre base

```sh
php artisan db:create
php artisan migrate
php artisan db:seed
```
`db:create` pour créer la base 
`migrate` pour creer nos table
`db:seed` pour ajouter quelques données afin que notre site aie un peu de contenu (bien sur on pourra ajouter d'autre données à partir du site plus tard)

### Ressenti et temps de réalisation
Première expérience sur le framework Laravel, un framework façile à prendre en main et très intéressant
Le sujet était claire. Malgrès les différents difficultés au cours de sa réalisation et la suivi des cours entre temps :( ,
j'ai le réussi à le réaliser dans le temps imparti en organisant mon emploi du temps.
En prenant en compte tous ces facteurs, le temps de réalisation sera donc en tout entre 15h et 16h.

 
