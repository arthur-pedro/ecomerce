// function get_item(){


// }

// function get_item_1(){

// 	var nome = $('#item_1 h3').text();
// 	var preco = $('#item_1 span').text();
// 	var descricao = $('#item_1 p').text();

// 	document.cookie = [nome,preco,descricao];
// }

// function get_item_2(){

// 	var nome = $('#item_2 h3').text();
// 	var preco = $('#item_2 span').text();
// 	var descricao = $('#item_2 p').text();

// 	document.cookie = [nome,preco,descricao];
// }

// // alert(document.cookie);

// function addNewItem(){
    
//     var cookie = document.cookie.split(',');
   
//     var nome_item = cookie[0]
//     var preco_item = cookie[1];
//     var descricao_item = cookie[2];

    

//     var box = '<div class="col-md-12"><div class="box"><div class="box-icon"><img src="images/service-icon-1.png" alt=""></div><h3 class="">'+ nome_item +'</h3><h5>preço: R$ '+ preco_item +'</h5><p>'+ descricao_item +'</p><button id="btn-remover" onclick="btn_remove();" class="btn button">Remover</button></div></div>';
// 	$(".add-item").append(box);

// }

// $(document).ready(function(){
// 	// window.onload = function(nome, preco, descricao){
// 		addNewItem();
// 		addNewItem();
// });

function add_carrinho(produto){
	$.ajax({
		url: "add_carrinho.php", 
		type: "post",
		data: "product=" + produto,
		success: function(){
			alert("OK");
		}
	});
}