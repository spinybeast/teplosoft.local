{extends file='parent:checkout/checkout.tpl'}
{block name='header'}
    {include file='_partials/header.tpl'}
{/block}
{block name='footer'}
    <div class="text-sm-center">
        {l s='%copyright% %year% - ТеплоCофт' sprintf=['%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
    </div>
{/block}