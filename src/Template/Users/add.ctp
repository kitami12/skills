<div class="users form large-5 medium-8 columns content">
<h1>ユーザー新規登録</h1>
<?= $this->Form->create() ?>
<div>
<label for="employee_id">社員ID</label>
    <input type="text" name="employee_id" id="employee_id"
    value="<?php if(!empty($_POST['employee_id'])) {echo $_POST['employee_id']; } ?>">
</div>



<div>
    <label for="password">パスワード</label>
    <input type="password" name="password" id="password">
</div>
    


<div>
    <label for="email">メールアドレス</label>
    <input type="text" name="email" id="email"
    value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">
</div>
   

<?php
// POST を受け取る変数を初期化
$age = '';
 
// セレクトボックスの値を格納する配列
$agesList = array(
  "選択してください",
  "16","17","18","19",
  "20","21","22","23","24","25","26","27","28","29",
  "30","31","32","33","34","35","36","37","38","39",
  "40","41","42","43","44","45","45","47","48","49",
  "50","51","52","53","54","55","56","57","58","59",
  "60","61","62","63","64","65","66","67","68","69",
  "70","71","72","73","74","75","76","77","78","79",
  "80","81","82","83","84","85","86","87","88","89",
  "90"
);
 
// 戻ってきた場合
if(isset($_POST['age'])){
  $age = $_POST['age'];
}
?>
<p>年齢</p>
<select name="age">
  <?php
    foreach($agesList as $value){
       if($value === $age){
         // ① 
         echo "<option value='$value' selected>".$value."</option>";
       }else{
         // ② 
         echo "<option value='$value'>".$value."</option>";
       }
     }
  ?>
</select>





    <p>性別</p>
<?= $this->Form->radio(
        'gender',
        [
        ['value' => '男' ,'text' => '男'],
        ['value' => '女' ,'text' => '女']
        ]); ?>


<?php
// POST を受け取る変数を初期化
$company = '';
 
// セレクトボックスの値を格納する配列
$companysList = array(
  "選択してください",
  "アンドロボウェブサービス",
  "アンドロボティクス",
  "アンドロボディオーナ",
  "アンドロボクイック",
  "アンドロボット"
);
 
// 戻ってきた場合
if(isset($_POST['company'])){
  $company = $_POST['company'];
}
?>
<p>会社名</p>
<select name="company">
  <?php
    foreach($companysList as $value){
       if($value === $company){
         // ① 
         echo "<option value='$value' selected>".$value."</option>";
       }else{
         // ② 
         echo "<option value='$value'>".$value."</option>";
       }
     }
  ?>
</select>

    <?= $this->Form->button('登録') ?>

<?= $this->Form->end() ?>
</div>