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
                     <form action="{{ route('genre.update', $genre->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nama_genre">Nama Genre</label>
                        <input type="text" name="nama_genre" value="{{ $genre->nama_genre }}" class="form-control" required style="background-color: rgb(239, 239, 239);">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-1 w-100 ">
                      <button type="submit" class="btn btn-success px-4 float-end text-white">Save</button>
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
