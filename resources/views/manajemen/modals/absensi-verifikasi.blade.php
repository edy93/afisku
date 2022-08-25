<div class="modal fade" id="verifikasi-absensi" data-backdrop="static" data-keyboard="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header panel-heading bg-success text-center">
                <h4 class="modal-title text-white">Verifikasi Absensi</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin verifikasi data absen ini?</p>
                <div class="form-group">
                    <label>
                        Keterangan <span class="text-danger">*</span>
                    </label>
                    <textarea name="keterangan_verifikator" id="keterangan_verifikator" cols="30" rows="5"
                        class="form-control"
                        placeholder="KETERANGAN" style="height: auto"
                        required>{{ old('keterangan_verifikator') }}</textarea>
                    @error('keterangan_verifikator')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-sm btn-success" id="verifikasi-btn">Ya, Verifikasi</button>
            </div>
        </div>
    </div>
</div>
