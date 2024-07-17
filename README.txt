# Laravel ArticlePost API

This is a Laravel project demonstrating the implementation of the `ArticlePost` feature using SOLID principles. The project includes a RESTful API for creating, reading, updating, and deleting article posts.

## Features

- RESTful API endpoints for `ArticlePost`
- Service layer for business logic
- Request validation
- API Resource for JSON responses
- Dependency Injection and Interface for the service layer

## Prerequisites

- PHP >= 7.4
- Composer
- Laravel 8 or 9
- MySQL or any other supported database

# SOLID principles

- Single Responsibility Principle (SRP):

Each class has a single responsibility. The controller handles HTTP requests, the service contains business logic, and the model interacts with the database.

- Open/Closed Principle (OCP):

The ArticlePostService can be extended with additional methods without modifying the existing class. By using an interface, different implementations of the service can be introduced without changing the controller.

- Liskov Substitution Principle (LSP):

Any class implementing ArticlePostServiceInterface can be used in place of ArticlePostService, ensuring the application works correctly with different implementations.

- Interface Segregation Principle (ISP):

The interface ArticlePostServiceInterface ensures that the controller depends only on the methods it needs, promoting the use of lean and focused interfaces.

- Dependency Inversion Principle (DIP):

The controller depends on an abstraction (ArticlePostServiceInterface) rather than a concrete implementation (ArticlePostService). This is achieved via dependency injection, registered in the service provider.


# Routes

- Create a new ArticlePost
    URL: /api/article-posts
    Method: POST
    Request: json
        {
            "title": "New ArticlePost",
            "content": "This is the content of the new article post."
        }
    
    Response: json
    {
        "id": 2,
        "title": "New ArticlePost",
        "content": "This is the content of the new article post.",
        "created_at": "2023-01-01T00:00:00.000000Z",
        "updated_at": "2023-01-01T00:00:00.000000Z"
    }

- Get a single ArticlePost by ID
    URL: /api/article-posts/{id}
    Method: GET
    Response: json
    {
        "id": 1,
        "title": "Sample Title",
        "content": "Sample Content",
        "created_at": "2023-01-01T00:00:00.000000Z",
        "updated_at": "2023-01-01T00:00:00.000000Z"
    }

- Update an existing ArticlePost
    URL: /api/article-posts/{id}
    Method: PUT
    Request: json
    {
        "title": "Updated Title",
        "content": "Updated Content"
    }

    Response: json
    {
        "id": 1,
        "title": "Updated Title",
        "content": "Updated Content",
        "created_at": "2023-01-01T00:00:00.000000Z",
        "updated_at": "2023-01-01T00:00:00.000000Z"
    }

- Delete an ArticlePost
    URL: /api/article-posts/{id}
    Method: DELETE
    Response: json
    {
        "message": "ArticlePost deleted successfully"
    }