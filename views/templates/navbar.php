<!-- START MODAL -->
<!-- Start Search Modal Desktop Version -->
    <div class="modal fade" id="openModalDV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="formUser" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">titre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="categories">Choisissez 3 catégories :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="Actualités" value="Actualités">
                                    <label class="checkbox" for="inlineCheckbox">Actualités</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="Test" value="Test">
                                    <label class="checkbox" for="inlineCheckbox">Test</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="PS5" value="PS5">
                                    <label class="checkbox" for="inlineCheckbox">PS5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="XBOX X" value="XBOX X">
                                    <label class="checkbox" for="inlineCheckbox">XBOX X</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="SWITCH" value="SWITCH">
                                    <label class="checkbox" for="inlineCheckbox">SWITCH</label>
                                </div>
                                    <p class="error"><?= $error['categories'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="format">Choisissez un format :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="6" value="6">
                                    <label class="radio" for="inlineradio">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="9" value="9">
                                    <label class="radio" for="inlineradio">9</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="12" value="12">
                                    <label class="radio" for="inlineRadio">12</label>
                                </div>
                                
                                    <p class="error"><?= $error['format'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="mod">Choisissez votre mode :</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input name="mod"class="form-check-input" type="checkbox" id="mod" value="1">
                                    <label class="switch" for="flexSwitchCheckDefault">&#x263D;</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-lg" type="submit">Submit </button>                
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Search Modal Desktop Version -->