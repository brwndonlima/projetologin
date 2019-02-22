# projetologin
Simples front-end e back-end de Login e cadastro, feito com HTML, PHP e MYSQL. Para estudo e projetos.

```php
Class Usuario
{
    private $pdo;
    public $msgErro ="";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            //throw $th;
            $msgErro = $e -> getMessage();
        }
    }
```

Primeira parte da classe usuarios.php criada, só pra demonstrar.


[x] Baixar
[ ] Não baixar
[ ] a
