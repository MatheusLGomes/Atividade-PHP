<?php

class Model {
    private $server = "localhost";
    private $username = "root";
    private $pass = ""; 
    private $database = "aula_sistema_cadastro";
    private $conn;
     
    public function __construct() {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->pass, $this->database);
        } catch (mysqli_sql_exception $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
        }
    }
    
    public function insert() {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['whats']) && isset($_POST['address'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['whats']) && !empty($_POST['address'])) {
                    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                    $whats = filter_input(INPUT_POST, 'whats', FILTER_SANITIZE_STRING);
                    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
                    
                    $query = "INSERT INTO cadastros (name, email, whatsapp, endereco) VALUES ('$name', '$email', '$whats', '$address')";

                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Dados inseridos com sucesso!')</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    } else {
                        echo "<script>alert('Ocorreu um erro!')</script>";
                        echo "<script>window.location.href='index.php'</script>";
                    }
                } else {
                    echo "<script>alert('Preencha todos os campos!')</script>";
                    echo "<script>window.location.href='index.php'</script>";
                }
            } else {
                echo "<script>alert('Campos vazios!')</script>";
            }
        }
    }
    
    public function fetch() {
        $data = array();
        $query = "SELECT * FROM cadastros";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id){
        $query = "DELETE FROM cadastros WHERE id = '$id'";
            if($sql = $this->conn->query($query)){
                return true;
                }else{
                    return false;
            }
    }
}

?>
