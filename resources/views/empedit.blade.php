@extends('layouts.ent')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Modifier les données de le l'employé
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
      <form method="post" action="{{ route('employes.update', $employe->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">nom:</label>
              <input type="text" class="form-control" name="nom" value="{{ $employe->nom }}"/>
          </div>
          <div class="form-group">
            <label for="prenom">Prenom :</label>
            <input type="text" class="form-control" name="prenom" value="{{ $employe->prenom }}"/>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" class="form-control" name="adresse" value="{{ $employe->adresse }}"/>
        </div>
        <div class="form-group">
          <label for="tel">Telephone :</label>
          <input type="text" class="form-control" name="tel" value="{{ $employe->tel }}"/>
          </div>
          <div class="form-group">
              <label for="Entreprise">Entreprise :</label>
              <select class="form-control" name="idEntreprise">
                  @foreach($entreprises as $en)
              <option value="{{$en->id}}">{{$en->nom}}</option>
                  @endforeach
              </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
