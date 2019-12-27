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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig */
class __TwigTemplate_4b5a9fb197326e698e8fe1d1a01b65aec1af8eb1f31236af165dc5b0eb2ee776 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["validOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "ordersInformation", []), "validOrders", []));
        // line 27
        $context["invalidOrdersCount"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "ordersInformation", []), "invalidOrders", []));
        // line 28
        $context["ordersCount"] = (($context["validOrdersCount"] ?? $this->getContext($context, "validOrdersCount")) + ($context["invalidOrdersCount"] ?? $this->getContext($context, "invalidOrdersCount")));
        // line 29
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["ordersCount"] ?? $this->getContext($context, "ordersCount")), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 37
        if ((($context["ordersCount"] ?? $this->getContext($context, "ordersCount")) > 0)) {
            // line 38
            echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-success rounded\">";
            // line 43
            echo twig_escape_filter($this->env, ($context["validOrdersCount"] ?? $this->getContext($context, "validOrdersCount")), "html", null, true);
            echo "</span>
              ";
            // line 44
            $context["totalAmount"] = (("<span id=\"total-order-amount\">" . $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "ordersInformation", []), "totalSpent", [])) . "</span>");
            // line 45
            echo "              ";
            echo sprintf($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("for a total amount of %s", [], "Admin.Orderscustomers.Feature"), ($context["totalAmount"] ?? $this->getContext($context, "totalAmount")));
            echo "
            </div>
            <div class=\"col\">
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-danger rounded\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["invalidOrdersCount"] ?? $this->getContext($context, "invalidOrdersCount")), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 57
            if (($context["validOrdersCount"] ?? $this->getContext($context, "validOrdersCount"))) {
                // line 58
                echo "            <table class=\"table\">
              <thead>
              <tr>
                <th>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                <th class=\"text-right\">";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
              </tr>
              </thead>
              <tbody>
              ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "ordersInformation", []), "validOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 72
                    echo "                ";
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 73
                    echo "
                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 88
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "              </tbody>
            </table>
          ";
            }
            // line 100
            echo "        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          ";
            // line 105
            if (($context["invalidOrdersCount"] ?? $this->getContext($context, "invalidOrdersCount"))) {
                // line 106
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
                  <th class=\"text-right\">";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
                </tr>
              </thead>
              <tbody>
              ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "ordersInformation", []), "invalidOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 120
                    echo "                ";
                    $context["orderViewUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminOrders", true, ["id_order" => $this->getAttribute($context["order"], "orderId", []), "vieworder" => 1]);
                    // line 121
                    echo "
                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderId", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderPlacedDate", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "paymentMethodName", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderStatus", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "orderProductsCount", []), "html", null, true);
                    echo "</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalPaid", []), "html", null, true);
                    echo "</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, ($context["orderViewUrl"] ?? $this->getContext($context, "orderViewUrl")), "html", null, true);
                    echo "\"
                           class=\"btn tooltip-link dropdown-item\"
                           data-toggle=\"pstooltip\"
                           data-placement=\"top\"
                           data-original-title=\"";
                    // line 136
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "              </tbody>
            </table>
          ";
            }
            // line 148
            echo "        </div>
      </div>
    ";
        } else {
            // line 151
            echo "      <p class=\"text-muted text-center\">
        ";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not placed any orders yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 155
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 155,  346 => 152,  343 => 151,  338 => 148,  333 => 145,  318 => 136,  311 => 132,  302 => 128,  296 => 127,  290 => 126,  284 => 125,  278 => 124,  272 => 123,  268 => 121,  265 => 120,  261 => 119,  254 => 115,  250 => 114,  246 => 113,  242 => 112,  238 => 111,  234 => 110,  230 => 109,  225 => 106,  223 => 105,  216 => 100,  211 => 97,  196 => 88,  189 => 84,  180 => 80,  174 => 79,  168 => 78,  162 => 77,  156 => 76,  150 => 75,  146 => 73,  143 => 72,  139 => 71,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 63,  112 => 62,  108 => 61,  103 => 58,  101 => 57,  90 => 49,  86 => 48,  79 => 45,  77 => 44,  73 => 43,  69 => 42,  63 => 38,  61 => 37,  55 => 34,  51 => 33,  45 => 29,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% set validOrdersCount = customerInformation.ordersInformation.validOrders|length %}
{% set invalidOrdersCount = customerInformation.ordersInformation.invalidOrders|length %}
{% set ordersCount = validOrdersCount + invalidOrdersCount %}

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    {{ 'Orders'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ ordersCount }}</span>
  </h3>
  <div class=\"card-body\">
    {% if ordersCount > 0 %}
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              {{ 'Valid orders:'|trans({}, 'Admin.Orderscustomers.Feature') }}
              <span class=\"badge badge-success rounded\">{{ validOrdersCount }}</span>
              {% set totalAmount = '<span id=\"total-order-amount\">'~customerInformation.ordersInformation.totalSpent~'</span>' %}
              {{ 'for a total amount of %s'|trans({}, 'Admin.Orderscustomers.Feature')|format(totalAmount)|raw }}
            </div>
            <div class=\"col\">
              {{ 'Invalid orders:'|trans({}, 'Admin.Orderscustomers.Feature') }}
              <span class=\"badge badge-danger rounded\">{{ invalidOrdersCount }}</span>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          {% if validOrdersCount %}
            <table class=\"table\">
              <thead>
              <tr>
                <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Payment'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Products'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Total spent'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
                <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
              </tr>
              </thead>
              <tbody>
              {% for order in customerInformation.ordersInformation.validOrders %}
                {% set orderViewUrl = getAdminLink('AdminOrders', true, {'id_order': order.orderId, 'vieworder': 1}) %}

                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderId }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderPlacedDate }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.paymentMethodName }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderStatus }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderProductsCount }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.totalPaid }}</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"{{ orderViewUrl }}\"
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
          {% endif %}
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col\">
          {% if invalidOrdersCount %}
            <table class=\"table\">
              <thead>
                <tr>
                  <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Payment'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Products'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'Total spent'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
                  <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
                </tr>
              </thead>
              <tbody>
              {% for order in customerInformation.ordersInformation.invalidOrders %}
                {% set orderViewUrl = getAdminLink('AdminOrders', true, {'id_order': order.orderId, 'vieworder': 1}) %}

                <tr>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderId }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderPlacedDate }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.paymentMethodName }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderStatus }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderProductsCount }}</td>
                  <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.totalPaid }}</td>
                  <td class=\"text-right\">
                    <div class=\"btn-group-action\">
                      <div class=\"btn-group\">
                        <a href=\"{{ orderViewUrl }}\"
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
          {% endif %}
        </div>
      </div>
    {% else %}
      <p class=\"text-muted text-center\">
        {{ '%firstname% %lastname% has not placed any orders yet'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/orders.html.twig");
    }
}
