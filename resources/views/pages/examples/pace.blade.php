@extends('layout.default')
@section('title', 'Pace')
@section('navbar-class', 'navbar-white navbar-light')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <x-content-header title="Pace" :breadcrumb="['Home', 'Examples', 'Pace']"/>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    You can Change Pace Styles, Checkout the <a href="https://thesmartdash.com/docs/3.1/" target="_blank" rel="noopener noreferrer">AdminLTE Official Docs</a> in Online.
                    <br>
                    Start creating your amazing application!
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
