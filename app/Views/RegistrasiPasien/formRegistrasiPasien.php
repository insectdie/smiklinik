

 

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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Induk Pasien</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_no_induk_pasien" />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Rekam Medis</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_no_rekam_medis" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama *</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_nama" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK (KTP) *</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="ed_nik_ktp" />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No BPJS</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="ed_no_bpjs" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin *</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_jenis_kelamin" name = "ed_jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option id="laki-laki">Laki-laki</option>
                                <option id="perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tempat / Tgl Lahir *</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="ed_tempat_lahir" />
                          </div>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" id="ed_tgl_lahir" />
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
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Provinsi</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_provinsi" name = "ed_provinsi">
                                <option selected>Pilih Provinsi</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kabupaten</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_kabupaten" name = "ed_kabupaten">
                                <option selected>Pilih Kabupaten</option>
                            </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kecamatan</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_kecamatan" name = "ed_kecamatan">
                                <option selected>Pilih Kecamatan</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kelurahan</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_kelurahan" name = "ed_kelurahan">
                                <option selected>Pilih Kelurahan</option>
                            </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ibu *</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ed_nama_ibu" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK Ibu</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="ed_nik_ibu" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Telephone</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="ed_no_telephone" />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No HP</label>
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="ed_no_hp" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Gol Darah *</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_gol_darah" name = "ed_gol_darah">
                                <option selected>Pilih Golongan Darah</option>
                                <option value="O">O</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Rhesus *</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_rhesus" name = "ed_rhesus">
                                <option selected>Pilih Rhesus</option>
                                <option value="negative">Negative</option>
                                <option value="Positive">Positive</option>
                            </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Agama</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_agama" name = "ed_agama">
                                <option selected>Pilih Agama</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Pekerjaan</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_jenis_pekerjaan" name = "ed_jenis_pekerjaan">
                                <option selected>Pilih Jenis Pekerjaan</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status Pernikahan</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_status_pernikahan" name = "ed_status_pernikahan">
                                <option selected>Pilih Status Pernikahan</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status Pendidikan</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_status_pendidikan" name = "ed_status_pendidikan">
                                <option selected>Pilih Status Pendidikan</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Status Keluarga</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_status_keluarga" name = "ed_status_keluarga">
                                <option selected>Pilih Status Keluarga</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Karyawan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_nama_karyawan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kelompok Pasien</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_kelompok_pasien" name = "ed_kelompok_pasien">
                                <option selected>Pilih Kelompok Pasien</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Sub Kelompok Pasien</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_sub_kelompok_pasien" name = "ed_sub_kelompok_pasien">
                                <option selected>Pilih Sub Kelompok Pasien</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Penanggung Biaya</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_penanggung_biaya" name = "ed_penanggung_biaya">
                                <option selected>Pilih Penanggung Biaya</option>
                            </select>
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Asuransi</label>
                          <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" id="ed_asuransi" name = "ed_asuransi">
                                <option selected>Pilih Asuransi</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Kepesertaan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_kepesertaan" />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Waktu Kepesertaan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="ed_tgl_kepesertaan" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Alergi Obat</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="ed_alergi_obat" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Alergi Lainnya</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="ed_alergi_lainnya" rows="3"></textarea>
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
                              <th>Nama Asuransi</th>
                              <th>Tanggal Kerjasama</th>
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

              
