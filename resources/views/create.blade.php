@extends('layouts.ent')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter une nouvelle entreprise
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('entreprises.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="adresse">adresse :</label>
              <input type="text" class="form-control" name="adresse"/>
          </div>
          <div class="form-group">
              <label for="tel">Télephone :</label>
              <input type="text" class="form-control" name="tel"/>
          </div>
          <div class="form-group">
            <label for="lat">Latitude :</label>
            <input type="text" class="form-control" name="lat"/>
            </div>
            <div class="form-group">
                <label for="lon">Longitude :</label>
                <input type="text" class="form-control" name="lon"/>
            </div>
            <br>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection
