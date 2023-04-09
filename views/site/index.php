<?php

/** @var yii\web\View $this */

$this->title = 'No Ozone';
?>
    <div class="colummn">
        <h2 style="margin-top:30px; text-align:center;">Страйкбольный магазин AirWars- всё для страйкбола </h2>
        <img src="../sales.jpg" alt="Баннер акции" style="height:300px; margin-left:300px; margin-top:30px">
    </div>

<div class="row">
    <?php
        foreach($post as $posts){
            echo '
            <div  style="margin-top:50px;border:solid; border-color:grey;" class="col-lg-3">
            <h2 style="text-align:center">'.$posts->name.'</h2>

            <img class="img-responsive" style="height:200px; margin-left:70px; " alt="Фото товара"  src="uploads/'.$posts->image.'">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;">'.$posts->price.'</p>

            <button style="margin-left:110px; margin-bottom: 20px; font-size:18px; font-weight:700;">Купить</button>
            ';
        }
    ?>
</div>