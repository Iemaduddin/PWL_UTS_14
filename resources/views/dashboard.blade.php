@push('js')
    <script>
        alert('Selamat Datang');
    </script>
@endpush

@extends('layouts.first')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Map card -->
            <div class="card bg-gradient-primary">
                <div style="margin: 30px">
                    <h1>Selamat Datang</h1>
                    <h2>{{ $user->name }}</h2>
                </div>
            </div>
            <!-- /.card -->
            <div class="card bg-gradient-success" style="padding: 30px">
                <h4> <b>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">Username </div>
                            <div class="col-sm-6 col md 6">: {{ $user->username }}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">Nama </div>
                            <div class="col-sm-6 col md 6">: {{ $user->name }}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">Email </div>
                            <div class="col-sm-6 col md 6">: {{ $user->email }}</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">Nomor Handphone </div>
                            <div class="col-sm-6 col md 6">: {{ $user->nohp }}</div>
                        </div>
                    </b>
                </h4>
            </div>
        </div>
    </section>
    <!-- /.content-wrapper -->
@endsection
