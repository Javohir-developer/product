<?php
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\widgets\ActiveForm;
?>

<br>

<?php if ($user->rule == 'User'){?>

    <div class="multisteps-form card card-primary">
        <!--progress bar-->
        <div >
            <div class="row" style="margin-top: 50px">
                <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                    <div class="multisteps-form__progress">
                        <button  id="progrestop1" class="multisteps-form__progress-btn1 js-active" type="button" title="User Info"><sapn style="font-size: 15px;color: #495057">Выберите вид деятельности</sapn></button>
                        <button  id="progrestop2" class="multisteps-form__progress-btn1" type="button" title="Address"><sapn style="font-size: 15px;color: #495057">Информация о заявителе</sapn></button>
                        <button  id="progrestop3" class="multisteps-form__progress-btn1" type="button" title="Order Info"><sapn style="font-size: 15px;color: #495057">Приложение к анкете</sapn></button>
                        <button  id="progrestop4" class="multisteps-form__progress-btn1" type="button" title="Order Info"><sapn style="font-size: 15px;color: #495057">Общие сведения</sapn></button>
                        <button  id="progrestop5" class="multisteps-form__progress-btn1" type="button" title="Address"><sapn style="font-size: 15px;color: #495057">Сведения о руководителе</sapn></button>
                    </div>
                </div>
            </div>
        </div>

        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-12 m-auto">
                <?php $form = ActiveForm::begin(['action' => 'application/create','id' => 'regForm', 'options' => [ 'enctype' => 'multipart/form-data', 'class' =>'multisteps-form__form', 'name' => 'form1'], 'method'=>'post']); ?>
                    <div id="progresbot1" class="multisteps-form__panel1 shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                    <div class="multisteps-form__vie1content">
                        <p style="font-weight: 700; font-size: 17px; text-align: center">Выберите вид деятельности:</p>
                        <div >
                            <div class="custom-control custom-radio " style="float: left; margin-left: 40%">
                                <input type="radio" class="custom-control-input" id="customRadio" name="type" checked value="1">
                                <label class="custom-control-label" for="customRadio">Туроператор</label>
                            </div>

                            <div>
                                <input type="radio"  style="margin-left: 25px"  id="defaultRadio1" name="type" value="0">
                                <label for="defaultRadio1" style="margin-left: 8px">Турагент</label>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" id="progressend1" type="button" title="Next">Cледующий</button>
                        </div>
                    </div>
                </div>
                    <div id="progresbot2" class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <div class="multisteps-form__content">

                            <div >

                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            <lable  ><b class="cols">Название юридического лица </b><span class="red">*</span></lable>
                                            <input  class="input1"  name="yuridik_name" required>
                                        </p>
                                        <p>
                                            <lable><b class="cols">ИНН Юридического лица  </b><span class="red">*</span></lable>
                                            <input class="input1"  required name="inn"  id="inn" placeholder="_ _ _ _ _ _">
                                        </p>
                                        <p>
                                            <lable><b class="cols">Юридический адрес  </b><span class="red">*</span></lable>
                                            <input class="input1" placeholder="" required name="legal_address">
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"><b class="cols">Органзационно-правовая форма </b><span class="red">*</span></label>
                                            <select required name="organization_form" style="width: 100%!important; margin-left: 1px !important;" class="form-control" id="exampleFormControlSelect1">
                                                <?php foreach ($organization_form as $organization): ?>
                                                    <option value="<?php echo $organization->id;?>"><?php echo $organization->name;?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"><b class="cols">Область</b><span class="red">*</span></label>
                                            <select required class="form-control" id="exampleFormControlSelect1" name="region"  style="width: 100%!important; margin-left: 1px !important;" >
                                                <?php foreach ($region as $regions): ?>
                                                    <option value="<?php echo $regions->id;?>"><?php echo $regions->name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 4px">

                                        <p>
                                            <lable><b class="cols">Телефон Юридического лица </b><span class="red">*</span></lable>
                                            <input  class="input1" id="phone-number"  placeholder="(__) ___-__-__" required name="legal_tell">
                                        </p>
                                        <p>
                                            <lable><b class="cols">Электронная почта  юридического лица  </b><span class="red">*</span></lable>
                                            <input  class="input1" placeholder="" required name="legal_email" >
                                        </p>
                                        <p>
                                            <lable><b class="cols">Направление туристической деятельности</b><span class="red">*</span></lable>
                                        </p>
                                        <p>
                                            <label class="con"><span style="margin-right:20px">Вьездной</span>
                                                <input type="checkbox"  value="Вьездной" id="tourist_destination1" name="tourist_destination1" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="con"><span style="margin-right:20px">Выездной</span>
                                                <input type="checkbox" value="0"  id="tourist_destination2" name="tourist_destination2">
                                                <span class="checkmark" ></span>
                                            </label>
                                            <label class="con"><span style="margin-right:20px">Внутренний</span>
                                                <input type="checkbox" value="0"  id="tourist_destination3" name="tourist_destination3">
                                                <span class="checkmark"></span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" id="progresbec2" title="Prev">Назад</button>
                                <button class="btn btn-primary ml-auto js-btn-next" id="progressend2" type="button" title="Next">Cледующий</button>
                            </div>
                        </div>
                    </div>
                    <div id="progresbot3" class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <div class="multisteps-form__content">

                            <div >
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                            <lable><b class="cols">Адрес веб-сайта </b><span class="red">*</span></lable>
                                            <input class="input1"  required name="site_link">
                                        </p>
                                        <p>
                                            <lable><b class="cols">ПИН ФЛ </b><span class="red">*</span></lable>
                                            <input class="input1"  required name="ninfl">
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group " id="sum">
                                            <lable><b class="cols">Документ потдверждающий о внесении депозита в "Фонд безопасного туризма" (Эквивалентно - 15 000 $)  </b><span class="red">*</span></lable>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input error7" id="customFile"  name="summa"  accept=".pdf">
                                                <label class="custom-file-label" for="customFile"><i class="fa fa-upload" style="margin-left: 92%"  aria-hidden="true"></i></label>
                                                <div class="error-message" id="error7" >Файл не должен превыщать 5 МБ</div>
                                            </div>
                                        </div>
<!--                                        <div class="form-group ">-->
<!--                                            <lable><b class="cols">Копия документа, подтверждающий сумму устаного капитала  </b><span class="red">*</span></lable>-->
<!--                                            <div class="custom-file mb-3">-->
<!--                                                <input type="file" class="custom-file-input error3" id="customFile"   required name="copy_document"  accept=".pdf">-->
<!--                                                <label class="custom-file-label" for="customFile"><i class="fa fa-upload" style="margin-left: 92%"  aria-hidden="true"></i></label>-->
<!--                                                <div class="error-message" id="error3" >Файл не должен превыщать 5 МБ</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                            <div class="form-group ">-->
<!--                                                <lable><b class="cols">Сертификат соответствия туристских услуг </b><span class="red">*</span></lable>-->
<!--                                                <div class="custom-file mb-3">-->
<!--                                                    <input type="file" class="custom-file-input error4" id="customFile"   required  name="certificate_conformity" accept=".pdf">-->
<!--                                                    <label class="custom-file-label" for="customFile"><i class="fa fa-upload" style="margin-left: 92%"  aria-hidden="true"></i></label>-->
<!--                                                    <div class="error-message" id="error4" >Файл не должен превыщать 5 МБ</div>-->
<!--                                                </div>-->
<!--                                            </div>-->

                                        <div class="form-group ">
                                            <lable><b class="cols">  Прикрепить "Полис страхования"  </b><span class="red">*</span></lable>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input error5" id="customFile"   required  name="sugirta_policy" accept=".pdf">
                                                <label class="custom-file-label" for="customFile"><i class="fa fa-upload" style="margin-left: 92%"  aria-hidden="true"></i></label>
                                                <div class="error-message" id="error5" >Файл не должен превыщать 5 МБ</div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <lable><b class="cols"> Сертификат соответствия туристских услуг</b><span class="red">*</span></lable>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input error6" id="customFile"   required name="certificate" accept=".pdf">
                                                <label class="custom-file-label" for="customFile"><i class="fa fa-upload" style="margin-left: 92%"  aria-hidden="true"></i></label>
                                                <div class="error-message" id="error6" >Файл не должен превыщать 5 МБ</div>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn btn-primary js-btn-prev" type="button" id="progresbec3" title="Prev">Назад</button>
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" id="progressend3" title="Next">Cледующий</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="progresbot4" class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <div class="multisteps-form__content">
                            <div >
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="cols">Сведения о специалистах организации <span class="red">*</span></p>
                                        <div class="input_fields_wrap">

                                            <p style="background: #6c757d3b;border-radius: 5px; padding: 8px 10px">
                                                <span > Ф.И.О</span>
                                                <span style="margin-left: 22%"> Паспортные данные</span>
                                                <span style="margin-left: 14.5%">Ученая степень</span>
                                                <button style="margin-left: 16.1%;
                                                        padding-top: 1px;
                                                        padding-left: 48px;
                                                        padding-right: 37px;
                                                        padding-bottom: 1px;"
                                                        class="add_field_button"><i class="fas fa-user-plus" style="font-size: 23px; padding: 4px 29px;"></i> </button>
                                            </p>
                                        </div>
                                        <input type="text" name="count" id="count" style="display: none">
                                    </div>
                                </div>

                            </div>
                            <div >
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="cols">Информаци о филияалах <span class="red">*</span></p>
                                        <div class="input">
                                            <p style="background: #6c757d3b;border-radius: 5px; padding: 8px 10px">
                                                <span >Месторасположение филиала</span>
                                                <button style="margin-left: 62.2%;
                                                padding-top: 2px;
                                                padding-right: 47px;
                                                padding-bottom: 2px;
                                                padding-left: 45px;" class="add"><i class="fas fa-plus-square" style="font-size: 23px; padding: 2px 29px;"></i>  </button>
                                            </p>
                                        </div>
                                        <input type="text" name="count2" id="count2" style="display: none">
                                    </div>
                                </div>

                            </div>

                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary js-btn-prev" type="button" id="progresbec4" title="Prev">Назад</button>
                                <button class="btn btn-primary ml-auto js-btn-next" id="progressend4" type="button" title="Next">Cледующий</button>
                            </div>
                        </div>
                    </div>
                    <div id="progresbot5" class="multisteps-form__panel1 shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">

                        <div >

                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <lable><b class="cols">Ф.И.О руководителя </b><span class="red">*</span></lable>
                                        <input class="input1" required name="manager_name">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Паспортные данные </b><span class="red">*</span></lable>
                                        <input class="input1" id="pass" placeholder="AA 0000000" required  name="passport_data">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Фактический адрес </b><span class="red">*</span></lable>
                                        <input class="input1"  required name="actual_address">
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <p>
                                        <lable><b class="cols">Телефонный номер руководителя </b><span class="red">*</span></lable>
                                        <input class="input1" id="phone-number"  required name="manager_phone" placeholder="(__) ___-__-__">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Год рождения </b><span class="red">*</span></lable>
                                        <input type="date" name='birth_date'  class="input1" required id="entry_date" value="">
                                    </p>
                                    <p>
                                    <div class="form-group ">
                                        <lable><b class="cols">Прикрепите сканер диплома об образовании (Сертификат о квалификации или обучении) </b><span class="red">*</span></lable>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input error1" id="customFile" required  name="reference" accept=".pdf">
                                            <label class="custom-file-label" for="customFile" ><i class="fa fa-upload" style="margin-left: 92%" aria-hidden="true"></i></label>
                                            <div class="error-message" id="error1" >Файл не должен превыщать 5 МБ</div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary js-btn-prev" type="button" id="progresbec5" title="Prev">Назад</button>
                            <input class="btn btn-success ml-auto"  style="float: right; width: 132px;margin-right: 13px" type="submit" value="Отправить">
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

    <?php
}elseif ($user->rule == 'Admin'){
    ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Все заявки получены</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Отправитель приложения</th>
                    <th>Статус</th>
                    <th style="width: 40px">Видеть</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($arizalar1 as $ariza): ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $ariza->yuridik_name;?></td>
                        <td>
                            <?php if ($ariza->status == 0 ){  ?>
                                <span class="btn btn-warning">Невидимое приложение</span>
                            <?php }elseif ($ariza->status == 1 ){ ?>
                                <span  class="btn btn-info">Заявка просмотрена</span>
                            <?php }elseif ($ariza->status == 2 ){?>
                                <span  class="btn btn-success">Заявка принята</span>
                            <?php }elseif ($ariza->status == 3 ){?>
                                <span  class="btn btn-danger">Заявка отклонена</span>
                            <?php }?>
                        </td>
                        <td><a href="<?=\yii\helpers\Url::to(["/site/application?id=$ariza->id"], true)?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php }?>




