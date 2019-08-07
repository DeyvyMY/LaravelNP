
<?php
if (ob_get_level() > 0) {ob_end_clean();}

Excel::create('New file', function ($excel) {

    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });
    $excel->sheet('New sheet', function ($sheet) {
        $sheet->loadView('tabla');
    });

})->download('xlsx');
