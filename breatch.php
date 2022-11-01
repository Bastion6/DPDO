<?php include ('../includes/header.php')?>


<div class="content-wrapper"> 
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- bREACHES -->
            <div class="col-md-4 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Breaches</h5>
                        <div class="dropdown">
                        <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 14 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                <img src="assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">2 Nov</small>
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">16</h6>
                                </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                <img src="assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">5 Oct</small>
                                    <h6 class="mb-0">Bank</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">2</h6>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Breaches -->
            <!-- Complaints -->
            <div class="col-md-4 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Complaints</h5>
                        <div class="dropdown">
                            <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 14 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Email</small>
                                <h6 class="mb-0">2 Nov</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">2</h6>
                                <span class="text-muted">Pending</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Contacts</small>
                                <h6 class="mb-0">14 Oct</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">1</h6>
                                <span class="text-muted">Pending</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <!--report  -->
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Report issue</h5>
                        <p class="card-text">Submit complaint or breach to the DPDO</p>
                        <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasEnd"
                                aria-controls="offcanvasEnd"
                        >
                            Submit Report
                        </button>
                    </div>
                </div>
            </div>
            <!-- end report -->

            <!-- toggle -->
            <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="offcanvasEnd"
                aria-labelledby="offcanvasEndLabel"
            >
            <div class="offcanvas-header">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">DPDO Report</h5>
                    <button
                        type="button"
                        class="btn-close text-reset"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                    <p class="text-center">
                        You are about to submit a report on a Data breach or Complaint to the DPDO as part of compliance measures, please provide all the required information. 
                    </p>
                    <p>
                        Please select Submission type
                    </p>
                    <a type="button" href="reportbreach.php" class="btn btn-primary mb-2 d-grid w-100">Breach</a>
                    <button
                        type="button"
                        class="btn btn-outline-secondary d-grid w-100"
                        data-bs-dismiss="offcanvas"
                    >
                        Complaint
                    </button>
                </div>
            </div>
            <!-- toogle -->
        </div>

            
                


            <!-- Breach Table -->
            <div class="row mb-4">
                <div class="card">
                    <h5 class="card-header">Data Breaches</h5>
                    <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Breach Type</th>
                            <th>Data Type</th>
                            <th>Number of records</th>
                            <th>Number of individuals</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>BR12/0424</strong>
                                </td>
                                <td>12/04/22</td>
                                <td>Human Error </td>
                                <td>Contact</td>
                                <td>400 records </td>
                                <td>50 users </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>BR14/0424</strong>
                                </td>
                                <td>14/04/22</td>
                                <td>insecure disposal </td>
                                <td>Contact</td>
                                <td>40 records </td>
                                <td>5 users </td>
                            </tr>
                            
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
              <!--/ Breach Table -->

               <!-- Complaints Table -->
            <div class="row">
            <div class="card">
                <h5 class="card-header">Complaints</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tracking ID</th>
                          <th>Date</th>
                          <th>Email</th>
                          <th>Description</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            
                            <td>442352-H </td>
                            <td>12/04/22</td>
                            <td>thisguy@mail.com</td>
                            <td>we keep sending ad emails everyday</td>
                            <td>Pending </td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </div>
              <!--/ Complaints Table -->
    </div>
</div>
<?php include ('../includes/footer.php')?>