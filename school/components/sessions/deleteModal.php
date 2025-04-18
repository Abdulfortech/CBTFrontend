<div class="modal" id="deleteSessionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Session</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>Are you sure you want to delete this Session?</p>
                <form id="addCenterForm">
                    <input class="form-control" type="date" name="end" id="sessionId" hidden>
                    <center>
                        <button type="submit" class="btn btn-danger mt-4" id="addSessionButton">Delete</button>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-primary mt-4">Cancel</button>
                    </center>
                </form>
                <div class="alert alert-danger" id="error_message" style="display:none"></div>
            </div>
        </div>
    </div>
</div>
