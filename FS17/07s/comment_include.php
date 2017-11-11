<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 12.07.17
 * Time: 13:51
 */

function saveComments (array $comments) {
    file_put_contents('comment_db.txt', serialize($comments));
}

function getComments() {
    $content = file_get_contents('comment_db.txt');
    if (empty($content)) {
        return [];
    }
    return unserialize($content);
}
