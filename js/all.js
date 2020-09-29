$(document).ready(function() {
    $("#valor-taxa,#valor-desconto-instalacao, #valor-mensalidade, #valor-desconto-mensalidade, #valor-final-servico")
    .on('keyup', function() {
  
        var valorTaxa = parseFloat($('#valor-taxa').val());
        var valorMensalidade = parseFloat($('#valor-mensalidade').val());
        var valorDescontoInstal = parseFloat($('#valor-desconto-instalacao').val());
        var valorDescontoMensal = parseFloat($('#valor-desconto-mensalidade').val());


        if(valorDescontoInstal <= 50){

            var calcDescInstal = valorTaxa * (valorDescontoInstal / 100);

            var valorFinalInstal = (valorTaxa - calcDescInstal).toFixed(2);
            var valorFinalInstalFormatado = valorFinalInstal
            .toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

            $('#valor-final-instal').html('<strong>R$ </strong>' + valorFinalInstalFormatado);
        }else if(valorDescontoInstal > 50){
            $('#valor-final-instal').html('<strong>Valor de desconto acima do permitido.</strong>');
        }else if (valorDescontoInstal === ''){
            $('#valor-final-instal').html('<strong>Insira.</strong>');
        }

        if(valorDescontoMensal <= 12){

            var calcDescMensal = valorMensalidade * (valorDescontoMensal / 100);

            var valorFinalMensal = (valorMensalidade - calcDescMensal).toFixed(2);
            var valorFinalMensalFormatado = valorFinalMensal
            .toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

            $('#valor-final-mensal').html('<strong>R$ </strong>' + valorFinalMensalFormatado);
        }else if(valorDescontoMensal > 12){
            $('#valor-final-mensal').html('<strong>Valor de desconto acima do permitido.</strong>');
        }else if (valorDescontoMensal === ''){
            $('#valor-final-mensal').html('<strong>Insira.</strong>');
        }

        let toStrInstall = parseFloat(valorFinalInstal);
        let toStrMensal = parseFloat(valorFinalMensal);
        let finalCalc = toStrInstall + toStrMensal;

        if(!isNaN(finalCalc)){
            $('#valor-final-servico').html('<strong>R$ </strong>' + finalCalc);
        }else{
            $('#valor-final-servico')
            .html('Preencha todos os campos com valores válidos.');
        }

    });
  });