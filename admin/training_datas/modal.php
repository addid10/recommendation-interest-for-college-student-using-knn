<div id="trainModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="trainTitle" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="trainForm" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-12 mt-1">
                            <label>Fullname</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="fullName" name="name"
                                required>
                        </div>
                    </div>
                    <?php $a = 0; ?>
                    <?php foreach($featureNames as $f => $key): ?>
                    <?php if($key["Input"] == "input"): ?>
                    <div class="form-group row">
                        <div class="col-sm-12 mt-1">
                            <label><?= $key["Name"] ?> (<?= $key["Variable"] ?>)</label>
                            <input type="text" class="form-control" name="score[]" id="F<?= $a++ ?>" placeholder="<?= $key["Name"] ?>"
                                required>
                        </div>
                    </div>
                    <?php elseif($key["Input"] == "select"): ?>
                    <?php require('index.option.php'); ?>
                    <div class="form-group row">
                        <div class="col-sm-12 mt-1">
                            <label><?= $key["Name"] ?> (<?= $key["Variable"] ?>)</label>
                            <select class="form-control" name="score[]" id="F<?= $a++ ?>">
                                <?php foreach($optionDatas as $option): ?>
                                <option value="<?= $option->option_value ?>"><?= $option->option_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <?php elseif($key["Input"] == "subject"): ?>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label><?= $key["Name"] ?> (<?= $key["Variable"] ?>)</label>
                            <select class="form-control" name="score[]" id="F<?= $a++ ?>">
                                <option value="4">A</option>
                                <option value="3.75">A-</option>
                                <option value="3.5">B+</option>
                                <option value="3">B</option>
                                <option value="2.75">B-</option>
                                <option value="2.5">C+</option>
                                <option value="2">C</option>
                                <option value="1.75">C-</option>
                                <option value="1.5">D+</option>
                                <option value="1">D</option>
                                <option value="0">E</option>
                            </select>
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endforeach ?>
                    <div class="form-group row" id="resultForAdd">
                        <div class="col-sm-12 mt-1">
                            <label>Result</label>
                            <select class="form-control" name="result" id="result">
                                <?php foreach($results as $r): ?>
                                    <option value="<?= $r["id"] ?>"><?= $r["name"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <input type="hidden" name="id" id="trainId">
                    <input type="hidden" name="operation" id="trainOperation">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="trainAction">
                </div>
            </form>
        </div>
    </div>
</div>