@extends('layouts.site.admin')

@section('links')
<script src="https://cdn.tiny.cloud/1/1lk9w1phfdyxvdoxh2uxdiitan0k9q8x10m59fjbv1lsbfqp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('main')
<script>
   tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'powerpaste advcode table lists',
    menubar: false,
    statusbar: false,
    toolbar: 'fontfamily| blocks| bold italic underline strikethrough |forecolor backcolor |bullist numlist |subscript superscript ',
    block_formats: 'Paragrafo=Paragrafo; Título 1=h1; Título 2=h2; Título 3=h3; Subtítulo 4=h4; Subtítulo 5=h5; Subtítulo 6=h6'
  
});

</script>

<form method="POST">
    <div class="container mt-4 mb-4">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-10">
                <h1 class="h2 mb-4">Criar notícia</h1>
                <div class="form-group">
                    <label for="name" id="newsTitle">Título da notícia</label>
                    <input type="text" class="form-control" id="newsTitle" placeholder="Título da notícia">
                </div>
    
                <div class="form-group">
                  <label id="news">Notícia</label>
                  <textarea id="myeditorinstance" placeholder="Escreva aqui"></textarea>
                </div>
    
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-secondary " type="button">Visualizar</button>
                    <button class="btn btn-primary mx-2" type="button">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection