CREATE DATABASE RecipeSharing;

USE RecipeSharing;

-- User table
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user'
);

-- Recipe table
CREATE TABLE Recipes (
    recipe_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    preparation_time VARCHAR(50),
    difficulty_level ENUM('Easy', 'Medium', 'Hard'),
    recipe_type VARCHAR(50),
    is_public BOOLEAN DEFAULT TRUE
);

-- Comments and Ratings table
CREATE TABLE CommentsAndRatings (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    recipe_id INT,
    user_id INT,
    comment TEXT,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- Favorites table
CREATE TABLE Favorites (
    favorite_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    recipe_id INT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (recipe_id) REFERENCES Recipes(recipe_id) ON DELETE CASCADE
);

-- Initial data
INSERT INTO Users (full_name, email, password, role) VALUES
('Admin User', 'admin@example.com', 'adminpass', 'admin'),
('Mohammed Ahmed', 'mohammed@example.com', 'password1', 'user'),
('Fatima Khalid', 'fatima@example.com', '12345', 'user'),
('Ali Hassan', 'ali@example.com', 'password3', 'user'),
('Nora Abdullah', 'nora@example.com', 'password4', 'user');

INSERT INTO Recipes (title, description, preparation_time, difficulty_level, recipe_type) VALUES
('Spaghetti Carbonara', 'A creamy Italian pasta dish with pancetta and eggs.', '1 hour', 'Medium', 'Italian'),
('Pasta with Tomatoes and Meat', 'A delicious pasta dish made with fresh tomatoes and tender meat.', '1.5 hours', 'Medium', 'Italian'),
('Noodles with Vegetables and Chicken', 'A stir-fried noodle dish with fresh vegetables and chicken.', '1 hour', 'Easy', 'Asian'),
('Chocolate Cake', 'A rich chocolate dessert.', '2 hours', 'Hard', 'Dessert'),
('Caesar Salad', 'A refreshing salad with a creamy dressing.', '30 minutes', 'Easy', 'Salad');

INSERT INTO CommentsAndRatings (recipe_id, user_id, comment, rating) VALUES
(1, 2, 'Amazing recipe! Tastes authentic.', 5),
(2, 3, 'Easy to make and very delicious.', 4),
(3, 4, 'Good but needed more seasoning.', 3),
(4, 2, 'Perfect for chocolate lovers.', 5),
(5, 5, 'Simple and healthy.', 4);

INSERT INTO Favorites (user_id, recipe_id) VALUES
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(2, 5);
