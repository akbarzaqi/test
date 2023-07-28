@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Welcome back,</h2>
                            <p class="mb-md-0">Your analytics dashboard template.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nama_buku">Nama Penulis</label>
                                        <input type="text" name="nama_buku" class="form-control"
                                            value="{{ $buku->nama_buku }}" required
                                            style="background-color: rgb(239, 239, 239);">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>

                                                <input type="number" name="tahun" value="{{ $buku->tahun }}"
                                                    class="form-control" required
                                                    style="background-color: rgb(239, 239, 239);">
                                            </div>

                                            <div class="col-12">

                                                <div class="form-group">
                                                    <label for="genre">Genre</label>
                                                    <select
                                                        class="form-select form-control @error('id_genre') is-invalid @enderror"
                                                        name="id_genre" id="id_genre" placeholder="Outlet"
                                                        autocomplete="off" value="{{ old('id_genre') }}">
                                                        <option selected name="id_genre">Genre</option>
                                                        @foreach ($genre as $otl)
                                                        <option value="{{ $otl->id }}">{{ $otl->nama_genre }}</option>
                                                        @endforeach
                                                        <select>
                                                            @error('outlet')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                </div>

                                            </div>
                                            <div class="col-12">

                                                <div class="form-group">
                                                    <label for="penulis">Penulis</label>
                                                    <select
                                                        class="form-select form-control @error('id_penulis') is-invalid @enderror"
                                                        name="id_penulis" id="id_penulis" placeholder="Penulis"
                                                        autocomplete="off">
                                                        <option selected name="id_penulis">Penulis</option>
                                                        @foreach ($penulis as $otl)
                                                        <option value="{{ $otl->id }}">{{ $otl->nama_penulis }}</option>
                                                        @endforeach
                                                        <select>
                                                            @error('outlet')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-lg-6">
                                  <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{ Storage::url($buku->photo) }}" width="300px" height="150px"
                                                    style="margin-bottom: 33px; border-radius: 8px" alt="">
                                                <input type="file" name="photo" value="{{ $buku->photo }}"
                                                    class="form-control" required
                                                    style="background-color: rgb(239, 239, 239);">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
                                    <textarea class="form-control" name="desc"
                                        id="exampleFormControlTextarea1" rows="3">{{ $buku->desc }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-1 w-100 ">
                                    <button type="submit"
                                        class="btn btn-success px-4 float-end text-white mt-3">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
@endsection

{{-- @push('addon-script')
  <script>
    // AJAX DataTable
    var t = $('#crudTable').DataTable({
    //   processing: true,
    //   serverSide: true,
    //   ordering: true,
      ajax: {
        
        url: "{!! url()->current() !!}",
      },

    //   //datatable index column
    //   columnDefs: [{
    //     searchable: false,
    //     orderable: false,
    //     targets: 0,
    //   }, ],
    //   order: [
    //     [1, 'asc']
    //   ],

      columns: [
        {
          data: 'id',
          name: 'id'
        },
        {
          data: 'nama_penulis',
          name: 'nama_penulis'
        },
        {
          data: 'action',
          name: 'action',
          orderable: 'false',
          searchable: 'false',
          width: '15%',
        }
      ],
    });  
    </script>
@endpush --}}
