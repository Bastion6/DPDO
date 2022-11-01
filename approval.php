<?php include ('includes/header.php')?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h1>Company Details</h1>

        <!-- summary -->
        <div class="row">
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Registered </span>
                        <h3 class="card-title mb-2">40</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Up</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Approved </span>
                        <h3 class="card-title mb-2">40</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Up</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Pending </span>
                        <h3 class="card-title mb-2">40</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Up</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Suspended </span>
                        <h3 class="card-title mb-2">40</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> Up</small>
                    </div>
                </div>
            </div>

        </div>

        <!-- data table -->
        <div class="card">
                <h5 class="card-header">Register Companies</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Nature of Business</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angela White</strong>
                          </td>
                          <td>info@biz.com</td>
                          <td>Online Store          </td>
                          <td><span class="badge bg-label-primary me-1">Active</span></td>
                          <td>
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i>View/Approve</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i>Decline</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Big Data</strong></td>
                          <td>info@biz.com</td>
                          <td>
                            ISP
                          </td>
                          <td><span class="badge bg-label-primary me-1">Pending</span></td>
                          <td>
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> View / Approve</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Decline</a
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>
</div>


<?php include ('../includes/footer.php')?>

