<?php

$nilai = "B";

switch ($nilai) {
    case "A":
        echo "Anda Lulus Dengan Sangat Baik";
        break;
    case "B":
    case "C":
        echo "Anda Lulus";
        break;
    case "D":
        echo "Anda Tidak Lulus";
        break;
    default:
        echo "Anda Mungkin salah jurusan";
}

//switch ($nilai) :
//    case "A":
//        echo "Anda Lulus Dengan Sangat Baik";
//        break;
//    case "B":
//    case "C":
//        echo "Anda Lulus";
//        break;
//    case "D":
//        echo "Anda Tidak Lulus";
//        break;
//    default:
//        echo "Anda Mungkin salah jurusan";
//endswitch;