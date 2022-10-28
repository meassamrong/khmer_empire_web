$(document).ready(function () {
    $('#playertable').DataTable({
        ajax: 'tempoArray.json',
    });
});