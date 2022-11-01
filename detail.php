<?php include('../includes/header.php') ?>


<div class="content-wrapper">
            <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Leadership -->
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Leadership</h5>
                    <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Cook</strong></td>
                            <td>Fin Admin</td>
                            <td>
                            Some@email.com
                            </td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Rick Sanches</strong></td>
                            <td>Super Admin</td>
                            <td>
                            other@email.com
                            </td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-2"></i> Delete</a
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
            <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">Update Leadership Details</h5>
                    <p class="card-text">Make some changes to the Leadership details.</p>
                    <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                </div>
                </div>
            </div>
        </div>
        <!-- leadership -->

        <!-- staff oversight -->
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Staff oversight</h5>
                    <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Albert Cook</strong></td>
                            <td>Fin Admin</td>
                            <td>
                            Some@email.com
                            </td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Rick Sanches</strong></td>
                            <td>Super Admin</td>
                            <td>
                            other@email.com
                            </td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-2"></i> Delete</a
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
            <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">Update Staff Oversight Details</h5>
                    <p class="card-text">Make some changes to the details.</p>
                    <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                    <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd"
                        >
                          Toggle End
                        </button>
                </div>
                </div>
            </div>

            <!-- toogle -->
            <div
                          class="offcanvas offcanvas-end"
                          tabindex="-1"
                          id="offcanvasEnd"
                          aria-labelledby="offcanvasEndLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasEndLabel" class="offcanvas-title">Edit Details</h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                            <p class="text-center">
                              Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                              graphic or web designs. The passage is attributed to an unknown typesetter in the 15th
                              century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum
                              for use in a type specimen book.
                            </p>
                            <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                            <button
                              type="button"
                              class="btn btn-outline-secondary d-grid w-100"
                              data-bs-dismiss="offcanvas"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
            <!-- toogle -->
        </div>
        <!-- staff oversight -->
    </div>
</div>

<?php include ('../includes/footer.php')?>