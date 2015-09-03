<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/js/app.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='/plugins/fastclick/fastclick.min.js'></script>
<!-- Infovis Library File -->
<script language="javascript" type="text/javascript" src="/plugins/infovis/jit.js"></script>
<!-- Space Tree File -->
<script language="javascript" type="text/javascript" src="/plugins/infovis/spacetree.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script type="text/javascript">
  $(function () { "use strict"; var donut = new Morris.Donut
    ({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data:
      [
        {label: "Activo", value: 12},
        {label: "Restante", value: 30},
        {label: "Completado", value: 20}
      ],
      hideHover: 'auto'
    });
  });
</script>
