<?php 

function paginateArray($row_data, $requested_page) {
    $items_per_page = 20;
    $current_page = (int)$requested_page; 

    if ($current_page < 1) {
        $current_page = 1; 
    }


    // var_dump($current_pages);

    $total_pages = ceil(count($row_data) / $items_per_page);
    $offset = $items_per_page * ($current_page - 1); 
    $paginated_data = array_slice($row_data, $offset, $items_per_page);

    $next_page = $current_page + 1;
    $prev_page = $current_page - 1;

    if ($next_page > $total_pages) {
        $next_page = false; 
    }

    if ($prev_page < 1) {
        $prev_page = false; 
    }


    return [
        "items_per_page" => $items_per_page,
        "total_pages" => $total_pages,
        "total_data_length" => $row_data,
        "current_page" => $current_page,
        "next_page" => $next_page,
        "prev_page" => $prev_page,
        "data" => $paginated_data,
    ];
} 