<?php
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<style type="text/css">
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 17px;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div class="alert alert-success alert-info">
    <div class="text-center" style="font-size: 21px">Заявка</div>
</div>

<div class="card card-primary card-outline"  style="margin: 10px 40px; width: 90%; padding: 20px 20px">
    <div class="card-body box-profile ">
        <table>
<!--            <tr>-->
<!--                <th>Запрос</th>-->
<!--                <th>Ответ</th>-->
<!--            </tr>-->
            <tr>
                <td><b>Номер приложения</b></td>
                <td> <a class="float-right"><?php echo $ariza->id; ?></a></td>
            </tr>
            <tr>
                <td><b>Название юридического лица</b></td>
                <td> <a class="float-right"><?php echo $ariza->yuridik_name; ?></a></td>
            </tr>
            <tr>
                <td><b>Органзационно-правовая форма</b></td>
                <td> <a class="float-right"><?php echo $ariza->organization_form; ?></a></td>
            </tr>
            <tr>
                <td><b>ИНН Юридического лица</b> </td>
                <td><a class="float-right"><?php echo $ariza->inn; ?></a></td>
            </tr>
            <tr>
                <td><b>Юридический адрес</b></td>
                <td><a class="float-right"><?php echo $ariza->legal_address; ?></a></td>
            </tr>
            <tr>
                <td><b>Область</b></td>
                <td> <a class="float-right"><?php echo $ariza->region; ?></a></td>
            </tr>
            <tr>
                <td><b>Телефон Юридического лица</b></td>
                <td> <a class="float-right"><?php echo $ariza->legal_tell; ?></a>      </td>
            </tr>
            <tr>
                <td> <b>Электронная почта юридического лица</b> </td>
                <td>  <a class="float-right"><?php echo $ariza->legal_email; ?></a>   </td>
            </tr>
            <tr>
                <td>  <b>Направление туристической деятельности</b> </td>
                <td>   <a class="float-right"><?php echo $ariza->tourist_destination; ?></a>  </td>
            </tr>
            <tr>
                <td>  <b>Имя руководителя</b> </td>
                <td>   <a class="float-right"><?php echo $ariza->manager_name; ?></a> </td>
            </tr>
            <tr>
                <td> <b>Паспортные данные</b> </td>
                <td>  <a class="float-right"><?php echo $ariza->passport_data; ?></a>   </td>
            </tr>
            <tr>
                <td>  <b>Фактический адрес</b>  </td>
                <td>   <a class="float-right"><?php echo $ariza->actual_address; ?></a> </td>
            </tr>
            <tr>
                <td>  <b>Телефонный номер руководителя</b></td>
                <td>   <a class="float-right"><?php echo $ariza->manager_phone; ?></a>  </td>
            </tr>
            <tr>
                <td> <b>Год рождения</b> </td>
                <td>   <a class="float-right"><?php echo $ariza->birth_date; ?></a>  </td>
            </tr>
            <tr>
                <td> <b>Маьлумот(Диплом)</b> </td>
                <td>  <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$ariza->reference"], true)?>"  class="float-right"><button  style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a>   </td>
            </tr>
            <tr>
                <td> <b>Cайт название</b>   </td>
                <td> <a class="float-right"><?php echo $ariza->site_name; ?></a>  </td>
            </tr>
            <tr>
                <td> <b>сайт сслка</b></td>
                <td>   <a class="float-right"><?php echo $ariza->site_link; ?></a>   </td>
            </tr>
            <tr>
                <td>  <b>Копия документа, подтверждающий сумму устаного капитала</b>  </td>
                <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$ariza->copy_document"], true)?>"  class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a> </td>
            </tr>
            <tr>
                <td> <b>Сертификат соответствия туристских услуг</b>  </td>
                <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$ariza->certificate_conformity"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a> </td>
            </tr>

        </table>

        <div class="card">
            <h4 class="card-header"><b>Сведения о специалистах</b></h4>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Ф.И.О </th>
                        <th>Паспортные данные</th>
                        <th>Мальлумот</th>
                    </tr>
                    <?php foreach ($information_specialists as $information_specialist):?>
                        <tr>
                            <td><?php echo $information_specialist->specialist_full_name; ?></td>
                            <td><?php echo $information_specialist->specialist_passport_data; ?></td>
                            <td><?php echo $information_specialist->specialist_data; ?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>

        <div class="card">
            <h4 class="card-header"><b>Филиалы</b></h4>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Месторасположение филиала</th>
                        <th>Сугирта полис</th>
                        <th>Сумма</th>
                        <th>Сертификат</th>
                    </tr>
                    <?php foreach ($branches as $branche):?>
                        <tr>
                            <td><?php echo $branche->branch_location; ?></td>
                            <td><a href="<?=\yii\helpers\Url::to(["../admin/diplom/$branche->branche_sugirta_policy"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a></td>
                            <td><?php echo $branche->branche_amount; ?></td>
                            <td> <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$branche->branche_certificate"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>

        <div class="card">
            <h4 class="card-header"><b>Корхона</b></h4>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Название филиал </th>
                        <th>location</th>
                    </tr>
                    <?php foreach ($korxona as $kor):?>
                        <tr>
                            <td><?php echo $kor->branch_name; ?></td>
                            <td><?php echo $kor->branch_location1; ?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 text-center">
                <a class=" btn btn-success" style="font-size: 15px;" href="<?=\yii\helpers\Url::to(["/site/status?id=$ariza->id&&status=2"], true)?>">Qabul qilish</a>
            </div>
            <div class="col-sm-6 text-center">
                <a class="btn btn-danger" style="font-size: 15px;"  href="<?=\yii\helpers\Url::to(["/site/status?id=$ariza->id&&status=3"], true)?>">Rad etish</a>
            </div>
        </div>
    </div>
</div>
