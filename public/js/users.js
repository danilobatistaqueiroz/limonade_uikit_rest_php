/*################# Globals ####################*/
var approot = "/limonade/crudrest";
var url = approot + '/rest/api/users';
var tableID = "#tableUsers";
/*################# Globals ####################*/

function sendAndLoad(sURL, params, sType) {
  $.ajax({
    url: sURL,
    type: sType,
    data: params,
    success: function(response) {
      $.notify(JSON.stringify(response).replace(/"/g, ''), {
        className: "success",
        autoHideDelay: 2000
      });
    },
    error: function(xhr) {
      $.notify(JSON.stringify(xhr).replace(/"/g, ''), {
        className: "error",
        autoHideDelay: 2000
      });
    }
  });
}

/*################# StartUp ####################*/
$(function() {
  function callRestApi(type) {
    if (type == "get") {
      listToGrid(url, tableID);
    } else {
      var params = {
        login: 'super',
        name: 'super user',
        passwd: '123',
        email: 'super@gmail.com',
        type: 'Admin',
        address: 'Avenue New World'
      };
      sendAndLoad(url, params, type);
    }
  }
  $('a').click(function() {
    var href = $(this).attr('href').substr(1).toLowerCase();
    callRestApi(href);
  });
  listToGrid(url, tableID)
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
  sendAndLoad(url, {id:1}, "delete");
}
function editRow(row){
  loadEditUser(row);
}
function configureEditForm(row){
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
