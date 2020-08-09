-- Feel free to change the username and password.

CREATE USER 'tuckerdesk'@'localhost' IDENTIFIED BY 'admin';


GRANT ALL PRIVILEGES ON * . * TO 'tuckerdesk'@'localhost';

FLUSH PRIVILEGES;
