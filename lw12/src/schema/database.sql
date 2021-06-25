CREATE TABLE user
(
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci,
    email VARCHAR(255) NOT NULL UNIQUE COLLATE utf8mb4_unicode_ci,
    subject VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci,
    message TEXT NOT NULL COLLATE utf8mb4_unicode_ci,
    PRIMARY KEY (id)
);