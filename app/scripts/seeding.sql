BEGIN;

CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(55) NOT NULL UNIQUE,
    password TEXT NOT NULL,
    firstname VARCHAR(55),
    lastname VARCHAR(55)
);

CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    url VARCHAR(200) NOT NULL,
    price FLOAT NOT NULL,
    quantity INTEGER NOT NULL,
    isAvailable BOOLEAN NOT NULL,
    user_id INTEGER,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- Insérer 4 utilisateurs
INSERT INTO users (email, password) VALUES
('boris@gmail.com', 'harrypotter'),
('flo@gmail.com', 'voldemort'),
('alex@gmail.com', 'hagrid'),
('sami@gmail.com', 'avada kedavra');

-- Insérer 10 produits en associant chaque produit à un utilisateur
INSERT INTO products (name, url, price, quantity, isAvailable, user_id) VALUES
('Femme pensive', 'https://cdn.pixabay.com/photo/2019/05/04/15/24/woman-4178302_1280.jpg', 19.99, 50, 1, 1),  -- associé à l'utilisateur 1
('Robots', 'https://cdn.pixabay.com/photo/2014/12/15/16/46/graffiti-569265_1280.jpg', 29.99, 30, 1, 2),  -- associé à l'utilisateur 2
('Femme égarée', 'https://cdn.pixabay.com/photo/2019/12/18/08/37/portrait-4703413_1280.jpg', 39.99, 20, 1, 3),  -- associé à l'utilisateur 3
('Fleurs', 'https://cdn.pixabay.com/photo/2019/09/04/11/10/flower-4451296_1280.jpg', 49.99, 10, 1, 4),  -- associé à l'utilisateur 4
('Femme rose et bleu', 'https://cdn.pixabay.com/photo/2018/10/14/18/09/painting-3747058_1280.jpg', 59.99, 25, 1, 1),  -- associé à l'utilisateur 1
('Léopard', 'https://cdn.pixabay.com/photo/2018/01/26/22/38/leopard-3109982_1280.jpg', 69.99, 15, 1, 2),  -- associé à l'utilisateur 2
('Papillon', 'https://cdn.pixabay.com/photo/2019/09/24/06/10/insect-4500348_1280.jpg', 79.99, 5, 1, 3),   -- associé à l'utilisateur 3
('Arbre', 'https://cdn.pixabay.com/photo/2019/06/07/13/11/landscape-4258253_1280.jpg', 89.99, 40, 1, 4),  -- associé à l'utilisateur 4
('Avocat', 'https://cdn.pixabay.com/photo/2018/07/03/03/48/avocados-3513048_1280.jpg', 99.99, 12, 1, 1),  -- associé à l'utilisateur 1
('Maison', 'https://cdn.pixabay.com/photo/2022/08/13/18/25/river-7384240_1280.jpg', 109.99, 8, 1, 2); 


COMMIT;