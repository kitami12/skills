<h1>スキルシート</h1>

<div class=" large-20 medium columns content">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>名前</th>
        <th>フリガナ</th>
        <th>性別</th>
        <th>年齢</th>
        <th>最寄り駅</th>
        <th>最終学歴</th>
    </tr>
    <?php foreach ($users->profiles as $profile): ?>
    <tr>
            <td><?= h($profile->user_name) ?></td>
            <td><?= h($profile->kana) ?></td>
            <td><?= h($profile->gender) ?></td>
            <td><?= h($profile->age) ?></td>
            <td><?= h($profile->nearest_station) ?></td>
            <td><?= h($profile->final_education) ?></td>

        </tr>
        <?php endforeach; ?>
    
</table>
<p>※能力判断基準 / ●＝未経験だが、知識あり<br>
※能力判断基準 / ○＝経験があり、対応可能<br>
※能力判断基準 / ◎＝十分な経験があり、教育可能</p>

</div>
<div class="view large medium columns content">
<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>言語</h3>
    <tr>
        <th>言語</th>
        <th>能力判断</th>

    </tr>
    <?php foreach ($users->programmings as $programming): ?>
    <tr>
            <td><?= h($programming->programming) ?></td>
            <td><?= h($programming->ability_id) ?></td>

        </tr>
        <?php endforeach; ?>
</table>
</div>

<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>OS</h3>
    <tr>
        <th>OS</th>
        <th>能力判断</th>

    </tr>
    <?php foreach ($users->osses as $os): ?>
    <tr>
            <td><?= h($os->os) ?></td>
            <td><?= h($os->ability_id) ?></td>

        </tr>
        <?php endforeach; ?>
</table>
</div>

<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>DB/環境</h3>
    <tr>
        <th>DB/環境</th>
        <th>能力判断</th>

    </tr>
    <?php foreach ($users->environs as $environ): ?>
    <tr>
            <td><?= h($environ->environ) ?></td>
            <td><?= h($environ->ability_id) ?></td>
        </tr>
        <?php endforeach; ?>
</table>
</div>
</div>

<div class="view large medium columns content">
<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>ソフト/ツール</h3>
    <tr>
        <th>ソフト/ツール</th>
        <th>能力判断</th>

    </tr>
<?php foreach ($users->softs as $soft): ?>
    <tr>
            <td><?= h($soft->soft) ?></td>
            <td><?= h($soft->ability_id) ?></td>

        </tr>
        <?php endforeach; ?>

</table>
</div>

<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>業務内容</h3>
    <tr>
        <th>業務内容</th>
        <th>能力判断</th>

    </tr>
    <?php foreach ($users->businesses as $business): ?>
    <tr>
            <td><?= h($business->business) ?></td>
            <td><?= h($business->ability_id) ?></td>
        </tr>
        <?php endforeach; ?>
</table>
</div>

<div class="view large-4 medium-4 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>取得資格</h3>
    <tr>
        <th>取得資格</th>
        <th>取得年月</th>

    </tr>
    <?php foreach ($users->qualifications as $qualification): ?>
    <tr>
            <td><?= h($qualification->qualify) ?></td>
            <td><?= h($qualification->acquisition) ?></td>

        </tr>
        <?php endforeach; ?>
</table>
</div>
</div>

<div class="view large medium columns content">
<div class="view large-5 medium-5 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>語学力</h3>

    <?php foreach ($users->langs as $lang): ?>
    <tr>
            <td><?= h($lang->lang) ?></td>
            <td><?= h($lang->free) ?></td>

        </tr>
        <?php endforeach; ?>
</table>
</div>

<div class="view large-5 medium-5 columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>フリー</h3>

    <?php foreach ($users->frees as $free): ?>
    <tr>
            <td><?= h($free->free_space) ?></td>
            <td><?= h($free->free) ?></td>
        </tr>
        <?php endforeach; ?>
</table>
</div>
</div>

<div class=" large-20 medium columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>自己PR</h3>

    <tr>
    <th>自己PR (現在の学習内容、将来の展望、性格的な特筆事項等）</th>
    </tr>
    <?php foreach ($users->profiles as $profile): ?>
    <tr>
            <td><?= h($profile->self_pr) ?></td>
        </tr>
        <?php endforeach; ?>
    
</table>
</div>

<div class="view large medium columns content">
<table border="1" cellpadding="0" cellspacing="0">
<h3>業務実績表</h3>
    <tr>
        <th>項</th>
        <th>開始</th>
        <th>終了</th>
        <th>期間</th>
        <th>業種</th>
        <th>業務内容</th>
        <th>言語</th>
        <th>環境など</th>
        <th>担当業務</th>
    </tr>
  
    <?php foreach ($users->performances as $performance): ?>
    <tr>
            <td><?= h($performance->num) ?></td>
            <td><?= h($performance->start) ?></td>
            <td><?= h($performance->end) ?></td>
            <td><?= h($performance->period) ?></td>
            <td><?= h($performance->industry) ?></td>
            <td><?= h($performance->content) ?></td>
            <td><?= h($performance->language) ?></td>
            <td><?= h($performance->environment) ?></td>
            <td><?= h($performance->business) ?></td>
           
        </tr>
        <tr>
        <th colspan="9">補足説明</th>

        </tr>
        <tr>
        <td colspan="9"><?= h($performance->supplement) ?></td>

        </tr>
        <?php endforeach; ?>
</table>
</div>