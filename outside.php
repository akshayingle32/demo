class test {
     public function newTest(){
          $this->bigTest();
          $this->smallTest();
     }

     private function bigTest(){
          //Big Test Here
     }

     private function smallTest(){
          //Small Test Here
     }

     public function scoreTest(){
          //Scoring code here;
     }
}

$testObject = new test();

$testObject->newTest();

$testObject->scoreTest();