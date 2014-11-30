 <?php
 class Database{
    private static $mongoUrl = "mongodb://devops:csc400@ds039960.mongolab.com:39960/";
    private static $Database;

    public function __construct(){}

    public static function getDB(){
        //Check to see if a connection to the database already exists. If one does not create a new one, else do nothing

            try{
                $dbh = new MongoClient("mongodb://devops:csc400@ds039960.mongolab.com:39960/");
                return $dbh;

            }
            catch(MongoConnectionException $e){
                error_log($e."\n", 3, "../log-errors.log");
            }catch(MongoException $e){
                error_log($e."\n", 3, "../log-errors.log");
            }

    }

    public function getDBVariable(){
        return $Database;
    }

    public function setDBVariable(){

    }
}

?>