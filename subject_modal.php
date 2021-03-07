<div class="modal fade" id="subject" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-title"> Add Subject </h4>
            </div>
            <div class="modal-body">
                <form action="subject_add.php" method="POST" class="form-horizontal">
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Code</span></div>
                        <input type="text" name="code" id="password" class="form-control" placeholder="Code" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Subject Name</span></div>
                        <input type="text" name="name" id="password" class="form-control" placeholder="Subject Name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control" name="engrave" data-id=0>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>