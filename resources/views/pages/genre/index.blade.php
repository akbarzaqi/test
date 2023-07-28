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
                        <a href="{{ route('genre.create') }}" class="btn btn-secondary mb-3">Create Book</a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Genre</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genre as $pns)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $pns->nama_genre }}</td>
                                        <td class="text-center">
                                          <div class="row justify-content-center ">
                                            <div class="col-12 col-lg-3">
                                              <a href="{{ route('genre.edit', $pns->id) }}"
                                                    class="btn mr-2 mb-2 py-2 btn btn-secondary w-100">Edit</a>
                                            </div>
                                            <div class="col-12 col-lg-3">
                                              <form action="{{ route('genre.destroy', $pns->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class=" py-2 btn btn-danger w-100 text-white"
                                                        onclick="return confirm('Are you sure to delete this?')">Hapus</button>
                                                </form>
                                            </div>
                                          </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
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
