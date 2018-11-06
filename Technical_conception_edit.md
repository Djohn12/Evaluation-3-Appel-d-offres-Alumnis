# Réalisation du Minimum Viable Product (MVP)

Lors de la mise en place de la database je me suis rendu compte de quelques erreurs et oublis :

* la clef étrangère 'training_id' dans la table Users devient une clef étrangère 'user_id' dans la table Trainings

* la colonne 'author' de la table Posts devient une clef étrangère 'author_id' qui fait référence la colonne 'id' de la table User