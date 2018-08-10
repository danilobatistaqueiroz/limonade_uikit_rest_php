/*################# Its better than w3-include-html ####################*/
/*################# w3-include-html lose the javascript funcionalities ####################*/
function loadNewUser(){
  $.ajax({
    url:'forms/newUserForm.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
      $('#divNewUserForm').empty();
      $('#divNewUserForm').append(data);
    }, error: function(result) {
      $.notify(JSON.stringify(result).replace(/"/g, ''), {
        className: "error",
        autoHideDelay: 2000
      });
    }
  });
};

function loadEditUser(row){
  $.ajax({
    url:'forms/editUserForm.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
      $('#divEditUserForm').empty();
      $('#divEditUserForm').append(data);
      if(row!=null)
        configureUserEditForm(row);
    }
  });
};

function loadUserScreen(){
  loadNewUser();
  loadEditUser(null);
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
    url:'users.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
    $('#divMain').empty();
    $('#divMain').append(data);
    }
  });
  loadUsersGrid();
}

$( document ).ready(function() {
    loadUserScreen();
  }
);