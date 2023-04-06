@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header h4">
      Senhas WiFi
    </div>
    @canany(['docente', 'servidor'])
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>SSID</th>
              <th>Senha</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($redes as $ssid => $pass)
              <tr>
                <td>{{ $ssid }}</td>
                <td><pre>{{ $pass }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <div class="card-body">
        <p>Sistema liberado apenas para docentes e funcionários.</p>
      </div>
    @endcanany
  </div>
@endsection
