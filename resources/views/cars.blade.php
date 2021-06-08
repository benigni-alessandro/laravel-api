@extends('layouts.app')

@section('main')
<main>
  <div id="root">
    <ul>
      <li v-for="car in cars" :key="car.id">
        <h2>@{{car.modello}}</h2>
        <p>@{{car.color}}</p>
        <small>@{{car.description}}</small>
      </li>
    </ul>
  </div>
</main>
@endsection

@section('head')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('foot-script')
<script type="text/javascript">
  let app = new Vue({
    el: '#root',
    data:{
      cars:[],
    },
    created(){
      axios.get('http://localhost:8001/api/cars').then((response)=>{
        this.cars = response.data.data;
      });
    }
  })
</script>
@endsection
