<?php

function xyz2(&$arr) { 
  $arr[7] = $arr[0]+$arr[1]+$arr[2]+$arr[3]+$arr[4]+$arr[5]+$arr[6];
}

$balance1 = 100+200+300+678;
$balance2 = 530+670+3;
$balance3 = 3000+39+49+98;


$shop = array( array("company"=>"archeNland Limited", "Amounts"=>"100,-1,200,300,-700,678" , "Debits"=>1700, "Balance"=>$balance1),
               array("company"=>"Narnia Gmb", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>"1299,3", "Balance"=>$balance2),
               array("company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>$balance3) 
             ); 
?>

<?php if (count($shop) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>



