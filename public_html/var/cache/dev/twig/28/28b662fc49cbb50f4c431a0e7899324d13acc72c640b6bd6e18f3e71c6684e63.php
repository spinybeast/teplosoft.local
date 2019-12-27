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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_4915b4ba2bdfb92e505af3ec164ca21bc348fff58d2a3bf564042b8737b66868 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "firstName", []), "html", null, true);
        echo "
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastName", []), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, sprintf("[%06d]", $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "email", []), "html", null, true);
        echo "\">
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "email", []), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", []), "updatecustomer" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "socialTitle", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "birthday", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "registrationDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastVisitDate", []), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "rankBySales", [])) {
            // line 85
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "rankBySales", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if (($context["isMultistoreEnabled"] ?? $this->getContext($context, "isMultistoreEnabled"))) {
            // line 96
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "shopName", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 105
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "languageName", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 120
        $context["isNewsletterSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "subscriptions", []), "newsletterSubscribed", []);
        // line 121
        echo "        ";
        $context["isPartnerOffersSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "subscriptions", []), "partnerOffersSubscribed", []);
        // line 122
        echo "
        <span class=\"badge badge-";
        // line 123
        if (($context["isNewsletterSubscribed"] ?? $this->getContext($context, "isNewsletterSubscribed"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? $this->getContext($context, "isNewsletterSubscribed"))) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"badge badge-";
        // line 128
        if (($context["isPartnerOffersSubscribed"] ?? $this->getContext($context, "isPartnerOffersSubscribed"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? $this->getContext($context, "isPartnerOffersSubscribed"))) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "lastUpdateDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 149
        $context["isCustomerActive"] = $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "active", []);
        // line 150
        echo "
        <span class=\"badge badge-";
        // line 151
        if (($context["isCustomerActive"] ?? $this->getContext($context, "isCustomerActive"))) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          ";
        // line 152
        if (($context["isCustomerActive"] ?? $this->getContext($context, "isCustomerActive"))) {
            // line 153
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 156
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 159
        echo "        </span>
      </div>
    </div>

    ";
        // line 163
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "personalInformation", []), "guest", [])) {
            // line 164
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 169
            if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "generalInformation", []), "customerBySameEmailExists", [])) {
                // line 170
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 172
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_transform_guest_to_customer", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? $this->getContext($context, "customerInformation")), "customerId", []), "value", [])])]);
                echo "
              <button class=\"btn btn-primary btn-sm\">
                ";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transform to a customer account", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              </button>

              <p class=\"small-text\">";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "</p>
            ";
                // line 178
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? $this->getContext($context, "transferGuestAccountForm")), 'form_end');
                echo "
          ";
            }
            // line 180
            echo "        </div>
      </div>
    ";
        }
        // line 183
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 183,  364 => 180,  359 => 178,  355 => 177,  349 => 174,  343 => 172,  337 => 170,  335 => 169,  329 => 166,  325 => 164,  323 => 163,  317 => 159,  312 => 157,  309 => 156,  304 => 154,  301 => 153,  299 => 152,  291 => 151,  288 => 150,  286 => 149,  280 => 146,  271 => 140,  265 => 137,  255 => 130,  247 => 129,  239 => 128,  233 => 125,  225 => 124,  217 => 123,  214 => 122,  211 => 121,  209 => 120,  203 => 117,  194 => 111,  188 => 108,  183 => 105,  176 => 101,  170 => 98,  166 => 96,  164 => 95,  161 => 94,  154 => 90,  148 => 87,  144 => 85,  142 => 84,  135 => 80,  129 => 77,  120 => 71,  114 => 68,  105 => 62,  99 => 59,  90 => 53,  84 => 50,  73 => 42,  65 => 37,  59 => 34,  55 => 33,  50 => 31,  46 => 30,  42 => 29,  36 => 25,);
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
    <i class=\"material-icons\">person</i>
    {{ customerInformation.personalInformation.firstName }}
    {{ customerInformation.personalInformation.lastName }}
    {{ '[%06d]'|format(customerInformation.customerId.value) }}
    -
    <a href=\"mailto:{{ customerInformation.personalInformation.email }}\">
      {{ customerInformation.personalInformation.email }}
    </a>

    <a href=\"{{ getAdminLink('AdminCustomers', true, {'id_customer': customerInformation.customerId.value, 'updatecustomer': 1, 'back': app.request.uri}) }}\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Social Title'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.socialTitle }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Age'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.birthday }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registration Date'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.registrationDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Last Visit'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.lastVisitDate }}
      </div>
    </div>

    {% if customerInformation.personalInformation.rankBySales %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Best Customer Rank'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8\">
          {{ customerInformation.personalInformation.rankBySales }}
        </div>
      </div>
    {% endif %}

    {% if isMultistoreEnabled %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Shop'|trans({}, 'Admin.Global') }}
        </div>
        <div class=\"col-8\">
          {{ customerInformation.personalInformation.shopName }}
        </div>
      </div>
    {% endif %}

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Language'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.languageName }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registrations'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {% set isNewsletterSubscribed = customerInformation.personalInformation.subscriptions.newsletterSubscribed %}
        {% set isPartnerOffersSubscribed = customerInformation.personalInformation.subscriptions.partnerOffersSubscribed %}

        <span class=\"badge badge-{% if isNewsletterSubscribed %}success{% else %}danger{% endif %} rounded pt-0 pb-0\">
          <i class=\"material-icons\">{% if isNewsletterSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Newsletter'|trans({}, 'Admin.Global') }}
        </span>

        <span class=\"badge badge-{% if isPartnerOffersSubscribed %}success{% else %}danger{% endif %} rounded pt-0 pb-0\">
          <i class=\"material-icons\">{% if isPartnerOffersSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Partner offers'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Latest Update'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {{ customerInformation.personalInformation.lastUpdateDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Status'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8\">
        {% set isCustomerActive = customerInformation.personalInformation.active %}

        <span class=\"badge badge-{% if isCustomerActive %}success{% else %}danger{% endif %} rounded pt-0 pb-0\">
          {% if isCustomerActive %}
            <i class=\"material-icons\">check</i>
            {{ 'Active'|trans({}, 'Admin.Global') }}
          {% else %}
            <i class=\"material-icons\">cancel</i>
            {{ 'Inactive'|trans({}, 'Admin.Global') }}
          {% endif %}
        </span>
      </div>
    </div>

    {% if customerInformation.personalInformation.guest %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'This customer is registered as a Guest.'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8\">
          {% if customerInformation.generalInformation.customerBySameEmailExists %}
            <p>{{ 'A registered customer account using the defined email address already exists. '|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
          {% else %}
            {{ form_start(transferGuestAccountForm, {'action': path('admin_customers_transform_guest_to_customer', {'customerId': customerInformation.customerId.value})}) }}
              <button class=\"btn btn-primary btn-sm\">
                {{ 'Transform to a customer account'|trans({}, 'Admin.Orderscustomers.Feature') }}
              </button>

              <p class=\"small-text\">{{ 'This feature generates a random password before sending an email to your customer.'|trans({}, 'Admin.Orderscustomers.Help') }}</p>
            {{ form_end(transferGuestAccountForm) }}
          {% endif %}
        </div>
      </div>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "/var/www/teplosoft.local/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
