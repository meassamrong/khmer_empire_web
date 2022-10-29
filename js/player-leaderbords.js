$(document).ready(function () {
    $('#playertable').DataTable({
        ajax: 'empdata.json',
    });
});