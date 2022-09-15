<form action="{{route('send.email', ['message'=>$message->id])}}" method="POST" id="form" style="display: none;">
    @csrf
    <div class="form-group">
        <label for="reply">Resposta</label>
        <textarea class="form-control" name="text" id="text" rows="10" style="width: 100%"></textarea>    
    </div>
    <a href="" class="btn btn-secondary">Cancelar</a>
    <button class="btn btn-primary">Reponder</button>
</form>