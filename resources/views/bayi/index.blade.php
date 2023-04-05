@extends('bayi.layout')

@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <br><br>
                <center>
                    <h2>POSYANDU TAMAN ASRI</h2><br>
                </center>
            </div>
            <div class="float-left my-2" style="width:50px auto">
                <a class="btn btn-success" href="{{ route('bayi.create') }}"><b>Input Bayi</b></a>
            </div>
            <br><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="table" class="table table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nomor Urut</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>TB_Lahir</th>
                <th>BB_Lahir</th>
                <th width="225px">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($bayi as $Bayi)
                <tr>
                    <td>{{ $Bayi->no_urut }}</td>
                    <td>{{ $Bayi->nama }}</td>
                    <td>{{ $Bayi->alamat }}</td>
                    <td>{{ $Bayi->tanggal_lahir }}</td>
                    <td>{{ $Bayi->bb_lahir }}</td>
                    <td>{{ $Bayi->tb_lahir }}</td>
                    <td>
                        <form action="{{ route('bayi.destroy', $Bayi->no_urut) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('bayi.show', $Bayi->no_urut) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('bayi.edit', $Bayi->no_urut) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- {!! $Bayi->withQueryString()->links('pagination::bootstrap-5') !!} --}}
@endsection
