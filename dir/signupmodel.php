
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="/university/dir/_adminlogin.php" method="post">
      <div class="modal-body">
     
      <div class="form-group">
            <label for="name">Admin User_id</label>
           <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

      </div>
      </form>
    
    </div>
  </div>
</div>