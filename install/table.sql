CREATE TABLE IF NOT EXISTS details (
  title VARCHAR(255) NOT NULL,
  logo VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
)  ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS admin (
  admin_username VARCHAR(255) NOT NULL,
  admin_password VARCHAR(255) NOT NULL,
)  ENGINE=INNODB;
