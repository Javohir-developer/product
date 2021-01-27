

$(document).ready(function() {
    var max_fields      = 8; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var x = 1;
    var a = 1;
    var b = 1;
    var c = 1;
    var d = 1;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
             x++; //text box increment
            $(wrapper).append('' +
                '<div style="margin-top: 6px">' +
                    '<input type="text" style="width: 24%; float: left; " name="specialist_full_name'+ a++ +'" required />' +
                    '<input style="width: 25%; float: left;    margin-left: 30px;"  type="text" name="specialist_passport_data'+ b++ +'" required/>' +
                    '<input style="width: 25%; float: left;    margin-left: 30px;"  type="text" name="specialist_data'+ c++ +'" required/>' +
                    '<a  href="#" class="remove_field">' +
                        '<button type="button" style="margin-left: 15px;\n' +
                        'padding-left: 78px;\n' +
                        'padding-top: 2px;\n' +
                        'padding-bottom: 2px;\n' +
                        'padding-right: 76px;" class="btn btn-danger"><i class=\'far fa-trash-alt\'></i></button>' +
                    '</a>' +
                '</div>' +
                '<br>');
            $("#count").val(d++);
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});


// $(document).ready(function() {
//     var max_fields      = 8; //maximum input boxes allowed
//     var wrapper         = $(".input_fields"); //Fields wrapper
//     var add_button      = $(".add_field"); //Add button ID
//     var x = 1;
//     var a = 1;
//     var b = 1;
//     var c = 1;
//     var d = 1;
//     var k = 1;
//     $(add_button).click(function(e){ //on add input button click
//         e.preventDefault();
//         if(x < max_fields){ //max input box allowed
//              x++; //text box increment
//             $(wrapper).append('' +
//                 '<div style="margin-top: 6px">' +
//                     '<input type="text" style="width: 18%; float: left;" name="branch_location'+ a++ +'" required/>' +
//                     '<input type="file"  accept=".pdf" style="width: 18%; float: left; margin-left: 81px;" name="branche_sugirta_policy'+ b++ +'" required/>' +
//                     // '<input  value="15.000 $" type="text" style="width: 18%; float: left; margin-left: 30px;" name="branche_amount'+ c++ +'" required/>' +
//                     '<input type="file" accept=".pdf" style="width: 18%; float: left; margin-left: 30px;" name="branche_certificate'+ d++ +'" required/>' +
//                     '<a  href="#" class="remove">' +
//                         '<button type="button" style="font-size: 13px; width: 15.5%;margin-left: 30px;" class="btn btn-danger">Удалить</button>' +
//                     '</a>' +
//                 '</div>' +
//                 '<br>');
//             $("#count1").val(k++);
//
//         }
//     });
//
//     $(wrapper).on("click",".remove", function(e){ //user click on remove text
//         e.preventDefault(); $(this).parent('div').remove(); x--;
//     })
// });

$(document).ready(function() {
    var max_fields      = 8; //maximum input boxes allowed
    var wrapper         = $(".input"); //Fields wrapper
    var add_button      = $(".add"); //Add button ID
    var x = 1;
    var a = 1;
    var b = 1;
    var c = 1;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
             x++; //text box increment
            $(wrapper).append('' +
                '<div style="margin-top: 6px">' +
                    '<input type="text" style="width: 80%; float: left;" name="branch_name'+ a++ +'" required/>' +
                    // '<input   type="text" style="width: 18%; float: left; margin-left: 118px;" name="branch_location1'+ b++ +'" required/>' +
                    '<a  href="#" class="remov">' +
                        '<button type="button" style="margin-left: 1.5%;padding-top: 2px;\n' +
                '    padding-right: 76px;\n' +
                '    padding-bottom: 2px;\n' +
                '    padding-left: 76px;" class="btn btn-danger"><i class=\'far fa-trash-alt\'></i></button>' +
                    '</a>' +
                '</div>' +
                '<br>');
            $("#count2").val(c++);
        }
    });

    $(wrapper).on("click",".remov", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
$("#sum").hide();
$(document).ready(function() {

    $( "#tourist_destination1").click(function() {
        if ($("#tourist_destination1").val() == '0'){
        }else if ($("#tourist_destination1").val() == 'Вьездной'){
            $("#tourist_destination1").val('0');
        }
    });


    $( "#tourist_destination2").click(function() {
        if ($("#tourist_destination2").val() == '0'){
            $("#tourist_destination2").val('Выездной');
            $("#sum").show();
        }else if ($("#tourist_destination2").val() == 'Выездной'){
            $("#tourist_destination2").val('0');
            $("#summa").remove();
            $("#sum").hide();
        }
    });


    $( "#tourist_destination3").click(function() {
        if ($("#tourist_destination3").val() == '0'){
            $("#tourist_destination3").val('Внутренний');
        }else if ($("#tourist_destination3").val() == 'Внутренний'){
            $("#tourist_destination3").val('');
        }
    });
});



// Toggle Animation by Class
// $(window).scroll(function(){
//     if($(document).scrollTop() > 100){
//         $('nav').addClass('animate');
//     }else{
//         $('nav').removeClass('animate');
//     }
// });




//DOM elements
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next'
};


//remove class from a set of items
const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

};

//return exect parent node of the element
const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

};

//get active button step number
const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('js-active');
        }

    });
};

//get active panel
const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

            activePanel = elem;

        }

    });

    return activePanel;

};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('js-active');

            setFormHeight(elem);

        }
    });

};

//set form height equal to current panel height
const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

};

const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {

    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
        return;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);


$(document).ready(function(){
    $('#inn').mask('0000000');
    $('#phone-number').mask('00-000-00-00');
    $('#pass').mask('AA 9999999');
});


// $(".custom-file-input").on("change", function() {
//     var fileName = $(this).val().split("\\").pop();
//     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
// });

$('#error1').hide();
$('#error2').hide();
$('#error3').hide();
$('#error4').hide();
$('#error5').hide();
$('#error6').hide();
$('#error7').hide();

$(".error1").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error1').show();
        $(this).val('');
    }else {
        $('#error1').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error2").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error2').show();
        $(this).val('');
    }else {
        $('#error2').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error3").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error3').show();
        $(this).val('');
    }else {
        $('#error3').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error4").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error4').show();
        $(this).val('');
    }else {
        $('#error4').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error5").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error5').show();
        $(this).val('');
    }else {
        $('#error5').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error6").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error6').show();
        $(this).val('');
    }else {
        $('#error6').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});
$(".error7").on("change", function () {
    if(this.files[0].size > 5000000) {
        $('#error7').show();
        $(this).val('');
    }else {
        $('#error7').hide();
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    }

});


$("#progressend1").click(function() {
    $( "#progrestop2" ).addClass('js-active');
    $( "#progresbot2" ).addClass('js-active');
});

$("#progressend2").click(function() {
    $( "#progrestop3" ).addClass('js-active');
    $( "#progresbot2" ).removeClass('js-active');
    $( "#progresbot3" ).addClass('js-active');
});


$("#progressend3").click(function() {
    $( "#progrestop4" ).addClass('js-active');
    $( "#progresbot3" ).removeClass('js-active');
    $( "#progresbot4" ).addClass('js-active');
});


$("#progressend4").click(function() {
    $( "#progrestop5" ).addClass('js-active');
    $( "#progresbot4" ).removeClass('js-active');
    $( "#progresbot5" ).addClass('js-active');
});













