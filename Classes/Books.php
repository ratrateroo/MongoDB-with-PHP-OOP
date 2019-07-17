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

        public function display($category = '', $cursor = NULL) {

            if($category == '' && is_null($cursor)) {
                $queryBooks = $this->collection_books->find([],['sort'=> ['bookTitle' => 1]]);
            } 
            else if($category != '') {
                $queryBooks = $this->collection_books->find(['bookCategory' => $category], ['sort'=> ['bookTitle' => 1]]);
            }

            else if (!is_null($cursor)) {
                $queryBooks = $cursor;
            }

            

            foreach($queryBooks as $id => $value) {
                $title = (strlen($value->bookTitle) <= 16) ? $value->bookTitle : substr($value->bookTitle, 0, 16). "...";
                $picture = $value->bookImage;
                echo "<div class='col-md-2' style='width: 170px; margin-top:30px;'>
                    <img src='data:jpeg;base64,". base64_encode($picture->getData()) ."' style='width:100%; height:150px'>
                    
                    <strong 
                        class='titles' 
                        title='". $value->bookTitle ."'
                        style='display:block;height:20px;'> ".  $title . "</strong>
                    
                    <br>
                    <strong> Price: &euro;". $value->bookPrice . "</strong>
                    <br>
                    <button 
                        class='col-md-5 btn btn-danger btn-sm' 
                        role='button' 
                        value='". $value->_id. "'
                        onclick='ajaxBuy(this.value)'
                        > Buy </button>
                    <button 
                        class='col-md-5 btn btn-info btn-sm' 
                        role='button' 
                        style='float: right;'
                        data-toggle='popover'
                        data-content='". $value->bookDescription ."'
                        data-placement='bottom'
                        data-trigger='focus'> Info </button>

                </div>";
            }
        }

        public function search($search) {
            $query = $this->collection_books->find(['bookTitle' => new MongoDB\BSON\Regex($search, 'i')], 
            ['projection' => ['bookTitle' => 1, '_id' => 0]]);

            return $query;
        }

        public function findBookById($id) {
            $dataBook = $this->collection_books->findOne(['_id' => new MongoDB\BSON\ObjectID($id)], ['projection' => ['bookImage' => 0]]);

            // foreach($dataBook as $value) {
            //     return [$value->_id, $value->bookTitle, $value->bookPrice, 1];
            // }

            return [$dataBook->_id, $dataBook->bookTitle, $dataBook->bookPrice, 1];
        }

        public function searchButton($search) {
            $regex = new MongoDB\BSON\Regex($search, 'i');
            $result = $this->collection_books->find(['bookTitle' => $regex]);

            return $result;
        }
}
