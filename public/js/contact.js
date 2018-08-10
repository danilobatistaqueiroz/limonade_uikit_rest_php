function loadContactScreen(){
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
    url:'contact.php',
    method: 'GET',
    contentType: "application/json; charset=utf-8",
    success: function(data) {
    $('#divMain').empty();
    $('#divMain').append(data);
    }
  });
}