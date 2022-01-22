<div class="modal fade" tabindex="-1" role="dialog" id="siteModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Entrar como</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <a href="{{route('admin.login')}}" class="btn btn-lgbt-primary btn-lg btn-block"> Admin </a>
            <a href="{{route('login')}}" class="btn btn-lgbt-secondary btn-lg btn-block"> Usuário </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-secondary text-white" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
</div>