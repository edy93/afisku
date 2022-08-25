<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                NIP
                <span class="text-danger">*</span>
            </label>
            {!! Form::text('nip', old('nip', $edit ? $pegawai->nip : null), [
                'id' => 'nip',
                'class' => 'form-control',
                'placeholder' => 'NIP',
                'required' => 'required',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Nama Lengkap
                <span class="text-danger">*</span>
            </label>
            {!! Form::text('nm_pegawai', old('nm_pegawai', $edit ? $pegawai->nm_pegawai : null), [
                'id' => 'nm_pegawai',
                'class' => 'form-control',
                'placeholder' => 'Nama Lengkap',
                'required' => 'required',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
@if (auth()->user()->hasRole(['masteradmin', 'superadmin']))
    <div class="form-group">
        <label>Satuan Kerja</label>
        {!! Form::select('satker_id', ['' => ''] + $satker, old('satker_id', $edit ? $pegawai->satker_id : null), [
            'class' => 'form-control select2',
            'style' => 'width: 100%',
            'data-placeholder' => 'Silahkan pilih satuan kerja',
        ]) !!}
        <small class="text-danger"></small>
    </div>
@elseif (auth()->user()->hasRole('admin-opd'))
    {!! Form::hidden('satker_id', auth()->user()->satker_id) !!}
@endif
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Jabatan
            </label>
            {!! Form::text('jabatan', old('jabatan', $edit ? $pegawai->jabatan : null), [
                'id' => 'jabatan',
                'class' => 'form-control',
                'placeholder' => 'Jabatan',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Kelas Jabatan
            </label>
            {!! Form::number('kelas_jabatan', old('kelas_jabatan', $edit ? $pegawai->kelas_jabatan : null), [
                'id' => 'kelas_jabatan',
                'class' => 'form-control',
                'placeholder' => 'Kelas Jabatan',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Email
            </label>
            {!! Form::text('email', old('email', $edit ? $pegawai->email : null), [
                'id' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Email',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                No Handphone
            </label>
            {!! Form::text('nohp', old('nohp', $edit ? $pegawai->nohp : null), [
                'id' => 'nohp',
                'class' => 'form-control',
                'placeholder' => 'No Handphone',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Password
                <span class="text-danger">*</span>
                @if ($edit)
                    <span class="small font-italic text-danger">(Isi jika ingin mengubah password)</span>
                @endif
            </label>
            {!! Form::password('password', [
                'id' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Password',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Konfirmasi Password
                <span class="text-danger">*</span>
            </label>
            {!! Form::password('password_confirmation', [
                'id' => 'password_confirmation',
                'class' => 'form-control',
                'placeholder' => 'Konfirmasi Password',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
@can('pegawai-extrasettings-update')
    <div class="form-group">
        <label>
            Opsi Tambahan
        </label>
        <div class="custom-switches-stacked mb-3">
            <div class="custom-checkbox custom-control">
                {!! Form::checkbox('is_active', null, !$edit ? true : ($pegawai->is_active ? true : false), [
                    'id' => 'is_active',
                    'class' => 'custom-control-input',
                ]) !!}
                <label class="custom-control-label" for="is_active">
                    AKTIF
                </label>
            </div>
            <div class="custom-checkbox custom-control">
                {!! Form::checkbox('is_auto_verif', null, !$edit ? false : ($pegawai->is_auto_verif ? true : false), [
                    'id' => 'is_auto_verif',
                    'class' => 'custom-control-input',
                ]) !!}
                <label class="custom-control-label" for="is_auto_verif">
                    AUTO VERIFIKASI
                </label>
            </div>
        </div>
    </div>
@endcan
