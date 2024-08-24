<?php
class Persona {
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Fechadenacimiento;
    public $Obrasocial;
    public $ListDocumentos = array ();

    public function MostrarDatos(){
     echo 'Id: '.$this->Id. '<br>';
     echo 'Nombre: '.$this->Nombre. '<br>'; 
     echo 'Apellido: '.$this->Apellido. '<br>'; 
     echo 'Fecha de nacimiento: '.$this->Fechadenacimiento. '<br>';
     echo 'Razon social y sitio web de su obra social: '.$this->Obrasocial->Razonsocial. '<br>'; 
   

     foreach ($this->ListDocumentos as $Documento ) {
       echo 'Documento Id: '.$Documento->Id.'<br>';
       echo 'Numero documento: '.$Documento->Numero.'<br>';
       echo 'Documento habilitado: '.$Documento->Habilitado.'<br>';
       echo 'Tipo de documento: '.$Documento->TipoDeDocumento->Id.'<br>';
       echo 'Tipo de documento: '.$Documento->TipoDeDocumento->Descripcion.'<br>';
       echo 'Tipo de documento: '.$Documento->TipoDeDocumento->Habilitado.'<br>';


     }
     

    }
}