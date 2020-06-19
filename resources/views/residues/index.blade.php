
<!DOCTYPE html>
<html>
  <head>
    <title>Residues</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row pt-5">
        <div class="col-lg-12">
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{ $message }}</p>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif
        </div>

        <div class="col-lg-12">
          <form class="form-inline" method="post" enctype="multipart/form-data" action="{{ route('residues.import') }}">
            @csrf
            <div class="form-group mb-2">
              <input type="file" class="form-control-file" name="file" id="file">
            </div>

            <button type="submit" class="btn btn-primary ml-1 mb-2">Upload</button>
          </form>
        </div>
      </div>
      
      <hr>

      <div class="row">
        <div class="col-lg-12 text-center">
          <h3>Lista de Resíduos</h3>        
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>category</th>
            <th>treatment</th>
            <th>class</th>
            <th>unit_measurement</th>
            <th>weight</th>
          </tr>
          @foreach($data as $row)
            <tr>
              <td>{{ $row->id }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->type }}</td>
              <td>{{ $row->category }}</td>
              <td>{{ $row->treatment }}</td>
              <td>{{ $row->class }}</td>
              <td>{{ $row->unit_measurement }}</td>
              <td>{{ $row->weight }}</td>
            </tr>
          @endforeach
        </table>
      </div>

      <div class="row justify-content-center">
        {{ $data->links() }}
      </div>

    </div>
  </body>
</html>