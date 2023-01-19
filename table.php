<table>
  <thead>
    <tr>
      <?php foreach($headers as $head): ?>
        <th><?php echo $head; ?></th>
      <?php endforeach; ?>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($clients as $client): ?>
        
        <tr>
            
            <?php foreach($client as $index=>$value): ?>
                <?php if($index=='client_id'): ?>
                    <td> 
                        <a href="formularForm.php?$vClient=<?=$value?>"  >                    
                            <button class="btn green"><?php echo $value; ?></button>
                        </a>
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