@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Criação de novo produto</div>
                <form action="/produto" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulo">
                                    Título:
                                </label>
                                <input type="text" name="titulo" id="titulo" maxlength="45" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descricao">
                                    Descrição:
                                </label>
                                <input type="text" name="descrição" id="descricao" maxlength="115" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="imagem">
                                Imagem
                            </label>
                            &nbsp;
                            <input type="file" name="imagem" id="imagem" style="display: none;" required onchange="readURL(this)" accept="image/*">
                            <label for="imagem" class="btn btn-secondary" id="btn-img-id"><i class="fas fa-camera-retro"></i> Inserir foto</label>
                        </div>
                        <div class="offset-md-3 col-md-6">
                            <img src="" id="target" width="100%">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <br>
                    <p align="center">
                        <a href="/home" class="btn btn-danger"><i class="fas fa-times"></i> Cancelar</a>
                        &nbsp;
                        <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Adicionar</button>
                    </p>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
