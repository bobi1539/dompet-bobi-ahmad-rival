
$(document).ready(function(){
    $('#pocket-table').DataTable();
});

const flashDataSuccess = document.getElementById('flash-data-success');

if (flashDataSuccess){
    if (flashDataSuccess.getAttribute('data-flashdata')){
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: flashDataSuccess.getAttribute('data-flashdata'),
            confirmButtonColor: '#191c1f',
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
            confirmButtonColor: '#191c1f',
        }); 
    }
}