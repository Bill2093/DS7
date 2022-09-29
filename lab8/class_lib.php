<?php

	class Precio {

		public function sacarPrecio($precio1,$precio2,$precio3) {

			 	$media = ($precio1 + $precio2 + $precio3) / 3;
			    echo "<br/> DATOS RECIBIDOS";
			    echo "<br/> Precio producto establecimiento 1: ".$precio1." Dolares";
			    echo "<br/> Precio producto establecimiento 2: ".$precio2." Dolares";
			    echo "<br/> Precio producto establecimiento 3: ".$precio3." Dolares <br/>";
			    echo "<br/> El precio medio del producto es de: ".$media." Dolares";

		}	

	}


	class Arreglo {

		public function crearArreglo($v_min,$v_max) {

				$i_max=0;
	            $r_max=0;
	            $a= array();

	            echo "<b>Creacion de Arreglo automatizado:</b> <br><br>";
            
            for($i=1; $i<=20;$i++){
                $a[$i]=rand($v_min,$v_max);
                if($r_max==$a[$i]){
                    $a[$i]=$r_max-1;
                }
                if($r_max<$a[$i]){
                    $r_max=$a[$i];
                    $i_max=$i;
                }
            
                echo "|".$a[$i]."|";
            }
            echo "<br><br> el valor maximo es: ".$r_max." <br/> en el indice: ".$i_max;

        }
	}


  class Ventas{
        private $valor;

        public Function calcularP($valorVenta){
            echo "<br>";
            $valor = $valorVenta;
            if($valor >= 80){
                echo "<br><img src="."img/green.PNG"." alt=".">";
            }elseif($valor >= 50 && $valor<=79){
                echo "<br><img src="."img/yellow.PNG"." alt=".">";
            }else{
                echo "<br><img src="."img/red.PNG"." alt=".">";
            }
        }
    }



?>