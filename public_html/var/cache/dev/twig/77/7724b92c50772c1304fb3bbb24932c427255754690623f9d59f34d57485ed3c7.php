<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig */
class __TwigTemplate_8a5c4f6adc3162b2aeb87a2c4f56820bee25e31b8094730357663c24ca0390b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "productsInformation", []), "boughtProductsInformation", []))) {
            // line 27
            echo "<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Purchased products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    <span class=\"badge badge-primary rounded\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "productsInformation", []), "boughtProductsInformation", [])), "html", null, true);
            echo "</span>
  </h3>
  <div class=\"card-body\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "productsInformation", []), "boughtProductsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "          <tr>
            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "boughtDate", []), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["product"], "orderId", []), "vieworder" => 1]), "html", null, true);
                echo "\">
                ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productName", []), "html", null, true);
                echo "
              </a>
            </td>
            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "boughtQuantity", []), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </tbody>
      </table>
  </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 54,  96 => 51,  90 => 48,  86 => 47,  81 => 45,  78 => 44,  74 => 43,  67 => 39,  63 => 38,  59 => 37,  50 => 31,  46 => 30,  41 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% if customerInformation.productsInformation.boughtProductsInformation is not empty %}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    {{ 'Purchased products'|trans({}, 'Admin.Orderscustomers.Feature') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.productsInformation.boughtProductsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for product in customerInformation.productsInformation.boughtProductsInformation %}
          <tr>
            <td>{{ product.boughtDate }}</td>
            <td>
              <a href=\"{{ getAdminLink('AdminOrders', true, {'id_order': product.orderId, 'vieworder': 1}) }}\">
                {{ product.productName }}
              </a>
            </td>
            <td>{{ product.boughtQuantity }}</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
  </div>
</div>
{% endif %}
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/bought_products.html.twig");
    }
}
