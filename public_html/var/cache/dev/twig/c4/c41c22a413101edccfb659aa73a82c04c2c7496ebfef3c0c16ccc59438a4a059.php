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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig */
class __TwigTemplate_8b2e02d644d2c95035788b923c91cf5971646600687bce337f910e57772e4cfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">message</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Messages", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "messagesInformation", [])), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "messagesInformation", []))) {
            // line 34
            echo "    <table class=\"table\">
      <thead>
        <tr>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sent on", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
        </tr>
      </thead>
      <tbody>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "messagesInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "        <tr>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "status", []), "html", null, true);
                echo "</td>
          <td>
            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomerThreads", true, ["id_customer_thread" => $this->getAttribute($context["message"], "customerThreadId", []), "viewcustomer_thread" => 1]), "html", null, true);
                echo "\">
              ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", []), "html", null, true);
                echo "...
            </a>
          </td>
          <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "date", []), "html", null, true);
                echo "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </tbody>
    </table>
    ";
        } else {
            // line 57
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%firstname% %lastname% has never contacted you", ["%firstname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "%lastname%" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", [])], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 61
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 61,  113 => 58,  110 => 57,  105 => 54,  96 => 51,  90 => 48,  86 => 47,  81 => 45,  78 => 44,  74 => 43,  67 => 39,  63 => 38,  59 => 37,  54 => 34,  52 => 33,  46 => 30,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">message</i>
    {{ 'Messages'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.messagesInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.messagesInformation is not empty %}
    <table class=\"table\">
      <thead>
        <tr>
          <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Message'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Sent on'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
        </tr>
      </thead>
      <tbody>
      {% for message in customerInformation.messagesInformation %}
        <tr>
          <td>{{ message.status }}</td>
          <td>
            <a href=\"{{ getAdminLink('AdminCustomerThreads', true, {'id_customer_thread': message.customerThreadId, 'viewcustomer_thread': 1}) }}\">
              {{ message.message }}...
            </a>
          </td>
          <td>{{ message.date }}</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ '%firstname% %lastname% has never contacted you'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/messages.html.twig");
    }
}
