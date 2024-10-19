<div class="modal fade" id="modalCreateCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form method="POST" class="formCreatCategory" enctype="multipart/form-data">
                <div class="form-group">
                   <label for="">name</label>
                   <input type="text" name="name" class="name form-control" >
                   <p></p>
                </div>
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image" class="image form-control" >
                  <button type="button" onclick="UploaImage('.formCreatCategory')" class="btn btn_uplaod btn-success rounded-0">Upload</button>
                  <p></p>
                </div>
                <div class="show-image-category ">

                </div>
                <br>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="status form-control">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>
                    </select>
                    <p></p>
                  </div>
           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="button" onclick="StoreCategory('.formCreatCategory')" class=" btn btn-success" onclick="">Save</button>
        </div>
      </div>
    </div>
</div>
