<?php
/**
 * @package Hello_Fistro
 * @version 0.0.1
 */
/*
Plugin Name: Hello Fistro
Plugin URI: htts://jdevelopia.com
Description: Esto no es sólo un plugin, simboliza la esperanza, el humor y la cultura de un gran maestro cómico e icono de la cultura pop española, como es Chiquito de la Calzada.
Author: JuanKa Díaz
Version: 0.0.1
Author URI: https://jdevelopia.com/
*/

function hello_fistro_get_lyric() {
	/** These are the lyrics to Hello Fistro */
	$lyrics = "¡Pecador!
¿Te da cuen?
En vez del graduado escolar tenía una etiqueta de Anís del Mono
Trabaja menos que el sastre de Tarzán
Eres más falso que el flequillo del Dioni
Ere ma violento que el entrenador de lo Pogüer Renlle
Tienes más pintura que el neceser de Marujita Díaz
Sieteee caballo que vienennn de Bonanzaaarrlll
¡Ten cuidadínnn no te hagas pupita en el fistro duodenalll!
Eres más feo que el Fari comiendo limones
Eres más peligroso que un tiroteo en un ascensor
¡Fistro!
¡Le voy a jasé un número nuevoooorl!
¡Pecaor de la praderar!
¡No puedor, no puedor!
¡No te digo trigor por no llamarte Rodrigo!
¡Asexsuarrr!
¿Cómorr?
¡Hombre malo, violento!
¡Fuegorrrl!
¡Aguaaa, aguaaa!
¡Hijoputarrl!
¡A can demor e narrr!
¡Cobarderr!
¡Al ataquerrrr!
Meretérita
¡Jarl!
¡Que lo sepas!
¡Hijo míoorrr!
¡Er putaaarrr!
¡Hasta luego Lucasss!
¡Por la gloria de mi madre!
¡Se ha pasao usted con mi bambina! ¡Es usted un torpedo del año cuatro!
Acapiporla
Ay canemor
A güán, a peich, agromenáuer
¡Cuidadín!
¡Te voy a borrar el cerito sesualrllr!
¡Ese fistro danimarl!
¡Te viá cortá el fiistro dabajo!
¡Uno que nació después de los dolores!
¡No puede sé!
¡Es un diodená de persona humana!
¡Un gesto de hombre malo de la pradera!
Apiticain, mor nau
Se mueve uhté mah que los precioh!
¡Relájese usterl!
Relájate físicamente, morálmente
Lo maté en agosto, la calóh apretaba
¡No compre pan!";

	// Split the texto into lines
	$lyrics = explode( "\n", $lyrics );

	// Choose a quote random
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// Echoes the chosen random line
function hello_fistro() {
	$chosen = hello_fistro_get_lyric();
	echo "<p id='fistro'>$chosen</p>";
}

// Execute the function
add_action( 'admin_notices', 'hello_fistro' );

// Styles in CSS in-line
function fistro_css() {
	// Positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#fistro {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 13px;
		font-style: italic;
	}
	</style>
	";
}
add_action( 'admin_head', 'fistro_css' );
?>
