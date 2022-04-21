@extends('layouts.app')

@section('content')
  <h1><?php echo($genre->name); ?></h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Song</th>
        <th scope="col">Album</th>
        <th scope="col">Artist</th>
        <th scope="col">Duration</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 0; $i != null; $i++){ ?>
        <tr>
          <td><?php echo($song[$i]->name); ?></td>
          <td><?php echo($song[$i]->album); ?></td>
          <td><?php echo($song[$i]->artist); ?></td>
          <td><?php echo($song[$i]->duration); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
@endsection
