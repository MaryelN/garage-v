# Garage-V-Parrot
Site Web responsive pour un garage automobile

## Liste des documents

- [Description du projet](#description-du-projet)
- [Fonctionnalités](#fonctionnalités)
- [Pré requis](#pré-requis)
- [Installation](#installation)
- [Usage](#usage)
- [Caractéristiques](#caractéristiques)
- [Contribution](#contribution)
- [Licence](#license)

## Description du projet
**Technologies utilisées:**
- HTML
- CSS
- Bootstrap
- JavaScript
- PHP
- MySQL.
- Symfony
- Docker
  
Il s'agit d'un site Web pour le garage automobile V. Parrot, qui fournit à l'administrateur et aux employés une plate-forme de connexion où ils peuvent afficher et modifier le panel de services, ajouter et modifier les voitures à vendre, et donner les informations de contact et les heures d'ouverture à leurs clients.

1. Page d'index :
   - **Catalogue de services:** Découvrez notre large gamme de services pour maintenir votre véhicule en parfait état.
   - **Voitures à vendre:** Consultez notre collection de voitures disponibles à l'achat.
   - **Formulaire de contact:** Remplissez le formulaire pour vous renseigner sur des services ou des voitures spécifiques, et notre équipe vous répondra rapidement.
   - **Commentaires des clients:** Lisez les commentaires et les évaluations de nos clients satisfaits et laissez vos propres commentaires.

2. Page catalogue :
   - **Liste des voitures:** Voir toutes les voitures actuellement en vente dans notre garage.
   - **Filtres intelligents:** Utilisez les filtres fournis pour affiner votre recherche en fonction de l'année, du kilométrage et du prix.
   - **Détails de la voiture:** Cliquez sur une voiture pour obtenir des informations plus détaillées à son sujet.
   - **Formulaire de contact:** Vous avez trouvé une voiture qui vous intéresse ? Remplissez le formulaire de contact avec l'ID de la voiture, et nous vous aiderons.

3. Page de contact :
   - **Contactez-nous:** Utilisez le formulaire de contact pour laisser vos coordonnées et toute demande spécifique que vous pourriez avoir. Nous vous contacterons dès que possible.
  
     
## Fonctionnalités 

1. Administrateur :
   - **Login:** Accédez à la zone administrative avec votre identifiant et votre mot de passe uniques.
   - Gestion des employés:** Créer et gérer des comptes d'employés pour un accès sécurisé au système.
   - Catalogue de services:** Modifier la liste des services que nous offrons pour mieux répondre aux besoins de nos clients.
   - Les commentaires des clients:** Gérer et répondre aux commentaires et aux évaluations des clients.
   - Heures d'ouverture:** Mise à jour des heures d'ouverture du garage pour une communication précise.
   - **Gestion des voitures:** Ajouter, modifier ou supprimer des voitures du catalogue.

2. Employés :
   - **Login:** Accédez à l'espace employé en utilisant l'identifiant et le mot de passe qui vous ont été attribués.
   - Commentaires des clients : **Gérer les commentaires et les évaluations des clients et y répondre.
   - **Gestion des voitures:** Ajouter, modifier ou supprimer des voitures du catalogue.

3. Client :
   - Explorer et filtrer les voitures:** Explorer les voitures disponibles à la vente et utiliser des filtres intelligents pour trouver la correspondance parfaite.
   - Nous contacter:** Nous contacter en utilisant le formulaire de contact pour toute demande de renseignements.
   - Laissez des commentaires:** Partagez vos expériences et laissez des commentaires sur nos services et nos voitures.

## Pré requis
 Installations requis :
-PHP v.8
-Composer
-Symfony v.5 
-Docker v.24

## Installation
Suivez les étapes suivantes pour configurer et exécuter le projet localement :

1. Clonez le dépôt :

git clone https://github.com/yourusername/your-repo.git


2. Naviguez jusqu'au répertoire du projet :

cd votre-répertoire


3. Installez les dépendances avec Composer :

composer install

4. Configurer la base de données et l'environnement :
- Créez un fichier `.env.local` et configurez votre connexion à la base de données.
- Exécutez les migrations de base de données :
  ```
  php bin/console doctrine:migrations:migrate
  ```

5. Démarrez le serveur de développement :

symfony serve

Votre application Symfony devrait maintenant être accessible à `http://localhost:8000/`.

## Usage



## Caractéristiques




## Contribution


## License



© [Maryel Navarro]
