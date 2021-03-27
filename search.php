<?php 
# Start the session, since we'll be be using it below
session_start();

# Get the search term from the form data
$searchTerm= $_POST['searchTerm']?? false;

# Load teh book data
$booksJson= file_get_contents('books.json');
$books= json_decode($booksJson, true);


foreach($books as $title => $book){
    if($book['title'] != $searchTerm){
        unset($books[$title]);
    }
}

$haveBooks=count($books)>0;

# Store our data in the session
$_SESSION['results']=[
    'books'=>$books,
    'haveBooks'=> $haveBooks,
    'searchTerm'=> $searchTerm,
];
# Redirect visitor to comfirmation page
#header function sends a raw HTTP header
header('Location: done.php');

# IMPORTANT:
#Nothing can echo/output to the page in this script;
#doing so will interface with the sessions and redirected
?>
