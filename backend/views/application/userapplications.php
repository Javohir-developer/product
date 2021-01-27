<?php
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use common\models\Branches;
use common\models\InformationSpecialists;
use common\models\Korxona;
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
  <?php foreach ($arizalar as $application1):?>
    <div class="card card-primary card-outline"  style="margin: 10px 40px; width: 90%; padding: 20px 20px">
        <div class="card-body box-profile ">
                <table>
                    <!--            <tr>-->
                    <!--                <th>Запрос</th>-->
                    <!--                <th>Ответ</th>-->
                    <!--            </tr>-->
                    <tr>
                        <td><b>Номер Заявка</b></td>
                        <td> <a class="float-right"><?php echo $application1->id; ?></a></td>
                    </tr>
                    <tr>
                        <td><b>Cтатус приложения</b></td>
                        <td>
                            <a class="float-right">
                                <?php
                                if ( $application1->status == 0){
                                    echo '<span style="color: #0e84b5">Modertor tomonidan ko‘rib chiqilishi kutilmoqda</span>';
                                }elseif ( $application1->status == 1){
                                    echo '<span style="color: #00e765">Ko‘rib chiqilimoqda</span>';
                                }elseif ( $application1->status == 2){
                                    echo '<span style="color: #0f401b">Arizangiz ko‘rib chiqildi, murojat uchun +998971234567</span>';
                                }elseif ( $application1->status == 3){
                                    echo '<span style="color: red">Rad etildi</span>';
                                }
                                ?>
                            </a>
                        </td>
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
                        <td> <b>Маьлумот(Диплом)</b> </td>
                        <td>  <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->reference"], true)?>"  class="float-right"><button  style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a>   </td>
                    </tr>
                    <tr>
                        <td> <b>Cсайт image</b>   </td>
                        <td> <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->site_name"], true)?>" class="float-right"><button  style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a>  </td>
                    </tr>
                    <tr>
                        <td>  <b>Копия документа, подтверждающий сумму устаного капитала</b>  </td>
                        <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->copy_document"], true)?>"  class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button> </a> </td>
                    </tr>
                    <tr>
                        <td> <b>Сертификат соответствия туристских услуг</b>  </td>
                        <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->certificate_conformity"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a> </td>
                    </tr>

                    <tr>
                        <td> <b>Сугирта полис</b>  </td>
                        <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->sugirta_policy"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a> </td>
                    </tr>
                    <tr>
                        <td> <b>Сертификат</b>  </td>
                        <td>   <a href="<?=\yii\helpers\Url::to(["../admin/diplom/$application1->certificate"], true)?>" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a> </td>
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
                            <?php $information_specialists = InformationSpecialists::findAll(['application_id'=> $application1->id]);?>
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

<!--            <div class="card">-->
<!--                <h4 class="card-header"><b>Филиалы</b></h4>-->
<!--                <div class="card-body">-->
<!--                    <table>-->
<!--                        <tr>-->
<!--                            <th>Месторасположение филиала</th>-->
<!--                            <th>Сугирта полис</th>-->
<!--                            <th>Сумма</th>-->
<!--                            <th>Сертификат</th>-->
<!--                        </tr>-->
<!--                        --><?php //$branches = Branches::findAll(['application_id'=> $application1->id]);?>
<!--                        --><?php //foreach ($branches as $branche):?>
<!--                            <tr>-->
<!--                                <td>--><?php //echo $branche->branch_location; ?><!--</td>-->
<!--                                <td><a href="--><?//=\yii\helpers\Url::to(["../admin/diplom/$branche->branche_sugirta_policy"], true)?><!--" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a></td>-->
<!--                                <td>--><?php //echo $branche->branche_amount; ?><!--</td>-->
<!--                                <td> <a href="--><?//=\yii\helpers\Url::to(["../admin/diplom/$branche->branche_certificate"], true)?><!--" class="float-right"><button style="font-size: 15px;"  type="button" class="btn btn-primary">ko'rish</button></a></td>-->
<!--                            </tr>-->
<!--                        --><?php //endforeach;?>
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->

            <div class="card">
                <h4 class="card-header"><b>Филиалы</b></h4>
                <div class="card-body">
                    <table>
                        <tr>
                            <th>Название филиал </th>
<!--                            <th>location</th>-->
                        </tr>
                        <?php $korxona = Korxona::findAll(['application_id'=> $application1->id]);?>
                        <?php foreach ($korxona as $kor):?>
                            <tr>
                                <td><?php echo $kor->branch_name; ?></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>


        </div>
    </div>
<?php endforeach;?>