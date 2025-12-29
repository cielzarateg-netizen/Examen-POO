<?php

class Book {

    //Propiedades: caracteristicas de nuestros objetos
    //Metodo: comportamiento de nuestros objetos

    //Metodos
    public function __construct(
        private string $author,
        private string $title,
        private float $price,
        private int $stcok,
        private int $id
    )
    {
       // Validamos: Si el precio es negativo, lanzamos la excepción
    if ($this->price < 0) {
        throw new Exception("Error: El precio del libro '$this->title' no puede ser negativo.");
    }
    
    }

    public function getInfo(){
        $info = "<b> $this->title </b> esrito por: <i> $this->author </i> <br>
        Precio: $this->price <br>
        ID: {$this->id}";

        if($this->stcok > 0){
            $info .= "<br> <strong> Disponible </strong> <br>";
        } else {
            $info .= "<br> <strong> No disponible </strong> <br>";
        }

        return $info;
    }
}

//Instancia de la clase book
$book1 = new Book(
    'George Orwell',
    'Rebelion en la granja',
    15.99,  
    100,
    1
);

echo $book1->getInfo();

//Instancia de la clase book
$book2 = new Book(
    'sdfsdg',
    'Game of thrones',
    1199,  
    0,
    2
);


echo $book2->getInfo();

//var_dump($book1);

//echo $book1->title;



try {
    // Intentamos crear un libro con precio erróneo para probar
    $bookError = new Book(
        'Autor de Prueba',
        'Libro con Error',
        -10.50,  // <--- Esto activará la excepción
        10,
        3
    );
    
    echo $bookError->getInfo();

} catch (Exception $e) {
    echo "<div style='color: red; border: 1px solid red; padding: 10px;'>";
    echo "<strong>Surgió un problema:</strong> " . $e->getMessage();
    echo "</div>";
}