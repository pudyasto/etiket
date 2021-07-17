/* 
 * ***************************************************************
 * Script : login.js
 * Version : 
 * Date : Feb 22, 2018 - 10:40:44 AM
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */
$("#form_login").submit(function (event) {
    event.preventDefault();

    var $form = $(this),
            username = $form.find("input[name='username']").val(),
            password = $form.find("input[name='password']").val(),
            csrf_token = $form.find("input[name='csrf_token']").val(),
            url = $form.attr("action");

    $.ajax({
        type: "POST",
        url: url,
        data: {"username": username,
            "password": password,
            "csrf_token": csrf_token,
            "lat": localStorage.getItem("lat"),
            "lng": localStorage.getItem("lng")
        },
        beforeSend: function () {
            $(".logo-animasi").addClass("animated pulse infinite");
            $("input").attr('disabled', true);
            $("button").attr('disabled', true);
        },
        success: function (resp) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            var obj = jQuery.parseJSON(resp);
            if (obj.state === "1") {
                $("input[name='csrf_token']").val(obj.token);
                location.replace(base_url('main'));
            } else {
                $("input[name='csrf_token']").val(obj.token);
                $("input[name='password']").val('');
                Swal.fire({
                    title: obj.title,
                    text: obj.msg,
                    icon: "error",
                    footer: '<a href="javascript:void(0);" onclick="recover();">Lupa password ?</a>'
                });
            }
        },
        error: function (event, textStatus, errorThrown) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            Swal.fire({
                title: obj.title,
                text: obj.msg,
                icon: 'Pesan: ' + textStatus + ' , HTTP: ' + errorThrown
            });
        }
    });
});

$("#form_recover").submit(function (event) {
    event.preventDefault();

    var $form = $(this),
            username = $form.find("input[name='username']").val(),
            csrf_token = $form.find("input[name='csrf_token']").val(),
            url = $form.attr("action");

    $.ajax({
        type: "POST",
        url: url,
        data: {"username": username,
            "csrf_token": csrf_token
        },
        beforeSend: function () {
            $(".logo-animasi").addClass("animated pulse infinite");
            $("input").attr('disabled', true);
            $("button").attr('disabled', true);
        },
        success: function (resp) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            var obj = jQuery.parseJSON(resp);
            if (obj.state === "1") {
                $("input[name='csrf_token']").val(obj.token);
                Swal.fire({
                    title: obj.title,
                    html: obj.msg,
                    icon: "success"
                }).then((result) => {
                    if (result.value) {
                        location.replace(base_url('access/index/'));
                    }
                });
            } else {
                $("input[name='csrf_token']").val(obj.token);
                Swal.fire({
                    title: obj.title,
                    html: obj.msg,
                    icon: "error"
                });
            }
        },
        error: function (event, textStatus, errorThrown) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            Swal.fire({
                title: obj.title,
                text: obj.msg,
                icon: 'Pesan: ' + textStatus + ' , HTTP: ' + errorThrown
            });
        }
    });
});

$("#form_reset").submit(function (event) {
    event.preventDefault();

    var $form = $(this),
            password = $form.find("input[name='password']").val(),
            confirm_password = $form.find("input[name='confirm_password']").val(),
            forgotten_password_code = $form.find("input[name='forgotten_password_code']").val(),
            csrf_token = $form.find("input[name='csrf_token']").val(),
            url = $form.attr("action");

    $.ajax({
        type: "POST",
        url: url,
        data: {"password": password,
            "confirm_password": confirm_password,
            "forgotten_password_code": forgotten_password_code,
            "csrf_token": csrf_token
        },
        beforeSend: function () {
            $(".logo-animasi").addClass("animated pulse infinite");
            $("input").attr('disabled', true);
            $("button").attr('disabled', true);
        },
        success: function (resp) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            var obj = jQuery.parseJSON(resp);
            if (obj.state === "1") {
                $("input[name='csrf_token']").val(obj.token);
                Swal.fire({
                    title: obj.title,
                    html: obj.msg,
                    icon: "success"
                }).then((result) => {
                    if (result.value) {
                        location.replace(base_url('access/index/'));
                    }
                });
            } else {
                $("input[name='csrf_token']").val(obj.token);
                Swal.fire({
                    title: obj.title,
                    html: obj.msg,
                    icon: "error"
                });
            }
        },
        error: function (event, textStatus, errorThrown) {
            $(".logo-animasi").removeClass("animated pulse infinite");
            $("input").attr('disabled', false);
            $("button").attr('disabled', false);
            Swal.fire({
                title: obj.title,
                text: obj.msg,
                icon: 'Pesan: ' + textStatus + ' , HTTP: ' + errorThrown
            });
        }
    });
});

$(".btn-reset-password").click(function () {
    recover();
});

$(".btn-login").click(function () {
    location.replace(base_url('access/index/'));
});

function recover() {
    location.replace(base_url('access/recover/'));
}

function getLocation() {
    if (navigator.geolocation) {
        if(!localStorage.getItem("lat") || !localStorage.getItem("lng")){
        }
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(position) {
    localStorage.setItem("lat", position.coords.latitude);
    localStorage.setItem("lng", position.coords.longitude);
}