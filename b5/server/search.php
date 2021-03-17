<?php
$keyword = $_POST['keyword'] ?? '';
$keyword = strip_tags($keyword);

echo $keyword;