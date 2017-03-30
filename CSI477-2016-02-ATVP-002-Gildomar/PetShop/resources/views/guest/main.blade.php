<!DOCTYPE html>
<html lang="pt-BR">

    @include('partials._head')

    <body class="hold-transition skin-green sidebar-mini">

        <div class="wrapper">
    
            @include('partials._header')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
            <!-- /.content -->
            </div>                                                                
  <!-- /.content-wrapper -->

            @include('partials._footer')
        </div>
<!-- ./wrapper -->
        @include('partials._javascript')
        @yield('scriptLocal')
    </body>
</html>
