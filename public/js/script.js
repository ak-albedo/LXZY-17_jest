const $ = require('jquery');
const axios = require("axios");
var storage = window.localStorage;
var step = 1;
var errorFields = [];

$(document).ready(function () {
    // localStorage
    if ($('#registration').length) {
        var formElements = document.getElementById("registration").elements;

        for (var i = 0, element; element = formElements[i++];) {
            if (element.tagName !== "BUTTON") {
                var elementId = element.getAttribute("id");

                // Get data from localStorage
                if ($('#' + elementId).length && (window.storage.getItem(elementId) !== null)) {
                    $('#' + elementId).val(window.storage.getItem(elementId));
                }
            }
        }
    }
});

// Save fields data in localStorage
$('form input, form textArea, form select').change(function () {
    window.storage.setItem(this.getAttribute("id"), this.value);
});

function phoneMask() {
    var num = $(this).val().replace(/\D/g, '');
    $(this).val('+' + num.substring(0, 1) + ' (' + num.substring(1, 4) + ') ' + num.substring(4, 7) + '-' + num.substring(7, 11));
}

$('[type="tel"]').keyup(phoneMask);

// Validate form
$("input, select").blur(function () {
    var field = this.id;
    var value = this.value;

    userValidateField(field, value);
});

$("#photo").change(function () {
    var field = 'photo';
    var value = this.value;

    userValidateField(field, value);
});

$("#birthday").change(function () {
    var field = 'birthday';
    var value = this.value;

    userValidateField(field, value);
});

async function userValidateField(field, value) {
    let result = await axios.post("http://localhost/validate-field", {
        'field': field,
        'value': value
    }, {
        headers: { "Content-Type": "multipart/form-data" }
    }).then((response) => {
        return response.data;
    });

    if (result) {
        let validateError = result;
        $("#" + field + "-error").html(validateError);
        $("#" + field).addClass('is-invalid');
        $("#" + field).attr("aria-invalid", "true");

        if (!contains(window.errorFields, field)) {
            window.errorFields[window.errorFields.length] = field;
        }
    } else {
        $("#" + field + "-error").html("");
        $("#" + field).removeClass('is-invalid');
        $("#" + field).attr("aria-invalid", "false");

        var elementIndex = window.errorFields.indexOf(field);
        if (elementIndex !== -1) {
            window.errorFields.splice(elementIndex, 1);
        }
    }

    return result;
}

$("#next").click(function () {
    checkPartOfForm();

    setTimeout(function () {
        if (window.errorFields.length) {
            $("#" + window.errorFields[0]).focus();
        } else {
            window.step = window.step + 1;

            $("#next").addClass("d-none");
            $("#step2").addClass("show active");
            $("#step2-tab").addClass("active");
            $("#finish").removeClass("d-none");
            $("#step1").removeClass("show active");
            $("#step1-tab").removeClass("active");
            $("#previous").removeClass("disabled");
        }
    }, 500);
});

$("#previous").click(function () {
    if (window.step > 1) {
        window.step = window.step - 1;

        $("#step" + window.step + " input").each(function () {
            userValidateField($(this).attr("id"), $(this).val());
        });

        $("#next").removeClass("d-none");
        $("#step2").removeClass("show active");
        $("#step2-tab").removeClass("active");
        $("#finish").addClass("d-none");
        $("#step1").addClass("show active");
        $("#step1-tab").addClass("active");
        $("#previous").addClass("disabled");
        window.errorFields = [];
    }
});

$("#finish").click(function () {
    // Send form
    $('#registration').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/store',
            enctype: 'multipart/form-data',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {

            },
            success: function (response) {
                if (response) {
                    var validateErrors = $.parseJSON(response);
                    $.each(validateErrors, function (index, value) {
                        $("#" + index + "-error").html(value);
                        $("#" + index).addClass('is-invalid');
                        $("#" + index).attr("aria-invalid", "true");
                    });
                } else {
                    window.storage.clear();
                    $("#after-form-block").removeClass("d-none");
                    $("#form-block").addClass("d-none");
                }
            }
        });
    });
});

function contains(arr, elem) {
    return arr.indexOf(elem) != -1;
}

function checkPartOfForm() {
    $("#step" + window.step + " input").each(function () {
        var field = $(this).attr("id");
        var value = $(this).val();
        userValidateField(field, value);
    });

    userValidateField("country", $("#country").val());
}

module.exports = { phoneMask, userValidateField, contains }