<?php

use yii\helpers\Html;
use yii\grid\GridView;
use fedemotta\datatables\DataTables;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BuildingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buildings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-body">

                    <p>
                        <?= Html::a('<i class="fa fa-plus"></i> Add New', ['create'], ['class' => 'btn btn-success btn-xs']) ?>
                    </p>

                    <?= DataTables::widget([
                        
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'clientOptions' => [
                            "lengthMenu"=> [[20,-1], [20,Yii::t('app',"All")]],
                            "info"=>false,
                            "responsive"=>true, 
                            "dom"=> 'lfTrtip',
                            "tableTools"=>[
                                "aButtons"=> [  
                                    [
                                    "sExtends"=> "copy",
                                    "sButtonText"=> Yii::t('app',"Copy to clipboard")
                                    ],[
                                    "sExtends"=> "csv",
                                    "sButtonText"=> Yii::t('app',"Save to CSV")
                                    ],[
                                    "sExtends"=> "xls",
                                    "oSelectorOpts"=> ["page"=> 'current']
                                    ],[
                                    "sExtends"=> "pdf",
                                    "sButtonText"=> Yii::t('app',"Save to PDF")
                                    ],[
                                    "sExtends"=> "print",
                                    "sButtonText"=> Yii::t('app',"Print")
                                    ],
                                ]
                            ]
                        ],
                        'columns' => [
                            
                            ['class' => 'yii\grid\SerialColumn'],
                            
                            //'id',
                            'code_building:ntext',
                            'name:ntext',
                            'floor_num',
                            //'created_at',
                            // 'created_by',
                            // 'updated_at',
                            // 'updated_by',
                            

                            [
                            'label' => 'Property',
                            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                            'value' => 'property.name',
                            ],
                            
                            [

                            'class' => 'yii\grid\ActionColumn',
                	    'template' => '{update} {view}',
                            
                            ],

                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
