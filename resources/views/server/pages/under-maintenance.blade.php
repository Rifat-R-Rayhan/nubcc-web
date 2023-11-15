@extends('server.layouts.masterlayout')

@section('content')

<!--Under Maintenance -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <div class="mt-4">
            <img src="../backend/assets/img/icons/nubcc_logo.png" alt="girl-doing-yoga-light" width="150" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
        </div>
        <h2 class="mb-2 mx-2">This Page is Under Maintenance!</h2>
        <p class="mb-4 mx-2">New features are coming soon.</p>
        <a href="{{'dashboard'}}" class="btn btn-primary">Back to home</a>
        <div class="mt-4">
            <img src="../backend/assets/img/illustrations/girl-doing-yoga-light.png" alt="girl-doing-yoga-light" width="300" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
        </div>
    </div>
</div>
<!-- /Under Maintenance -->

@endsection