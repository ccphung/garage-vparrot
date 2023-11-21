# Garage Vincent Parrot

# Lien vers le site
[Accéder au site](https://vparrot-garage-ab0628d44f4b.herokuapp.com/)

# Déploiement en local

1. Cloner la repo

    ```bash
    git clone https://github.com/ccphung/garage-vparrot.git 
   ```

2. Se placer dans le dossier du projet
    ```bash
    cd garage-vparrot
   ```
3. Intaller composer

    ```bash
    composer install
   ```

4. Renommer le fichier '.env-exemple' en '.env'

5. Configurer le fichier .env  
Pour MySQL, il suffit de modifier la ligne 27, modifier "ID:MDP" par votre identifiant et mot de passe (généralement root et root)

6. Lancer le logiciel de serveur local (XAMPP ou MAMP par exemple)  
Lancer le serveur Apache et MySQL

7. Créer la base de données avec la commande :
    ```bash
    php bin/console doctrine:database:create
   ```
8. Migrer les tables vers la base de données locale :
    ```bash
    php bin/console doctrine:make:migration
   ```

9. Générer les fixtures  

    ```bash
    php bin/console doctrine:fixtures:load
   ```

10. Lancer le serveur symfony :
    ```bash
    symfony serve-d
   ```


Attention : une fois les fixtures générées, les images vont être supprimées du dossier.  
Je recommande d'enregistrer une copie du dossier public/assets/images/ads et public/assets/images/services sur votre ordinateur, ainsi vous n'aurez qu'à recoller les images dans les dossiers si vous avez besoin de regénérer les fixtures:
    ```bash
    php bin/console doctrine:fixtures:load
   ```

   Un Admin a déjà été créé dans les fixtures :
vparrot@garageparrot.fr
V1c3ntP4rr0T5858!




