<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }
// kal k fixt korbo
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available of '{$this->title}' to borrow.\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}
//2nd part(sabdan)
class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

// Create Book
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create Member
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// dar kora Book
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// display available Copie
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";


// 1. 47 no line a to kisu nai ,kintu error ase kno ?
// 2. constructor ar kaj
//     Object create holei chalu hoy
//     Eta class er vitor thake
//     obj banaela outo call kore
// 3. bird kobi te somossa,foxt kora lagbe
//4. echo hoy na kno? fixt operating system class ar por a  
// 5. abar 
