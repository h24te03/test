<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table>
<?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['MySampleData']['車体番号']; ?></td>
    <td><?php echo $data['MySampleData']['車種']; ?></td>
    <td><?php echo $data['MySampleData']['所有者名']; ?></td>
    <td><?php echo $data['MySampleData']['カラー']; ?></td>
    <td><?php echo $data['MySampleData']['製造日']; ?></td>
  </tr>
<?php endforeach; ?>
</table>
~
