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
                echo '
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                <div class="card">

                <!-- Card image -->
                <img class="card-img-top" src="data:jpeg;base64,'. base64_encode($picture->getData()) .' alt="Card image cap">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title" title="'. $value->bookTitle .'"><a>'.  $title . '</a></h4>
                    
                    <!-- Text -->
                    <p class="card-text">Price: &euro;'. $value->bookPrice . '</p>
                    
                    <!-- Button -->
                    <a href="#" class="btn btn-primary" role="button" 
                    value="'. $value->_id. '"
                    onclick="ajaxBuy(this.value)">Buy</a>
                

                </div>
                </div>
                </div>
                </div>

            </div>';

                ?>

              
                        
                        
                
                <?php
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
