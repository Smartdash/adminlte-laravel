@extends('layout.default')
@section('title', '500 Error Page')
@section('navbar-class', 'navbar-white navbar-light')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <x-content-header title="500 Error Page" :breadcrumb="['Home', 'Examples', '500 Error Page']"/>
        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-danger">500</h2>

                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

                    <p>
                        We will work on fixing that right away.
                        Meanwhile, you may <a href="{{ route('dashboard.v1') }}">return to dashboard</a> or try using the search form.
                    </p>

                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
            </div>
            <!-- /.error-page -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
