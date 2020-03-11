{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='Your account' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
    <div class="row">
        <div class="links">

            <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="{$urls.pages.identity}">
        <span class="link-item">
          <i class="material-icons">&#xE853;</i>
          {l s='Information' d='Shop.Theme.Customeraccount'}
        </span>
            </a>

            {if $customer.addresses|count}
                <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="addresses-link" href="{$urls.pages.addresses}">
          <span class="link-item">
            <i class="material-icons">&#xE56A;</i>
            {l s='Addresses' d='Shop.Theme.Customeraccount'}
          </span>
                </a>
            {else}
                <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="address-link" href="{$urls.pages.address}">
          <span class="link-item">
            <i class="material-icons">&#xE567;</i>
            {l s='Add first address' d='Shop.Theme.Customeraccount'}
          </span>
                </a>
            {/if}

            {if !$configuration.is_catalog}
                <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="history-link" href="{$urls.pages.history}">
          <span class="link-item">
            <i class="material-icons">&#xE916;</i>
            {l s='Order history and details' d='Shop.Theme.Customeraccount'}
          </span>
                </a>
            {/if}

        </div>
    </div>
{/block}


{block name='page_footer'}
    {block name='my_account_links'}
        <div class="text-sm-center">
            <a href="{$logout_url}" >
                {l s='Sign out' d='Shop.Theme.Actions'}
            </a>
        </div>
    {/block}
{/block}
