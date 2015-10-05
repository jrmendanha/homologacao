var Funcionario = {
    init: function() {
        this.ativaMenuFuncionario();
    },
    ativaMenuFuncionario: function() {
        Application.ativaMenu('funcionario');
    },
};






$(document).ready(function() {

    Funcionario.init();
});










