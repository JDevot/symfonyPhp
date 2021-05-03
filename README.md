# symfonyPhp

Installation
Executer les commandes suivantes :

composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:update -f
Usage
Routes
Liste des articles :
Route: /api/posts

Méthodes: GET

Paramètres: aucun

Résultat :

[
    {
        "id": 1,
        "title": "Article 1",
        "content": "Lorem Ipsum"
    },
    {
        "id": 2,
        "title": "Article 2",
        "content": "Lorem Ipsum"
    }
]
Article :
Route: /api/post/{id}

Méthodes: GET

Paramètres:

id : int
Résultat:

{
    "id": 1,
    "title": "Article 1",
    "content": "Lorem Ipsum"
}
