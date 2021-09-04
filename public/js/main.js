const flashData = $('.flash-data').data('flashdata');

if (flashData) {

    Swal.fire({
        title: 'Sukses!',
        text: flashData,
        icon: 'success',
        confirmButtonText: 'close'
    })
}