CREATE TABLE levels (
    rank VARCHAR(20) PRIMARY KEY
);

CREATE TABLE brandType (
    type VARCHAR(20) PRIMARY KEY
);

CREATE TABLE users (
    userID VARCHAR(20) PRIMARY KEY,
    password VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    phoneNum VARCHAR(20) NOT NULL,
    address VARCHAR(50) NOT NULL,
    sex VARCHAR(20) NOT NULL CHECK (sex IN ('male', 'female')),
    birthday DATE,
    rank VARCHAR(20) NOT NULL,
    CONSTRAINT FK_users_levels FOREIGN KEY(rank) REFERENCES levels(rank) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE employees(
    employeeID VARCHAR(20) PRIMARY KEY,
    password VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    department VARCHAR(20) NOT NULL CHECK (department IN ('sales', 'management', 'hr'))
);

CREATE TABLE brands(
    brandID INT AUTO_INCREMENT PRIMARY KEY,
    brandType VARCHAR(20) NOT NULL,
    brandName VARCHAR(20) NOT NULL,
    brandIntro text(100),
    CONSTRAINT FK_brands_brandType FOREIGN KEY(brandType) REFERENCES brandType(type) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE products (
    productID INT AUTO_INCREMENT PRIMARY KEY,
    brandID INT NOT NULL,
    productName VARCHAR(20) NOT NULL,
    price INT NOT NULL,
    salePrice INT NOT NULL,
    target VARCHAR(20) CHECK (target IN ('men','women','unisex')), 
    stock INT NOT NULL, 
    CONSTRAINT FK_products_brands FOREIGN KEY(brandID) REFERENCES brands(brandID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE reviews(
    reviewID INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(20) NOT NULL,
    productID INT NOT NULL,
    date DATE,
    grade INT NOT NULL,
    comment TEXT(100),
    CONSTRAINT FK_reviews_users FOREIGN KEY(userID) REFERENCES users(userID) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_reviews_products FOREIGN KEY(productID) REFERENCES products(productID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE qna(
    qnaID INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(20) NOT NULL,
    type VARCHAR(20) NOT NULL,
    date DATE,
    comment TEXT,
    CONSTRAINT FK_qna_users FOREIGN KEY(userID) REFERENCES users(userID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE replyqna (
    qnaID INT PRIMARY KEY,
    employeeID VARCHAR(20) NOT NULL,
    date DATE,
    comment TEXT,
    CONSTRAINT FK_replyqna_qna FOREIGN KEY(qnaID) REFERENCES qna(qnaID) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_replyqna_employees FOREIGN KEY(employeeID) REFERENCES employees(employeeID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE orders(
    orderID INT AUTO_INCREMENT PRIMARY KEY,
    userID VARCHAR(20) NOT NULL,
    productID INT NOT NULL,
    brandID INT NOT NULL,
    date DATE,
    comment TEXT(300),
    purchasePrice INT NOT NULL,
    CONSTRAINT FK_orders_users FOREIGN KEY(userID) REFERENCES users(userID) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_orders_products FOREIGN KEY(productID) REFERENCES products(productID) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_orders_brands FOREIGN KEY(brandID) REFERENCES brands(brandID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE deliveries (
    orderID INT NOT NULL,
    status VARCHAR(20) CHECK (status IN ('paid', 'ready', 'shipping', 'done')),
    CONSTRAINT FK_deliveries_orders FOREIGN KEY (orderID) REFERENCES orders(orderID) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE notifications(
    notiID INT AUTO_INCREMENT PRIMARY KEY,
    writerID VARCHAR(20) NOT NULL,
    date DATE,
    content TEXT(500),
    CONSTRAINT FK_notifications_employees FOREIGN KEY(writerID) REFERENCES employees(employeeID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE coupons (
    couponID INT AUTO_INCREMENT PRIMARY KEY,
    rank VARCHAR(20) NOT NULL,
    expirationDate DATE,
    discountRate INT NOT NULL,
    minFee INT,
    CONSTRAINT FK_coupons_levels FOREIGN KEY (rank) REFERENCES levels(rank) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE wishes (
    userID VARCHAR(20) NOT NULL,
    productID INT NOT NULL,
    CONSTRAINT PK_wishes PRIMARY KEY (userID, productID),
    CONSTRAINT FK_wishes_users FOREIGN KEY (userID) REFERENCES users(userID) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_wishes_products FOREIGN KEY (productID) REFERENCES products(productID) ON DELETE CASCADE ON UPDATE CASCADE
);

/*SELECT 사용*/
CREATE VIEW deliveryView AS
   SELECT 
        orderID,
        userID, 
        date as orderDate, 
        address,
        brandName,
        productName,
        comment, 
        status
   FROM orders join brands using (brandID) join products using(productID) join users using (userID) natural join deliveries  ;

/*SELECT, COUNT 사용*/
CREATE VIEW wishCount AS
    SELECT
        productID,
        count(productID) as count
    FROM wishes GROUP BY productID;

/*COUNT 사용*/
CREATE VIEW orderCount AS
    SELECT 
        productID,
        count(productID) as count
    FROM orders GROUP BY productID;

/*AVG와 GROUP BY 사용*/
CREATE VIEW reviewRating AS
    SELECT
        productID,
        format(avg(grade),2) as rating
    FROM reviews GROUP BY productID;