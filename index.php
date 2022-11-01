<?php include ('includes/header.php')?>



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->


            <div class="container-xxl flex-grow-1 container-p-y">
            <h1>Summary</h1>

              <div class="row">
                <!-- <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Next Submission </h5>
                          <p class="mb-4">
                            Your next <span class="fw-bold">DPDO</span> compiance submission is due 30 july
                            
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Make submission</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                         
                          <span class="fw-semibold d-block mb-1">Registered </span>
                          <h3 class="card-title mb-2">40</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Up</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          
                          <span>Pending</span>
                          <h3 class="card-title text-nowrap mb-1">2</h3>
                          <small class="text-primary fw-semibold"><i class="bx bx-adjust"></i> pending</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          
                          <span>Suspended</span>
                          <h3 class="card-title text-nowrap mb-1">2</h3>
                          <small class="text-danger fw-semibold"><i class="bx bx-adjust"></i> pending</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          
                          <span>Approved</span>
                          <h3 class="card-title text-nowrap mb-1">10</h3>
                          <small class="text-primary fw-semibold"><i class="bx bx-adjust"></i> pending</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <!-- Breaches -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
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
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
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
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
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
                <div class="col-md-6 col-lg-4 order-2 mb-4">
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
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
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
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
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
                <!--/ Complaints -->
              </div>
            </div>
            <!-- / Content -->
<?php include ('../includes/footer.php')?>