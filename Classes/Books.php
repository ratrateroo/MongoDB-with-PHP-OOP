<?php 
class Books {
    protected $collection_books;
    public function __construct($collection_books) {
        $this->collection_books = $collection_books;
    }
    
    public function newBook($bookTitle, $bookCategory, $bookAuthor, $bookPrice, $bookDescription, $bookImage) {
        //check if the document exist by cheking $bookTitle and $bookCategory
        $document = $this->collection_books->findOne([
            'bookTitle' => $bookTitle,
            'bookCategory' => $bookCategory],
            ['projection' => ['_id' => 1]]);
            
            //otherwise we just insert a new document
            
            if(is_null($document)) {
                $insertBook = $this->collection_books->insertOne([
                    'bookTitle' => $bookTitle,
                    'bookCategory' => $bookCategory,
                    'bookAuthor' => $bookAuthor,
                    'bookPrice' => $bookPrice,
                    'bookDescription' => $bookDescription,
                    'bookImage' => new MongoDB\BSON\Binary(file_get_contents($bookImage), MongoDB\BSON\Binary::TYPE_GENERIC),
                    'created_at' => new MongoDB\BSON\UTCDateTime()

                ]);
            } else {
                //if there is an ObjectId retrieved then we update that document for that specific ObjectId
                $findAndUpdate = $this->collection_books->FindOneAndUpdate(
                    ['_id' => new MongoDB\BSON\ObjectID($document->_id)],
                    ['$set' => [
                        'bookTitle' => $bookTitle,
                        'bookCategory' => $bookCategory,
                        'bookAuthor' => $bookAuthor,
                        'bookPrice' => $bookPrice,
                        'bookDescription' => $bookDescription,
                        'bookImage' => new MongoDB\BSON\Binary(file_get_contents($bookImage), MongoDB\BSON\Binary::TYPE_GENERIC),
                        'updated_at' => new MongoDB\BSON\UTCDateTime()
                        ]
                    ]
                );

            }
            
            
        }
}
?>