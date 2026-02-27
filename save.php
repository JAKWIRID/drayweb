<?php
$data = json_decode(file_get_contents("php://input"), true);

if(isset($data['image'])){
    $image = str_replace('data:image/png;base64,', '', $data['image']);
    $image = str_replace(' ', '+', $image);

    if(!is_dir("foto")){
        mkdir("foto", 0777, true);
    }

    $fileName = 'foto/selfie_' . time() . '.png';
    file_put_contents($fileName, base64_decode($image));

    echo "Selfie tersimpan";
}
?>
