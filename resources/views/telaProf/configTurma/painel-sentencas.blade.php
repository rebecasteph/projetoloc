<div class="col-md-4" style="position: absolute; right: 16px;">
    <article class="mt-4 message is-info">
        <div class="message-body p-2">
        Crie e edite pontuações bônus e penalidades que poderão ser atribuídas.
        </div>
    </article>
</div>

<div class="row pt-5">
    <div class="col-sm-6">
        <h4 class="mb-3 text-danger">XP-</h4>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Valor</th>
                    <th scope="col" style="width: 75%">Descrição</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">23</td>
                    <td class="">descr</td>
                    <td class=""> 
                        <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#edit-sentenca"><i class="fa fas fa-pen"></i></button> 
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fas fa-trash"></i></button> 
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit-sentenca"><i class="fa fas fa-plus"></i></button>
        </div>
    </div>
    <div class="col-sm-6">
        <h4 class="mb-3 text-warning">XP+</h4>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Valor</th>
                    <th scope="col" style="width: 75%">Descrição</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>23</td>
                    <td>descr</td>
                    <td> 
                        <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#edit-sentenca"><i class="fa fas fa-pen"></i></button> 
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fas fa-trash"></i></button> 
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit-sentenca"><i class="fa fas fa-plus"></i></button>
        </div>
    </div>
    <!-- Modal EDITAR SENTENÇA -->
    <div class="modal fade" id="edit-sentenca" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Dados da sentença</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Tipo da sentença</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option>Positiva</option>
                        <option>Negativa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descr" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Valor</label>
                    <input name="valor" class="form-control">
                    <small class="text-muted">
                        Leve em consideração os objetivos e metas individuais e de equipe.
                    </small>
                </div>

                </div>
                <div class="modal-footer">
                <button class="btn btn-sm btn-outline-success"><i class="fa fas fa-check"></i></button> 
                <button class="btn btn-sm btn-outline-danger"><i class="fa fas fa-trash"></i></button> 
                </div>
            </div>
        </div>
    </div>

</div>

