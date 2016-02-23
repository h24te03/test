<h1>登録画面</h1>
<p>車の登録を行ってださい。</p>
<?php
echo $this->Form->create('車');
echo '<p>';
echo '<span>車体番号 </span>';
echo $this->Form->text('車体番号');
echo $this->Form->error('車体番号');
echo '<p>';

echo '<p>';
echo '<span>車種 </span>';
echo $this->Form->text('車種');
echo $this->Form->error('車種');
echo '<p>';

echo '<p>';
echo '<span>所有者名 </span>';
echo $this->Form->text('所有者名');
echo $this->Form->error('所有者名');
echo '<p>';

echo '<p>';
echo '<span>カラー </span>';
echo $this->Form->text('カラー');
echo $this->Form->error('カラー');
echo '<p>';

echo '<p>';
echo '<span>製造日 </span>';
echo $this->Form->text('製造日');
echo $this->Form->error('製造日');
echo $this->Form->submit("登録");
echo $this->Form->end();
?>
