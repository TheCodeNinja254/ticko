<?php
/**
 * Created by PhpStorm.
 * User: Greats
 * Date: 3/29/2017
 * Time: 2:28 PM
 */
?>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/main.js"></script>
<!-- Animations init-->
<script>
    new WOW().init();
</script>
<script>
    $('#buy-now').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>

<script>
    jQuery(document).ready(function() {
        // This button will increment the value
        $('.qtyplus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(".qtyminus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#lightgallery').lightGallery();
    });
    $('#lg-share-demo').lightGallery();
</script>
<script src="js/picturefill.min.js"></script>
<script src="js/lightgallery.min.js"></script>
<script src="js/lg-fullscreen.min.js"></script>
<script src="js/lg-thumbnail.min.js"></script>
<script src="js/lg-video.min.js"></script>
<script src="js/lg-autoplay.min.js"></script>
<script src="js/lg-zoom.min.js"></script>
<script src="js/lg-hash.min.js"></script>
<script src="js/lg-share.min.js"></script>
<script src="js/lg-pager.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/custom/custom.js"></script>
</body>

</html>