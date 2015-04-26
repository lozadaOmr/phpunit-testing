## PHPUNIT TESTING

This will assume that you either have phpunit installed [globally](https://phpunit.de/manual/current/en/installation.html) using composer

*or*

included it per project by adding it in `composer.json`


phpunit.xml is checked when running `phpunit`

## Routes

- `/todos` - will display a mock index of todos resource
- `/todos/create` - will display a create todos resources (mock create)
- `/todos/{id}` - will display the specified todos resource (mock show)
- `/todos/{id}/edit` - will display the specified todos resource (mock edit)


## Test

- To test index() `curl localhost:8000/todos`
- To test create() `curl localhost:8000/create`
- To test show() `curl localhost:8000/{id}`
- To test edit() `curl localhost:8000/{id}/edit`


## Mini Cheat Sheet



## Reference

Jeffrey Way's [Laravel Testing Decoded](https://leanpub.com/laravel-testing-decoded)