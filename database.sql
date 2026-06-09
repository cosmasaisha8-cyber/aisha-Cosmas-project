CREATE DATABASE IF NOT EXISTS cossie_wholesale;
USE cossie_wholesale;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(120) NOT NULL,
    category VARCHAR(80) NOT NULL,
    company VARCHAR(120) NOT NULL,
    unit VARCHAR(80) NOT NULL,
    price DECIMAL(12,2) NOT NULL,
    discount_percent DECIMAL(5,2) NOT NULL DEFAULT 0,
    stock_quantity INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(40) NOT NULL UNIQUE,
    customer_name VARCHAR(120) NOT NULL,
    business_type VARCHAR(80) NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    unit_price DECIMAL(12,2) NOT NULL,
    discount_percent DECIMAL(5,2) NOT NULL DEFAULT 0,
    total_amount DECIMAL(12,2) NOT NULL,
    delivery_location VARCHAR(180) NOT NULL,
    note TEXT,
    status ENUM('pending','approved','delivered','cancelled') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(40) NOT NULL,
    method VARCHAR(60) NOT NULL,
    amount DECIMAL(12,2) NOT NULL,
    reference_number VARCHAR(120),
    payment_status ENUM('pending','confirmed','failed') NOT NULL DEFAULT 'pending',
    paid_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_number) REFERENCES orders(order_number)
);

CREATE TABLE IF NOT EXISTS rejected_goods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(40) NOT NULL,
    product_id INT NOT NULL,
    problem_type VARCHAR(80) NOT NULL,
    quantity INT NOT NULL,
    description TEXT NOT NULL,
    review_status ENUM('new','approved','rejected','replaced','refunded') NOT NULL DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_number) REFERENCES orders(order_number),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO products (product_name, category, company, unit, price, discount_percent, stock_quantity) VALUES
('Ngano ya unga', 'Ngano', 'Azam Mills', '50kg bag', 78000, 8, 180),
('Ngano ya unga', 'Ngano', 'Bakhresa', '25kg bag', 40500, 6, 220),
('Maji ya Uhai', 'Maji', 'Uhai', 'Carton 12 bottles', 12000, 5, 450),
('Maji Kilimanjaro', 'Maji', 'Kilimanjaro', 'Carton 12 bottles', 14500, 5, 360),
('Maji Sumsun', 'Maji', 'Sumsun', 'Carton 12 bottles', 11000, 4, 260),
('Maji Uduzungwa', 'Maji', 'Uduzungwa', 'Carton 12 bottles', 13000, 5, 310),
('Mafuta ya kupikia 5L', 'Mafuta', 'Safi', 'Bottle', 18500, 7, 190),
('Mafuta ya kupikia 10L', 'Mafuta', 'Alizeti', 'Jerican', 35500, 9, 145),
('Mafuta ya kupikia 20L', 'Mafuta', 'SunGold', 'Jerican', 69000, 11, 98),
('Sabuni za miche', 'Sabuni miche', 'Kuku', 'Box', 24000, 6, 240),
('Sabuni za miche', 'Sabuni miche', 'Jamaa', 'Box', 22500, 5, 210),
('Sabuni za unga', 'Sabuni unga', 'Omo', 'Carton', 52000, 10, 125),
('Sabuni za unga', 'Sabuni unga', 'Foma', 'Carton', 47000, 9, 155),
('Sukari', 'Chakula', 'Kilombero', '50kg bag', 132000, 4, 80),
('Chumvi', 'Chakula', 'Neel Salt', 'Carton', 18000, 3, 270),
('Biscuits', 'Biscuits', 'Britania', 'Carton', 36000, 8, 175);
