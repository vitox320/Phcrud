<?php


namespace crud\Model;

require_once "User.php";
require_once "Conexao.php";
class UserModel
{

    public function create(User $u){
        $query = 'INSERT INTO users VALUES (?,?,?,?,?,?,?)';
        $stmt = \Conexao::getConexao()->prepare($query);
        $stmt->bindValue(1,NULL);
        $stmt->bindValue(2,$u->__get("nome"));
        $stmt->bindValue(3,$u->__get("sobrenome"));
        $stmt->bindValue(4,$u->__get("endereco"));
        $stmt->bindValue(5,$u->__get("bairro"));
        $stmt->bindValue(6,$u->__get("cidade"));
        $stmt->bindValue(7,$u->__get("estado"));
        $stmt->execute();
    }
    public function read(){
        $query = 'SELECT * FROM users';
        $stmt = \Conexao::getConexao()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }
    public function update(User $u,$id){
        $query = 'UPDATE users SET nome = ?,sobrenome = ?,endereco = ?, bairro = ?, cidade = ?, estado = ? WHERE id_user = ? ';
        $stmt = \Conexao::getConexao()->prepare($query);
        $stmt ->bindValue(1,$u->__get('nome'));
        $stmt ->bindValue(2,$u->__get('sobrenome'));
        $stmt ->bindValue(3,$u->__get('endereco'));
        $stmt ->bindValue(4,$u->__get('bairro'));
        $stmt ->bindValue(5,$u->__get('cidade'));
        $stmt ->bindValue(6,$u->__get('estado'));
        $stmt ->bindValue(7,$id);
        $stmt->execute();

    }
    public function delete($id){
        $query = 'DELETE FROM users where id_user = ? ';
        $stmt = \Conexao::getConexao()->prepare($query);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    public function getUserById($id){
        $query = 'SELECT * FROM users where id_user = ? ';
        $stmt = \Conexao::getConexao()->prepare($query);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}