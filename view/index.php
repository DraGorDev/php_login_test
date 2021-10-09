<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
    <body>
        <?php include('topContainer.php'); ?>
        <div class="wrapper">
            <div class="blog-search">
                <form class="pretraga" action="" style="margin:auto;">
                    <input type="text" placeholder="Text.." name="text-input">
                    <button class="search-input"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="results"></div>
        </div>
    </body>
</html>

<script>
$(document).ready(function(){
    
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo BASE_URL; ?>index/pocetna",
            type: 'POST',
            data: 'po_strani=' + 8,
            success: function(data) {
                $(".wrapper .pretraga_clanka_paginacija").html(data);
            }
        });
    });
    
    
    $("button.search-input").click(function(event) {
        event.preventDefault();    
        
        var text_input = $("input[name='text-input']").val();
        
        $.ajax({
            url: "<?php echo BASE_URL; ?>index/ajax-index-pretraga",
            type: 'POST',
            data: 
            'text_input='  + text_input +
            '&po_strani=' + 8,
            success: function(data) {
                console.log(data);
                //$(".wrapper .pretraga_clanka_paginacija").html(data);
                $(".results").html(data);
            }
        });
    });
});
</script>