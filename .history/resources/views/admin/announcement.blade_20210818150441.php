@extends('layouts.master')
@section('title', 'PPDB - Setting Announcement')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div class="container">Kelola Pengumuman
                <div class="page-title-subheading">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header"><a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#modalForAddAnnouncement">
                    <i class="metismenu-icon"></i>
                    Tambah Pengumuman
                </a>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-bordered table-striped" id="tableList">
                    <thead>

                        <tr>
                            <th class="text-left pl-4">Perihal</th>
                            <th class="text-left ">Description</th>
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
                            <td class="text-center">Edit</td>
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