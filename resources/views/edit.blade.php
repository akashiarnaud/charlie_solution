@extends('layouts.ent')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Modifier les données de l'entreprise
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
      <form method="post" action="{{ route('entreprises.update', $entreprise->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">nom:</label>
              <input type="text" class="form-control" name="nom" value="{{ $entreprise->nom }}"/>
          </div>
          <div class="form-group">
              <label for="adresse">adresse :</label>
              <input type="text" class="form-control" name="adresse" value="{{ $entreprise->adresse }}"/>
          </div>
          <div class="form-group">
              <label for="tel">telephone :</label>
              <input type="text" class="form-control" name="tel" value="{{ $entreprise->tel }}"/>
          </div>
          <div class="form-group">
            <label for="lat">latitude :</label>
            <input type="text" class="form-control" name="lat" value="{{ $entreprise->lat }}"/>
        </div>
        <div class="form-group">
            <label for="lon">longitude :</label>
            <input type="text" class="form-control" name="lon" value="{{ $entreprise->lon }}"/>
        </div>
        <br>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
