# Micro framework de estudo

Foco deste estudo é entender como é feito um framework além de fazer algumas anotações pontuais de algo que pode vir a ser importante entender.

Está sendo utilizado como base o curso da <b>school of net</b> com a adição de outros cursos ou livros que por ventura eu encontre e me auxilie.

[Link do curso - Curso PHP do jeito certo, criando um micro framework](https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6205)

#### Anotação #1
O "Raphael\\" que vemos em baixo é chamado de vendor name e como convenção e NÃO obrigação ele aponta para o src.

```json
"autoload":{
    "psr-4":{
        "Raphael\\":"src"
    }
}
```


#### Anotação #2
Um namespace de qualidade normalmente é utilizado de dois elementos.

- Vendor Name : Fornecedor
- Sub Namespace : Nome do pacote ou biblioteca

Exemplo:
```php
//Router.php
namespace Raphael\Router;

class Router{
    public function __constructor(){
        echo 'hello world';
    }
}
```

```php
//app.php
new Raphael\Router\Router;

//legenda.
new VendorName\PackageName\ClassName;
```