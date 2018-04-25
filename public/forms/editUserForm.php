<!--article class="uk-comment uk-comment-primary"-->
  <header class="uk-comment-header" >
<!--form class="form-horizontal" id="editUserForm"-->
  <h3 class="text-center">Update User Details</h3>
  <input type="hidden" id="id" name="id" value=""/>
  <div class="form-group">
    <label for="Name" >Name:</label>
    <input type="text" id="name" name="name" class="uk-input uk-form-width-medium uk-form-small" value="">
  </div>
  <div class="form-group">
    <label for="Email" >Email:</label>
    <input type="email" id="email" name="email" class="uk-input uk-form-width-medium uk-form-small" value="">
  </div>
  <div class="form-group">
    <label for="Age" >Age:</label>
    <input type="text" id="age" name="age" class="uk-input uk-form-width-medium uk-form-small" value="">
  </div>
  <div class="form-group">
    <label for="Phone" >Phone:</label>
    <input type="text" id="phone" name="phone" class="uk-input uk-form-width-medium uk-form-small" value="">
  </div>
  <div class="form-group">
    <button type="button" class="uk-button uk-button-secondary">Update</button>
    <button type="button" class="uk-button uk-button-primary" formnovalidate onclick="cancelEditUser();">Cancel</button>
  </div>
<!--/form-->
  </header>
<!--/article-->
