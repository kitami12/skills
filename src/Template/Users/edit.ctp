<h1>ユーザー編集</h1>
<?= $this->Form->create($user) ?>
<div>
<label for="employee_id">社員ID</label>
    <input type="text" name="employee_id" id="employee_id"
    value="<?php if(!empty($_POST['employee_id'])) {echo $_POST['employee_id']; } ?>">
</div>



<div>
    <label for="password">パスワード</label>
    <input type="password" name="password" id="password"
    value="<?php if(!empty($_POST['password'])) {echo $_POST['password']; } ?>">
</div>
    


<div>
    <label for="email">メールアドレス</label>
    <input type="text" name="email" id="email"
    value="<?php if(!empty($_POST['email'])) {echo $_POST['email']; } ?>">
</div>
   


    <p>年齢</p>
        <select name="age">
        <option value="">-</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        <option value="32">32</option>
        <option value="33">33</option>
        <option value="34">34</option>
        <option value="35">35</option>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
        <option value="45">45</option>
        <option value="46">46</option>
        <option value="47">47</option>
        <option value="48">48</option>
        <option value="49">49</option>
        <option value="50">50</option>
        <option value="51">51</option>
        <option value="52">52</option>
        <option value="53">53</option>
        <option value="54">54</option>
        <option value="55">55</option>
        <option value="56">56</option>
        <option value="57">57</option>
        <option value="58">58</option>
        <option value="59">59</option>
        <option value="60">60</option>
        <option value="61">61</option>
        <option value="62">62</option>
        <option value="63">63</option>
        <option value="64">64</option>
        <option value="65">65</option>
        <option value="66">66</option>
        <option value="67">67</option>
        <option value="68">68</option>
        <option value="69">69</option>
        <option value="70">70</option>
        <option value="71">71</option>
        <option value="72">72</option>
        <option value="73">73</option>
        <option value="74">74</option>
        <option value="75">75</option>
        <option value="76">76</option>
        <option value="77">77</option>
        <option value="78">78</option>
        <option value="79">79</option>
        <option value="80">80</option>
        <option value="81">81</option>
        <option value="82">82</option>
        <option value="83">83</option>
        <option value="84">84</option>
        <option value="85">85</option>
        <option value="86">86</option>
        <option value="87">87</option>
        <option value="88">88</option>
        <option value="89">89</option>
        <option value="90">90</option>
    </select>





    <p>性別</p>
<?= $this->Form->radio(
        'gender',
        [
        ['value' => '男' ,'text' => '男'],
        ['value' => '女' ,'text' => '女']
        ]); ?>


<p>会社名</p>
    <select name="company">
        <option>アンドロボティクス</option>
        <option>アンドロボウェブサービス</option>
        <option>アンドロボクイック</option>
        <option>アンドロボディオーナ</option>
        <option>アンドロボコアテクノロジー</option>
    </select>


    <?= $this->Form->button('登録') ?>

<?= $this->Form->end() ?>