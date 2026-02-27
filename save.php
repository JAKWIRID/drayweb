<?php
$data = json_decode(file_get_contents("php://input"), true);
$image = $data['image'];

$image = str_replace('data:image/png;base64,', '', $image);
$image = str_replace(' ', '+', $image);

$fileName = 'foto/' . time() . '.png';
file_put_contents($fileName, base64_decode($image));

echo "Foto tersimpan";
?>
