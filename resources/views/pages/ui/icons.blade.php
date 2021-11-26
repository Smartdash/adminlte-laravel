@extends('layout.default')
@section('title', 'Icons')
@section('navbar-class', 'navbar-white navbar-light')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <x-content-header title="Icons" :breadcrumb="['Home', 'UI', 'Icons']"/>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Icons</h3>
                    </div> <!-- /.card-body -->
                    <div class="card-body">
                        <p>You can use any font library you like with AdminLTE 3.</p>
                        <strong>Recommendations</strong>
                        <div>
                            <a href="https://fontawesome.com/">Font Awesome</a><br>
                            <a href="https://useiconic.com/open/">Iconic Icons</a><br>
                            <a href="https://ionicons.com/">Ion Icons</a><br>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
