# Laravel Calculator

A simple calculator built with Laravel.

## Installation

```bash
git clone https://github.com/issamox/laravel-calculator
cd laravel-calculator
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Suite : 

1) Les files d’attente permettent à Laravel de gérer des tâches asynchrones et d’optimiser la réactivité de l’application, tout en respectant les principes de bonnes pratiques modernes.


2) Pour gérer les tâches chronophages dans Laravel :

```
Configurer la queue (ex. dans .env) :
QUEUE_CONNECTION=database

Créer la table :
php artisan queue:table && php artisan migrate

Créer un job :
php artisan make:job MonJob
→ Implémente ShouldQueue, logique dans handle()

Lancer le job :
dispatch(new MonJob($data))

Démarrer le worker :
php artisan queue:work
```
3) Voici les avantages clés des files d’attente par rapport au traitement synchrone :

- Rapidité
- Meilleure performance
- Scalabilité
- Code plus propre

4) Cycle d’exécution d’une classe via un Service Provider Laravel

- register() : On enregistre la classe Worker dans le conteneur Laravel (pas d’exécution ici).

- boot() : Laravel instancie la classe Worker via $this->app->make() et appelle les méthodes de démarrage (ex : start()).

- Ces étapes se produisent à chaque requête HTTP, donc la classe Worker est créée et démarrée à chaque cycle de requête si appelé dans boot().

5) Pour traiter une énorme quantité d’enregistrements avec Eloquent, la meilleure façon est d’utiliser la méthode chunk().



6) Le projet le plus important sur lequel j’ai travaillé était un SaaS dédié à l’immobilier. J’ai fait partie d’une équipe chargée de sa réalisation complète.
Ma responsabilité principale portait sur le développement backend avec Laravel, où j’ai conçu et implémenté les API, géré la base de données et assuré la sécurité des échanges.
En parallèle, j’ai aussi contribué au frontend avec Vue.js 3, en utilisant la Composition API pour construire des interfaces réactives et modulaires.
Ma grande contribution a été de garantir une communication fluide entre le backend et le frontend, tout en respectant les bonnes pratiques de développement et en optimisant la performance de l’application.


7) Oui, je travaille avec l’automatisation des tests, notamment avec des outils comme PHPUnit pour PHP/Laravel. Cela permet de garantir la qualité et la fiabilité du code.








