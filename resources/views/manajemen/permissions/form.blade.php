<div class="position-relative form-group">
    <label>Hak Akses</label>
    {!! Form::text('name', old('name', $edit ? $permission->name : null), [
        'id' => 'name',
        'class' => 'form-control',
        'placeholder' => 'Hak Akses',
    ]) !!}
    <small class="text-danger"></small>
</div>
<div class="position-relative form-group">
    <label>Group</label>
    {!! Form::text('group', old('group', $edit ? $permission->group : null), [
        'id' => 'group',
        'class' => 'form-control',
        'placeholder' => 'Group',
    ]) !!}
    <small class="text-danger"></small>
</div>
@if (!$edit)
    <div class="mb-3">
        @foreach ($options as $key => $value)
            <div class="custom-checkbox custom-control mb-2">
                {!! Form::checkbox('options[]', $value, false, [
                    'id' => $value,
                    'class' => 'custom-control-input',
                ]) !!}
                <label class="custom-control-label" for="{{ $value }}">
                    {{ $value }}
                </label>
            </div>
        @endforeach
    </div>
@endif

@push('scripts')
    <script>
        $('#name').on("change keyup paste click", function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $(this).val(Text);
        });
        $('#group').on("change keyup paste click", function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            $(this).val(Text);
        });
    </script>
@endpush
