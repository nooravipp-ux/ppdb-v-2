@extends('layouts.master')
@section('title', 'PPDB - Setting Announcement')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class=" pe-7s-note icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div class="container">
                <div class="page-title-subheading">
                    KELOLA PENGUMUMAN
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalForAddAnnouncement">Tambah Pengumuman</a> <hr>
        <div class=" card mb-5 "> <br>
                <div class="table container ">
                    <table class=" table-bordered" id="tableList">
                        <thead>

                            <tr>
                                <th class="text-left pl-4">Perihal</th>
                                <th class="text-left ">Deskripsi</th>
                                <th class="text-center ">Status</th>
                                <th class="text-center" width="20%">Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($announceData as $data)
                            <tr>
                                <td class="text-left pl-4">{{$data->title}}</td>
                                <td><?php echo html_entity_decode($data->description); ?></td>
                                <td class="text-center">{{$data->status}}</td>
                                <td class=" text-center">
                                    <a href="" class="btn btn-warning"> Edit</a>
                                    <a href="" class="btn btn-danger"> Hapus</a>
                                
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