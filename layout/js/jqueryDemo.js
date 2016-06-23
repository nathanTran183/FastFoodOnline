$(document).ready(function(){
        $('.addbutton').click(function(){
            var id = $(this).attr('data-id');
            var id2 = '#'+id;
            var quantity = $(id2).val();
            $.post("../source/ajax.php", {
                action: "chon",
                id: id,
                quantity: quantity
            }).done(function(data) {
                $('.current-order').html(data);
            });

        });
}); 