@include("components.header.index")
        <div class="card">
        <h1>Cadastros <i class="fas fa-table"></i><span></span></h1>
            <div class="card-body">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>EMAIL</th>
                        <th>TELEFONE</th>
                        <th>NASCIMENTO</th>
                        <th>GENERO</th>
                        <th>ACÕES</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($etlregistros as $etlregistross)
                    <tr>
                        <td>{{$etlregistross->nome}}</td>
                        <td>{{$etlregistross->cpf}}</td>
                        <td>{{$etlregistross->email}}</td>
                        <td>{{$etlregistross->telefone}}</td>
                        <td>{{date("d/m/Y",strtotime($etlregistross->dt_nascimento))}}</td>
                        <td>{{$etlregistross->genero}}</td>
                        <td>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="card-footer"> {{$etlregistros->links()}}</div>
           
        </div>
@include("components.footer.index")

