/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
function base_url(param) {
    var base_url = window.location.origin + "/" + param;
    return base_url;
}

function update_csrf(param) {
    $("meta[name=csrf]").attr("content", param.csrf_return);
    $("input[name^='paw_token']").val(param.csrf_return);
    $("hidden[name^='paw_token']").val(param.csrf_return);
}

$(".logout").click(function () {
    swal({
        title: "Konfirmasi Keluar",
        text: "Lanjutkan keluar aplikasi ?",
        type: "info",
        showCancelButton: true,
        confirmButtonColor: "#c9302c",
        confirmButtonText: "Ya, Lanjutkan",
        cancelButtonText: "Tidak, Batalkan"
    }).then((result) => {
        if (result.value) {
            location.replace(base_url('auth/logout/'));
        }
    });
});