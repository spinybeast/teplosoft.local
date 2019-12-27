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

/* @PrestaShop/Admin/Improve/International/Geolocation/index.html.twig */
class __TwigTemplate_5d7f3c17a440a9f2094bd1a6491abb27ef5842fce9e143485bb46badcbe3b4a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'geolocation_form_rest' => [$this, 'block_geolocation_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig"));

        // line 29
        list($context["geolocationByIpAddressForm"], $context["geolocationIpAddressWhitelistForm"], $context["geolocationOptionsForm"]) =         [$this->getAttribute(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), "geolocation_by_id_address", []), $this->getAttribute(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), "geolocation_ip_address_whitelist", []), $this->getAttribute(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), "geolocation_options", [])];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "  ";
        if ( !($context["geolocationDatabaseAvailable"] ?? $this->getContext($context, "geolocationDatabaseAvailable"))) {
            // line 33
            echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In order to use Geolocation, please download [1]this file[/1] and extract it (using Winrar or Gzip) into the /app/Resources/geoip/ directory.", ["[1]" => "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz\" target=\"_blank\">", "[/1]" => "<a/>"], "Admin.International.Feature");
            echo "
          </span>
        </div>
      </div>
    </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_save_options")]);
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 47)->display($context);
        // line 48
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 51)->display($context);
        // line 52
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
    </div>

    ";
        // line 59
        $this->displayBlock('geolocation_form_rest', $context, $blocks);
        // line 62
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_geolocation_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "geolocation_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "geolocation_form_rest"));

        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["geolocationForm"] ?? $this->getContext($context, "geolocationForm")), 'rest');
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/geolocation.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  159 => 66,  150 => 65,  137 => 60,  128 => 59,  115 => 62,  113 => 59,  108 => 56,  106 => 55,  101 => 52,  99 => 51,  94 => 48,  92 => 47,  86 => 44,  83 => 43,  74 => 37,  68 => 33,  65 => 32,  56 => 31,  46 => 26,  44 => 29,  22 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain 'Admin.International.Feature' %}

{% set geolocationByIpAddressForm, geolocationIpAddressWhitelistForm, geolocationOptionsForm = geolocationForm.geolocation_by_id_address, geolocationForm.geolocation_ip_address_whitelist, geolocationForm.geolocation_options %}

{% block content %}
  {% if not geolocationDatabaseAvailable %}
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            {{ 'In order to use Geolocation, please download [1]this file[/1] and extract it (using Winrar or Gzip) into the /app/Resources/geoip/ directory.'|trans({'[1]': '<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz\" target=\"_blank\">', '[/1]': '<a/>'})|raw }}
          </span>
        </div>
      </div>
    </div>
  {% endif %}

  {{ form_start(geolocationForm, {'action': path('admin_geolocation_save_options')}) }}
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig' %}
      </div>

      <div class=\"col-xl-10\">
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig' %}
      </div>

      <div class=\"col-xl-10\">
        {% include '@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig' %}
      </div>
    </div>

    {% block geolocation_form_rest %}
      {{ form_rest(geolocationForm) }}
    {% endblock %}
  {{ form_end(geolocationForm) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/geolocation.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/index.html.twig");
    }
}
