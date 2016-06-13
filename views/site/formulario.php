<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<h1>Formulario</h1>
<h3><?=$mensaje?></h3>
<?= html::beginForm(
    Url::toRoute("site/request"),
    "get",       
    ["class"=>'form-inline']      );
?>

<div class="form-group">
    <?= html::label("Introduce tu nombre", "nombre")?>
    <?= html::textInput("nombre",null,["class"=>"form-control"])?>
</div>

<?= html::submitInput("Enviar Nombre", ["class"=>"btn btn-primary"])?>
<?= html::endForm()?>