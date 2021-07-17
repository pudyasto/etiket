<?php
/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */
?>
<div class="section-header">
    <h1>E-Ticket <small>Cetak E-Ticket Obat</small></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= site_url('main'); ?>">Backend</a></div>
        <div class="breadcrumb-item">Eticket</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Berikut Dengan Lengkap dan Benar</h4>
                </div>
                <div class="card-body">
                    <?php
                    $attributes = array(
                        'role' => 'form', 'id' => 'form_add', 'class' => 'form-horizontal', 'name' => 'form_add'
                    );
                    echo form_open(site_url('main/submit'), $attributes);
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['no_rm']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['no_rm']);
                                echo form_error('no_rm', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['nama_pasien']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['nama_pasien']);
                                echo form_error('nama_pasien', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['tgl_lahir']['placeholder'] . " - dd/mm/yyyy", '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['tgl_lahir']);
                                echo form_error('tgl_lahir', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['nama_obat']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['nama_obat']);
                                echo form_error('nama_obat', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['tgl_exp']['placeholder'] . " - dd/mm/yyyy", '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['tgl_exp']);
                                echo form_error('tgl_exp', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['dosis']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['dosis']);
                                echo form_error('dosis', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['jml_obat']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['jml_obat']);
                                echo form_error('jml_obat', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['satuan']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['satuan']);
                                echo form_error('satuan', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['aturan_pakai']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['aturan_pakai']);
                                echo form_error('aturan_pakai', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['jml_cetak']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['jml_cetak']);
                                echo form_error('jml_cetak', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <?php
                                echo form_label($form['keterangan']['placeholder'], '', array('class' => 'col-sm-12 col-form-label',));
                                echo '<div class="col-sm-12">';
                                echo form_input($form['keterangan']);
                                echo form_error('keterangan', '<div class="note">', '</div>');
                                echo '</div>';
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-outline-success btn-lg">
                            Cetak
                        </button>
                        <a href="<?= site_url(); ?>" class="btn btn-outline-secondary btn-lg">
                            Batal
                        </a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var cachegetNoRM = {};
        var cachegetNamaPasien = {};
        var cachegetNamaObat = {};

        var cachegetDosis = {};
        var cachegetSatuan = {};
        var cachegetAturanPakai = {};
        var cachegetKeterangan = {};
        
        $("#no_rm").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetNoRM) {
                    response(cachegetNoRM[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getNoRM"); ?>", request, function(data, status, xhr) {
                    cachegetNoRM[term] = data;
                    response(data);
                });
            }
        });

        $("#nama_pasien").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetNamaPasien) {
                    response(cachegetNamaPasien[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getNamaPasien"); ?>", request, function(data, status, xhr) {
                    cachegetNamaPasien[term] = data;
                    response(data);
                });
            }
        });
        $("#nama_obat").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetNamaObat) {
                    response(cachegetNamaObat[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getNamaObat"); ?>", request, function(data, status, xhr) {
                    cachegetNamaObat[term] = data;
                    response(data);
                });
            }
        });
        $("#dosis").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetDosis) {
                    response(cachegetDosis[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getDosis"); ?>", request, function(data, status, xhr) {
                    cachegetDosis[term] = data;
                    response(data);
                });
            }
        });
        $("#satuan").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetSatuan) {
                    response(cachegetSatuan[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getSatuan"); ?>", request, function(data, status, xhr) {
                    cachegetSatuan[term] = data;
                    response(data);
                });
            }
        });
        $("#aturan_pakai").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetAturanPakai) {
                    response(cachegetAturanPakai[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getAturanPakai"); ?>", request, function(data, status, xhr) {
                    cachegetAturanPakai[term] = data;
                    response(data);
                });
            }
        });
        $("#keterangan").autocomplete({
            minLength: 1,
            source: function(request, response) {
                var term = request.term;
                if (term in cachegetKeterangan) {
                    response(cachegetKeterangan[term]);
                    return;
                }

                $.getJSON("<?= site_url("main/getKeterangan"); ?>", request, function(data, status, xhr) {
                    cachegetKeterangan[term] = data;
                    response(data);
                });
            }
        });

        var tgl_lahir = new Cleave('#tgl_lahir', {
            date: true,
            datePattern: ['d', 'm', 'Y']
        });

        var tgl_exp = new Cleave('#tgl_exp', {
            date: true,
            datePattern: ['d', 'm', 'Y']
        });

        $("#form_add").on("submit", function(event) {
            event.preventDefault();
            var input = $(this).serialize();
            var submit = $(this).attr('action');
            $.ajax({
                type: "POST",
                url: submit,
                data: input,
                success: function(resp) {
                    var obj = jQuery.parseJSON(resp);
                    update_csrf(obj);
                    if (obj.state === "1") {
                        console.log(obj);
                        Swal.fire({
                            title: obj.title,
                            html: obj.msg,
                            icon: "success"
                        }).then((result) => {
                            if (result.value) {
                                window.open('<?= site_url("main/cetak"); ?>/' + obj.id);
                            }
                        });
                    } else {
                        toast(obj.msg, obj.title, 'error');
                    }
                },
                error: function(event, textStatus, errorThrown) {
                    console.log('Pesan: ' + textStatus + ' , HTTP: ' + errorThrown);
                }
            });
        });
    });
</script>