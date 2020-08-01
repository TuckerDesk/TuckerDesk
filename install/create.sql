-- This creates a table for the details of the
-- support center.

CREATE TABLE IF NOT EXISTS details (
  title VARCHAR(255) NOT NULL,
  logo VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
)  ENGINE=INNODB;