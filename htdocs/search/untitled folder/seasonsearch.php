<?php
error_reporting(0);
include("config.php");
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Player Table Search</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">


    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.min.css">


    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        #search_wrapper{
            width: 98%;
        }

        table.dataTable > tbody > tr.child span.dtr-title{
            display: none;
        }
    </style>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>



    <script src="datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#search thead th').each( function () {
                var title = $(this).text();
                $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });

            new $.fn.dataTable.FixedHeader( table );
            $("#search th.datepicker input").datepicker({
                format: "yyyy-mm-dd",

            });
        } );


    </script>
</head>
<body style="padding: 10px">

            <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">
                <thead>
                <tr>
					<th><strong>Name</strong></td>
					<th><strong>Surname</strong></td>
                    <th class="datepicker"><strong>Date of Birth</strong></td>
                    <th><strong>Height (cm)</strong></td>
                    <th><strong>Position</strong></td>
                    <th><strong>Salary</strong></td>
                    <th class="datepicker"><strong>End Date</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT * FROM ".$SETTINGS["data_table"];

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                        	<td><?php echo $row["first_name"]; ?></td>
                        	<td><?php echo $row["surname"]; ?></td>
                            <td><?php echo $row["date_of_birth"]; ?></td>
                            <td><?php echo $row["height_in_cm"]; ?></td>
                            <td><?php echo $row["current_position_id"]; ?></td>
                            <td><?php echo $row["salary"]; ?></td>
                            <td><?php echo $row["end_date"]; ?></td>
                        </tr>
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
</body>
</html>