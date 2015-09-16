@extends('app')

@section('htmlheader_title')
Home
@endsection
@section('contentheader_title')
Perfil
@endsection

@section('main-content')




<div class="row">

  <div class="col-lg-4">

    <article>
      <h2><b>Nombre:</b> {{ $user->name }}</h2>
      <h2><b>Cedula: </b> {{ $user->identification }}</h2>
      <h2><b>E-mail:</b> {{ $user->email }}</h2>
      <h2><b>Telefono: </b> {{ $user->phone }}</h2>
      <h2><b>Tipo: </b> Estudiante</h2>
    </article>
    <hr/>
    <div>
      <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
    </div>
    <hr/>

  </div>
  <div class="col-lg-4 text-center">

    <h2>Título Proyecto Actual</h2>


    <div class="chart-responsive">
      <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
    </div>




  </div>

  <div class="box-body">
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr class="bg-info">
          <th>Tema</th>
          <th>Evaluación</th>
          <th>Proyecto</th>
          <th>Final</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> Introducción </td>
          <td>14</td>
          <td>17</td>
          <td>15</td>
        </tr>
        <tr>
          <td> Fotografía  </td>
          <td>12</td>
          <td>14</td>
          <td>13</td>
        </tr>
        <tr>
          <td> Pastelería </td>
          <td>20</td>
          <td>18</td>
          <td>19</td>
        </tr>


      </tbody>

    </table>
  </div>

</div>

@endsection
