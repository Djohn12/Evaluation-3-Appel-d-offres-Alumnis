# Dossier de Conception Technique pour l'appel d'offre Alumnis, Simplon, 2018


## Le projet

Toutes les infos concernant l'appel d'offre sont disponibles dans le fichier README.md du dossier avec, en complément, le fichier Point_detape_Alumni_demande_client.pdf.


## L'équipe

Edmond de Tournadre, titulaire d'un titre professionnel "Développeur Web/Web Mobile" et certifié Opquast, se propose de réaliser ce projet de manière Agile en collaboration avec les équipes de chez Simplon.



## **Analyse et Conception**


### Diagramme de cas d'utilisation


Cf le fichier Alumnis_Platform_ Use_Cases_Diagram.pdf


### Diagramme des classes


Cf le fichier Alumnis_Platform_Classes_Diagram.pdf


### Spécificités techniques


##### Modélisation

Tout d'abord, un bref retour sur les documents de conception :

Suite à l'arrivée de nouvelles informations en ce début d'après-midi, quelques décisions ont été prises :

* le diagramme des cas d'utilisation ne fait pas référence à ces nouvelles exigences et se concentre sur les principales fonctionnalités du projet. L'objectif étant de se concentrer sur ce qui peut rapidement apporter le plus de valeur ajoutée au produit.

* La modélisation de la base de données prévoit cependant l'ajout d'autres fonctionnalités non-évoquées dans les cas d'utilisation mais faisant partie de la demande initiale (comme la création de groupes notamment).

Cela dit, il est important de noter qu'une reflexion doit encore être menée afin de savoir si les outils actuels déjà existant chez Simplon peuvent être réutilisée dans le cadre de ce projet. En effet, il existe déjà un outil de "demande d'aide" ainsi qu'une "Cvthèque". De plus, les channels sur Discord et Slack permettent déjà des échanges entre Simploniens.

La reflexion devra être centrée sur la décision de "lier" ces projets à la nouvelle plateforme (avec une simple redirection) ou bien de les récupérer pour les intégrer au projet. Cette intégration pourra s'organiser en gardant l'identité initiale de ces outils ou bien sous une forme nouvelle, unifiée avec la plateforme en construction.


##### Technologies envisagées

Pour ce projet,

* on envisage la réalisation d'une application web progressive afin d'optimiser son utilisation depuis des smartphones

* le design devra être pensé "mobile first" afin d'être en adéquation avec les habitudes de navigation actuelles des usagers du web

* si l'idée de mettre en place une messagerie est retenue, cela nous amène à prévoir l'implémentation de socket.io pour faciliter l'intéraction dynamique entre utilisateurs

* dans le cas de la mise en place de cette messagerie, je recommande l'utilisation d'un environnement Nodejs pour faciliter la liaison entre le serveur et socket.io.
Dans d'autres cas, il sera sera sûrement moins couteux de mettre en place un environnement Php (Laravel ou Symfony).


##### Les engagements


* Nous nous engageons, en tant que développeurs certifiés Opquast, à respecter les bonnes pratiques de la qualité Web durant tout le processus de création de l'application.


* Sensible à l'accessibilité du web pour tous, nous nous engageons à mettre en oeuvre les bonnes pratiques d'accessibilités publiées par le W3C.


* Formé à la cybersécurité, nous assurerons la protection et le maintient de l'application ainsi que de la base de donnée qui y sera liée