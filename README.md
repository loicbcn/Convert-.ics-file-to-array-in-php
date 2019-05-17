# Convert-.ics-file-to-array-in-php

Je ne suis pas particulièrement familier du format .ics.
J'ai créé la fonction php de ce dépôt pour un cas précis.

Je ne peux donc pas garantir que cette fonction fonctionne avec tous les fichiers ics du monde.

Cependant, cette fonction prend en compte le fait qu'un champ puisse être sur plusieurs lignes, à condition que les lignes qui suivent la première ne soient pas une majuscule.
C'est le cas pour le fichier ics que je devais traiter ... J'espère que c'est la même chose pour tous les ics du monde.

Ce code est facile à utiliser (pas de classe, ou de namespace ou de composer et j'en passe), c'est juste une fonction, sans dépendance.
Donc, ça ne coûte rien de l'essayer.
