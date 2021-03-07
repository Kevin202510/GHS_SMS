<div class="modal fade" id="schoolyear" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-title"> Add School Year </h4>
            </div>
            <div class="modal-body">
                <form action="schoolyear_add.php" method="POST" class="form-horizontal">
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Password</span></div>
                        <input type="date" name="school_year" id="password" class="form-control" placeholder="description" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-addon"><span class="input-group-text">Password</span></div>
                        <input type="text" name="batch_name" id="password" class="form-control" placeholder="description" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control" name="engrave" data-id=0>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>