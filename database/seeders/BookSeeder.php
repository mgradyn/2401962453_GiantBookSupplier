<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::firstOrCreate([
            'publisher_id' => 1,
            'title' => "White Fang",
            'author' => "Jack London",
            'year' => 2001,
            'synopsis' => "White Fang was part dog, part wolf, and the lone survivor of his family. Struggling for his life in his lonely world, he soon learned to follow the harsh law of the North -- kill or be killed?",
            'image' => "1.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 3,
            'title' => "Don Quixote",
            'author' => "Miguel de Cervantes Saavedra",
            'year' => 2018,
            'synopsis' => "Hailed by Dostoyevsky as The final and greatest utterance of the human mind, Don Quixote constitutes a founding work of modern Western literature. Cervantes' masterpiece has been translated into more than sixty languages.",
            'image' => "2.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 2,
            'title' => "Alices adventures in wonderland",
            'author' => "Lewis Carroll",
            'year' => 2017,
            'synopsis' => "Lewis Carroll's classic tale began as a story told to a group of children on a boating picnic in 1862 and was first published as Alice's Adventures Under Ground three years later. Its curious effect of half-dream.",
            'image' => "3.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 1,
            'title' => "The adventures of Huckleberry Finn",
            'author' => "Mark Twain",
            'year' => 2006,
            'synopsis' => "Presents the adventures of a boy and a runaway slave as they travel down the Mississippi River on a raft. Universally acclaimed",
            'image' => "4.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 2,
            'title' => "The adventures of Tom Sawyer",
            'author' => "Mark Twain",
            'year' => 2019,
            'synopsis' => "The classic story of a mischievous nineteenth-century boy in a Mississippi River town and his friends, Huck Finn and Becky Thatcher, as they run away from home, witness a murder, and find treasure in a cave.",
            'image' => "5.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 3,
            'title' => "Treasure Island",
            'author' => "Robert Louis Stevenson",
            'year' => 1981,
            'synopsis' => "While going through the possessions of a deceased guest who owed them money, the mistress of the inn and her son find a treasure map that leads to a pirate fortune as well as great danger.",
            'image' => "6.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 1,
            'title' => "Pride and prejudice",
            'author' => "Robert Louis Stevenson",
            'year' => 2022,
            'synopsis' => "A novel of manners about the romantic pas de deux between Elizabeth Bennet and Fitzwilliam Darcy, two perfectly suited lovers who, at first, find each other insufferable. Despite Elizabeth's negative feelings about Darcy, fate seems determined to keep throwing this pair together, and Darcy, almost in spite of himself.",
            'image' => "7.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 2,
            'title' => "Wuthering Heights",
            'author' => "Emily Brontë",
            'year' => 2019,
            'synopsis' => "A fine, exclusive edition of one of literature's most beloved stories. Featuring a laser-cut jacket on a textured book with foil stamping, all titles in this series are first editions. Only 10,000 copies have printed, and each are individually numbered from 1 to 10,000.",
            'image' => "8.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 3,
            'title' => "Jane Eyre",
            'author' => "Charlotte Bronte",
            'year' => 2022,
            'synopsis' => "Following the death of her uncle, the orphan Jane Eyre is sent to the Lowood School, where she grows into a confident and well-educated young woman. When Jane leaves to become a governess at Thornfield Hall, she falls in love with Mr. Rochester, her pupil's guardian.",
            'image' => "9.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 1,
            'title' => "Moby Dick",
            'author' => "Herman Melville",
            'year' => 2022,
            'synopsis' => "It will be a strange sort of a book, tho', I fear; blubber is blubber you know; tho' you may get oil out of it, the poetry runs as hard as sap from a frozen maple tree;--& to cook the thing up, one must needs throw in a little fancy.... Yet I mean to give the truth of the thing, spite of this.",
            'image' => "10.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 2,
            'title' => "The Scarlet Letter",
            'author' => "Nathaniel Hawthorne",
            'year' => 2019,
            'synopsis' => "Hester Prynne is an adulteress, and the bright red A sewed on to her dress forever separates her from the other sad-colored inhabitants of her New England hometown. But no one else knows who the father of Hesters pixie-like child is—and that sordid mystery eats at the townspeople. Months stretch into years for the uncomplaining.",
            'image' => "11.jpg"
        ]);

        Book::firstOrCreate([
            'publisher_id' => 2,
            'title' => "Gulliver's Travels",
            'author' => "Jonathan Swift",
            'year' => 1991,
            'synopsis' => "An immediate success on its publication in 1726, GULLIVER'S TRAVELS was read, as John Gay put it, from the cabinet council to the nursery. Dean Swift's great satire is presented here in its unexpurgated entirety.",
            'image' => "12.jpg"
        ]);
    }
}
