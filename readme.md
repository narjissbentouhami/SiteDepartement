# Foobar
Ce site est crée au profit du departement infomatique de la faculté des sciences et techniques de Marrakech par Narjis Bentouhami


## environnment de dev :

# Pré-requis :

* PHP 8.0
* composer
* symfony CLI
* Docker
* Docker-compose
* Nodejs et npm 
 
 Vous pouver vérifier les requirements (Sauf Docker et Docker-compose) par la commande suivante de la CLI Symfony :
 ''' bash 
* symfony check:requirements
 '''

# Lancer l'environnement de developpement :
`` bash
* composer install
* npm install
* npm run build
* docker-compose up -d
* symfony serve -d
``
## Lancer des tests :
`` bash
* php bin/phpunit --testdox
``
 


 