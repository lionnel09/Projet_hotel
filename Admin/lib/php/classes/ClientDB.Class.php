<?php

class ClientDB  extends Client{
    private $_db;
    private $_array = array();
    
    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    public function addClient($data){
        $_db->beginTransaction();
        try{
            $query="insert into client";
            $query.="(nom_client,email)";
        } catch (Exception $ex) {

        }
       
    }
    public function getClient(){
        try{
            $query = "select * from client";
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
            //$resultset->bindValue(':password',$password);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Client($data);
            }   
            
        }
        catch(PDOException $e){
            print $e->getMessage(); 
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
}