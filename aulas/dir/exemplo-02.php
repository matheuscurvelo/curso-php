<?php
$data = [];
$images=scandir('images');
foreach ($images as $key => $value) {
    if (!in_array($value,array('.','..'))) {
        $filename = "images". DIRECTORY_SEPARATOR . $value;
        $info = pathinfo($filename);
        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s",filemtime($filename));
        $info['url'] = "http://localhost/curso-php/aulas/dir".str_replace("\\","/",$filename);
        array_push($data,$info);
    }
}

echo json_encode($data);
?>