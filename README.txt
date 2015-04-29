Sample PHP Project.
(Solutions)

Example of php in use on a simple site where a user can log in and view posts
associated with that account. No way to add new posts yet, that can be added
later.

This branch contains better named variables and plenty of comments (perhaps too
verbose, actually) to provide an explanation of what's going on.

If you want to run this, (assuming you're running WAMP or LAMP):

* Copy this folder into your www folder.

* In MySQL Workbench (or similar), import the database from the
sampleDatabase.sql file. (server->data import in the window menu bar, or just
copy-paste the contents into a sql query)

* If you have changed the default username/password for your SQL server (You
SHOULD have), change line 2 of verifyUser.php to use your username and password.
