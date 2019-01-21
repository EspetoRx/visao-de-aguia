@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p align="center"><a href="/produto/create" class="btn btn-primary"><i class="fas fa-plus"></i> Adicionar novo produto</a></p>
                    <div class="row">
                    @foreach ($produtos as $produto)
                    
                        <div class="col-md-6">
                            <div class="card-header">
                                {{$produto->titulo}} &nbsp;
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$produto->id}}"><i class="fas fa-pen"></i> Editar</button>
                                &nbsp;
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$produto->id}}"><i class="far fa-trash-alt"></i> Excluir</button>
                            </div>
                            <div class="card-body">
                                <img src="{{$armazenamento->url($produto->foto)}}" width="100%">
                            </div>
                            <div class="card-footer">{!! $produto->descricao !!}</div><br>
                        </div>
                    
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
@foreach ($produtos as $produto)
<div class="modal fade" id="exampleModal{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="post" action="/produto/{{$produto->id}}" enctype="multipart/form-data">
  @csrf
  {{ method_field('PATCH') }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <div class="form-group">
                <p class="text-danger">* É obrigatória a troca da foto.</p>
                <label for="titulo">
                    Título:
                </label>
                <input type="text" name="titulo" id="titulo" maxlength="45" class="form-control" value="{{$produto->titulo}}" required>
            </div>
            <div class="form-group">
                <label for="descricao">
                    Descrição:
                </label>
                <input type="text" name="descrição" id="descricao" maxlength="115" class="form-control" value="{{$produto->descricao}}" required>
            </div>
            <div class="form-group">
                <label for="imagem">
                    Imagem
                </label>
                &nbsp;
                <input type="file" name="imagem" id="imagem" style="display: none;" required onchange="readURL(this)" accept="image/*">
                <label for="imagem" class="btn btn-secondary" id="btn-img-id"><i class="fas fa-camera-retro"></i> Inserir foto</label>
            </div>
            <div class="offset-md-3 col-md-6">
                <img src="{{$armazenamento->url($produto->foto)}}" width="100%" id="target">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Salvar alterações</button>
      </div>
    </div>
  </div>
  </form>
</div>
@endforeach

<!-- Modal -->
@foreach ($produtos as $produto)
<div class="modal fade" id="deleteModal{{$produto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="post" action="/produto/{{$produto->id}}" enctype="multipart/form-data">
  @csrf
  {{ method_field('DELETE') }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <div class="form-group">
                <label for="titulo">
                    Título:
                </label>
                <input type="text" name="titulo" id="titulo" maxlength="45" class="form-control" value="{{$produto->titulo}}" disabled="">
            </div>
            <div class="form-group">
                <label for="descricao">
                    Descrição:
                </label>
                <input type="text" name="descrição" id="descricao" maxlength="115" class="form-control" value="{{$produto->descricao}}" disabled="">
            </div>
            <div class="form-group">
                <label for="imagem">
                    Imagem
                </label>
            </div>
            <div class="offset-md-3 col-md-6">
                <img src="{{$armazenamento->url($produto->foto)}}" width="100%" id="target">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Deletar</button>
      </div>
    </div>
  </div>
  </form>
</div>
@endforeach

<script type="text/javascript">
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#target').attr('src', e.target.result);
      $('#btn-img-id').removeClass('btn-secondary');
      $('#btn-img-id').addClass('btn-success');
      $('#btn-img-id').html('<i class=\"fa fa-camera-retro\"></i> Imagem <i class=\"fa fa-check-circle\"></i>');
    }

    reader.readAsDataURL(input.files[0]);
  }
}
</script>

@endsection
