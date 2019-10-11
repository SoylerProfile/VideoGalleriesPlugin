<?php

namespace includes;

// I think, that the class will be static

class Videosurfpro_Database
{
    // нужно подумать как определять сколько данных будет приходить и с каким типом
    public static function insert() {
        $testId = $_POST['testId'];
        $question = $_POST['question'];
        $correct = $_POST['correct'];
        $incorrect1 = $_POST['incorrect1'];
        $incorrect2 = $_POST['incorrect2'];
        $incorrect3 = $_POST['incorrect3'];
        $incorrect4 = $_POST['incorrect4'];

        $wpdb->insert(
            $table,
            array('question' => $question, 'correct' => $correct, 'incorrect1' => $incorrect1, 'incorrect2' => $incorrect2, 'incorrect3' => $incorrect3, 'incorrect4' => $incorrect4, 'test_id' => $testId),
            array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
        );
    }
}