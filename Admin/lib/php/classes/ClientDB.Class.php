<?php

class ClientDB extends Client {

    private $_db;
    private $_array = array();

    public function __construct($db) { //contenu de $cnx (index)
        $this->_db = $db;
    }

    public function getClient($login, $password) {
        try {
            $query = "select * from client where email=:login and mp=:password ";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login', $login,PDO::PARAM_STR);
            $resultset->bindValue(':password', $password,PDO::PARAM_STR);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Client($data);
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

    public function addClient($data) {
        //$_db->beginTransaction();
        try {
            $query = "insert into client(adrclient,cpclient,villeclient,telclient,nom,prenom,mp,email)"
            .$query=" values(:adr,:cp,:ville,:tel,:nom,:prenom,:mp,:email)";
            /* $query = "select ajouter_client(:nom_client,:email_client,:password_client,:adresse,:numero,:localite,:cp) as retour"; */
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom', $data['nom']);
            $resultset->bindValue(':email', $data['email1']);
            $resultset->bindValue(':mp', $data['password']);
            $resultset->bindValue(':adr', $data['adresse']);
            $resultset->bindValue(':ville', $data['ville']);
            $resultset->bindValue(':prenom', $data['prenom']);
            $resultset->bindValue(':cp', $data['codepostal']);
            $resultset->bindValue(':tel', $data['tel']);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0);
        } catch (PDOException $e) {
            print "Echec de l'insertion " . $e->getMessage();
        }
    }

}
