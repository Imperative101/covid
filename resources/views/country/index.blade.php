@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">List of Countries</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>Name</th>
                     <th>Citizen</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($countries as $country)
                    <tr>
                      <td>{!!$country->name!!}</td>
                      <td>{!!$country->citizen!!}</td>
                      <td><a class="btn btn-success" href="{{route('country.show',[$country])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('country.edit',[$country])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('country.destroy', $country)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>

           </div>
       </div>
   </div>
</div>
@endsection