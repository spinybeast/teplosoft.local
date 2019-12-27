{extends file='parent:_partials/footer.tpl'}
{block name='copyright_link'}
    {l s='%copyright% %year% - ТеплоCофт' sprintf=['%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
{/block}