function exibir_categoria(categoria){

    let elementos = document.getElementsByClassName('produto_unidade');

    for(let i=0; i <= elementos.length; i++){
        if(elementos[i].id == categoria || categoria == 'todos'){
            elementos[i].style = "display:inline-block";
        }
        else{
            elementos[i].style = "display:none";
        }
    }
}

function aumentarImg(imagem){
    imagem.style = "cursor:pointer";
    imagem.style.width = "240px";
}

function diminuirImg(imagem){
    imagem.style.width = "120px";
}

function calcValorTotal(){
    document.formulario_compra.total.value = (document.formulario_compra.valor.value) * (document.formulario_compra.quantidade.value);
}