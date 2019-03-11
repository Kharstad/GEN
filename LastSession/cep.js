$(function () {
  $("#inputCepId").blur(function () {
      var cep = $("#inputCepId").val().replace('.', '');
      cep = cep.replace('-', '');
      if (cep !== "") {
        var url = 'https://viacep.com.br/ws/' + cep + '/json/';
        $.getJSON(url, function (json) {
            $("#inputLogradouroId").val(json.logradouro);
            $("#inputBairroId").val(json.bairro);
            $("#inputCidadeId").val(json.localidade);
            $("#inputEstadoId").val(json.uf);
        }).fail(function () {
          $("#inputBairroId").val("");
          $("#inputCidadeId").val("");
          $("#inputEstadoId").val("");
        });
      }
  });
});