<!-- Form used to add new entries of users in database -->
<header class="uk-comment-header" >
<form class="form-horizontal" name="userList" id="userForm" >
  <h3 class="text-center">Insert User Details</h3>
  <div class="form-group row">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter User Name" autofocus data-validate="required, min:5" />
  </div>
  <div class="form-group">
    <p class="text-danger">Name field is Empty!</p>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter User Email Address" autofocus required />
  </div>
  <div class="form-group">
    <p class="text-danger">Invalid Email!</p>
  </div>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" name="age" class="form-control" placeholder="Enter User Age" autofocus data-validate="required, number" />
  </div>
  <div class="form-group">
    <p class="text-danger">Age field is Empty!</p>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Age" autofocus data-validate="required, number" />
  </div>
  <div class="form-group">
    <p class="text-danger">Phone field is Empty!</p>
  </div>
  <div class="form-group">
    <input type="submit" class="uk-button uk-button-primary" value="Add New User" />
    <button type="button" class="uk-button uk-button-secondary" formnovalidate onclick="cancelNewUser();" >Cancel</button>
  </div>
</form>
</header>
