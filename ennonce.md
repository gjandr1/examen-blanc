## Ennoncé de l'examen

### Consignes

**Forkez** ce repositiry sur votre compte Github et clonez ce nouveau repository sur votre machine.

Committez et poussez vos changement après **chaque** points de l'exercice.

Respectez au mieux le MVC.

Commentez un minimum votre code (principalement les fonctions) en respectant la PHPDoc.

### Exercice

1. Afficher la liste des stagiaires:
    - Mr ou Mme selon le sexe,
    - le nom en majuscule,
    - le prenom avec la première lettre en majuscule et le reste en minuscule.

2. Créer une page qui détaillera un stagiaire dont la position dans le tableau sera passée en paramètre get (query param):
    - "Pas de stagiaire connu avec cet id" : Si la position est en dehors du tableau.
    - "Veuillez fournir un id de stagiaire": Si le paramètre n'est pas fournis.
    - Les Hobbies choisis seront listés par leur noms et non leur trigramme

3. En cliquant sur un nom du point 1 mener à la page associée en point 2

4. (Modifier) idem que sur le point 2 mais afficher dans un formulaire pré rempli
    - afficher le champ nom
    - le champ prénom
    - 3 champs pour la ddn : 1 champ pour le jour, une liste déroulante pour les mois, un champ pour l'année
    - deux radio pour le sexe (Mr et Mme)
    - un champ pour le nombre d'enfant
    - un ensemble de checkbox (tout ceux de la variable $hobbies) avec ceux de la personne déjà cochés

5. Créer une page séparée pour la sauvegarde des mofifications (point 4).
    Valider les valeurs reçues et si cela est valide afficher les données comme en point 2.
    Valider :
    - nom doit être rempli, pas de chiffre
    - prénom peut être rempli, pas de chiffre
    - la date de naissance est obligatoire / être une date réelle (fonction de date)/ inférieure à aujourd'hui
    - Le sexe est obligatoire et ne peut être que "M" ou "F"
    - Les enfants sont optionnels mais cela doit être un entier > 0 si fournis
    - Les hobbies sont optionnels mais doivent être dans la liste si fournis

6. Vérifiez que votre application est sécurisée en testant les noms suivants:
    - `<i>Albert</i>`
    - `<script>alert('coucou');</script>`
    - `l'étonnant "OHOHOH"`

Bon travail
