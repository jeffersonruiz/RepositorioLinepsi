<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Mensaje - Alerta';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="panel panel-primary">
        
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $this->title?></h3>
    </div>
    
    <div class="panel-body">
        <div class="container">  
            <div class="col-sm-10"> 
                <div class="alert alert-danger">
                    <p>Error en la entrada de Datos.</p>
                    <p>
                        
                        <?php
                            //echo ($model->errors);
                        ?>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>    