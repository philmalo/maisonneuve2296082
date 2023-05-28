const deleteButtons = document.querySelectorAll('.delete-btn');
const deleteModal = document.querySelector('dialog');
const deleteForm = document.querySelector('#deleteForm');
const closeModalButton = document.querySelector('.close');
const modalNom = document.querySelector("[id='nom']");

deleteButtons.forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const etudiantId = this.dataset.etudiantId;
        const etudiantNom = this.dataset.etudiantNom;

        deleteForm.action = `/liste/${etudiantId}`;
        modalNom.innerText= etudiantNom;
        deleteModal.showModal(); // Utiliser la méthode showModal() pour afficher la modale
    });
});

closeModalButton.addEventListener('click', function() {
    deleteModal.close(); // Utiliser la méthode close() pour fermer la modale
});