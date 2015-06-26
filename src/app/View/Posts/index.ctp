<h1>Posts do Blog</h1>

<p>

<?php echo $this->Html->link("Add Post", array('action' => 'add')); ?> |

<?php echo $this->Html->link('User', array('controller' => 'users' ,'action' => 'index'));?> |

<?php echo $this->Html->link('Logout', array('controller' => 'users' ,'action' => 'logout'));?>

</p>

<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id', 'Id'); ?></th>
        <th><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
		<th>Actions</th>
        <th>Data de Criação</th>
    </tr>

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>

	<td>
            <?php echo $this->Form->postLink(
                'Delete',
                 array('action' => 'delete', $post['Post']['id']),
                 array('confirm' => 'Are you sure?'));
            ?>

            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
	</td>

        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

<?php
    echo "<div class='paging'>";
 
        // the 'first' page button
        echo $this->Paginator->first("Início");
         
        // 'prev' page button,
        // we can check using the paginator hasPrev() method if there's a previous page
        // save with the 'next' page button
        if($this->Paginator->hasPrev()){
            echo $this->Paginator->prev("Anterior");
        }
         
        // the 'number' page buttons
        echo $this->Paginator->numbers(array('modulus' => 2));
         
        // for the 'next' button
        if($this->Paginator->hasNext()){
            echo $this->Paginator->next("Próximo");
        }
         
        // the 'last' page button
        echo $this->Paginator->last("Fim");
     
    echo "</div>";
?>
