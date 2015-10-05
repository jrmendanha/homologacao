var Application = {
    init: function() {
        this.ativaMenu();
        this.iniciaDatePicker();
    },
    ativaMenu: function(nomeMenu) {
        $('.menuPrincipal').each(function() {
            var idMenu = $(this).attr('id');
            if (idMenu == nomeMenu) {
                $(this).addClass('active');
            }
        });
    },
    iniciaDatePicker: function() {
            $(".calendario").datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                changeYear: true,
                yearRange: "1900:2020"
            });

    }
};






$(document).ready(function() {

    Application.init();
});
