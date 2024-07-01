<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/bab4b1e96f.js" crossorigin="anonymous"></script>


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('css/style_add_unit.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    

</head>

<body id="page-top">
    @include('admin.partials.sidebar')
    <!-- Page Wrapper -->
    <div id="wrapper">
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                
                <div class="container-fluid mt-3 p-4" style="background-color: #f8f9fa">
                     <!-- Begin Page Content -->
                    @yield('container')
                </div>      
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    {{-- <script src="{{asset('js/sb-admin-2.min.js')}}"></script> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    {{-- FeatherIcon --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script>
        feather.replace({ 'aria-hidden': 'true' })
    </script>
</body>

</html>