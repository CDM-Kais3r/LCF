// MASCARA PARA CPNJ DA EMPRESA
document.getElementById("cnpjEmpresa").addEventListener("input", function (e) {
  var x = e.target.value
    .replace(/\D/g, "")
    .match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
  e.target.value = !x[2]
    ? x[1]
    : x[1] + "." + x[2] + "." + x[3] + "/" + x[4] + (x[5] ? "-" + x[5] : "");
});
// FIM MASCARA PARA CNPJ

// MASCARA E VALIDAÇÃO DE CEP
function limpa_formulario_cep() {
  //Limpa valores do formulário de cep.
  document.getElementById("cepEmpresa").value = "";
  document.getElementById("ruaEmpresa").value = "";
  document.getElementById("bairroEmpresa").value = "";
  document.getElementById("cidadeEmpresa").value = "";
  document.getElementById("estadoEmpresa").value = "";
}

function meu_callback(conteudo) {
  if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById("ruaEmpresa").value = conteudo.logradouro;
    document.getElementById("bairroEmpresa").value = conteudo.bairro;
    document.getElementById("cidadeEmpresa").value = conteudo.localidade;
    document.getElementById("estadoEmpresa").value = conteudo.uf;
  } //end if.
  else {
    //CEP não Encontrado.
    limpa_formulario_cep();
    alert("CEP não encontrado.");
  }
}

function pesquisacep(valor) {
  //Nova variável "cep" somente com dígitos.
  var cep = valor.replace(/\D/g, "");

  //Verifica se campo cep possui valor informado.
  if (cep != "") {
    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if (validacep.test(cep)) {
      document.getElementById("cepEmpresa").value =
        cep.substring(0, 5) + "-" + cep.substring(5);

      //Preenche os campos com "..." enquanto consulta webservice.
      document.getElementById("ruaEmpresa").value = "Carregando...";
      document.getElementById("bairroEmpresa").value = "Carregando...";
      document.getElementById("cidadeEmpresa").value = "Carregando...";
      document.getElementById("estadoEmpresa").value = "Carregando...";

      //Cria um elemento javascript.
      var script = document.createElement("script");

      //Sincroniza com o callback.
      script.src =
        "https://viacep.com.br/ws/" + cep + "/json/?callback=meu_callback";

      //Insere script no documento e carrega o conteúdo.
      document.body.appendChild(script);
    } //end if.
    else {
      //cep é inválido.
      limpa_formulario_cep();
    }
  } //end if.
  else {
    //cep sem valor, limpa formulário.
    limpa_formulario_cep();
  }
}

function errorCEPVerify() {
  let valorCEP = document.getElementById("cepEmpresa").value;
  console.log(valorCEP);
  if (valorCEP.length > 8) {
    document.getElementById("erroCepEmpresa").style.display = "block";
    document.getElementById("fundoEscuro").style.display = "block";
    document.getElementById("body").style.overflowY = "hidden";
    limpa_formulario_cep();
  }
}
function closeModal() {
  limpa_formulario_cep();
  document.getElementById("erroCepEmpresa").style.display = "none";
  document.getElementById("fundoEscuro").style.display = "none";
  document.getElementById("body").style.overflowY = "scroll";
}
// FIM MASCARA E VALIDAÇÃO CEP

// MASCARA CPF

function maskCPF() {
  let cpf = document.getElementById("cpfRespEmpresa");

  if (cpf.value.length == 3 || cpf.value.length == 7) {
    cpf.value += ".";
  } else if (cpf.value.length == 11) {
    cpf.value += "-";
  }
}

function maskRG() {
  let rg = document.getElementById("rgRespEmpresa");

  if (rg.value.length == 2 || rg.value.length == 6) {
    rg.value += ".";
  } else if (rg.value.length == 10) {
    rg.value += "-";
  }
}



