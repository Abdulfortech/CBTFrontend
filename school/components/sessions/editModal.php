<div class="modal" id="editSessionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Session</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="addCenterForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Title</label>
                            <input class="form-control" type="text" name="title" id="addSessionTitle">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Starting From</label>
                            <input class="form-control" type="date" name="start" id="addSessionStart">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Starting End</label>
                            <input class="form-control" type="date" name="end" id="addSessionEnd">
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary mt-4" id="addSessionButton">Save</button>
                    </center>
                </form>
                <div class="alert alert-danger" id="error_message" style="display:none"></div>
            </div>
        </div>
    </div>
</div>
