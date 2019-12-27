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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig */
class __TwigTemplate_2fb6a480acfd83a3990a1378e7840cbc7e0829bdae1b0111af484eb356af33dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">visibility_off</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body clearfix\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This note will be displayed to all employees but not to customers.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
      </p>
    </div>

    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])])]);
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), "note", []), 'widget');
        echo "

      <button class=\"btn btn-primary float-right mt-3\" type=\"submit\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  67 => 42,  61 => 39,  57 => 38,  50 => 34,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">visibility_off</i>
    {{ 'Add a private note'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body clearfix\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'This note will be displayed to all employees but not to customers.'|trans({}, 'Admin.Orderscustomers.Help') }}
      </p>
    </div>

    {{ form_start(privateNoteForm, {'action': path('admin_customers_set_private_note', {'customerId': customerInformation.customerId.value})}) }}
      {{ form_widget(privateNoteForm.note) }}

      <button class=\"btn btn-primary float-right mt-3\" type=\"submit\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    {{ form_end(privateNoteForm) }}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/private_note.html.twig");
    }
}
