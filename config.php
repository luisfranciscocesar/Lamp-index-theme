<?php
// name of the folder where your projects
$name_dir_public = "./";

$dir = $name_dir_public;

$rutaurl = "";
// Run the recursive function

$response = scan($dir);


// This function scans the files folder recursively, and builds a large array

function scan($dir){

	$files = array();

	// Is there actually such a folder/file?

	if(file_exists($dir)){

		foreach(scandir($dir) as $f) {

			// Date time spanish
			$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
			$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			$ctime = filemtime($dir . '/' . $f);
			$date_es = $dias[date('w',$ctime)]." ".date('d',$ctime)." de ".$meses[date('n',$ctime)-1]. " del ".date('Y',$ctime)." ".date('h',$ctime).":".date('i',$ctime).":".date('s',$ctime);

			// Date time english
			//$ctime = filemtime($dir . '/' . $f);
			//$date_format = "l jS \of F Y h:i:s A";
			//$date = date($date_format, $ctime);

			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}

			if(is_dir($dir . '/' . $f)) {

				// The path is a folder
				if($f == 'assets'){
					
				}else{
					$files[] = array(
						"name" => $f,
						"type" => "folder",
						"path" => $dir . '/' . $f,
						"items" => scan($dir . '/' . $f), // Recursively get the contents of the folder
						"date" => $date_es
					);
				}

			}

			else {

				if($f == 'config.php' || $f == 'index.php'){
					
				}else{
					$files[] = array(
						"name" => $f,
						"type" => "file",
						"path" => $dir . '/' . $f,
						"size" => filesize($dir . '/' . $f), // Gets the size of this file
						"date" => $date_es
					);
				}


			}
		}

	}

	return $files;
}
// Output the directory listing as JSON

header('Content-type: application/json');

echo json_encode(array(
	"name" => $rutaurl,
	"type" => "folder",
	"path" => $rutaurl,
	"items" => $response
));
