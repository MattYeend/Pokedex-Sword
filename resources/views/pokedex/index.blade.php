@extends('layouts.layout')

@section('content')
<!-- Styles -->
<link rel="stylesheet" href="/css/pokedex_index.css">

<div class="wrapper">
  <div class="filter-col">
    <input class="form-control" id="searchName" placeholder="Search for names.." name="search" autofocus="true" onkeyup="filter_names()">
    <h4>Filter by</h4>
    <hr style="margin: 0.5rem 0;">
    <h4>Types</h4>
    <input type="reset" value="reset">
    <div class="form-check">
      <input class="checkbox" type="checkbox" value="all" name="type" id="all_types" checked>
      <label class="form-check-label" for="all_types">All</label>
    </div>
    @foreach($types as $type)
    <div class="form-check">
      <input class="checkbox otherTypes" type="checkbox" value="{{ $type->type }}" id="{{ $type->type }}" name="type[]" onclick="filter_types()">
      <label class="form-check-label" for="{{ $type->type }}">{{ $type->type }}</label>
    </div>
    @endforeach
  </div>
  <div class="row">
  @foreach($pokemons as $pokemon)
    <div class="col-xl-2 col-md-4 col-6 pokecard">
      <a href="/pokedex/{{ $pokemon->id }}" class="pokeId">
        <div class="card pokemon-card"> <!-- style= background-color: $colors 0'colours'" -->
          @if($pokemon->id < 10)
            <p class="id-number">#00{{ $pokemon->id }}</p>
          @elseif($pokemon->id < 100)
            <p class="id-number">#0{{ $pokemon->id }}</p>
          @else
            <p class="id-number">#{{ $pokemon->id }}</p>
          @endif
          <img class="card-img-top" src="/images/{{ $pokemon->name }}.png" alt="{{ $pokemon->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $pokemon->name }}</h5>
            <p class="poketype1" style="display:none">{{ $pokemon['type 1'] }}</p>
            <p class="poketype2" style="display:none">{{ $pokemon['type 2'] }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
  </div>
</div>
<script>
  function filter_names(){
    var input, filter, pokemon_card, pokemon_namelist, i, value;
    input = document.getElementById('searchName');
    filter = input.value.toUpperCase();
    pokemon_card  = document.getElementsByClassName('pokecard');
    pokemon_namelist = document.getElementsByClassName('card-title');
    for(i = 0; i < pokemon_namelist.length; i++){
        value = pokemon_namelist[i].innerText;
        if(value.toUpperCase().indexOf(filter) > -1) {
            pokemon_card[i].style.display = "";
        } else {
            pokemon_card[i].style.display = "none";
        }
    }
  }
  function filter_types(){
    var value1, value2, i, j, pokemon_card, pokemon_typelist1, pokemon_typelist2, checkedTypes, checked;
    pokemon_card  = document.getElementsByClassName('pokecard');
    pokemon_typelist1 = document.getElementsByClassName('poketype1');
    pokemon_typelist2 = document.getElementsByClassName('poketype2');
    checkedTypes = document.getElementsByClassName('otherTypes');
    checked = [];
    
    for(j=0; j < checkedTypes.length; j++){
      if(checkedTypes[j].checked){
        checked.push(checkedTypes[j].value);
      }
    }
    
    for(i = 0; i < pokemon_typelist1.length; i++){
      value1 = pokemon_typelist1[i].innerText;
      value2 = pokemon_typelist2[i].innerText;
  
      if(checked.includes(value1) || checked.includes(value2)) {
          pokemon_card[i].style.display = "";
      } else {
          pokemon_card[i].style.display = "none";
      }
    }
    if(checked.length == 0){
      document.getElementById('all_types').checked = true;
      for(i = 0; i < pokemon_typelist1.length; i++){
        pokemon_card[i].style.display = "";
      }
    } else{
      document.getElementById('all_types').checked = false;
    }
  }
</script>
@endsection