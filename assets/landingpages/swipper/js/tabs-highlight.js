jQuery(document).ready(function($){

    var este = '0';
    $(".item1").click(function () {/* evento de click na classe das tabs */
        este = $(this);
        var myid = '';
        var myids =[];

        /*
        *
        * Switch para selecionar o tab activo
        * A tab ativa terá a class '.realce' associada, que faz um scale na imagem
        * As tabs desativadas terão a class '.realce2' associada, ficando com um overlay
        *
        * */

        switch (este.attr('id')){
            case 'img1':
                myid='#active1';
                myids=['#active2','#active3','#active4','#active5'];
                este.addClass("realce");
                este.children().removeClass("realce2");
                $('#img2').children().addClass("realce2");
                $('#img2').removeClass("realce");
                $('#img3').children().addClass("realce2");
                $('#img3').removeClass("realce");
                $('#img4').children().addClass("realce2");
                $('#img4').removeClass("realce");
                $('#img5').children().addClass("realce2");
                $('#img5').removeClass("realce");
                break;
            case 'img2':
                myid='#active2';
                myids=['#active1','#active3','#active4','#active5'];
                este.addClass("realce");
                este.children().removeClass("realce2");
                $('#img1').children().addClass("realce2");
                $('#img1').removeClass("realce");
                $('#img3').children().addClass("realce2");
                $('#img3').removeClass("realce");
                $('#img4').children().addClass("realce2");
                $('#img4').removeClass("realce");
                $('#img5').children().addClass("realce2");
                $('#img5').removeClass("realce");
                break;
            case 'img3':
                myid='#active3';
                myids=['#active2','#active1','#active4','#active5'];
                este.addClass("realce");
                este.children().removeClass("realce2");
                $('#img2').children().addClass("realce2");
                $('#img2').removeClass("realce");
                $('#img1').children().addClass("realce2");
                $('#img1').removeClass("realce");
                $('#img4').children().addClass("realce2");
                $('#img4').removeClass("realce");
                $('#img5').children().addClass("realce2");
                $('#img5').removeClass("realce");
                break;
            case 'img4':
                myid='#active4';
                myids=['#active2','#active3','#active1','#active5'];
                este.addClass("realce");
                este.children().removeClass("realce2");
                $('#img2').children().addClass("realce2");
                $('#img2').removeClass("realce");
                $('#img3').children().addClass("realce2");
                $('#img3').removeClass("realce");
                $('#img1').children().addClass("realce2");
                $('#img1').removeClass("realce");
                $('#img5').children().addClass("realce2");
                $('#img5').removeClass("realce");
                break;
            case 'img5':
                myid='#active5';
                myids=['#active2','#active3','#active4','#active1'];
                este.addClass("realce");
                este.children().removeClass("realce2");
                $('#img2').children().addClass("realce2");
                $('#img2').removeClass("realce");
                $('#img3').children().addClass("realce2");
                $('#img3').removeClass("realce");
                $('#img4').children().addClass("realce2");
                $('#img4').removeClass("realce");
                $('#img1').children().addClass("realce2");
                $('#img1').removeClass("realce");
                break;
        }

        /* mostra a descrição do curso que se encontra ativo */
        $(myid).show();

        /*
        * Ciclo que esconde a descrição dos cursos que não se encontram ativos
        * */
        for (var i = 0; i < myids.length; i++){
            $(myids[i]).hide();
        }

    });

});

