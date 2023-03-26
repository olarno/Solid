<?php
 interface Database 
 {
    public function save($data);
 }

 class MySQLDatabase implements Database
 {
    public function save($data)
    {
        # code to save data in MySQL database
    }
 }

 class MongoDatabase implements Database
 {
    public function save($data)
    {
        # code to save data in Mongo Database
    }
 }

 class DataProcessor 
 {
    public function __construct(private Database $database)
    {
    }

    public function process($data)
    {
        # code to execute operation on data
        $this->database->save($data);
    }
 }