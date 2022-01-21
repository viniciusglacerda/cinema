document.addEventListener('DOMContentLoaded' ,function(){
    let mes = document.getElementById('mes');
    for(let i = 1; i <=12; i++){
        let option = document.createElement('option');
        option.value = i;
        mes.appendChild(option);
    }

    let dia = document.getElementById('dia');
    for(let i = 1; i <=30; i++){
        let option = document.createElement('option');
        option.value = i;
        dia.appendChild(option);
    }

    let estados = document.getElementById('estado')
    let states = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES',
    'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI',
    'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];
    states.forEach(function(item){
        let option = document.createElement('option');
        option.value = item;
        estados.appendChild(option);
    });

});