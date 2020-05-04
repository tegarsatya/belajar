@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between mb-3">
            <div id="create-space">
                <a href="{{ route('space.create') }}" class="btn btn-primary">Pin !</a>
            </div>
            <div id="view-space">
                <a href="#" class="btn btn-secondary"><i class="fas fa-list"></i></a> |
                <a href="#" class="btn btn-secondary"><i class="fas fa-globe"></i></a>
            </div>
        </div>
            <div class="card">
                <div class="card-header">Browse Codespace</div>
                <div id ="here-maps">
                    <div style="height: 500px" id="mapContainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        window.action = "browse"
        jQuery(document).ready(function () {
            jQuery(".btn-add").click(function () {
                let markup = jQuery(".invisible").html();
                jQuery(".increment").append(markup);
            });
            jQuery("body").on("click", ".btn-remove", function () {
                jQuery(this).parents(".input-group").remove();
            })
        })
    </script>
@endpush
