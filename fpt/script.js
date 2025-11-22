let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: "2 giờ",
    quocGia: "Việt Nam",
    poster: "img/phim/muado.jpeg",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 2,
    tenPhim: "Conan - Thám tử lừng danh",
    namPhatHanh: 2025,
    tuoi: 13,
    thoiLuong: "1 giờ 45 phút",
    quocGia: "Nhật Bản",
    poster: "img/phim/conan.jpg",
    theLoai: "Hoạt hình / Trinh thám",
  },
];

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id === idPhim) {
      document.getElementById("tenPhim").innerHTML = danhSachPhim[i].tenPhim;
      document.getElementById("namPhatHanh").innerHTML = danhSachPhim[i].namPhatHanh;
      document.getElementById("tuoi").innerHTML = danhSachPhim[i].tuoi + "+";
      document.getElementById("thoiLuong").innerHTML = danhSachPhim[i].thoiLuong;
      document.getElementById("theLoai").innerHTML = danhSachPhim[i].theLoai;
      document.getElementById("quocGia").innerHTML = danhSachPhim[i].quocGia;
      document.getElementById("poster").src = danhSachPhim[i].poster;
    }
  }
}
