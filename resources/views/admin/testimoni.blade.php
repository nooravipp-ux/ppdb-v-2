@extends('layouts.master')
@section('title', 'PPDB - Pengaturan Testimoni')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-note icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <div class="page-title-subheading">
                    <h4>
                        KELOLA TESTIMONI
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class=" card mb-5 "> <br>
            <div class="table container ">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalForAddTestimoni">Tambah Testimoni</a>
                <hr>
                <table class="table table-bordered" id="tableList">
                    <thead>
                        <tr>
                            <th class="" width="15%">Nama</th>
                            <th class="">Testimoni</th>
                            <th class=" "width="10%">Lulusan</th>
                            {{-- <th class="text-center ">Status</th> --}}
                            <th class="text-center" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimoniData as $data)
                        <tr>
                            <td class="text-left pl-4">{{$data->nama}}</td>
                            <td><?php echo html_entity_decode($data->testimoni); ?></td>
                            <td><?php echo html_entity_decode($data->lulusan); ?></td>
                            {{-- <td class="text-center">{{($data->status == 1)? "Ditampilkan" : "Tidak Ditampilkan"}}</td> --}}
                            <td class=" text-center">
                                <a href="" class="btn btn-warning"> Edit</a>
                                <form method="POST" action="{{route('delete-testimoni')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$data->id}}"> <br>
                                        <input type="submit" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus?')" class="btn btn-danger delete-user" value="Hapus">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>

@endsection