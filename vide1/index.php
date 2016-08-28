<?php
/*$lenguajes=[
*'uno'=>['perro','gato',14],
*'dos'=>['hola','hola2',16],
*'tres'=>4
*];

var_dump($lenguajes['uno'][2]);*/

/*
if (true) {
  var_dump('esto se hace');
  var_dump('otro');
}
 */ 

/**	if(false){
	var_dump('esto no se imprime');
}*/

//$polo='html';

/**
 * if($polo=='css'){
*var_dump('el polo es de css');
*}elseif($polo=='html'){
 * var_dump('el polo es de html'); 
*}elseif($polo=='javascript'){
 *  var_dump('el polo es de javascript');
*}else{
*	var_dump('el polo no tiene marca');
*}
*/

/**
 * var_dump(isset($polo) ? $polo:'un mensaje');
 */

/**
 * $polos=0;
 * while($polos<10){
  *echo "nosotros tenemos {$polos} polos.<br>";
 * $polos++;
*}
*/

/**
 * $polos=0;
 * do{
	*echo "nosotros tenemos {$polos} polos<br>";
*	$polos++;
*}while($polos<10);
 */


//$polos=['css','js','html'];


/*foreach ($polos as $polo ) {
	echo "tengo un polo de {$polo}<br>";
}*/


/**foreach ($polos as $clave => $valor) {
	echo "la clave {$clave} tiene un valor {$valor}<br>";
}**/


/**for ($i=0; $i <=50 ; $i++) { 
	if($i%2==0){
       continue;
	}
	echo "numero {$i}<br>"; 
}*/


//function (){
//	$nombres=func_get_args();
  // foreach ($nombres as $nombre) {
  // 	echo "bienevenido, {$nombre}<br>";
   //}
//};

//$home=function(){
//	echo "home";
//};


//$home('ricardo','alan');

//declare(strict_types=1);

//function suma( int $x,int $y){
//	return $x+$y;
//}

//var_dump(suma(2,6));


/*class Producto{
	private $nombre;
	private $color;

public function __construct($nombre,$color){
   $this->nombre=$nombre;
   $this->color=$color;
}

public function getNombre(){
	return $this->nombre;
}

public function getColor(){
	return $this->color;
}

}

$pro=new Producto('leche','rojo');

echo "la ".$pro->getNombre().' es de color '.$pro->getColor();*/

/*$polo='html';

if($polo=='js'){
echo "este polo de {$polo} si es correcto";
}else if($polo=='html'){
echo "este polo de {$polo} no es de js,es de html";	
}else{
echo "game over";	
}*/

// $polos=0;
//  while ($polos<10) {
//  	echo "nosotros tenemos {$polos} polos"."<br>";
//  	$polos++;
//  }

// $polos=['css','js','java'];

// foreach ($polos as $polo => $valor) {
// 	echo "la posiion {$polo} tiene el valor {$valor}<br>";
// }


// function saludar()
// {
// echo "hola";
// }
//declare(strict_types=1);


// class Producto 
// {
	
//    public $nombre;
//    public $precio;

// 	// function __construct(){
// 	// 	# code...
// 	// }
// }

// $pr=new Producto;
// $pr->nombre='camistea css';
// $pr->precio=12;

// echo $pr->nombre.PHP_EOL;
// echo $pr->precio.PHP_EOL;


/**
* 
*/
// class Producto{
	
//   public $nombre;
//   public $precio;
//   //public $talla= array('sm','xs','lg');	
//   public $talla;
// public function __construct($nombre,$precio,$talla)
// 	{
// 	 $this->nombre=$nombre;
//  	 $this->precio=$precio;
//      $this->talla=$talla;
//     }

// // function resumen(){
// // 	echo $this->nombre.'<br>';
// // 	echo $this->precio.'<br>';
// // 	echo $this->talla.'<br>';
// // }

// }

// $pro=new Producto('omar',21,array('sm','xs','lg'));

// echo $pro->nombre.'<br>';
// echo $pro->precio.'<br>';
// echo  $pro->talla[0];



// class Fabrica{
	
// 	  public function fabricarMesas($p_color,$p_patas){
	  	
// 	return new Class($p_color,$p_patas){
//             private $color;
//             private $patas;
         
//     public function __construct($p_color,$p_patas){
//             $this->color=$p_color;
//             $this->patas=$p_patas;		
// 	}

// 	public  function getColor(){
// 		$this->color;
// 	}

// 	public  function getPatas(){
// 		$this->patas;
// 	}

// 	  	};
// 	  }

// }



class Papa {
	
public $nombre;
public $apellido="montoya";
private $secreto="esto es privado";
protected $protegido="esto es protegido";


public function getSecreto(){
    return $this->secreto;
 }

private function cosaPrivada(){
	echo "esto es privado";
}

}


class Hijo extends Papa{
	
public function __construct($nombre){
     $this->nombre=$nombre;
}

public function saludar(){
	echo 'hola mira '.$this->protegido;
}
	
}


$hijo=new Hijo('omar');
echo "herede el apellido de papa,mi apellido es ".$hijo->apellido. " y mi nombre es: ".$hijo->nombre.PHP_EOL."<br>";
echo $hijo->saludar();

?>




