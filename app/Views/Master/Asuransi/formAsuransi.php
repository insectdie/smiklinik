

 

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Asuransi</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_asuransi" />
                            <div class="invalid-feedback">Please enter your asuransi.</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="ed_alamat" rows="3"></textarea>
                            <div class="invalid-feedback">Please enter your alamat.</div>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Kerjasama</label>
                            <div class="col-md-6 col-12">
                            <!-- <div class="col-md-6 col-12 mb-4"> -->
                                <div class="input-group input-daterange" id="bs-datepicker-daterange">
                                    <input type="text" id="ed_tgl_awal" placeholder="MM/DD/YYYY" class="form-control" />
                                    <span class="input-group-text">to</span>
                                    <input type="text" id="ed_tgl_akhir" placeholder="MM/DD/YYYY" class="form-control" />
                                </div>
                        <!-- </div> -->
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Telephone</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_no_telephone" />
                            <div class="invalid-feedback">Please enter your telephone.</div>
                          </div>
                          <div class="col-sm-1"></div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">Email</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_email" />
                            <div class="invalid-feedback">Please enter your email.</div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No MOU</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_no_mou" />
                            <div class="invalid-feedback">Please enter your no mou.</div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama PIC</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_nama_pic" />
                            <div class="invalid-feedback">Please enter your nama pic.</div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No HP PIC</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_no_hp_pic" />
                            <div class="invalid-feedback">Please enter your no hp pic.</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="ed_keterangan" rows="3"></textarea>
                            <div class="invalid-feedback">Please enter your keterangan.</div>
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
                              <th>Nama Asuransi</th>
                              <th>Tgl Kerjasama</th>
                              <th>No MOU</th>
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

              
