function listToGrid(url, tableID){
  $(tableID + " > tbody").empty();
  $.getJSON(url , function(data) {
    var tbl_body = document.createElement("tbody");
    var odd_even = false;
    var rowid = 1;
    $.each(data, function() {
        $.each(this, function(k , v) {
			var tbl_row = tbl_body.insertRow();
			tbl_row.id = rowid;
			tbl_row.className = odd_even ? "odd" : "even";
			var columnid = 1;
			$.each(v, function(x,y){
				var cell = tbl_row.insertCell();
				if(columnid==1){
				  cell.style.display = "none";
				}
				cell.id = rowid + "_" + columnid++;
				var strV = "";
				if(y !== null){
				  strV = y.toString();
				}
				cell.appendChild(document.createTextNode(strV));
			});
			var cell = tbl_row.insertCell();
			var btnEdit = document.createElement("input");
			btnEdit.className = "uk-button uk-button-warning uk-button-mini";
			btnEdit.type = "button";
			btnEdit.id = "btnEdit_" + rowid + "_" + columnid;
			btnEdit.name = "btnEdit_" + rowid + "_" + columnid;
			btnEdit.value = "edit";
			btnEdit.addEventListener("click", function(){editRow(btnEdit.name.substring(8,9));});
			cell.appendChild(btnEdit);
			var span = document.createElement("span");
			span.innerHTML = " ";
			cell.appendChild(span);
			var btnDelete = document.createElement("input");
			btnDelete.className = "uk-button uk-button-danger uk-button-mini";
			btnDelete.type = "button";
			btnDelete.id = "btnDelete_" + rowid + "_" + columnid;
			btnDelete.name = "btnDelete_" + rowid + "_" + columnid;
			btnDelete.addEventListener("click", function(){deleteRow(btnDelete.name.substring(10,11));});
			btnDelete.value = "delete";
			cell.appendChild(btnDelete);
			rowid++;
			odd_even = !odd_even;
        });
    });
    $(tableID).append(tbl_body);
  });
}

function deleteRow(row){
  sendAndLoad(url, {id:1}, "delete");
}

function editRow(row){
  $("#divEditUserForm input[id=id]").val($('#'+row+'_1').text());
  $("#divEditUserForm input[id=name]").val($('#'+row+'_2').text());
  $("#divEditUserForm input[id=email]").val($('#'+row+'_3').text());
  $("#divEditUserForm input[id=age]").val($('#'+row+'_4').text());
  $("#divEditUserForm input[id=phone]").val($('#'+row+'_5').text());
  $("#divEditUserForm").slideToggle();
  $("#divBlockQuotes").slideToggle();
}