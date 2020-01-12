# Goodreads API
A simple app for receiving data from Goodreads.

# Find books by title, author, or ISBN
You can search by using the searchBooks method.
You can define the int parameter if you want other results than the first. Default data for int is 0.

**Example:**

$result = $api->searchBooks('The lord of the', 0);

# Get title, author and image

You can receive the title and author name by simply echoing getTitle(), getAuthor() and getImgUrl()*after*using searchBooks().

**Example:**

$title = $api->getTitle();

$author = $api->getAuthor();

$imgURL = $api->getImgUrl();