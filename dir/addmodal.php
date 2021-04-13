
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form action="/dir/_add.php" method="post">
      <div class="modal-body">
     
      <div class="form-group">
            <label for="name">Name</label>
           <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="roll">Roll</label>
           <input type="text" class="form-control" id="roll" name="roll" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="fname">Father's Name</label>
           <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="add">Address</label>
           <input type="text" class="form-control" id="add" name="add" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="phone">Phone</label>
           <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="math">Math</label>
           <input type="text" class="form-control" id="math" name="math" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
            <label for="science">Science</label>
           <input type="text" class="form-control" id="science" name="science" aria-describedby="emailHelp">
  </div> 
  <div class="form-group">
            <label for="english">English</label>
           <input type="text" class="form-control" id="english" name="english" aria-describedby="emailHelp">
  </div> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

      </div>
      </form>
    
    </div>
  </div>
</div>