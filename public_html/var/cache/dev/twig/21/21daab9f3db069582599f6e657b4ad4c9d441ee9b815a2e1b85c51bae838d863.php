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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig */
class __TwigTemplate_57595e4ee0ca6ccf954f3d12c15553c0e866ad179af61f25ac4ad75da901b588 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">location_on</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", []), "addaddress" => 1]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    ";
        // line 43
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "addressesInformation", []))) {
            // line 44
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Company", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone number(s)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "addressesInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 57
                echo "            ";
                $context["addressEditUrl"] = $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_address" => $this->getAttribute($context["address"], "addressId", []), "addaddress" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]);
                // line 58
                echo "
            <tr>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 60
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "company", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 61
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "fullName", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 62
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "fullAddress", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 63
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "countryName", []), "html", null, true);
                echo "</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 64
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\">
                ";
                // line 65
                if ($this->getAttribute($context["address"], "phone", [])) {
                    // line 66
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phone", []), "html", null, true);
                    echo "
                  ";
                    // line 67
                    if ( !twig_test_empty($this->getAttribute($context["address"], "phoneMobile", []))) {
                        // line 68
                        echo "                    <br> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phoneMobile", []), "html", null, true);
                        echo "
                  ";
                    }
                    // line 70
                    echo "                ";
                } elseif ( !twig_test_empty($this->getAttribute($context["address"], "phoneMobile", []))) {
                    // line 71
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "phoneMobile", []), "html", null, true);
                    echo "
                ";
                } else {
                    // line 73
                    echo "                  --
                ";
                }
                // line 75
                echo "              </td>
              <td class=\"text-right\">
                <div class=\"btn-group-action\">
                  <div class=\"btn-group\">
                    <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, ($context["addressEditUrl"] ?? $this->getContext($context, "addressEditUrl")), "html", null, true);
                echo "\"
                       class=\"btn tooltip-link dropdown-item\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 83
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
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminAddresses", true, ["id_address" => $this->getAttribute($context["address"], "addressId", []), "deleteaddress" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
                echo "\"
                      >
                        <i class=\"material-icons\">delete</i>
                        ";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
                echo "
                      </a>

                      ";
                // line 102
                echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminCustomersAddressesItemAction", ["id_address" => $this->getAttribute($context["address"], "addressId", [])]);
                echo "
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 112
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has not registered any addresses yet", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 116
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 116,  228 => 113,  225 => 112,  220 => 109,  207 => 102,  201 => 99,  195 => 96,  179 => 83,  172 => 79,  166 => 75,  162 => 73,  156 => 71,  153 => 70,  147 => 68,  145 => 67,  140 => 66,  138 => 65,  134 => 64,  128 => 63,  122 => 62,  116 => 61,  110 => 60,  106 => 58,  103 => 57,  99 => 56,  92 => 52,  88 => 51,  84 => 50,  80 => 49,  76 => 48,  72 => 47,  67 => 44,  65 => 43,  55 => 36,  47 => 31,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">location_on</i>
    {{ 'Addresses'|trans({}, 'Admin.Global') }}

    <a href=\"{{ getAdminLink('AdminAddresses', true, {'id_customer': customerInformation.customerId.value, 'addaddress': 1}) }}\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Add'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">add_circle</i>
    </a>
  </h3>

  <div class=\"card-body\">
    {% if customerInformation.addressesInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'Company'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Address'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Phone number(s)'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
            <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
          {% for address in customerInformation.addressesInformation %}
            {% set addressEditUrl = getAdminLink('AdminAddresses', true, {'id_address': address.addressId, 'addaddress': 1, 'back': app.request.uri}) %}

            <tr>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ addressEditUrl }}\">{{ address.company }}</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ addressEditUrl }}\">{{ address.fullName }}</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ addressEditUrl }}\">{{ address.fullAddress }}</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ addressEditUrl }}\">{{ address.countryName }}</td>
              <td class=\"js-linkable-item cursor-pointer\" data-linkable-href=\"{{ addressEditUrl }}\">
                {% if address.phone %}
                  {{ address.phone }}
                  {% if address.phoneMobile is not empty %}
                    <br> {{ address.phoneMobile }}
                  {% endif %}
                {% elseif address.phoneMobile is not empty %}
                  {{ address.phoneMobile }}
                {% else %}
                  --
                {% endif %}
              </td>
              <td class=\"text-right\">
                <div class=\"btn-group-action\">
                  <div class=\"btn-group\">
                    <a href=\"{{ addressEditUrl }}\"
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
                         href=\"{{ getAdminLink('AdminAddresses', true, {'id_address': address.addressId, 'deleteaddress': 1, 'back': app.request.uri}) }}\"
                      >
                        <i class=\"material-icons\">delete</i>
                        {{ 'Delete'|trans({}, 'Admin.Actions') }}
                      </a>

                      {{ renderhook('displayAdminCustomersAddressesItemAction', {'id_address': address.addressId}) }}
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
        {{ '%firstname% %lastname% has not registered any addresses yet'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/addresses.html.twig");
    }
}
