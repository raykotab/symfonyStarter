# ORM Entity, maker command, abstract repository class add & remove
EntityManager→flush persists on DB.
Call of repository from controller through dependency injection, passing as arg of index the repository class built-in methods:
findAll(), 
# Instead of defining routes in routes.yaml, you define them as annotation/attribute of the function

# 
    #[Route('/{limit<\d+>?3}', name:'app_index')]

# symfony console debug:router
shows routes of the system

The order of the routes annotated are important,you can define an addittional priority for order consideration

# symfony server:start

# twig

composer require twig

flex recipes ??