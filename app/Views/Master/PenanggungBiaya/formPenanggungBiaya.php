

 

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Penanggung Biaya</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_penanggung_biaya" />
                            <div class="invalid-feedback">Please enter your penanggung biaya.</div>
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

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button id="bt-save" class="btn btn-primary">Save</button>
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
                              <th>Penanggung Biaya</th>
                              <th>Status</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                <!-- </div>
                </div> -->
                
              </div>

              
