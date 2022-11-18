<?php include ('includes/header.php') ?>


<div class="content-wrapper">
            <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-md-12">
            <div class="card mb-4 pd-3">
            <h5 class="card-header">Submission Form </h5>
            <div class="card-body">
                <div class="row">
                    <div class="Col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Organistion Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="Name"
                            />
                        </div>
                    </div>
                    <div class="Col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label></label>
                            <input
                                type="text"
                                class="form-control"
                                id="location"
                                placeholder="Address"
                            />
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="c0l-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contact</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="+256"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Reg No.</label>
                            <input
                                class="form-control"
                                type="text"
                                id="exampleFormControlReadOnlyInput1"
                                placeholder="Reg No."
                            />
                        </div>
                    </div>
                </div>
                table jquery missing
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="row gy-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Data Collected</label>
                            <div class="col-md">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                                    <label class="form-check-label" for="defaultCheck1"> Personal data (Name, DoB) </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" />
                                    <label class="form-check-label" for="defaultCheck2"> Contact information </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" />
                                    <label class="form-check-label" for="defaultCheck3">Financial information  (credit card) </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" />
                                    <label class="form-check-label" for="defaultCheck4"> Tax file Information </label>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" />
                                    <label class="form-check-label" for="defaultCheck5"> Identifiers (license no., medical no. student no)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row gy-3">
                                <label for="exampleFormControlReadOnlyInput1" class="form-label">Number of individuals</label>
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" value="" id="Check1" />
                                        <label class="form-check-label" for="Check1"> 1</label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" value="" id="Check2" />
                                        <label class="form-check-label" for="Check2"> 2 - 10 </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" value="" id="Check3" />
                                        <label class="form-check-label" for="Check3">11 - 50 </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" value="" id="Check4" />
                                        <label class="form-check-label" for="Check4"> 51 - 100 </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" value="" id="Check5" />
                                        <label class="form-check-label" for="Check5"> < 100</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>