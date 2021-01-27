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
            <tr>
                <td><b>Номер заявки
                        Главная
                        Мои заявки
                    </b></td>
                <td> <a class="float-right"><?php echo $application1->id; ?></a></td>
            </tr>
            <tr>
                <td><b>Название юридического лица</b></td>
                <td> <a class="float-right"><?php echo $application1->yuridik_name; ?></a></td>
            </tr>
            <tr>
                <td><b>Органзационно-правовая форма</b></td>
                <td> <a class="float-right"><?php echo $application1->organization_form; ?></a></td>
            </tr>
            <tr>
                <td><b>ИНН Юридического лица</b> </td>
                <td><a class="float-right"><?php echo $application1->inn; ?></a></td>
            </tr>
            <tr>
                <td><b>Юридический адрес</b></td>
                <td><a class="float-right"><?php echo $application1->legal_address; ?></a></td>
            </tr>
            <tr>
                <td><b>Область</b></td>
                <td> <a class="float-right"><?php echo $application1->region; ?></a></td>
            </tr>
            <tr>
                <td><b>Телефон Юридического лица</b></td>
                <td> <a class="float-right"><?php echo $application1->legal_tell; ?></a>      </td>
            </tr>
            <tr>
                <td> <b>Электронная почта юридического лица</b> </td>
                <td>  <a class="float-right"><?php echo $application1->legal_email; ?></a>   </td>
            </tr>
            <tr>
                <td>  <b>Направление туристической деятельности</b> </td>
                <td>   <a class="float-right"><?php echo $application1->tourist_destination; ?></a>  </td>
            </tr>
            <tr>
                <td>  <b>Имя руководителя</b> </td>
                <td>   <a class="float-right"><?php echo $application1->manager_name; ?></a> </td>
            </tr>
            <tr>
                <td> <b>Паспортные данные</b> </td>
                <td>  <a class="float-right"><?php echo $application1->passport_data; ?></a>   </td>
            </tr>
            <tr>
                <td>  <b>Фактический адрес</b>  </td>
                <td>   <a class="float-right"><?php echo $application1->actual_address; ?></a> </td>
            </tr>
            <tr>
                <td>  <b>Телефонный номер руководителя</b></td>
                <td>   <a class="float-right"><?php echo $application1->manager_phone; ?></a>  </td>
            </tr>
            <tr>
                <td> <b>Год рождения</b> </td>
                <td>   <a class="float-right"><?php echo $application1->birth_date; ?></a>  </td>
            </tr>
            <tr>
                <td> <b>сайт сслка</b></td>
                <td>   <a class="float-right"><?php echo $application1->site_link; ?></a>   </td>
            </tr>
            <tr>
                <td> <b>Прикрепите сканер диплома об образовании (Сертификат о квалификации или обучении)</b> </td>
                <td>  <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->reference"], true)?>"  class="float-right"><button  style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a>   </td>
            </tr>
            <tr>
                <td>  <b>Копия документа, подтверждающий сумму устаного капитала</b>  </td>
                <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->copy_document"], true)?>"  class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a> </td>
            </tr>
            <tr>
                <td>  <b>Сугирта полис</b>  </td>
                <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->sugirta_policy"], true)?>"  class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a> </td>
            </tr>
            <tr>
                <td> <b>Сертификат соответствия туристских услуг</b>  </td>
                <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->certificate"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a> </td>
            </tr>
        </table>

        <div class="card">
            <h4 class="card-header"><b>Сведения о специалистах организации</b></h4>
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
                        <th>Информаци о филияалах</th>
                        <!--                            <th>location</th>-->
                    </tr>
                    <?php foreach ($korxona as $kor):?>
                        <tr>
                            <td><?php echo $kor->branch_name; ?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-sm-4 text-center">
            </div>
            <div class="col-sm-4 text-center">
                <a class="btn btn-info" style="font-size: 15px;"  href="<?=\yii\helpers\Url::to(["/application/updateform?id=$application1->id"], true)?>">Обновить</a>
                <a class=" btn btn-success" style="font-size: 15px;float: left" href="<?=\yii\helpers\Url::to(["/application/sendstatus?id=$application1->id"], true)?>">Отправить</a>

            </div>
            <div class="col-sm-4 text-center">
            </div>
        </div>

    </div>
</div>
