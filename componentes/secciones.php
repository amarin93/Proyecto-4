<?php
//Arrays de lo que va en el array de secciones

$inicio=[
    'titulo' => 'Inicio',
    'contenido' => 'Bienvenido a la pagina',
    'imagen' => 'https://thumbs.gfycat.com/ComfortableEnergeticKinkajou-max-1mb.gif',
];

$estrategia=[
    'titulo' => 'Estrategia',
    'contenido' => 'Aquí encontraras estrategias sobre VGC 18',
    'imagen' => 'https://pa1.narvii.com/6228/d5b35cf50b141c63968025128c21a61b11e74e72_hq.gif',
];

$eventos=[
    'titulo' => 'Eventos',
    'contenido' => 'Información sobre proximos eventos',
    'imagen' => 'http://cdn.player.one/sites/player.one/files/2016/11/21/qr-scanner.jpg',
];

$tienda=[
    'titulo' => 'Tienda',
    'contenido' => 'Llevate un souvenir, no seas codo',
    'imagen' => 'https://media1.nintendowire.com/wp-content/uploads/2017/04/pokemongalleryfigures2.png',
];

$contactanos=[
    'titulo' => 'Contacto',
    'contenido' => 'Mandanos un correo',
    'imagen' => 'http://www.savecontinue.com/wp-content/uploads/2014/08/pokemonbanner.png',
];

//Array secciones

$secciones=[
    'p1'=> $inicio,
    'p2'=> $estrategia,
    'p3'=> $eventos,
    'p4'=> $tienda,
    'p5'=> $contactanos,
];

//si el dato existe, se lo pasa a la variable seccion y si no, se le asigna.

if(isset($_GET['seccion'])){
    $seccion = $_GET['seccion'];
}

if(!isset($_GET['seccion'])){
    $seccion = 'p1';
}

//reemplazo de datos con los array de seccion y contenido (2 dimensiones)
$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>

