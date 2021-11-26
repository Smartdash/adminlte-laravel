@php($layout = $layout ?? 'container-fluid')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="{{ $layout }}">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @forelse($breadcrumb ?? [] as $item)
                        @if(end($breadcrumb) !== $item)
                            <li class="breadcrumb-item"><a href="#">{{ $item }}</a></li>
                        @else
                            <li class="breadcrumb-item active">{{ $item }}</li>
                        @endif
                    @empty
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    @endforelse
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
