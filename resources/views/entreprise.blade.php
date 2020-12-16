@extends('layouts.ent')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Adresse</td>
          <td>telephone</td>
          <td>Latitude</td>
          <td>Longitude</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($entreprises as $en)
        <tr>
            <td>{{$en->id}}</td>
            <td>{{$en->nom}}</td>
            <td>{{$en->adresse}}</td>
            <td>{{$en->tel}}</td>
            <td>{{$en->lat}}</td>
            <td>{{$en->lon}}</td>
            <td><a href="{{ route('entreprises.edit', $en->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('entreprises.destroy', $en->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
  <a href="{{ route('entreprises.create')}}" class="btn btn-primary">Add new entreprise</a>

@endsection
