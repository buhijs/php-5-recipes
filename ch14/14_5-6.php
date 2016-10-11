<?php
// Example 14-5-6.php
$doc = DOMDocument::load("books.xml");
$books = $doc->getElementsByTagName("book");
foreach($books as $book) {
  $titles = $book->getElementsByTagName("title");
  foreach($titles as $title) {
    echo $title->nodeValue . " - ";
  }
  $id = $book->getAttribute("book_id");
    echo "book_id = $id\n";
}
?>
