			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
            Halaman <?php echo $links; ?>
			<table>
				<tr>
					<th>No</th>					    
				    <th>Product Name</th>
				    <th>Quantity Per Unit</th>	
                    <th>Units In Stock</th>	
                    <th>Units On Order</th>	
                    <th>Reorder Level</th>				   				   
				</tr>
				<?php
					foreach($table as $row):		
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>
                    <td><?=$row->UnitsInStock;?></td>
                    <td><?=$row->UnitsOnOrder;?></td>
                    <td><?=$row->ReorderLevel;?></td>
                    
                    				    
				</tr>
				<?php  endforeach; ?>
			</table>
             Halaman  <?php echo $links; ?>
