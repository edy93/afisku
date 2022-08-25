<div class="form-group">
    <label>Nama Lokasi</label>
    {!! Form::text('nm_lokasi', old('nm_lokasi', $edit ? $lokasi->nm_lokasi : null), [
        'id' => 'nm_lokasi',
        'class' => 'form-control',
        'placeholder' => 'Nama Lokasi',
    ]) !!}
    <small class="text-danger"></small>
</div>
@if (!$edit && auth()->user()->hasRole(['masteradmin', 'superadmin']))
    <div class="form-group">
        <label>Satuan Kerja</label>
        {!! Form::select('satker_id', ['' => ''] + $satker, old('satker_id'), [
            'class' => 'form-control select2',
            'style' => 'width: 100%',
            'data-placeholder' => 'Silahkan pilih satuan kerja',
        ]) !!}
        <small class="text-danger"></small>
    </div>
@elseif (!$edit && auth()->user()->hasRole('admin-opd'))
    {!! Form::hidden('satker_id', auth()->user()->satker_id) !!}
@endif
<div class="form-group">
    <label>
        Deskripsi
    </label>
    {!! Form::textarea('deskripsi', $edit ? $lokasi->deskripsi : null, [
        'id' => 'deskripsi',
        'class' => 'form-control',
        'placeholder' => 'Deskripsi Lokasi',
        'rows' => 5,
    ]) !!}
    <small class="text-danger"></small>
</div>
<div id="map-canvas" class="mb-2"></div>
<div class="text-right">
    {!! Form::button('HAPUS AREA', ['id' => 'delete-area', 'type' => 'button', 'class' => 'btn btn-danger btn-sm']) !!}
</div>
<div class="form-group mt-0">
    <label>Koordinat</label>
    {!! Form::text('koordinat', $edit ? $lokasi->koordinat : null, [
        'id' => 'koordinat',
        'class' => 'form-control',
        'placeholder' => 'Koordinat',
    ]) !!}
    <small class="text-danger"></small>
</div>
<div class="form-group">
    <div class="custom-checkbox custom-control">
        {!! Form::checkbox('is_active', null, !$edit ? true : ($lokasi->is_active ? true : false), [
            'id' => 'is_active',
            'class' => 'custom-control-input',
        ]) !!}
        <label class="custom-control-label" for="is_active">
            AKTIF
        </label>
    </div>
</div>

@push('styles')
    <style>
        #map-canvas {
            height: 500px;
            margin: 0px;
            padding: 0px
        }
    </style>
@endpush

@push('scripts')
    <script src='https://maps.googleapis.com/maps/api/js?key={{ config('app.google_api_key') }}&libraries=drawing'>
    </script>
    <script>
        var map;
        var iw = new google.maps.InfoWindow();
        var lat_longs = new Array();
        var markers = new Array();
        var drawingManager;
        var shape;
        var coordinates = [];

        function initialize() {
            var myLatlng = new google.maps.LatLng(-0.37474374339501876, 111.76396781559316);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                zoomControl: true
            }
            map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
            drawingManager = new google.maps.drawing.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.POLYGON,
                drawingControl: true,
                drawingControlOptions: {
                    position: google.maps.ControlPosition.TOP_CENTER,
                    drawingModes: [google.maps.drawing.OverlayType.POLYGON]
                },
                polygonOptions: {
                    editable: true,
                    strokeColor: "#007bff",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#007bff",
                    fillOpacity: 0.35,
                }
            });
            drawingManager.setMap(map);

            google.maps.event.addListener(drawingManager, "overlaycomplete", function(event) {
                drawingManager.setDrawingMode(null);
                // To hide:
                drawingManager.setOptions({
                    drawingControl: false
                });

                var newShape = event.overlay;
                newShape.type = event.type;
                shape = newShape;
            });

            google.maps.event.addListener(drawingManager, "overlaycomplete", function(event) {
                overlayClickListener(event.overlay);
                $('#koordinat').val(event.overlay.getPath().getArray());
            });

            // load from database
            @if ($edit)
                setPolygon("{{ $lokasi->koordinat }}");
            @endif
        }

        function deleteSelectedShape() {
            if (shape) {
                shape.setMap(null);
                // To show:
                drawingManager.setOptions({
                    drawingControl: true,
                    drawingMode: google.maps.drawing.OverlayType.POLYGON,
                });
                $('#koordinat').val('');
            }
        }

        @if ($edit)
            function setPolygon(polygon_coords_str) {
                polygon_coords_str = polygon_coords_str.substring(1, polygon_coords_str.length - 1);
                polygon_coords_str = polygon_coords_str.split("),(");
                var polygon_coords = [];
                for (var i = 0; i < polygon_coords_str.length; i++) {
                    polygon_coords.push({ // create a google.maps.LatLngLiteral
                        // assume original data is (lat, lng)
                        lat: parseFloat(polygon_coords_str[i].split(',')[0]),
                        lng: parseFloat(polygon_coords_str[i].split(',')[1])
                    })
                }

                const coords = new google.maps.Polygon({
                    paths: polygon_coords,
                    strokeColor: "#007bff",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#007bff",
                    fillOpacity: 0.35,
                    editable: true
                });

                shape = coords;
                overlayClickListener(shape);
                coords.setMap(map);
                drawingManager.setDrawingMode(null);
                // To hide:
                drawingManager.setOptions({
                    drawingControl: false,
                });
            }
        @endif

        function overlayClickListener(overlay) {
            google.maps.event.addListener(overlay, "mouseup", function(event) {
                $('#koordinat').val(overlay.getPath().getArray());
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        google.maps.event.addDomListener(document.getElementById('delete-area'), 'click', deleteSelectedShape);

        $(function() {
            //
        });
    </script>
@endpush
