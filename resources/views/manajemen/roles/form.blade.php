<div class="form-group">
    <label>Peran</label>
    {!! Form::text('name', old('name', $edit ? $role->name : null), [
        'id' => 'name',
        'class' => 'form-control',
        'placeholder' => 'Peran',
    ]) !!}
    <small class="text-danger"></small>
</div>
<div class="mt-4 mb-2">
    Hak Akses
    <small class="text-danger"></small>
</div>
<div class="row">
    @foreach ($permissions as $key => $permisssion)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    {{ strtoupper(str_replace('-', ' ', $key)) }}
                </div>
                <div class="card-body">
                    @foreach ($permisssion as $value)
                        <div class="custom-checkbox custom-control">
                            {!! Form::checkbox(
                                'permissions[]',
                                $value['id'],
                                !$edit ? null : (in_array($value['id'], $rolePermissions) ? true : false),
                                [
                                    'id' => $value['name'],
                                    'class' => 'custom-control-input',
                                ],
                            ) !!}
                            <label class="custom-control-label" for="{{ $value['name'] }}">
                                {{ $value['name'] }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
