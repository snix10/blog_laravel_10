@extends('dashboard.main')


@section('blogtable')

<a class="btn btn-primary col-3 btn-sm mb-2 shadow p-1 mb-3 rounded" href="/dashboard/create" role="button">Tambah</a>
      <div class="table-responsive small shadow p-3 mb-5 bg-body rounded ">
        <table class="table table-striped table-sm  table-hover ">
          <thead >
            <tr>
              <th scope="col">NO</th>
              <th scope="col">JUDUL</th>
              <th scope="col">KATEGORI</th>
              <th scope="col">OPTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($blogs as $blog)
            <tr >
              <td>{{ $loop->iteration }}</td>
              <td>{{ $blog->judul }}</td>
              <td>{{ $blog->category->name }}</td>
              <td>
              <a href='/dashboard/{{ $blog->slug }}' class="badge bg-primary text-decoration-none">Lihat</a>
              <a href='/baca/{{ $blog->slug }} ' class="badge bg-warning text-decoration-none">Edit</a>
              <a href='/baca/{{ $blog->slug }} ' class="badge bg-danger text-decoration-none">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      

@endsection