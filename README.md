# TuckerDesk
Open Sourced Help Desk Software

_______________________________

Have you ever wanted to set up a help desk but didn't want to pay an insane fee? Have you ever wanted to host a help desk on your own servers? Now you can! TuckerDesk as an easy installation proccess and adding articles and information has never been easier.

## Prerequisits

You will need:

- PHP 7 or more
(This was built on PHP 7.3, but should work on all PHP 7 versions)

- MySQL

## Installation

Clone the repo:
`git clone https://github.com/TuckerDesk/TuckerDesk`

Open your prefered way of interacting with MySQL (PHPMyAdmin or CLI) and create a new user with permissions to create and write to tables. You can also create a new database.

Open your browser and navigate to `localhost` or where you clone TuckerDesk and follow the installation guide.

## Troubleshooting

*I am getting "access denied" after setting the MySQL password!*

Make sure that the new user you made has all permissions on MySQL.

*My support center name is not loading*

The program may have failed to create a core configuration file called `tuckerconf.php`. Make sure TuckerDesk can write to the directory.