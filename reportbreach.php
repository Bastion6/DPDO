<?php include ('../includes/header.php')?>

<div class="content-wrapper"> 
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h6 class="text-muted"> DATE OF DISCLOSER - DD/MM/YYYY</h6>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-justified-home"
                            aria-controls="navs-justified-home"
                            aria-selected="true"
                        >
                            <i class="tf-icons bx bx-home"></i> Breach type
                            <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-justified-profile"
                            aria-controls="navs-justified-profile"
                            aria-selected="false"
                        >
                            <i class="tf-icons bx bx-user"></i>  Breach Source
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-justified-messages"
                            aria-controls="navs-justified-messages"
                            aria-selected="false"
                        >
                            <i class="tf-icons bx bx-message-square"></i> Actions
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                        <div class="container-xxl flex-grow-1 container-p-y">

                            <!-- Basic Layout & Basic with Icons -->
                            <div class="row">
                                <!-- Basic Layout -->
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <small class="text-muted float-end">Default label</small>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row mb-3">
                                                    <label class="col-sm-4 col-form-label" for="basic-default-name">Type of data involved</label>
                                                    <div class="col-sm-8">
                                                        <select
                                                            multiple
                                                            class="form-select"
                                                            id="exampleFormControlSelect2"
                                                            aria-label="Multiple select example"
                                                            >
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">Personal Details (Names, DoB)</option>
                                                            <option value="2">COntact information (Address, Phone no., Email)</option>
                                                            <option value="3">Financial information</option>
                                                            <option value="3">Tax file No.</option>
                                                            <option value="3">Identifiers (Licence No., MedicareNo., Student ID)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-4 col-form-label" for="basic-default-company">Number of individuals whose details are exposed</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2 - 10</option>
                                                            <option value="3">11 - 50</option>
                                                            <option value="3">51 - 100</option>
                                                            <option value="3">> 100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-4 col-form-label" for="basic-default-email">Date of Breach</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                                                        </div>
                                                        <div class="form-text">format DD/MM/YYYY</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">NEXT TAB</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                    <!-- tAB 2 -->
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-company">Source of Breach</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">Malicious or Criminal attack</option>
                                                <option value="2">Human Error</option>
                                                <option value="3">Loss of hardware, documents or data</option>
                                                <option value="3">Insecure disposal</option>
                                                <option value="3">Other, Please indicate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-email">Number of Records exposed</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-merge">
                                            <input id="defaultInput" class="form-control" type="text" placeholder="Records input" />
                                            </div>
                                            <div class="form-text">Example 400</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-email">Data breach consequence</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-merge">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">NEXT TAB</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END TAB 2 -->
                    </div>
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                    <!-- tab 3 -->
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <small class="text-muted float-end">Default label</small>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-email">Actions Taken</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-merge">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-email">Have individuals been notified</label>
                                        <div class="col-sm-8">
                                            <!-- <div class="input-group input-group-merge"> -->
                                                <div class="form-check form-check-inline mt-3">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                                    <label class="form-check-label" for="inlineCheckbox1">NO</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                                    <label class="form-check-label" for="inlineCheckbox2">Yes</label>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-email">Other information</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-merge">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit report</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end tab 3  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include ('../includes/footer.php') ?>


