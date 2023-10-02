

 

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> <?= $title ?></h4>
              <!-- <div class="row mb-4">

              <div class="row"> -->
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"><?= $title ?></h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kode ICPC</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_kode_icpc" />
                            <div class="invalid-feedback">Please enter your ICPC.</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">ICPC</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="ed_icpc" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                          <div class="col-sm-10">
                              <div class="form-check mb-2">
                                <input
                                  name="ed_status"
                                  class="form-check-input"
                                  type="radio"
                                  value="1"
                                  id="ed_status_aktif"
                                  checked="" />
                                <label class="form-check-label" for="collapsible-addressType-home">
                                  Aktif
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  name="ed_status"
                                  class="form-check-input"
                                  type="radio"
                                  value="0"
                                  id="ed_status_tidak_aktif" />
                                <label class="form-check-label" for="collapsible-addressType-office">
                                  Tidak Aktif
                                </label>
                              </div>
                          </div>
                        </div>

                        <div class="row justify-content-start">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-1">
                            <button id="bt-save" class="btn btn-primary">Save</button>
                          </div>
                          <div class="col-sm-1">
                            <button id="bt-cancel" class="btn btn-danger">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-xxl">
                  <div class="card mb-4">
                  <div class="card-datatable">
                    <table id="table" class="table" style="width:100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode ICPC</th>
                              <th>ICPC</th>
                              <th>Status</th>
                              <th width="30%">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                <!-- </div>
                </div> -->
                
              </div>

              
