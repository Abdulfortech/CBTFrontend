<div class="modal" id="addStudentModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Student</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="addStudentForm">
                    <input class="form-control" type="text" name="schoolid" value="" hidden>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h4 class="text-left">Student Information</h4>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="number">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="number">First Name  <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="fname" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="number">Registration Number  <span class="text-danger">*</span></label>
                                <?php 
                                    $abr = 'MDE'; $date = date("Y"); $y = substr(date("Y"),2,4); $code = $abr."/".$y."/".sprintf("%04d", 200);
                                ?>
                                <input class="form-control" type="text" value="<?php echo $code; ?>" name="regnumber" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="Name">Date of birth  <span class="text-danger">*</span></label>
                                <input type="date" id="dob" name="dob" class="form-control" ng-model="model.date" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-group">
                                <label for="Name">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control" required>
                                    <option>Choose..</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>State  <span class="text-danger">*</span></label>
                                <select   onchange="toggleLGA(this);" id="state" class="form-control" name="state">
                                <option selected value="">Choose..</option>
                                <?php include 'state-list.php';?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>Local Goverment Area  <span class="text-danger">*</span></label>
                                <select id="lga" class="form-control select-lga" name="lga"  required>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Name">Address  <span class="text-danger">*</span></label>
                                <input class="form-control" id="address" type="text" name="address" required>
                            </div>
                        </div>
                        <h4 class="text-left">Guardian Information</h4>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="address" type="text" name="gname" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="Name">Gender <span class="text-danger">*</span></label>
                                <select name="ggender" class="form-control" required>
                                    <option>Choose..</option>
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="Name">Relation <span class="text-danger">*</span></label>
                                <select name="grelation" class="form-control" required>
                                    <option selected value="">Choose..</option>
                                    <option>Father</option>
                                    <option>Mother</option>
                                    <option>GrandFather</option>
                                    <option>GrandMother</option>
                                    <option>Uncle</option>
                                    <option>Aunty</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="Name">Phone Number 1  <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" maxlength="11" name="gphone1" required>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="form-group">
                                <label for="Name">Phone Number 2</label>
                                <input class="form-control" type="text" maxlength="11" name="gphone2" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label for="Name">E-mail</label>
                                <input class="form-control" type="email"  name="gemail" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control" name="gstate">
                                    <option selected value="">Choose..</option>
                                    <?php include 'state-list.php';?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <label>Local Goverment Area</label>
                                <input class="form-control" type="text" name="glga" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label for="Name">Address</label>
                                <input class="form-control" type="text" name="gaddress" >
                            </div>
                        </div>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary mt-4" id="addSessionButton">Submit</button>
                    </center>
                </form>
                <div class="alert alert-danger" id="error_message" style="display:none"></div>
            </div>
        </div>
    </div>
</div>
