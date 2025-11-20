$(document).ready(function(){
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        // munculkan icon loder
        $('.gif').show();

        // Ajak menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
        
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.gif').hide();
        });

    });
});