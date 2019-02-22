<p align="center">
  <a href="https://github.com/brwndon">
    <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="Bootstrap logo" width="72" height="72">
  </a>
</p>

<h3 align="center">Brwndondev</h3>

<p align="center">
  Estrutura de front-end e back-end simples, para um desenvolvimento e estudo rápido e fácil.
  <br>
  <a href="https://github.com/brwndon"><strong>Veja mais »</strong></a>
  <br>
  <br>
  <a href="#">Em breve</a>
  ·
  <a href="#">Em breve</a>
  ·
  <a href="#">Em breve</a>
  ·
  <a href="brwndonlima@gmail.com">Contato</a>
</p>

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

