
<div id="featureModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="featureTitle" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="featureForm" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mt-1">
                            <input type="text" class="form-control" placeholder="Feature Variable Name"
                                name="variable_name" id="variableName" required>
                        </div>
                        <div class="col-sm-6 mt-1">
                            <select class="form-control" name="categories" id="categories" required>
                                <option value="input">Input Text</option>
                                <option value="select">Select Option</option>
                                <option value="subject">Subject</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mt-1">
                            <input type="text" class="form-control" placeholder="Feature Name" id="featureName"
                                name="name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <input type="hidden" name="id" id="featureId">
                    <input type="hidden" name="operation" id="featureOperation">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit"class="btn btn-primary"  id="featureAction" >
                </div>
            </form>
        </div>
    </div>
</div>


<div id="optionModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Options</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id="optionList"></div>
            <form id="optionForm" method="POST">
                <div class="modal-body">
                    <div class="row mb-2">
                        <label class="col-sm-12 col-form-label">Add Options into Feature</label>
                    </div>
                    <div class="form-group row mt-0">
                        <div class="col-sm-6 mb-2">
                            <input type="text" class="form-control" placeholder="Option Name"
                                name="name" id="optionName" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Option Value"
                                name="value" id="optionValue" required>
                        </div>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <input type="hidden" name="feature_id" id="optionFeatureId">
                    <button type="submit" class="btn btn-primary w-100">Tambah</button>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>