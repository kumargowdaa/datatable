<!doctype html>
<html>
<head>
<title>Sample Datatable</title>
<style>
.container-fluid {
   display: inline-block;
   width: 1400px;
   border: 1px solid black;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
.center{
    margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
<div class="container-fluid">
    <h1 style="text-align:center">Sample Datatable</h1>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-12"> -->
            <!-- <div class="box-body table-responsive no-padding"> -->
                <table id="example" class="display" cellspacing="0" width="75%">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                </table>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
 
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Blfrtip',
            buttons: [
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fa fa-file-text-o"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                    titleAttr: 'PDF',
                    orientation: 'landscape',
                    pageSize: 'A4',
                    pageSize : 'LEGAL',
                }
            ],
            'select': {
            'style': 'multi'
            },
            'columnDefs': [{
            'targets': 0,
                    'checkboxes': {
                    'selectRow': true
                    }
            }],
            "ajax": {
                "url": 'https://randomuser.me/api?results=50',
                "dataSrc": "results"
            },
            "columns": [
                {
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { "data": "name.first" },
                { "data": "name.last" },
                { "data": "phone" },
                { "data": "gender" },
                { "data": "email" },
            ]
        });
    });      
</script>
</body>
</html>

