<?php
class Editorial{

    //propiedades
    private string $nombre;
    private string $direccion;
    private int $telefono;
    private string $correo;


    //metodos
   public function __construct(
     string $nombre,
     string $direccion,
     int $telefono,
     string $correo
   )
    
    {
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->correo=$correo;
    }
    public function getInfo()
    {
     $info = "<b> $this->nombre <br>
     </b> Direccion: <i> $this->direccion </i> <br>
     Direccion: $this->telefono <br>
     Correo: $this->correo <br>";  
     
     return $info;
    }
    


}

//instancia de la clase Editorial
$edit = new Editorial(
    'Albahaca',
    'Mx',
    123456789,
     'editorial@albahaca.com'
 


);
//echo $edit->getInfo();




?>