
<div class="equipmenttypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('eqtypeid') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($equipmenttypes as $equipmenttype): ?>
        <tr>
            <td><?= $this->Number->format($equipmenttype->eqtypeid) ?></td>
            <td><?= h($equipmenttype->name) ?></td>
            <td><?= h($equipmenttype->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $equipmenttype->eqtypeid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipmenttype->eqtypeid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipmenttype->eqtypeid], ['confirm' => __('Are you sure you want to delete # {0}?', $equipmenttype->eqtypeid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
