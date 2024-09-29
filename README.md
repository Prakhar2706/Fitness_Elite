# Fitness Elite

Fitness Elite is a simple and user-friendly PHP-based website designed for fitness enthusiasts. The site provides a responsive interface along with a user database to manage registered users effectively.

## Features

- **Simple Design**: A clean and minimal interface, making it easy to navigate for all users.
- **User-Friendly**: Intuitive layout for both new and returning users.
- **User Database**: Ability to manage user data and store registration details securely.
- **Responsive Design**: Optimized for all screen sizes, including mobile, tablet, and desktop.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Prakhar2706/Fitness_Elite.git
   ```
2. Navigate to the project directory:
   
   ```bash
   cd Fitness_Elite
   ```
3. Set up a local web server (e.g., using XAMPP or WAMP), and place the project files in the server's root directory (e.g., htdocs for XAMPP).

4. Create a database in your MySQL server and import the provided SQL file (if applicable) to set up the user database.

5. Configure the database connection in your PHP project:
   * Edit the config.php file (or equivalent) with your database credentials:
     
   ```bash
   <?php
   $servername = "localhost";
   $username = "your_db_username";
   $password = "your_db_password";
   $dbname = "your_db_name";
   ?>
   ```
6. Start the local server and access the website through your browser:
   
   ```bash
   http://localhost/Fitness_Elite
   ```
## Requirements
- PHP: Version 7.2 or higher (You can update based on your hosting environment)
- MySQL: Version 5.6 or higher
- Apache: Version 2.4 or higher (Web server to serve the PHP application)
- XAMPP/WAMP: Optional, but recommended for local development

## Usage

- User Registration: Users can sign up and store their data in the database.
- Responsive Interface: The website works seamlessly across all devices.
- Database: The user information is securely managed in the database for future access.
