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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig */
class __TwigTemplate_e17f46334f8b86df5c434f3432a09df8f2c4a83614983bb352a1e522aba6a506 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !twig_test_empty($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "sentEmailsInformation", []))) {
            // line 27
            echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">mail_outline</i>
      ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last emails", [], "Admin.Orderscustomers.Feature"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subject", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template", [], "Admin.Global"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "sentEmailsInformation", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sentEmail"]) {
                // line 45
                echo "          <tr>
            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["sentEmail"], "date", []), "html", null, true);
                echo "</td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["sentEmail"], "language", []), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["sentEmail"], "subject", []), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["sentEmail"], "template", []), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sentEmail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
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
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  97 => 49,  93 => 48,  89 => 47,  85 => 46,  82 => 45,  78 => 44,  71 => 40,  67 => 39,  63 => 38,  59 => 37,  50 => 31,  46 => 30,  41 => 27,  39 => 26,  36 => 25,);
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

{% if customerInformation.sentEmailsInformation is not empty %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">mail_outline</i>
      {{ 'Last emails'|trans({}, 'Admin.Orderscustomers.Feature') }}
      <span class=\"badge badge-primary rounded\">{{ customerInformation.productsInformation.boughtProductsInformation|length }}</span>
    </h3>
    <div class=\"card-body\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Language'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Subject'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Template'|trans({}, 'Admin.Global') }}</th>
        </tr>
        </thead>
        <tbody>
        {% for sentEmail in customerInformation.sentEmailsInformation %}
          <tr>
            <td>{{ sentEmail.date }}</td>
            <td>{{ sentEmail.language }}</td>
            <td>{{ sentEmail.subject }}</td>
            <td>{{ sentEmail.template }}</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig");
    }
}
