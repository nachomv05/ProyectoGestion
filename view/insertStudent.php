<?php
include_once '../public/headerIN.php';
?>

<form onsubmit="val(); return false">
    <div>
        <label for="name">Nombre*</label>
        <input type="text" id="form-name" pattern="[a-zA-Z\s]+$" minlength="4" required/>
    </div>
    <br>
    <div>
        <label for="lastname1">Primer Apellido*</label>
        <input type="text" id="form-lastname1" pattern="[a-zA-Z\s]+$" minlength="4" required/>
    </div>
    <br>
    <div>
        <label for="lastname2">Segundo Apellido*</label>
        <input type="text" id="form-lastname2" pattern="[a-zA-Z\s]+$" minlength="4" required/>
    </div>
    <br>
    <div>
        <label for="password">Contrase&ncaron;a*</label>
        <input type="password" id="form-password" minlength="8" required/>
    </div>
    <br>
    <div>
        <label for="career1">Primer Carrera*</label>
        <input type="text" id="form-career1" minlength="4" required/>
    </div>
    <br>
    <div>
        <label for="career2">Segunda Carrera</label>
        <input type="text" id="form-career2" minlength="4"/>
    </div>
    <br>
    <div>
        <label for="headquarters">Sede*</label>
        <input type="text" id="form-headquarters" minlength="4" required/>
    </div>
    <br>
    <div>
        <input type="submit" id="form-submit"/>
    </div>
    <br>
    <br>
    <div id="state"></div>
</form>
<script type="text/javascript" async>
    function val() {

        var args = {
            "name": $("#form-name").val().trim(),
            "lastname1": $("#form-lastname1").val().trim(),
            "lastname2": $("#form-lastname2").val().trim(),
            "password": $("#form-password").val().trim(),
            "career1": $("#form-career1").val().trim(),
            "career2": $("#form-career2").val().trim(),
            "headquarters": $("#form-headquarters").val().trim(),
            "create": "create"
        };

        $("#state").text("Espere...");

        $.post('../business/StudentBusiness.php', args, function (data) {
            if (data.result) {
                $("#state").text(data.result);
            } else {
                $("#state").text("Error en la petici&oacuten");
            }
        }, 'json');
    }
</script>
<?php
include_once '../public/footerIN.php';
