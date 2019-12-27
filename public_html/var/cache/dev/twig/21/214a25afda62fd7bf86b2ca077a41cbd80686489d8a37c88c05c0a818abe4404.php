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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig */
class __TwigTemplate_8fd6cf1d6409b972a320d66d30f65a70fc095230a6b274d5aaeb113a3d605b75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_cart</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "cartsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "cartsInformation", []))) {
            // line 34
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "cartsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
                // line 46
                echo "          ";
                $context["cartViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCarts", true, ["id_cart" => $this->getAttribute($context["cart"], "cartId", []), "viewcart" => 1]);
                // line 47
                echo "
          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? $this->getContext($context, "cartViewUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartId", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? $this->getContext($context, "cartViewUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartCreationDate", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? $this->getContext($context, "cartViewUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "carrierName", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? $this->getContext($context, "cartViewUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cart"], "cartTotal", []), "html", null, true);
                echo "</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["cartViewUrl"] ?? $this->getContext($context, "cartViewUrl")), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 72
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 76,  150 => 73,  147 => 72,  142 => 69,  127 => 60,  120 => 56,  111 => 52,  105 => 51,  99 => 50,  93 => 49,  89 => 47,  86 => 46,  82 => 45,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  54 => 34,  52 => 33,  46 => 30,  42 => 29,  36 => 25,);
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

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_cart</i>
    {{ 'Carts'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.cartsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.cartsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Carrier'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Total'|trans({}, 'Admin.Global') }}</th>
            <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for cart in customerInformation.cartsInformation %}
          {% set cartViewUrl = getAdminLink('AdminCarts', true, {'id_cart': cart.cartId, 'viewcart': 1}) %}

          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartId }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartCreationDate }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.carrierName }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartTotal }}</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"{{ cartViewUrl }}\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"{{ 'View'|trans({}, 'Admin.Actions') }}\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ 'No cart is available'|trans({}, 'Admin.Orderscustomers.Notification') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/carts.html.twig");
    }
}
