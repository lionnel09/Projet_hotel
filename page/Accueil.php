<form class="needs-validation" novalidate method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Destination</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>


    </div>
    <div class="form-row">

        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Date d'arrivée </label>
            <input type="date" class="form-control" id="validationCustom04" placeholder="State" required>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom05">Dtae de départ</label>
            <input type="date" class="form-control" id="validationCustom05" placeholder="Zip" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Rechercher</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

