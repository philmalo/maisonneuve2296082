<dialog>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Suppression d'étudiant</h1>
            </div>
            <div class="modal-body">
                <p>Voulez-vous vraiment supprimer les informations de l'étudiant(e) <span id="nom"></span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="close btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Effacer</button>
                </form>
            </div>
        </div>
    </div>
</dialog>