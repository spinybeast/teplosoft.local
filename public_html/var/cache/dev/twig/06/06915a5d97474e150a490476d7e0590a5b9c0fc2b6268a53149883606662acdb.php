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

/* @PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig */
class __TwigTemplate_1cee6e05170f4a546e10b2a2b2a387abec98b8699042dfc57445208e202e58b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'geolocation_ip_address_whitelist' => [$this, 'block_geolocation_ip_address_whitelist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('geolocation_ip_address_whitelist', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_geolocation_ip_address_whitelist($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "geolocation_ip_address_whitelist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "geolocation_ip_address_whitelist"));

        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP address whitelist", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"alert alert-info\" role=\"alert\">
              <span class=\"alert-text\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add IP addresses that will always be allowed to access your shop (e.g. Google bots' IP).", [], "Admin.International.Help"), "html", null, true);
        echo "
              </span>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Whitelisted IP addresses", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationIpAddressWhitelistForm"] ?? $this->getContext($context, "geolocationIpAddressWhitelistForm")), "geolocation_whitelist", []), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["geolocationIpAddressWhitelistForm"] ?? $this->getContext($context, "geolocationIpAddressWhitelistForm")), "geolocation_whitelist", []), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  97 => 51,  93 => 50,  87 => 47,  76 => 39,  65 => 31,  61 => 29,  43 => 28,  40 => 27,  37 => 25,);
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

{% trans_default_domain 'Admin.International.Feature' %}

{% block geolocation_ip_address_whitelist %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'IP address whitelist'|trans }}
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"alert alert-info\" role=\"alert\">
              <span class=\"alert-text\">
                {{ 'You can add IP addresses that will always be allowed to access your shop (e.g. Google bots\\' IP).'|trans({}, 'Admin.International.Help') }}
              </span>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Whitelisted IP addresses'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(geolocationIpAddressWhitelistForm.geolocation_whitelist) }}
            {{ form_widget(geolocationIpAddressWhitelistForm.geolocation_whitelist) }}
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig");
    }
}
