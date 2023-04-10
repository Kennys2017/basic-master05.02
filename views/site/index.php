<?php

/** @var yii\web\View $this */

$this->title = 'AirWars';
?>
    <div style="">
        <h2 style="margin-top:50px; text-align:center;">Страйкбольный магазин AirWars- всё для страйкбола </h2>
 
    </div>
    <h2 style="text-align:center; margin-top:50px">Новинки</h2>
<div class="column_main" style=" display: grid;gap:20px;grid-template-rows: repeat(4, 1fr); grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: center">
    <?php
        foreach($post as $posts){
            echo '
            <div class="main_screen"  style="margin-top:30px;border:solid; border-color:grey; align-items:center;" class="col-lg-3; ">
            <h2 style=" width:200px; font-size:24px;text-align:center;">'.$posts->name.'</h2>

            <img class="" style="height:180px; width:200px; margin: 0, auto  " alt="Фото товара"  src="../uploads/'.$posts->image.'">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;">'.$posts->price.'</p>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700;"><a href="/busket" style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            ';
        }
    ?>
</div>