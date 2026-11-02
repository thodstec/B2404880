<?php

class SinhVien {
    public $mssv;
    public $hoten;
    public $ngaysinh;

    function __construct($mssv, $hoten, $ngaysinh) {
        $this->mssv = $mssv;
        $this->hoten = $hoten;
        $this->ngaysinh = $ngaysinh;
    }

    function __destruct() {
        echo "<br>Đã hủy đối tượng sinh viên.";
    }

    function set_mssv($mssv) {
        $this->mssv = $mssv;
    }

    function get_mssv() {
        return $this->mssv;
    }

    function set_hoten($hoten) {
        $this->hoten = $hoten;
    }

    function get_hoten() {
        return $this->hoten;
    }

    function set_ngaysinh($ngaysinh) {
        $this->ngaysinh = $ngaysinh;
    }

    function get_ngaysinh() {
        return $this->ngaysinh;
    }

    function tinh_tuoi() {
        $ngaysinh = new DateTime($this->ngaysinh);
        $hientai = new DateTime();

        $tuoi = $hientai->diff($ngaysinh)->y;

        return $tuoi;
    }
}

$sv = new SinhVien(
    "B2404880",
    "Nguyen Tuyet Tho",
    "2006-02-21"
);

echo "MSSV: " . $sv->get_mssv() . "<br>";
echo "Họ tên: " . $sv->get_hoten() . "<br>";
echo "Ngày sinh: " . $sv->get_ngaysinh() . "<br>";
echo "Tuổi: " . $sv->tinh_tuoi();

?>
