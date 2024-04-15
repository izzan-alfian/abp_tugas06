<!-- Load DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<!-- Load DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@extends('template')
@section('title','Daftar Produk')
@section('content')

<div class="col-12">
    <span class="float-left">{{ session('msg') }}</span>
    <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->price }}</td>
                <td>
                    <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                    <form id="deleteForm{{$d->id}}" method="post" action="/product/{{ $d->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>