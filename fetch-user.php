<?php

include("config.php");

 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See https://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - https://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tbl_users';
 
// Table's primary key
$primaryKey = 'u_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'u_name', 'dt' => 0 ),
    array( 'db' => 'u_email',  'dt' => 1 ),
    array( 'db' => 'u_mobile',   'dt' => 2 ),
    array( 'db' => 'u_gender',     'dt' => 3 ),
    array( 'db' => 'u_dob',     'dt' => 4 ),
    array( 'db' =>'college',       'dt'=>5)
    array(
        'db'        => 'u_date',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array(
        'db'        => 'u_type',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            if($d==2)
            {
                return '<span class="badge bg-success">Admin</span>';
            }
            else{
                return '<span class="badge bg-secondary">User</span>';
            }
        }
    )
    ,
    array(
        'db'        => 'u_id',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            if($d==$_SESSION['u_id'])
            {
                return "";
            } else {
            return '<a href="delete-user.php?id='.$d.'" class="btn btn-danger">Delete</a>';
        }}
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'mydb',
    'host' => 'localhost'
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);