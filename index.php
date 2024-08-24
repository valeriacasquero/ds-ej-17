<?php
require_once 'modelo/documento.php';
require_once 'modelo/obrasocial.php';
require_once 'modelo/personas.php';
require_once 'modelo/tipodedocumento.php';

$os = new ObraSocial();
$os->Id=1;
$os->Razonsocial= 'Osde';
$os->Cuit=23401225669;
$os->Sitioweb='osde.com';
$os->Telefonoatencionalcliente=4200230;

$d1 = new TipoDeDocumento();
$d1->Id=1;
$d1->Descripcion= 'DNI: ';
$d1->Habilitado= 'True';

$d2 = new TipoDeDocumento();
$d2->Id=2;
$d2->Descripcion= 'Pasaporte: ';
$d2->Habilitado= 'True';

$p = new Persona();
$p->Id=1;
$p->Nombre= 'Florencia';
$p->Apellido= 'Vazquez';
$p->Fechadenacimiento= '25/02/1997';

$dn1 = new Documento();
$dn1->Id= 1;
$dn1->Numero= 40122568;
$dn1->Habilitado='True';
$dn1->TipoDeDocumento= $d1;

$dn2 = new Documento();
$dn2->Id= 2;
$dn2->Numero= 39663156;
$dn2->Habilitado='True';
$dn2->TipoDeDocumento= $d2;

$p->Obrasocial= $os;
$p->ListDocumentos[]=$dn1;
$p->ListDocumentos[]=$dn2;

$p->MostrarDatos();












