<!DOCTYPE html>
<html>
<head>
  <title>RAT 3A</title>
</head>
<body>
<h3>RAT 3</h3>
<?php
$dope = array( 

              array("Company"=>"archeNland Limited", "Amounts"=>"£100,-1,200,300,-700,678" , "Debits"=>1700, "Balance"=>1278),
               array("Company"=>"narnia Geselmlchab", "Amounts"=>"$530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>1203),
               array("Company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>3186) 
             ); 
?>

<?php if (count($dope) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($dope))); ?></th>
    </tr>
  </thead>
  <tbody>


<?php foreach ($dope as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

</body>
</html>
