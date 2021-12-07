
$(document).ready(function(){
    $('#pocket-table').DataTable();
    $('#category-table').DataTable();
    $('#pocket-in-table').DataTable();
    $('#pocket-out-table').DataTable();
});

const flashDataSuccess = document.getElementById('flash-data-success');

if (flashDataSuccess){
    if (flashDataSuccess.getAttribute('data-flashdata')){
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: flashDataSuccess.getAttribute('data-flashdata'),
        }); 
    }
}

const flashDataError = document.getElementById('flash-data-error');

if (flashDataError){
    if (flashDataError.getAttribute('data-flashdata')){
        Swal.fire({
            icon: 'error',
            title: 'Opps..',
            text: flashDataError.getAttribute('data-flashdata'),
        }); 
    }
}
