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

        public function display($category = '') {

            if($category == '') {
                $queryBooks = $this->collection_books->find();
            } else {
                $queryBooks = $this->collection_books->find(['bookCategory' => $category]);
            }

            foreach($queryBooks as $value) {
                $title = (strlen($value->bookTitle) <= 17) ? $value->bookTitle : substr($value->bookTitle, 0, 17). "...";
                $picture = $value->bookImage;
                echo "<div class='col-md-2' style='width: 170px; margin-top:30px;'>
                    <img src='data:jpeg;base64,". base64_encode($picture->getData()) ."' style='width:100%; height:150px'>
                    
                    <strong> ".  $title . "</strong>
                    <br>
                    <strong> Price: &euro;". $value->bookPrice . "</strong>
                    <br>
                    <button class='col-md-5 btn btn-danger btn-sm' role='button'> Buy </button>
                    <button class='col-md-5 btn btn-info btn-sm' role='button' style='float: right;'> Info </button>

                </div>";
            }
        }

        public function search($search) {
            $query = $this->collection_books->find(['bookTitle' => new MongoDB\BSON\Regex($search, 'i')], 
            ['projection' => ['bookTitle' => 1, '_id' => 0]]);

            return $query;
        }
}
?>