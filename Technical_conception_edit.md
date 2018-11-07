# Réalisation du Minimum Viable Product (MVP)

Lors de la mise en place de la database je me suis rendu compte de quelques erreurs et oublis :

* la clef étrangère 'training_id' dans la table Users devient une clef étrangère 'user_id' dans la table Trainings

* la colonne 'author' de la table Posts n'est plus une clef étrangère. Elle ne servira qu'à réduire le nombre de requêtes et donc améliorer les performances de l'application.

* la création de la colonne 'author_id' (clef étrangère) qui fait référence la colonne 'id' de la table User.

* pour des raisons pratiques, j'ai simplifié la relation entre les "trainings" et les "users". Dans le prototype, chaque user ne peut être inclu que dans une seule formation (training). La création d'une nouvelle table associative sera nécessaire pour permettrent aux utilisateurs d'être associés à plusieurs formations.