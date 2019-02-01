@include('static.header')

        <main id="main-container">

            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Добре Дошли
                            <hr><small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">В сайта можете да намерите линкове, откъдето може да гледате или да свалите любимите си предавания. Базата се обновява ежедневно, а ако се регистрирате можете да коментирате, добавяте линкове, както и да следите определени сериали за нови епизоди. Регистрация можете да направите от
                                <a href="/register">тук</a> (отнема само 30 секунди)</small>
                        </h1>

                    </div>
                </div>
            </div>
            <div class="content">
                <!-- Image Default -->
                <h2 class="content-heading">Популярно</h2>
                <div class="row">
                    <div class="col-md-9">
                                @yield('content')
                    </div>
                    <div class="col-md-3">
                        @include('static.homesidebar')
                    </div>

                </div>
            </div>

        </main>



<!-- END Main Container -->

<!-- Footer -->
@include('static.footer')
