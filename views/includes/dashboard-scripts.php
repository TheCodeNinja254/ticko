<?php
/**
 * Created by PhpStorm.
 * User: Fredrick
 * Date: 6/17/2017
 * Time: 3:13 PM
 */
?>
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="/ticko/assets/js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/ticko/assets/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/ticko/assets/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="/ticko/assets/js/mdb-dashboard.js"></script>
<script type="text/javascript" src="/ticko/assets/js/toastr.min.js"></script>
<script type="text/javascript" src="/ticko/assets/js/jQote2-master/jquery.jqote2.min.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/myToastr.js"></script>
<script type="text/javascript" src="/ticko/assets/js/custom/custom.js"></script>

<!-- Customizer -->



<script>
    $(function() {
        $('.min-chart#chart-sales').easyPieChart({
            barColor: "#4caf50",
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    });
</script>

<script>
    // Data Picker Initialization
    $('.datepicker').pickadate();

//    Time Picker Initialization
    $('.timepicker').pickatime({
        twelvehour: true
    });


    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });

    // Sidenav Initialization
    $(".button-collapse").sideNav();

    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
        $('#toggle').tooltip('show')
    })
</script>
