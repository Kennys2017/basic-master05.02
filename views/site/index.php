<?php

/** @var yii\web\View $this */

$this->title = 'No Ozone';
?>
    <div class="colummn">
        <h2 style="margin-top:30px; text-align:center;">Страйкбольный магазин AirWars- всё для страйкбола </h2>
 
    </div>
    <h2 style="text-align:center; margin-top:30px">Новинки</h2>
<div class="collumn">
    <?php
        foreach($post as $posts){
            echo '
            <div  style="margin-top:30px;border:solid; border-color:grey;" class="col-lg-3">
            <h2 style="text-align:center">'.$posts->name.'</h2>

            <img class="img-responsive" style="height:200px; margin-left:70px; " alt="Фото товара"  src="../uploads/'.$posts->image.'">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;">'.$posts->price.'</p>

            <button type="button"  style="margin-left:110px; margin-bottom: 20px; font-size:18px; font-weight:700;"><a href="/busket" style="text-decoration:none; color:black;">Купить</a></button>
            </div>
            ';
        }
    ?>
</div>