# Garage Vincent Parrot

# Lien vers le site
[Accéder au site](https://vparrot-garage-ab0628d44f4b.herokuapp.com/)

# Informations

Identifiant : vparrot@garageparrot.fr  
Mot de passe : V1c3ntP4rr0T5858!

Une fois les fixtures générées (à l'étape 9), les images seront supprimées des dossiers.  
Je recommande d'enregistrer une copie des dossiers :  
--public/assets/images/ads  
--public/assets/images/services 
sur votre ordinateur, ainsi vous n'aurez qu'à recoller les images dans les dossiers si vous avez besoin de regénérer les fixtures.

# Déploiement en local

1. Cloner le repo

    ```bash
    git clone https://github.com/ccphung/garage-vparrot.git 
   ```

2. Se placer dans le dossier du projet

    ```bash
    cd garage-parrot
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

9. Générer les fixtures :
    ```bash
    php bin/console doctrine:fixtures:load
   ```  
Pour créer un deuxième administrateur, aller dans le fichier src/DataFixtures/UserFixtures.  
Coller le code ci-dessous et modifier les "A REMPLIR".  
   $admin2 = new User();  
   $admin2->setFirstName('A REMPLIR');  
   $admin2->setLastName('A REMPLIR');  
   $admin2->setEmail('A REMPLIR');  
   $admin2->setPassword(  
      $this->passwordHasher->hashPassword($admin, 'A REMPLIR'));  
   $admin2->setRoles(["ROLE_ADMIN"]);  
   $manager->persist($admin2);  
          
Regénérer les fixtures.   

10. Lancer le serveur symfony :
    ```bash
    symfony serve-d
   ```  