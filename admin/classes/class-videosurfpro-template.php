<?php

namespace admin\classes;

class Videosurfpro_Template
{
    public static function success_alert($string)
    {
//        $html = self::get_scripts();
        $html = '';
        $html .= '<div class="alert d-flex align-items-center pl-2 align-content-center alert-success alert-dismissible fade show" role="alert">
                        <span class="font-size-lg d-block d-40 mr-2 text-center">
                            <i class="far fa-life-ring"></i>
                        </span>
                        <span>
                            <strong class="d-block">Success!</strong>'. $string .'
                        </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>';
        return $html;
    }

    public static function info_alert($string)
    {
//        $html = self::get_scripts();
        $html = '';
        $html = '<div class="alert d-flex align-items-center pl-2 align-content-center alert-info alert-dismissible fade show" role="alert">
                    <span class="font-size-lg d-block d-40 mr-2 text-center">
                        <i class="fas fa-medkit"></i>
                    </span>
                    <span>
                        <strong class="d-block">Info!</strong>' . $string . '
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>';
        return $html;
    }

    public static function warning_alert($string)
    {
//        $html = self::get_scripts();
        $html = '<div class="alert d-flex align-items-center pl-2 align-content-center alert-warning alert-dismissible fade show" role="alert">
                    <span class="font-size-lg d-block d-40 mr-2 text-center">
                        <i class="far fa-question-circle"></i>
                    </span>
                    <span>
                        <strong class="d-block">Warning!</strong>' . $string . '
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>';
        return $html;
    }

    public static function danger_alert($string)
    {
//        $html = self::get_scripts();
        $html = '<div class="alert d-flex align-items-center pl-2 align-content-center alert-danger alert-dismissible fade show" role="alert">
                    <span class="font-size-lg d-block d-40 mr-2 text-center">
                        <i class="fas fa-headset"></i>
                    </span>
                    <span>
                        <strong class="d-block">Danger!</strong>' . $string . '
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>';
        return $html;
    }

//    public static function get_scripts()
//    {
//        $scripts = '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
//                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
//                    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
//                    <script src="assets/js/demo/bootstrap/bootstrap.min.js"></script>
//                    <script src="assets/vendor/metismenu/js/metismenu.min.js"></script>
//                    <script src="assets/js/demo/metismenu/metismenu.min.js"></script>
//                    <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
//                    <script src="assets/js/demo/perfect-scrollbar/perfect-scrollbar.min.js"></script>
//                    <script src="assets/vendor/feather-icons/js/feather-icons.min.js"></script>
//                    <script src="assets/js/demo/feather-icons/feather-icons.min.js"></script>
//                    <script src="assets/js/bamburgh.min.js"></script>
//                   ';
//        return $scripts;
//    }
//
//    public static function get_styles()
//    {
//        $styles = '<link rel="shortcut icon" href="../favicon/favicon.ico">
//                <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
//                <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">';
//        $styles .= '<link rel="stylesheet" type="text/css" href="assets/css/bamburgh.min.css">';
//        return $styles;
//    }
}