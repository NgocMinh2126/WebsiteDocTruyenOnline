<?php
require_once("../connect.php");
require_once("../models/Truyen.php");
$listTruyenFull = Truyen::getTruyenMoi();
$listTieuThuyet = [];
for ($i = 0; $i < count($listTruyenFull); $i++) {
  $truyen = $listTruyenFull[$i];
  if ($truyen->loaiTruyen == 1) {
    $listTieuThuyet[] = $truyen;
  }
}
if(count($listTieuThuyet)>15){
  for ($i = 0; $i < 15; $i++) {
    $truyen = $listTieuThuyet[$i];?>
      <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>">
        <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
        <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
        <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
        <div class="main-dstruyen-truyen-like">
          <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike) ?>
        </div>
      </a>
  <?php 
  }}else{
    for ($i = 0; $i < count($listTieuThuyet); $i++) {
      $truyen = $listTieuThuyet[$i];?>
        <a class="main-dstruyen-truyen" href="?controller=truyen&action=Truyendetail&idTruyen=<?php echo htmlspecialchars($truyen->idTruyen) ?>">
          <img src="<?php echo htmlspecialchars($truyen->anhBia) ?>">
          <div class="main-dstruyen-tentruyen-ten"><?php echo htmlspecialchars($truyen->tenTruyen) ?></div>
          <span class="main-dstruyen-tentruyen-span"><?php echo htmlspecialchars($truyen->tenTruyen) ?></span>
          <div class="main-dstruyen-truyen-like">
            <i class="fas fa-thumbs-up"></i><?php echo htmlspecialchars($truyen->luotLike) ?>
          </div>
        </a>
<?php }}?>
  
