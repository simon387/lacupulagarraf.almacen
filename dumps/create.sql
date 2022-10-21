-- create database
DROP SCHEMA IF EXISTS lacupulagarrafalmacen;
CREATE SCHEMA lacupulagarrafalmacen;




-- create roles
DROP TABLE IF EXISTS lcga_role;
CREATE TABLE lcga_role
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    CONSTRAINT role__name_uindex UNIQUE (name)
);
-- insert default roles
INSERT INTO lcga_role (name) VALUES ('admin');
INSERT INTO lcga_role (name) VALUES ('super-admin');




-- create user table
DROP TABLE IF EXISTS lcga_user;
CREATE TABLE lcga_user
(
    id    INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    name  VARCHAR(255) NOT NULL,
    pass  VARCHAR(255) NOT NULL,
    role  INT          NOT NULL,
    CONSTRAINT user__role__id_fk FOREIGN KEY (role) REFERENCES lcga_role (id)
);
-- insert default users
INSERT INTO lcga_user (email, name, pass, role) VALUES ('andres', 'Andres', 'pass', 1); -- admin
INSERT INTO lcga_user (email, name, pass, role) VALUES ('simone.celia@simonecelia.it', 'Simone Celia', '', 2); -- super-admin




-- create super_category table
DROP TABLE IF EXISTS lcga_super_category;
CREATE TABLE lcga_super_category
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
-- insert default super category
INSERT INTO lcga_super_category (name) VALUES ('sin super categoría');




-- create category table
DROP TABLE IF EXISTS lcga_category;
CREATE TABLE lcga_category
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    super_category INT NOT NULL,
    CONSTRAINT category__super_category__id_fk FOREIGN KEY (super_category) REFERENCES lcga_super_category (id)
);
-- insert default category
INSERT INTO lcga_category (name, super_category) VALUES ('sin categoría', 1);




-- create table period
DROP TABLE IF EXISTS lcga_period;
CREATE TABLE lcga_period
(
    id     INT AUTO_INCREMENT PRIMARY KEY,
    start  TIMESTAMP        NULL,
    end    TIMESTAMP        NULL,
    actual BIT DEFAULT b'1' NOT NULL
);
-- insert default value
INSERT INTO lcga_period (start, end, actual) VALUES ('2022-01-13 21:43:56', NULL, TRUE);




-- supplir
DROP TABLE IF EXISTS lcga_supplier;
CREATE TABLE lcga_supplier
(
    id   INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
-- defaults
INSERT INTO lcga_supplier (id, name) VALUES (1, 'sin proveedor');
INSERT INTO lcga_supplier (id, name) VALUES (2, 'proveedor#1');
INSERT INTO lcga_supplier (id, name) VALUES (3, 'proveedor#2');




-- table product
DROP TABLE IF EXISTS lcga_product;
CREATE TABLE lcga_product
(
    id       INT AUTO_INCREMENT PRIMARY KEY,
    category INT           NOT NULL,
    name     VARCHAR(255)  NOT NULL,
    supplier INT           NOT NULL,
    unit     VARCHAR(255)  NULL,
    deposit0 DECIMAL(9, 2) NULL,
    deposit1 DECIMAL(9, 2) NULL,
    outflow0 DECIMAL(9, 2) NULL,
    outflow1 DECIMAL(9, 2) NULL,
    `left`   DECIMAL(9, 2) NULL,
    `period` INT NULL,
    note     VARCHAR(255)  NULL,
    CONSTRAINT product_category_id_fk
        FOREIGN KEY (category) REFERENCES lcga_category (id),
    constraint product_period_id_fk
        FOREIGN KEY (period) REFERENCES lcga_period (id)
            ON DELETE CASCADE,
    CONSTRAINT product_supplier_id_fk
        FOREIGN KEY (supplier) REFERENCES lcga_supplier (id)
);
-- defaults
INSERT INTO lcga_product (category, name, supplier, period) VALUES (1, 'product name', 2, 1);




-- table operation
DROP TABLE IF EXISTS lcga_operation;
CREATE TABLE lcga_operation
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    user_       INT                                   NOT NULL,
    timestamp   TIMESTAMP DEFAULT current_timestamp() NOT NULL ON UPDATE current_timestamp(),
    product     INT                                   NULL,
    description VARCHAR(255)                          NULL,
    CONSTRAINT operation_product_id_fk
        FOREIGN KEY (product) REFERENCES lcga_product (id)
            ON DELETE SET NULL,
    CONSTRAINT operation_user__id_fk
        FOREIGN KEY (user_) REFERENCES lcga_user (id)
);


