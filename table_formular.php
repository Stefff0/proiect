<table>
  <thead>
    <tr>
      <?php foreach($headersformular as $head): ?>
        <th><?php echo $head; ?></th>
      <?php endforeach; ?>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($formulare as $formular): ?>
        
        <tr>
            
            <?php foreach($formular as $index=>$value): ?>
                
                    <?php if($index=='formular_id'): ?>
                        <td>
                            <button class="btn green"><?php echo $value; ?></button>          
                        </td>
                    <?php  else: ?>
                        <td>
                            <?php echo $value; ?>
                        </td>
                    <?php endif; ?>
                
            <?php endforeach; ?>
            <td style="white-space: nowrap">
                <form method="post" action="delete.php" style="display: inline-block">        
                <input type="hidden" name="client_id" value="<?=$client['client_id']?>">
                <button class="btn red">Delete</button>
                </form>
                <form method="get" action="editForm.php" style="display: inline-block">        
                <input type="hidden" name="client_id" value="<?=$client['client_id']?>">
                <button class="btn">Edit</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>