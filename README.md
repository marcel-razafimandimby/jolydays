Jolydays : Test - symfony 3.4
===============

Voici les étapes pour récupérer les codes et  lancer cette application dans votre plateforme en ligne de commande:

1 - Cloner le repository:
	git clone https://github.com/marcel-razafimandimby/jolydays.git

2 - Créer la base de donnée + tables à partir de la commande suivant :
	php bin/console doctrine:database:create
	php bin/console doctrine:schema:update --force

3 - Lancer l'application:
	php bin/console server:run
  
  http://127.0.0.1:8000
  


