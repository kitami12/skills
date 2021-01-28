<h1>ユーザー編集</h1>
<?= $this->Form->create($user) ?>
<div>
<label for="employee_id">社員ID</label>
    <input type="text" name="employee_id" id="employee_id"
    value="<?php if(!empty($user['employee_id']) ){echo $user['employee_id']; } ?>">
</div>



<div>
    <label for="password">パスワード</label>
    <input type="password" name="password" id="password"
    value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
</div>
    


<div>
    <label for="email">メールアドレス</label>
    <input type="text" name="email" id="email"
    value="<?php if(!empty($user['email']) ){echo $user['email']; } ?>">
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
if(isset($user['age'])){
  $age = $user['age'];
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
if(isset($user['company'])){
  $company = $user['company'];
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