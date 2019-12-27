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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig */
class __TwigTemplate_58f59533a953aa3aa5cfde7ca5e03869b1603d8e2f670fa76b78d3f6db37b11d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Groups", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "groupsInformation", [])), "html", null, true);
        echo "</span>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", []), "updatecustomer" => 1]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    ";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "groupsInformation", []))) {
            // line 43
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "groupsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 52
                echo "          <tr>
            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "groupId", []), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminGroups", true, ["id_group" => $this->getAttribute($context["group"], "groupId", []), "viewgroup" => 1]), "html", null, true);
                echo "\">
                ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", []), "html", null, true);
                echo "
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 64
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 68
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 68,  120 => 65,  117 => 64,  112 => 61,  101 => 56,  97 => 55,  92 => 53,  89 => 52,  85 => 51,  78 => 47,  74 => 46,  69 => 43,  67 => 42,  58 => 36,  51 => 32,  46 => 30,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">group</i>
    {{ 'Groups'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.groupsInformation|length }}</span>

    <a href=\"{{ getAdminLink('AdminCustomers', true, {'id_customer': customerInformation.customerId.value, 'updatecustomer': 1}) }}\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.groupsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for group in customerInformation.groupsInformation %}
          <tr>
            <td>{{ group.groupId }}</td>
            <td>
              <a href=\"{{ getAdminLink('AdminGroups', true, {'id_group': group.groupId, 'viewgroup': 1}) }}\">
                {{ group.name }}
              </a>
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
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/groups.html.twig");
    }
}
