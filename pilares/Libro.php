<?php
require 'clase.php';
class Libro extends Editorial{

    //propiedades
    private string $libro;
    private string $autor;
    private string $fecha;
    private int $id;


    //metodos
   public function __construct(
       $nombre,
       $direccion,
       $telefono,
       $correo,
       string $libro,
       string $autor,
       string $fecha,
       int $id
   )
    
    {
        parent::__construct($nombre,$direccion,$telefono,$correo);
        $this->libro=$libro;
        $this->autor=$autor;
        $this->fecha=$fecha;
        $this->id=$id;
    }
    public function getInfo()
    {
     echo parent::getinfo();
     $info = "<b> $this->libro <br>
     </b> Autor: <i> $this->autor </i> <br>
     fecha: $this->fecha <br>
     Id: $this->id ";  
     
     return $info;
    }
    


}

//instancia de la clase Libro
$edit = new Libro(
    'Alba',
    'Mx',
    123456789,
    'editorial@albahaca.com',
    'Las batallas en el desierto',
    'José Emilio Pacheco',
    '07-05-1980',
     01
 


);
echo $edit->getInfo();




?>