# New Laravel Project

## Description

This is a Laravel-based web application designed to manage users and posts. The application supports user registration, login, and logout functionalities. Authenticated users can create and manage blog posts.

## Features

-   User registration and authentication
-   User login and logout
-   Create and manage blog posts
-   Responsive design with Bootstrap
-   Alerts for successful or failed operations

## Installation

To set up the project locally, follow these steps:

1. **Clone the repository**:

    ```sh
    git clone <repository_url>
    cd new-laravel-project
    ```

2. **Install dependencies**:

    ```sh
    composer install
    npm install
    ```

3. **Environment setup**:

    - Copy the `.env.example` file to `.env`:
        ```sh
        cp .env.example .env
        ```
    - Generate the application key:
        ```sh
        php artisan key:generate
        ```
    - Set up your database credentials in the `.env` file.

4. **Run migrations**:

    ```sh
    php artisan migrate
    ```

5. **Start the development server**:
    ```sh
    php artisan serve
    ```

## Usage

### User Routes

-   **Homepage**: `GET /` - Shows the homepage, and if authenticated, displays the feed.
-   **Register**: `POST /register` - Registers a new user.
-   **Login**: `POST /login` - Logs in an existing user.
-   **Logout**: `POST /logout` - Logs out the current user.

### Blog Routes

-   **Create Post Form**: `GET /create-post` - Displays the form to create a new post.
-   **Create Post**: `POST /create-post` - Submits a new post to the database.

### UserController

Handles user authentication and homepage display.

-   **logout()**: Logs out the user.
-   **showCorrectHomepage()**: Displays the homepage or the feed based on authentication status.
-   **login(Request $request)**: Validates and logs in the user.
-   **register(Request $request)**: Validates and registers a new user, and logs them in.

### PostController

Handles the creation and display of blog posts.

-   **storeNewPost(Request $request)**: Validates and stores a new post.
-   **showCreateForm()**: Displays the form for creating a new post.

## Contributing

To contribute to this project:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
