$(document).ready(function(){
    $('.txtCEP').mask('00000-000');
    });
    
    var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.txtTelefone').mask(SPMaskBehavior, spOptions);

    $email = test_input($_POST["txtEmail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "E-mail inválido";
}