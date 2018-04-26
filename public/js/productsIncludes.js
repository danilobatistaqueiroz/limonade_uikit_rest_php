/*################# Its better than w3-include-html ####################*/
/*################# w3-include-html lose the javascript funcionalities ####################*/
function loadNewProduct(){
  $.ajax({
    url:'forms/newProductForm.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
      $('#divNewProductForm').empty();
      $('#divNewProductForm').append(data);
    }, error: function(result) {
      $.notify(JSON.stringify(xhr).replace(/"/g, ''), {
        className: "error",
        autoHideDelay: 2000
      });
    }
  });
};
//loadNewProduct();

function loadEditProduct(row){
  $.ajax({
    url:'forms/editProductForm.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
      $('#divEditProductForm').empty();
      $('#divEditProductForm').append(data);
      if(row!=null)
        configureProductEditForm(row);
    }
  });
};
//loadEditProduct(null);

function loadProductScreen(){
	$.ajax({
	  url:'modals/confirmDelete.php',
	  method: 'GET',
	  contentType: "application/json; charset=utf-8",
	  success: function(data) {
		$('#divConfirmDelete').empty();
		$('#divConfirmDelete').append(data);
	  }
	});
	$.ajax({
	  url:'common/header.php',
	  method: 'GET',
	  contentType: "application/json; charset=utf-8",
	  success: function(data) {
		$('#divHeader').empty();
		$('#divHeader').append(data);
	  }
	});
	$.ajax({
	  url:'products.php',
	  method: 'GET',
	  contentType: "application/json; charset=utf-8",
	  success: function(data) {
		$('#divMain').empty();
		$('#divMain').append(data);
	  }
	});
	loadProductsGrid();
}