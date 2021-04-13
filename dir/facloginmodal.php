

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="/university/dir/_faclogin.php" method="post">
      <div class="modal-body">
     
  <div class="form-group">
    <label for="roll">Email</label>
    <input type="text" class="form-control" id="roll" name="roll" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

      </div>
      </form>
    </div>
  </div>
</div>