<?php
use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\widgets\ActiveForm;
?>
<div class="multisteps-form card card-primary">
    <!--progress bar-->
    <div >
        <div class="row" style="margin-top: 50px">
            <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info"><sapn style="font-size: 15px;color: #495057">Выберите вид деятельности</sapn></button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address"><sapn style="font-size: 15px;color: #495057">Информация о заявителе</sapn></button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address"><sapn style="font-size: 15px;color: #495057">Сведения о руководителе</sapn></button>
                    <button class="multisteps-form__progress-btn" type="button" title="Order Info"><sapn style="font-size: 15px;color: #495057">Приложение к анкете</sapn></button>
                    <?php if ($ariza->type == 1){ ?>
                    <button class="multisteps-form__progress-btn progre1" type="button" title="Order Info"><sapn style="font-size: 15px;color: #495057">Общие сведения</sapn></button>
                    <?php }elseif ($ariza->type == 0){ ?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <!--form panels-->
    <div class="row">
        <div class="col-12 col-lg-12 m-auto">
            <?php $form = ActiveForm::begin(['action' => 'update?id='.$ariza->id,'id' => 'regForm', 'options' => [ 'enctype' => 'multipart/form-data', 'class' =>'multisteps-form__form', 'name' => 'form1'], 'method'=>'post']); ?>
            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <div class="multisteps-form__vie1content">
                    <div >
                        <p style="font-weight: 700; font-size: 17px; text-align: center">Выберите вид деятельности:</p>
                        <div >
                            <div class="custom-control custom-radio " style="float: left; margin-left: 40%">
                                <input type="radio" class="custom-control-input" id="customRadio" name="type" <?php if ($ariza->type == 1){ echo 'checked'; }else{echo ''; } ?>>
                                <label class="custom-control-label" for="customRadio">Туроператор</label>
                            </div>

                            <div>
                                <input type="radio"  style="margin-left: 25px"  id="defaultRadio1" name="type"  <?php if ($ariza->type == 0){ echo 'checked'; }else{echo ''; } ?> >
                                <label for="defaultRadio1" style="margin-left: 8px">Турагент</label>
                            </div>
                        </div>


                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary ml-auto js-btn-next" id="view11" type="button" title="Next">Cледующий</button>
                        </div>
                    </div>

                </div>
            </div>
            <div >
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">

                        <div >

                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <lable  ><b class="cols">Название юридического лица </b><span class="red">*</span></lable>
                                        <input  class="input1" value="<?php echo $ariza->yuridik_name; ?>"  name="yuridik_name" required>
                                    </p>
                                    <p>
                                        <lable><b class="cols">ИНН Юридического лица  </b><span class="red">*</span></lable>
                                        <input class="input1"  required name="inn" value="<?php echo $ariza->inn; ?>"  id="inn" placeholder="_ _ _ _ _ _">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Юридический адрес  </b><span class="red">*</span></lable>
                                        <input class="input1" placeholder="" value="<?php echo $ariza->legal_address; ?>"  required name="legal_address">
                                    </p>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"><b class="cols">Органзационно-правовая форма </b><span class="red">*</span></label>
                                        <select required name="organization_form" style="width: 100%!important; margin-left: 1px !important;" class="form-control" id="exampleFormControlSelect1">
                                            <?php foreach ($organization_form as $organization): ?>
                                                <?php if ($organization->id == $ariza->organization_form){ ?>
                                                <option selected value="<?php echo $organization->id;?>"><?php echo $organization->name;?></option>
                                                <?php } else{ ?>
                                                    <option value="<?php echo $organization->id;?>"><?php echo $organization->name;?></option>
                                                <?php } ?>
                                            <?php endforeach;?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"><b class="cols">Область</b><span class="red">*</span></label>
                                        <select required class="form-control" id="exampleFormControlSelect1" name="region"  style="width: 100%!important; margin-left: 1px !important;" >
                                            <?php foreach ($region as $regions): ?>
                                                <?php if ($regions->id == $ariza->region){ ?>
                                                    <option selected value="<?php echo $regions->id;?>"><?php echo $regions->name;?></option>
                                                <?php } else{ ?>
                                                    <option value="<?php echo $regions->id;?>"><?php echo $regions->name;?></option>
                                                <?php } ?>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 4px">

                                    <p>
                                        <lable><b class="cols">Телефон Юридического лица </b><span class="red">*</span></lable>
                                        <input  class="input1" id="phone-number"  value="<?php echo $ariza->legal_tell; ?>"  placeholder="(__) ___-__-__" required name="legal_tell">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Электронная почта  юридического лица  </b><span class="red">*</span></lable>
                                        <input  class="input1" placeholder=""  value="<?php echo $ariza->legal_email; ?>" required name="legal_email" >
                                    </p>
                                    <p>
                                        <lable><b class="cols">Направление туристической деятельности</b><span class="red">*</span></lable>
                                    </p>
                                    <p>
                                        <label class="con"><span style="margin-right:20px">Вьездной</span>
                                            <input type="checkbox"  value="Вьездной" id="tourist_destination1" name="tourist_destination1"<?php if ($tourist_destination->tourist_destination1 == 'Вьездной'){echo 'checked="checked"';}?>>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="con"><span style="margin-right:20px">Выездной</span>
                                            <input type="checkbox" value  id="tourist_destination2" name="tourist_destination2" <?php if ($tourist_destination->tourist_destination2 == 'Выездной'){echo 'checked';}?>>
                                            <span class="checkmark" ></span>
                                        </label>
                                        <label class="con"><span style="margin-right:20px">Внутренний</span>
                                            <input type="checkbox" value  id="tourist_destination3" name="tourist_destination3" <?php if ($tourist_destination->tourist_destination3 == 'Внутренний'){echo 'checked';}?>>
                                            <span class="checkmark"></span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Назад</button>
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Cледующий</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">

                        <div >

                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <lable><b class="cols">Ф.И.О руководителя </b><span class="red">*</span></lable>
                                        <input class="input1" required  value="<?php echo $ariza->manager_name; ?>" name="manager_name">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Паспортные данные </b><span class="red">*</span></lable>
                                        <input class="input1" id="pass" placeholder="AA 0000000" required  value="<?php echo $ariza->passport_data; ?>" name="passport_data">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Фактический адрес </b><span class="red">*</span></lable>
                                        <input class="input1"  required value="<?php echo $ariza->actual_address; ?>"  name="actual_address">
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <p>
                                        <lable><b class="cols">Телефонный номер руководителя </b><span class="red">*</span></lable>
                                        <input class="input1" id="phone-number"  required value="<?php echo $ariza->manager_phone; ?>"  name="manager_phone" placeholder="(__) ___-__-__">
                                    </p>
                                    <p>
                                        <lable><b class="cols">Год рождения </b><span class="red">*</span></lable>
                                        <input type="date" name='birth_date'  class="input1" required value="<?php echo $ariza->birth_date; ?>"  id="entry_date">
                                    </p>
                                    <p>
                                    <div class="form-group ">
                                        <lable><b class="cols">Прикрепите сканер диплома об образовании (Сертификат о квалификации или обучении) </b><span class="red">*</span></lable>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input error1" id="customFile"   name="reference" accept=".pdf">
                                            <label class="custom-file-label" for="customFile" ><?php echo substr($ariza->reference,14); ?></label>
                                            <div class="error-message" id="error1" >Файл не должен превыщать 5 МБ</div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="button-row d-flex mt-4">
                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Назад</button>
                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Cледующий</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <div class="multisteps-form__content">

                        <div >
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <lable><b class="cols">Адрес веб-сайта </b><span class="red">*</span></lable>
                                        <input class="input1"  required value="<?php echo $ariza->site_link; ?>" name="site_link">
                                    </p>
                                    <p>
                                        <lable><b class="cols">ПИН ФЛ </b><span class="red">*</span></lable>
                                        <input class="input1"  required value="<?php echo $ariza->ninfl; ?>" name="ninfl">
                                    </p>
                                    <p id="summa">
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <?php if ($tourist_destination->tourist_destination2 == 'Выездной'){ ?>
                                        <div class="form-group ">
                                            <lable><b class="cols">Документ потдверждающий о внесении депозита в "Фонд безопасного туризма" (Эквивалентно - 15 000 $)  </b><span class="red">*</span></lable>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input error7" id="customFile"    name="summa"  accept=".pdf">
                                                <label class="custom-file-label" for="customFile"><?php echo substr($ariza->summa,14); ?></label>
                                                <div class="error-message" id="error7" >Файл не должен превыщать 5 МБ</div>
                                            </div>
                                        </div>
                                    <?php }
                                        ?>


<!--                                    <div class="form-group ">-->
<!--                                        <lable><b class="cols">Копия документа, подтверждающий сумму устаного капитала  </b><span class="red">*</span></lable>-->
<!--                                        <div class="custom-file mb-3">-->
<!--                                            <input type="file" class="custom-file-input error3" id="customFile"    name="copy_document"  accept=".pdf">-->
<!--                                            <label class="custom-file-label" for="customFile">--><?php //echo substr($ariza->copy_document,14); ?><!--</label>-->
<!--                                            <div class="error-message" id="error3" >Файл не должен превыщать 5 МБ</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="form-group ">
                                        <lable><b class="cols">  Прикрепить "Полис страхования"  </b><span class="red">*</span></lable>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input error5" id="customFile"     name="sugirta_policy" accept=".pdf">
                                            <label class="custom-file-label" for="customFile"><?php echo substr($ariza->sugirta_policy,14); ?></label>
                                            <div class="error-message" id="error5" >Файл не должен превыщать 5 МБ</div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <lable><b class="cols"> Сертификат соответствия туристских услуг</b><span class="red">*</span></lable>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input error6" id="customFile"    name="certificate" accept=".pdf">
                                            <label class="custom-file-label" for="customFile"><?php echo substr($ariza->certificate,14); ?></label>
                                            <div class="error-message" id="error6" >Файл не должен превыщать 5 МБ</div>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="button-row d-flex mt-4 col-12">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Назад</button>
                                <?php if ($ariza->type == 1){ ?>
                                    <button class="btn btn-primary ml-auto js-btn-next send1 progre1" type="button" title="Next">Cледующий</button>
                                <?php }elseif ($ariza->type == 0){ ?>
                                    <input class="btn btn-success ml-auto "  style="float: right; width: 132px;margin-right: 13px " type="submit" value="Отправить">
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <?php if ($ariza->type == 1){ ?>
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white  progre1" data-animation="scaleIn">
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
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Назад</button>
                                <input class="btn btn-success ml-auto"  style="float: right; width: 132px;margin-right: 13px" type="submit" value="Отправить">
                            </div>
                        </div>
                    </div>
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <div class="multisteps-form__content">
                        </div>
                    </div>
                <?php }elseif ($ariza->type == 0){ ?>

                <?php }?>

            </div>
            <div id="view2">
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>