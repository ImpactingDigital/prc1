/*
*   Collapse.js inclui a função que abre e fecha a secção, escondida, com a
*   descrição de cada curso
*/
jQuery(document).ready(function($){
    $(".item1").click(function () { /* evento de click na classe das tabs */

        if($(".collapse-section").css('display') == 'none'){
            /* abre o conteúdo através de um efeito Slide Down, caso
             * esteja fechado
             */
            $(".collapse-section").slideDown("slow");
        }


        $(".collapse-btn").click(function () {
            if ($('.collapse-section').css('display') == 'block') {
                /* Remove o scale da imagem
                   que se encontra ativa
                */
                $('#img1').removeClass("realce");
                $('#img2').removeClass("realce");
                $('#img3').removeClass("realce");
                $('#img4').removeClass("realce");
                $('#img5').removeClass("realce");
                /* Remove o contraste das imagens
                   que não se encontram ativas
                */
                $('#img1').children().removeClass("realce2");
                $('#img2').children().removeClass("realce2");
                $('#img3').children().removeClass("realce2");
                $('#img4').children().removeClass("realce2");
                $('#img5').children().removeClass("realce2");

                /* fecha o conteúdo através de um efeito Slide Up, caso
                *  esteja aberto
                */
                $(".collapse-section").slideUp("slow");
            }
        });


    });
});