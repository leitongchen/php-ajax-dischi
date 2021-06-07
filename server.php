<?php 

$discs = include "./db/disc.php";

include "./utilities/pagination.php";


$page = isset($_GET["page"]) ? $_GET["page"] : 1;





// API DI BASE
header("Content-Type: application/json");


$paginated_data = paginateArray($discs, $page);
echo json_encode($paginated_data);

