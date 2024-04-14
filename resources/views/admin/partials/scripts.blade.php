<!-- Bootstrap core CSS -->
<link href="{{ asset('admin/assets/css/bootstrap.css') }}" rel="stylesheet">
<!--external css-->
<link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/zabuto_calendar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/js/gritter/css/jquery.gritter.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/lineicons/style.css') }}">

<!-- Custom styles for this template -->
<link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/style-responsive.css') }}" rel="stylesheet">

<script src="{{ asset('admin/assets/js/chart-master/Chart.js') }}"></script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('admin/assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/jquery.sparkline.js') }}"></script>

<!--common script for all pages-->
<script src="{{ asset('admin/assets/js/common-scripts.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/assets/js/gritter/js/jquery.gritter.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/js/gritter-conf.js') }}"></script>

<!--script for this page-->
<script src="{{ asset('admin/assets/js/sparkline-chart.js') }}"></script>
<script src="{{ asset('admin/assets/js/zabuto_calendar.js') }}"></script>

<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "{{ asset('admin/show_data.php?action=1') }}",
                modal: true
            },
            legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
