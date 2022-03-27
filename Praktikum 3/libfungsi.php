<?php
function kelulusan($_nilai) {
    if ($_nilai > 55) {
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}
function grade($_nilai) {
    if ($_nilai >= 0 <= 35) {
        return 'E';
    }elseif ($_nilai <= 55) {
        return 'D';
    }elseif ($_nilai <= 69) {
        return 'C';
    }elseif ($_nilai <= 84) {
        return 'B';
    }elseif ($_nilai <= 100) {
        return 'A';
    }else {
        return 'I';
    }
}
function predikat($_grade) {
    if ($_grade='E') {
        return 'Sangat Kurang';
    }elseif ($_grade='D') {
        return 'Kurang';
    }elseif ($_grade='C') {
        return 'Cukup';
    }elseif ($_grade='B') {
        return 'Memuaskan';
    }elseif ($_grade='A') {
        return 'Sangat Memuaskan';
    }else {
        return 'Tidak ada';
    }
}
?>