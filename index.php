<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi Pagina Web</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Estudiando PHP</h1>

<section>
	<div>
		<h3>Decaracion de Variables</h3>
		<?php
			// Declaracion de variables
	$nombre = "Juan";
	$edad = 25;
	$altura = 1.75;
	$es_estudiante = true;

	// MOstrar los valores de las variables
	echo "Nombre: " . $nombre . "<br>";
	echo "Edad: " . $edad . "<br>";
	echo "Altura: " . $altura . " metros.<br>";

	// Utilizamos una variable en la exprecion
	$nueva_edad = $edad + 5;
	echo "Despues de 5 años, la edad sera: " . $nueva_edad . "<br>";

	// Uso de una variable booleana en una estructura condicional
	if ($es_estudiante) {
		echo "La persona es estudiante.<br>";
	} else {
		echo "La persona no es estudiante.<br>";
	}
		?>		
	</div>
	<div>
		<h3>Operadores y Expreciones</h3>
		<?php
			// Operradores y expreciones

	//declaración de dos variables
	$numero1 = 10;
	$numero2 = 5;

	// Operaciones Aritmeticas
	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicacion = $numero1 * $numero2;
	$division = $numero1 / $numero2;

	// Mostrar los resultados
	echo "Suma: " . $suma . "<br>";
	echo "Rersta: " . $resta . "<br>";
	echo "Multiplicacion: " . $multiplicacion . "<br>";
	echo "Division: " . $division . "<br>";

	// Declaraciones condicionales

	$condicion1 = true;
	$condicion2 = false;

	// Operadores logicos
	$resultado_and = ($condicion1 && $condicion2); // AND
	$resultado_or = ($condicion1 || $condicion2); // OR
	$resultado_not = !$condicion1; // NOT

	// Mostrat los resultados
	echo "Resultado de AND: "  . ($resultado_and ? 'Verdadero' : 'Flso') . "<br>";
	echo "Resultado de OR: "  . ($resultado_or ? 'Verdadero' : 'Flso') . "<br>";
	echo "Resultado de NOT: "  . ($resultado_not ? 'Verdadero' : 'Flso') . "<br>";

	// Operador de asignacion
	$numero = 10;

	// Operadores de concatenación
	$nombre = "Daniel";
	$apellido = "Martín";
	$nombre_completo = $nombre . " " . $apellido;


	// Operadores de incremento y decremento
	$contador = 5;
	$contador++; // Incrementa en 1
	$contador--; // Decremento en 1

	// Mostrar los resultados
	echo "Numero: " . $numero . "<br>";
	echo "Nombre completo: " . $nombre_completo . "<br>";
	echo "Contador despues de incremento: " .$contador . "<br>";
		?>
	</div>
	<div>
		<h3>Programacion orientada a Obejetos</h3>
		<?php
			// Ejemplo de programacion orientada a objetos
	// Definicion de una clase
	class Persona {
		// Atributos
		public $name;
		public $years;

		// Constructor
		public function __construct($name, $years) {
			$this->name = $name;
			$this->years = $years;
		}

		// Metodos
		public function saludar() {
			echo "Hola, mi nombre es {$this->name} y tengo {$this->years} años.";
		}
	}

	// Creacion de objeto
	$persona1 = new Persona("Ariel", 36);
	$persona2 = new Persona("Daniel", 25);

	// Llamada a un metodo

	$persona1->saludar();
	echo "<br>";
	$persona2->saludar();
	echo "<br>";		
		?>
	</div>
	<div>
		<h3>Clases</h3>
		<?php
			// Definicion de una clase llamada Coche
	class Coche {
		//Atributo de la clase
		public $marca;

		// Metodo contructor para inicializar el atributo
		public function __construct($marca) {
			$this->marca = $marca;
		}

		// Metodo de la clase para mostrar la marca del coche
		public function mostrarMarca() {
			echo "Este coche es de la marca {$this->marca}.";
		}
	}

	// Creacion de un objeto de la clase coche
	$miCoche = new Coche("Toyota");

	// Acceso al atributo y llamada al metodo del objeto
	echo $miCoche->mostrarMarca();

	echo "<br>";
		?>
	</div>
	<div>
		<h3>Propiedades y Metodos</h3>
		<?php
			// Propiedades y Metodos
	// Propiedades Publicas - public

	class LibroPublico {
		public $titulo;

		public function __construct($titulo) {
			$this->titulo = $titulo;
		}

		public function mostrarTitulo() {
			return "Título: {$this->titulo}";
		}
	}

