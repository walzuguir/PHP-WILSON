<?php
class UsuarioRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnAddUsuario($usuario): bool
    {
        try {

            $query = "insert into usuario (matricula, nome, email, senha) values (:pmatricula, :pnome, :pemail, :psenha) on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pmatricula", $usuario->getMatricula());
            $stmt->bindValue(":pnome", $usuario->getNome());
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o usuário no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnUpdateUsuario($usuario): bool
    {
        try {

            $query = "UPDATE usuario set matricula = :pmatricula, nome = :pnome, email = :pemail, senha = :psenha WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pid", $usuario->getId());
            $stmt->bindValue(":pmatricula", $usuario->getMatricula());
            $stmt->bindValue(":pnome", $usuario->getNome());
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o usuário no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnLoginUsuario($usuario)
    {
        try {

            $query = "SELECT id, matricula, nome, email FROM usuario WHERE matricula = :pmatricula and senha = :psenha";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pmatricula", $usuario->getMatricula());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                if($usuario = $stmt->fetch())
                    return $usuario;

            return null;
        } catch (PDOException $error) {
            echo "Erro ao efetuar o login do usuário. Erro: {$error->getMessage()}";
            return null;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnListUsuarios($limit = 9999) {
        try {

            $query = "select id, matricula, nome, email, criado_em criadoem  from usuario limit :plimit";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':plimit', $limit);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os usuários do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarUsuarioPorEmail($email) {
        try {

            $query = "SELECT id, nome, email FROM usuario WHERE email = :pemail";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pemail', $email);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao localizar o usuário do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarUsuario($id) {
        try {

            $query = "SELECT id, matricula, nome, email, senha, criado_em criadoEm FROM usuario WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os usuarios no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnDeletarUsuarios($id) {
        try {

            $query = "DELETE FROM usuario WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao deletar o Usuario no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}
