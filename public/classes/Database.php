 <?php
 class Database{
    private static $mongoUrl = "mongodb://devops:csc400@ds039960.mongolab.com:39960/csc400";
    private static $Database;

    private function __construct(){}

    public static function getDB(){
        //Check to see if a connection to the database already exists. If one does not create a new one, else do nothing
        if(isset(self::$Database)){
            try{
                $connect = new MongoClient(self::$mongoUrl);
                self::$Database = $connect->csc400;
                echo "Connection was successful \n";
            }
            catch(MongoConnectionException $e){
                error_log($e."\n", 3, "../log-errors.log");
            }catch(MongoException $e){
                error_log($e."\n", 3, "../log-errors.log");
            }
        }
    }
}

?>