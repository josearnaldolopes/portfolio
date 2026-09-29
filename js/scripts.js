/*!
* Start Bootstrap - Scrolling Nav v5.0.6 (https://startbootstrap.com/template/scrolling-nav)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-scrolling-nav/blob/master/LICENSE)
*/

window.addEventListener('DOMContentLoaded', event => {
    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
});

$(document).ready(function(){

  $(".cloud").sortable();

  const elements = $('.cloud a').length;
  for (let i = 0; i < elements; i++) {
      var opcoes = ["-",""];
      // console.log(opcoes[Math.random() < 0.5 ? 0 : 1]);
      const symbol = opcoes[Math.random() < 0.5 ? 0 : 1];
      const grau = Math.floor(Math.random() * 8) + 1;
      $(".cloud a").eq(i).css("rotate", ""+symbol+""+grau+"deg");
  }

  function statusContato(texto, sucesso) {
    $("#statusContato")
      .text(texto)
      .removeClass("text-success text-danger")
      .addClass(sucesso ? "text-success" : "text-danger");
  }

  // Máscara de telefone: (11) 1234-5678 ou (11) 91234-5678
  function mascaraTelefone(valor) {
    const d = valor.replace(/\D/g, "").slice(0, 11);
    if (d.length === 0) return "";
    if (d.length <= 2) return "(" + d;
    if (d.length <= 6) return "(" + d.slice(0, 2) + ") " + d.slice(2);
    if (d.length <= 10) return "(" + d.slice(0, 2) + ") " + d.slice(2, 6) + "-" + d.slice(6);
    return "(" + d.slice(0, 2) + ") " + d.slice(2, 7) + "-" + d.slice(7);
  }

  $("#telefone").on("input", function() {
    // Mantém o cursor na posição certa contando quantos dígitos havia antes dele
    const digitosAntes = this.value.slice(0, this.selectionStart).replace(/\D/g, "").length;
    this.value = mascaraTelefone(this.value);
    let pos = 0, contados = 0;
    while (pos < this.value.length && contados < digitosAntes) {
      if (/\d/.test(this.value[pos])) contados++;
      pos++;
    }
    this.setSelectionRange(pos, pos);
  });

  // Regras de cada campo: retorna a mensagem de erro ou "" se estiver válido
  const regras = {
    nome: function(v) {
      if (!v) return "Informe seu nome.";
      if (v.length < 3) return "O nome precisa ter pelo menos 3 letras.";
      if (!/^[A-Za-zÀ-ÖØ-öø-ÿ' .-]+$/.test(v)) return "Use apenas letras no nome.";
      return "";
    },
    telefone: function(v) {
      const d = v.replace(/\D/g, "");
      if (!d) return "Informe seu telefone.";
      if (d.length < 10) return "Telefone incompleto. Use DDD + número.";
      if (/^(0|\d0)/.test(d)) return "DDD inválido.";
      if (d.length === 11 && d[2] !== "9") return "Celular deve começar com 9 depois do DDD.";
      return "";
    },
    email: function(v) {
      if (!v) return "Informe seu e-mail.";
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v)) return "E-mail inválido. Ex.: nome@dominio.com";
      return "";
    },
    mensagem: function(v) {
      if (!v) return "Escreva sua mensagem.";
      if (v.length < 10) return "A mensagem precisa ter pelo menos 10 caracteres.";
      return "";
    }
  };

  function validarCampo(campo) {
    const erro = regras[campo.id]($.trim(campo.value));
    $(campo).toggleClass("is-invalid", !!erro).attr("aria-invalid", erro ? "true" : "false");
    $("#erro-" + campo.id).text(erro);
    return !erro;
  }

  const campos = "#nome, #telefone, #email, #mensagem";

  // Valida ao sair do campo; depois do primeiro erro, revalida enquanto digita
  $(campos)
    .on("blur", function() { if (this.value) validarCampo(this); })
    .on("input", function() { if ($(this).hasClass("is-invalid")) validarCampo(this); });

  $(".formContato").on("submit", function(e) {
    e.preventDefault();

    const form = this;
    const botao = $("#btoContato");

    let primeiroInvalido = null;
    $(campos).each(function() {
      if (!validarCampo(this) && !primeiroInvalido) primeiroInvalido = this;
    });
    if (primeiroInvalido) {
      primeiroInvalido.focus();
      $(".formContato").effect("shake");
      return;
    }

    botao.prop("disabled", true).val("_enviando...");
    statusContato("", true);

    $.ajax({ url: "email.php", method: "POST", data: $(form).serialize(), dataType: "json" })
      .done(function() {
        statusContato("Mensagem enviada! Retorno em breve.", true);
        form.reset();
        $(campos).removeClass("is-invalid").removeAttr("aria-invalid");
      })
      .fail(function(xhr) {
        const erro = xhr.responseJSON && xhr.responseJSON.erro;
        statusContato(erro || "Não foi possível enviar agora. Tente pelo e-mail ou telefone ao lado.", false);
        $(".formContato").effect("shake");
      })
      .always(function() {
        botao.prop("disabled", false).val("_enviar");
      });
  });

});