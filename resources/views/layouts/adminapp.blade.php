@include('admin.static.header')

<main id="main-container">

    <div class="bg-body-light">
        <div class="content content-full">




        </div>
    </div>
    <div class="content">

        @if (\Session::has('message'))
            <div class="alert alert-info alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p class="mb-0">{!! \Session::get('message'); !!}</p>
            </div>
    @endif
        <!-- Image Default -->
        <h2 class="content-heading">Популярно</h2>
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>

        </div>
    </div>

</main>



<!-- END Main Container -->

<!-- Footer -->
@include('static.footer')
