# Goodreads API
A simple app for receiving data from Goodreads.

# Find books by title, author, or ISBN
You can search by using the searchBooks method.

**Example:**

$result = $api->searchBooks('The lord of the');

# Get title and author

You can receive the title and author name by simply echoing getTitle() and getAuthor() *after* using searchBooks().
You can define the int parameter if you want other results than the first. Default data for int is 0.

**Example:**

$title = $api->getTitle('0');

$author = $api->getAuthor('1');