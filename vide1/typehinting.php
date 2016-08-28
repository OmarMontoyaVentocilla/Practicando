<?php

//class Papa {
//una constante de clase
// const Genero='masculino';	
// public $nombre;
// public $apellido="montoya";
// private $secreto="esto es privado";
// protected $protegido="esto es protegido";
// protected $numero1=14;
// protected $numero2=20;
// protected $numero3=40;

// public function getSecreto(){
//     return $this->secreto;
//  }

// private function cosaPrivada(){
// 	echo "esto es privado";
// }


// public function getNumero1(){
// 	return $this->numero1;
// }

// public function getNumero2(){
//      return $this->numero2;
// }

// public function getNumero3(){
//   return $this->numero3;
// }

// public function setNumero1($numero1){
//     $this->numero1=$numero1;
// }

// public function setNumero2($numero2){
//  $this->numero2=$numero2;
// }
// public function setNumero3($numero3){
//  $this->numero3=$numero3;
// }


// public function sumaN(){
// 	return $this->getNumero1()+$this->getNumero2()+$this->getNumero3();
// }


// }


// class Hijo extends Papa{
	
// public function __construct($nombre){
//      $this->nombre=$nombre;
// }

// public function saludar(){
// 	echo 'hola mira '.$this->protegido;
// }
	
// }


//aqui hago tyhinting 
// class Familia{
// 	public function miembro(Hijo $persona){
//       echo $persona->nombre.PHP_EOL;
//       echo $persona->apellido;
// 	}

 
    
// }


// $hijo=new Hijo('omar');
// echo "herede el apellido de papa,mi apellido es ".$hijo->apellido. " y mi nombre es: ".$hijo->nombre.PHP_EOL."<br>";
// echo $hijo->saludar();

//instancia de la clase hijo

//$persona = new Hijo('omar');
//usando  la clase familia

//$familia=new Familia();
//$familia->miembro($persona);

//$papa=new Hijo('omar');
//echo $papa->sumaN();

//redefino el valor del numero1 con set:
// $hijo=new Hijo('omar');
// echo $hijo->setNumero1(20);
// echo $hijo->sumaN();



/*constantes:valores q no cambian y no pueden ser redefinidos*/
//esto es global
//define("pi",3.1416);
//echo pi;

//ahora defeniremos cnstante en una clase
//$papa=new Papa();
//echo $papa::Genero;


/*novedad de php7 array constante*/

// define('Frutas',['manzana','pera','mango']);
// echo Frutas[1];
// 

/*clases abstractas*/
// abstract class  Animal{

// abstract public function hablar();	

// 	public function saludar(){
// 		$hola=$this->hablar().' '.$this->hablar();
// 		return $hola;
// 	}
// }


// class Perro extends Animal{
  
//   public function hablar(){
//       return 'woof';
//   }	
	
// }


// $perro=new Perro();
// echo $perro->saludar().'<br>';
// echo $perro->hablar();
// 
// 
// 


/*clases estaticas**/

class Papa{
	protected $edad;
	protected $nombre;
	protected $peso;
	protected $altura;

	public function __construct($edad,$nombre,$peso,$altura){
         $this->edad=$edad;
         $this->nombre=$nombre;
         $this->peso=$peso;
         $this->altura=$altura;
	}
                               
  public function getEdad(){
  	return $this->edad;
  }

  public function setEdad($edad){
    return $this->edad=$edad;
  }

  public function getNombre(){
  	return $this->nombre;
  }

  public function setNombre($nombre){
     return $this->nombre=$nombre;
  }
  
   public function getPeso(){
  	return $this->peso;
  }

  public function setPeso($peso){
     return $this->peso=$peso;
  }

  public function DatosPersonales(){
  	return 'La edad de papa es:'.$this->getEdad().' '. 'el nombre del papa es:'.$this->getNombre().' '.'el peso de papa es: '.$this->getPeso();
  }
 
}


class Hijo extends Papa{
	protected $nombreH;

public function __construct($nombreH){
	$this->nombreH=$nombreH;

}	

public function getNombreH(){
  	return $this->nombreH;
  }

  public function setNombreH($nombreH){
     return $this->nombreH=$nombreH;
  }

  public function DatosHijo(){
     return $this->DatosPersonales().' '.'y el nombre de el hijo que soy yo es: '.$this->getNombreH();  	
  }

}

//$papa=new Papa(15,'juan',45,1.70);
$papa=new Papa(15,'juan',45,1.70);
$hijo=new Hijo('omar');





/*traits */

//esto es para php5:
// function bienvenidos(){
// 	$nombres=func_get_args();
// 	foreach ($nombres as $nombre) {
// 		echo "bienvenidos,{$nombre}<br> ";
// 	}
// }
// esto es para php7:
// function bienvenidos(...$nombres){
 	
// 	foreach ($nombres as $nombre) {
// 		echo "bienvenidos,{$nombre}<br> ";
//  	}
//  }
//bienvenidos('omar','omar2','omar3');


//esto es para php5
// function sumaEnter($enteros){
// 	return array_sum($enteros);
// }
// echo sumaEnter(array(2,5,6,7,));


//esto es para php7
//
// declare(strict_types=1);
// function sumaEnter(int ...$enteros){
// 	return array_sum($enteros);
//  }
// echo sumaEnter(2,5,6,7);
// 
// 
/* throwing*/

// function beber($bebida){
//     if ($bebida=='cerveza') {
//     	throw new BebidaException;
//     }

//     return "bebiendo {$bebida}";
// }

// echo beber('cerveza');


// class BebidaException extends Exception
// {
	
// 	protected $message='esto es recontra malo ok?';
// }
// 
// 
// 
// 

/*try-catch*/

// function beber(){
	
// }


// try{
   
// }catch (Exception e){

// 
  




/**
* 
*/