$libroPublico = new LibroPublico("Las Sombras del Viento");
echo $libroPublico->mostrarTitulo();

echo "<br>";

	// Propiedad Privada - private

	class LibroPrivado {
		private $autor;

		public function __construct($autor) {
			$this->autor = $autor;
		}

		public function obtenerAutor() {
			return "Autor: {$this->autor}";
		}
	}

	$libroPrivado = new LibroPrivado("Carlos Ruiz Zafón");
	echo $libroPrivado->obtenerAutor();

	echo "<br>";

	// Propiedad Protegida - protected

	class LibroProtegido {
		protected $añoPublicacion;

		public function __construct($añoPublicacion) {
			$this->añoPublicacion = $añoPublicacion;
		}

		public function mostrarAñoPublicacion() {
			return "Año de publicación: {$this->añoPublicacion}";
		}
	}

	class LibroEspecial extends LibroProtegido {
		public function obtenerAño() {
			// Puede acceder a la propiedad prtegida de la clase padre
			return $this->añoPublicacion;
		}
	}

	$libroProtegido = new LibroEspecial(2001);
	echo $libroProtegido->mostrarAñoPublicacion() . "<br>";

	// Accediendo a la propiedad protegida a travez de un metodo publico en la clase derivada
	echo "Año Obtenido: " . $libroProtegido->obtenerAño();

	echo "<br>";

// Metodos
	//Definicion de una clase llamada Ejemplo
	class Ejemplo {
		// Metodo sencillo que imprime un mensaje
		public function saludar() {
			echo "Hola desde el metodo saludar";
		}
	}

	// Creacion de un objeto de la clase Ejemplo
	$objetoEjemplo = new Ejemplo();

	// Llamada al metodo saludar

	$objetoEjemplo->saludar();

	echo "<br>";
		?>
	</div>
	<div>
		<h3>Herencia y Polimorfismo</h3>
		<?php
		// Herencia y Polimorfismo

	// Definicion de una clase base

	class Animal {
		// Propiedad de la clase base
		public $nomAnimal;

		// Metodo de la clase base
		public function animalSaludar() {
			echo "Hola, soy un animal!\n";
		}
	}

	// Definicion de la clase derivada
	class Perro extends Animal {
		// Metodo adicional de la sabclase
		public function ladrar() {
			echo "Guau, guau!\n";
		}

		// Sobrescibiendo el metodo de la clase base
		public function animalSaludar() {
			echo "Hola, soy un perro!\n";
		}
	}

	// Creacion de un objeto de la clase base
	$animalGenerico = new Animal();
	$animalGenerico->animalSaludar();

	echo "<br>";

	// Creacion de un objeto de la subclase
	$miPerro = new Perro();
	$miPerro->nombre = "Max";
	$miPerro->animalSaludar(); // Utiliza el metodo sobre escrito
	$miPerro->ladrar();

	echo "<br>";

	//Definicion de dos clases con un metodo comun
	class Gato {
		public function hacerSonido() {
			return "¡Miau!";
		}
	}

	class Perrito {
		public function hacerSonido() {
			return "¡Guau!";
		}
	}

	// funcion que utiliza Polimorfismo
	function emitirSonido($animal) {
		return $animal->hacerSonido();
	}

	// Creacion de un objeto de las clases Gato y Perrito

	$miGato = new Gato();
	$miPerrito = new Perrito();

	// uso de la funcion con polimorfismo
	echo emitirSonido($miGato); // Muestra "¡Miau!"
	echo "<br>";
	echo emitirSonido($miPerrito); // Muestra "¡Guau!"

	echo "<br>";
		?>
	</div>
	<div>
		<h3>Interfaces</h3>
		<?php
		// Interfaces
			//Definicion de una interfaz llamada Volador
		interface Volador {
			public function despegar();
			public function volar();
			public function aterrizar();
		}

	// Implemantacion de la interfaz en una clase llamada Avion
	class Avion implements Volador {
		public function despegar() {
			echo "Avion despegando.\n";
		}

		public function volar() {
			echo "Avion volando a gran altitud.\n";
		}

		public function aterrizar() {
			echo "Avion aterrizando de manera segura.\n";
		}
	}

	// Creacion de un objeto de la clase Avion
	$miAvion = new Avion();

	// Uso de los metodos de la interfaz
	$miAvion->despegar();
	echo "<br>";
	$miAvion->volar();
	echo "<br>";
	$miAvion->aterrizar();

		echo "<br>";
		?>
	</div>
</section>

</body>
</html>