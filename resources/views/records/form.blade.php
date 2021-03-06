<div class="form-group">
    <div class="form-group">
        <label for="tipo" class="required">Escolha o tipo: </label>          
            <select name="tipo" class="form-control" id="tipo">

            <option value="" selected="">- Selecione -</option>
            @foreach ($record->tipoOptions() as $option)

                {{-- 1. Situação em que não houve tentativa de submissão e é uma edição --}}
                @if (old('tipo') == '' and isset($record->tipo))
                <option value="{{$option}}" {{ ( $record->tipo == $option) ? 'selected' : ''}}>
                    {{$option}}
                </option>
                {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                @else
                <option value="{{$option}}" {{ ( old('tipo') == $option) ? 'selected' : ''}}>
                    {{$option}}
                </option>
                @endif
                
            @endforeach
            </select> 
    </div>
        <label for="autores">Autores</label>
        <input type="text" class="form-control" id="autores" name="autores" value="{{old('autores',$record->autores)}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="titulo">Título</label>
            <textarea type="text" class="form-control" id="titulo" name="titulo">{{old('titulo',$record->titulo)}}</textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="desc_f">Descrição física</label>
            <textarea type="text" class="form-control" id="desc_f" name="desc_f" >{{old('desc_f',$record->desc_f)}}</textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="editora">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" value="{{old('editora',$record->editora)}}">
        </div>
        <div class="form-group col-md-6">
            <label for="assunto">Assunto</label>
            <input type="text" class="form-control" id="assunto" name="assunto" value="{{old('assunto',$record->assunto)}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="local_p">Local de publicação</label>
            <input type="text" class="form-control" id="local_p" name="local_p" value="{{old('local_p',$record->local_p)}}">
        </div>
        <div class="form-group col-md-6">
            <label for="localizacao">Localização</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" value="{{old('localizacao',$record->localizacao)}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="edicao">Edição</label>
            <input type="text" class="form-control" id="edicao" name="edicao" value="{{old('edicao',$record->edicao)}}">
        </div>
            <div class="form-group col-md-4">
            <label for="ano">Ano</label>
            <input type="text" class="form-control" id="ano" name="ano" value="{{old('ano',$record->ano)}}">
        </div>
        <div class="form-group col-md-4">
            <label for="idioma">Idioma</label>
            <input type="text" class="form-control" id="idioma" name="idioma" value="{{old('idioma',$record->idioma)}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn',$record->isbn)}}">
        </div>
        <div class="form-group col-md-6">
            <label for="issn">ISSN</label>
            <input type="text" class="form-control" id="issn" name="issn" value="{{old('issn',$record->issn)}}">
        </div>
    </div>
    </div>
    </br>
    </br>
    <div class="col-sm form-group">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-success" href="/records" role="button">Voltar</a>
</div>