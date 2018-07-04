



$(document).ready(function () {
    $("#butao1").click(function () {
        $.ajax({
            type: 'GET',
            url: '/texto.html',
            data: "",
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});
$(document).ready(function () {

    $("#formCadastro").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido

        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '/cadastroIngresso',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,

            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});






$(document).ready(function () {
    $("#signupform").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido
        $.ajax({
            type: 'POST',
            url: '/cadastroUsuario',
            data: $("#signupform").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});

$(document).ready(function () {
    $("#formLogin").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido
        $.ajax({
            type: 'POST',
            url: '/verificarLogin',
            data: $("#formLogin").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});



$(document).ready(function () {
    $("#formLoginAdm").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido
        $.ajax({
            type: 'POST',
            url: '/verificarLoginAdm',
            data: $("#formLoginAdm").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});

$(document).ready(function () {
    $("#formComprar").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido
        $.ajax({
            type: 'POST',
            url: '/concluirCompra',
            data: $("#formComprar").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});

$(document).ready(function () {
    $("#listaEvento").submit(function (e) {
        e.preventDefault(); // evita que o formulário seja submetido
        $.ajax({
            type: 'POST',
            url: '/excluirIngresso',
            data: $("#listaEvento").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});
