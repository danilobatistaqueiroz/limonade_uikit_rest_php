function loadUsersGrid(){
	/*################# Globals ####################*/
	window.myApproot = "";
	window.myUrl = myApproot + '/rest/api.php/users';
	window.myTableID = "#tableUsers";
	window.deleteRowFunction = "loadDeleteUser";
	window.editRowFunction = "loadEditUser";
	/*################# Globals ####################*/
	listToGrid(myUrl, myTableID);
}

function sendAndLoad(sURL, params, sType) {
  $.ajax({
    url: sURL,
    type: sType,
    data: params,
    error: function(xhr) {
      var status = "";
      if(xhr.status==201) {
        status = "success";
        document.getElementById(params).style.display = "none";
      } else {
        status = "error";
      }
      $.notify(JSON.stringify(xhr).replace(/"/g, ''), {
        className: status,
        autoHideDelay: 2000
      });
    }
  });
}

/*################# StartUp ####################*/
$(function() {
  function callRestApi(type) {
    if (type == "get") {
      listToGrid(myUrl, myTableID);
    } else {
      var params = {
        login: 'super',
        name: 'super user',
        passwd: '123',
        email: 'super@gmail.com',
        type: 'Admin',
        address: 'Avenue New World'
      };
      sendAndLoad(myUrl, params, type);
    }
  }

  loadUsersGrid();
  
});
/*################# StartUp ####################*/




/*################# Forms ####################*/
function cancelNewUser(){
  $('#divNewUserForm').slideUp();
  $("#divBlockQuotes").slideDown();
}
function cancelEditUser(){
  $('#divEditUserForm').slideUp();
  $("#divBlockQuotes").slideDown();
}
function newUser(){
  loadNewUser();
  $("#divEditUserForm").slideUp();
  $("#divNewUserForm").slideDown();
  $("#divBlockQuotes").slideUp();
}
/*################# Forms ####################*/

/*################# Grid ####################*/

function deleteRow(row){
  sendAndLoad(myUrl + "/" + row, row, "delete");
}
function editRow(row){
  loadEditUser(row);
}

function configureUserEditForm(row){
  $("#divEditUserForm input[id=id]").val($('#'+row+'_1').text());
  $("#divEditUserForm input[id=name]").val($('#'+row+'_2').text());
  $("#divEditUserForm input[id=email]").val($('#'+row+'_3').text());
  $("#divEditUserForm input[id=age]").val($('#'+row+'_4').text());
  $("#divEditUserForm input[id=phone]").val($('#'+row+'_5').text());
  $("#divNewUserForm").slideUp();
  $("#divEditUserForm").slideDown();
  $("#divBlockQuotes").slideUp();
}
/*################# Grid ####################*/
