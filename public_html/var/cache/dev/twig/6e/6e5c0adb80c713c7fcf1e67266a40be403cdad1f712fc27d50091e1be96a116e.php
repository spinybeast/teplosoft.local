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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig */
class __TwigTemplate_b0921d3df2d7d57c72e840f4bd52538fb4ddf0aae9f7684f79577d9529d91385 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">loyalty</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "discountsInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "discountsInformation", []))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Code", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Qty available", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "discountsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 47
                echo "          ";
                $context["discountEditUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "addcart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]);
                // line 48
                echo "
          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? $this->getContext($context, "discountEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discountId", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? $this->getContext($context, "discountEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "code", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? $this->getContext($context, "discountEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
                echo "</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? $this->getContext($context, "discountEditUrl")), "html", null, true);
                echo "\">
              ";
                // line 54
                if ($this->getAttribute($context["discount"], "active", [])) {
                    // line 55
                    echo "                <i class=\"material-icons text-success\">
                  check
                </i>
              ";
                } else {
                    // line 59
                    echo "                <i class=\"material-icons text-danger\">
                  clear
                </i>
              ";
                }
                // line 63
                echo "            </td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["discountEditUrl"] ?? $this->getContext($context, "discountEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "availableQuantity", []), "html", null, true);
                echo "</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "addcart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">edit</i>
                  </a>

                  <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                     data-toggle=\"dropdown\"
                     aria-haspopup=\"true\"
                     aria-expanded=\"false\"
                  ></a>

                  <div class=\"dropdown-menu dropdown-menu-right\">
                    <a class=\"btn tooltip-link dropdown-item\"
                       href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCartRules", true, ["id_cart_rule" => $this->getAttribute($context["discount"], "discountId", []), "deletecart_rule" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">delete</i>
                      ";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
                echo "
                    </a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 99
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has no discount vouchers", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 103
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 103,  196 => 100,  193 => 99,  188 => 96,  174 => 88,  168 => 85,  152 => 72,  145 => 68,  136 => 64,  133 => 63,  127 => 59,  121 => 55,  119 => 54,  115 => 53,  109 => 52,  103 => 51,  97 => 50,  93 => 48,  90 => 47,  86 => 46,  79 => 42,  75 => 41,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  54 => 34,  52 => 33,  46 => 30,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">loyalty</i>
    {{ 'Vouchers'|trans({}, 'Admin.Orderscustomers.Feature') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.discountsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.discountsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Code'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Qty available'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
            <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for discount in customerInformation.discountsInformation %}
          {% set discountEditUrl = getAdminLink('AdminCartRules', true, {'id_cart_rule': discount.discountId, 'addcart_rule': 1, 'back': app.request.uri}) %}

          <tr>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ discountEditUrl }}\">{{ discount.discountId }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ discountEditUrl }}\">{{ discount.code }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ discountEditUrl }}\">{{ discount.name }}</td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ discountEditUrl }}\">
              {% if discount.active %}
                <i class=\"material-icons text-success\">
                  check
                </i>
              {% else %}
                <i class=\"material-icons text-danger\">
                  clear
                </i>
              {% endif %}
            </td>
            <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ discountEditUrl }}\">{{ discount.availableQuantity }}</td>
            <td class=\"text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"{{ getAdminLink('AdminCartRules', true, {'id_cart_rule': discount.discountId, 'addcart_rule': 1, 'back': app.request.uri}) }}\"
                     class=\"btn tooltip-link dropdown-item\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
                  >
                    <i class=\"material-icons\">edit</i>
                  </a>

                  <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                     data-toggle=\"dropdown\"
                     aria-haspopup=\"true\"
                     aria-expanded=\"false\"
                  ></a>

                  <div class=\"dropdown-menu dropdown-menu-right\">
                    <a class=\"btn tooltip-link dropdown-item\"
                       href=\"{{ getAdminLink('AdminCartRules', true, {'id_cart_rule': discount.discountId, 'deletecart_rule': 1, 'back': app.request.uri}) }}\"
                    >
                      <i class=\"material-icons\">delete</i>
                      {{ 'Delete'|trans({}, 'Admin.Actions') }}
                    </a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ '%firstname% %lastname% has no discount vouchers'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/discounts.html.twig");
    }
}
