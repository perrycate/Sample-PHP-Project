Sample PHP Project.

Example of php in use on a simple site where a user can log in and view posts
associated with that account. No way to add new posts yet, that can be added
later.

As an excercise to the reader (you know who you are) I intentionally left out
any comments and used horribly short variable names. Your job is to add correct
comments and rename variables to things that make sense.

If you want to run this, (assuming you're running WAMP or LAMP):

* Copy this folder into your www folder.

* In MySQL Workbench (or similar), import the database from the
sampleDatabase.sql file. (server->data import in the window menu bar, or just
copy-paste the contents into a sql query)

* If you have changed the default username/password for your SQL server (You
SHOULD have), change line 2 of verifyUser.php to use your username and password.

When you're done, push this as a new repository to your account and send me a
pull request - I'll merge in the most readable code to this repository as a
solution.
