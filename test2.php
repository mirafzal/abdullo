<?php

session_start();

if ($_SESSION['id']) {
    echo 'xush kelibsiz';
} else {
    echo 'iltimos ro\'yxatdan o\'ting';
}

echo '123321';