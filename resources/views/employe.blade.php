@extends('layouts.emp')

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
              <td>Prenom</td>
              <td>Adresse</td>
              <td>Telephone</td>
              <td>idEntreprise</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($employes as $em)
            <tr>
                <td>{{$em->id}}</td>
                <td>{{$em->nom}}</td>
                <td>{{$em->prenom}}</td>
                <td>{{$em->adresse}}</td>
                <td>{{$em->tel}}</td>
                <td>{{$em->idEntreprise}}</td>
                <td><a href="{{ route('employes.edit', $em->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('employes.destroy', $em->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>


  <a href="{{ route('employes.create')}}" class="btn btn-primary">Add new Employe</a>
<div>
@endsection
