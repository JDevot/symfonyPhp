# symfonyPhp

# Installation
    Executer les commandes suivantes :

    composer install    
    php bin/console doctrine:database:create
    php bin/console doctrine:schema:update -f
# Usage
# Routes
Liste des articles :
Route: /api/articles/liste

Méthodes: GET

Paramètres: aucun

Résultat :
```json
[
    {
        "id": 1,
        "title": "Article 1",
        "description": "Lorem Ipsum"
    },
    {
        "id": 2,
        "title": "Article 2",
        "description": "Lorem Ipsum"
    }
]
```
Article :

Route: /api/article/{id}

Méthodes: GET

Paramètres:

id : int
Résultat:
```json
{
  "id": 1,
  "title": "test",
  "description": "test"
}
```
