function loadProductsGrid(){
	/*################# Globals ####################*/
  window.openscreen = 'products';
	window.myApproot = ""; //se for iniciado o servidor numa pasta acima
	window.myUrl = myApproot + '/rest/api.php/products';
	//window.myUrl = myApproot + '/rest/api/products'; //quando usando pelo Apache com o .htaccess configurado
	window.myTableID = "#tableProducts";
	window.deleteRowFunction = "loadDeleteProduct";
	window.editRowFunction = "loadEditProduct";
	/*################# Globals ####################*/
	listToGrid(myUrl, myTableID);
}
/*################# StartUp ####################*/

/*################# StartUp ####################*/

/*################# Forms ####################*/
function cancelNewProduct(){
  $('#divNewProductForm').slideUp();
  $("#divBlockQuotes").slideDown();
}
function cancelEditProduct(){
  $('#divEditProductForm').slideUp();
  $("#divBlockQuotes").slideDown();
}
function newProduct(){
  loadNewProduct();
  $("#divEditProductForm").slideUp();
  $("#divNewProductForm").slideDown();
  $("#divBlockQuotes").slideUp();
}
/*################# Forms ####################*/

/*################# Grid ####################*/
function configureProductEditForm(row){
  $("#divEditProductForm input[id=id]").val($('#'+row+'_1').text());
  $("#divEditProductForm input[id=name]").val($('#'+row+'_2').text());
  $("#divEditProductForm input[id=email]").val($('#'+row+'_3').text());
  $("#divEditProductForm input[id=age]").val($('#'+row+'_4').text());
  $("#divEditProductForm input[id=phone]").val($('#'+row+'_5').text());
  $("#divNewUserForm").slideUp();
  $("#divEditUserForm").slideUp();
  $("#divNewProductForm").slideUp();
  $("#divBlockQuotes").slideUp();
  $("#divEditProductForm").slideDown();
  $("#divEditProductForm").css("display","block");
}
/*################# Grid ####################*/
