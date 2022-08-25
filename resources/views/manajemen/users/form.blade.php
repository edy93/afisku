<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Nama Lengkap
                <span class="text-danger">*</span>
            </label>
            {!! Form::text('name', old('name', $edit ? $user->name : null), [
                'id' => 'name',
                'class' => 'form-control',
                'placeholder' => 'Nama Lengkap',
                'required' => 'required',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Username
                <span class="text-danger">*</span>
                <span class="small">(digunakan untuk login)</span>
            </label>
            {!! Form::text('username', old('username', $edit ? $user->username : null), [
                'id' => 'username',
                'class' => 'form-control',
                'placeholder' => 'Username',
                'required' => 'required',
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
                <span class="text-danger">*</span>
            </label>
            {!! Form::text('email', old('email', $edit ? $user->email : null), [
                'id' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Email',
                'required' => 'required',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Peran
                <span class="text-danger">*</span>
            </label>
            {!! Form::select('roles', ['' => ''] + $roles, old('roles', $edit ? $userRole : null), [
                'class' => 'form-control select2',
                'style' => 'width: 100%',
                'data-placeholder' => 'Silahkan pilih peran',
                'required' => 'required',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
<div class="form-group">
    <label>Satuan Kerja</label>
    {!! Form::select('satker_id', ['' => ''] + $satker, old('satker_id', $edit ? $user->satker_id : null), [
        'class' => 'form-control select2',
        'style' => 'width: 100%',
        'data-placeholder' => 'Silahkan pilih satuan kerja',
    ]) !!}
    <small class="text-danger"></small>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>
                Password
                <span class="text-danger">*</span>
                @if ($edit)
                    <span class="small text-danger">(Isi jika ingin mengubah password)</span>
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
            {!! Form::password('confirm-password', [
                'id' => 'confirm-password',
                'class' => 'form-control',
                'placeholder' => 'Konfirmasi Password',
            ]) !!}
            <small class="text-danger"></small>
        </div>
    </div>
</div>
