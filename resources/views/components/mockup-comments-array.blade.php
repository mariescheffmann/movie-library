<?php
use App\Models\MockupComment;

$mockupComments = MockupComment::all()->toArray();

foreach ($mockupComments as $mockupComment) {
    $comment = $mockupComment['content'];
    echo asset($comment);
}