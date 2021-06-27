$(document).ready(function() {
    let edit = false;
    console.log('jQwery is Work');
    FetchPass();
    $('#cat-result').hide();
    //funcion para Busqueda de Datos
    $('#search').keyup(function(e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: '../CapaDatos/Buscar.php',
                type: 'POST',
                data: { search },
                success: function(data) {
                    let category = JSON.parse(data);
                    let template = '';
                    category.forEach(cat => {
                        template += `<li>${cat.name}</li>`;
                    });
                    $('#container').html(template);
                    $('#cat-result').show();
                }
            })
        }
        if ($('#search').val() == '') {
            $('#cat-result').hide();
        }
    });
    //funcion para agregar o editar registros
    $('#cat-form').submit(function(e) {
        console.log('submiting');
        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#cat-id').val()
        };
        let url = edit === false ? '../CapaNegocio/cat-add.php' : '../CapaNegocio/cat-edit.php';
        $.post(url, postData, function(data) {
            console.log(data);
            FetchPass();
            $('#cat-form').trigger('reset');
        });
        e.preventDefault();
    });
    //funcion para mostrar lista en la tabla de la pantalla principal
    function FetchPass() {
        $.ajax({
            url: '../CapaNegocio/cat-list.php',
            type: 'GET',
            success: function(data) {
                console.log(data);
                let category = JSON.parse(data);
                let template = '';
                category.forEach(category => {
                    template += `
                        <tr catid="${category.id}">
                            <td>${category.id}</td>
                            <td>
                                <a href="#" class="cat-item">${category.name}</a>
                            </td>
                            <td>${category.des}</td>
                            <td>
                                <button class="cat-delete btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    `;
                });
                $('#Category').html(template);
            }
        });
    }
    //funcion para eliminar
    $(document).on('click', '.cat-delete', function() {
        if (confirm('Are you sure you want to delete?')) {
            let element = $(this)[0].parentElement.parentElement;
            let id = $(element).attr('catid');
            console.log(id);
            $.post('../CapaNegocio/cat-delete.php', { id }, function(data) {
                console.log(data);
                FetchPass();
            });
        }
    });
    //funcion para editar categorias
    $(document).on('click', '.cat-item', function() {
        console.log('Editing');
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('catid');
        console.log(id);
        $.post('../CapaNegocio/cat-single.php', { id }, function(data) {
            console.log(data);
            const category = JSON.parse(data);
            $('#name').val(category.name);
            $('#description').val(category.des);
            $('#cat-id').val(category.id);
            edit = true;
        })
    });
});