

 

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> <?= $title ?></h4>
              <div class="row mb-4">

              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"><?= $title ?></h5>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" novalidate>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status Keluarga</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Ayah" />
                            <div class="invalid-feedback">Please enter your status keluarga.</div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                          <div class="col-sm-10">
                              <div class="form-check mb-2">
                                <input
                                  name="collapsible-addressType"
                                  class="form-check-input"
                                  type="radio"
                                  value=""
                                  id="collapsible-addressType-home"
                                  checked="" />
                                <label class="form-check-label" for="collapsible-addressType-home">
                                  Aktif
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  name="collapsible-addressType"
                                  class="form-check-input"
                                  type="radio"
                                  value=""
                                  id="collapsible-addressType-office" />
                                <label class="form-check-label" for="collapsible-addressType-office">
                                  Tidak Aktif
                                </label>
                              </div>
                          </div>
                        </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-xxl">
                  <div class="card mb-4">
                  <div class="card-datatable table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Status Keluarga</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                
              </div>


              
