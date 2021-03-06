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

/* __string_template__e2d70ab67a4b562b4be8558cd71341b188514840c0ec5a5ce530f18bd5b56b89 */
class __TwigTemplate_de5403d6ed9f3673b3b3b570133078d685a8a7961a74b1c9d92711d48233baef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Производительность • ТеплоСофт</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.6.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '8a88986f2d2c4fe734dfed8d9365e1a9';
    var token_admin_orders = '2ceb1e1a59975f2c3297cc864571b2b0';
    var token_admin_customers = 'd291dbb39dbe46e920c602496388938f';
    var token_admin_customer_threads = '0d91eabc9c5b12d8ac85185c86d9da31';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'a233d5975bf82a2729be6f7f0edfc072';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin177doonau/index.php/improve/modules/catalog/recommended?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs';
    var admin_notification_get_link = '/admin177doonau/index.php/common/notifications?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs';
    var admin_notification_push_link = '/admin177doonau/index.php/common/notifications/ack?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/admin177doonau/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin177doonau/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin177doonau\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin177doonau\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u20bd\",\"name\":\"\\u0440\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"RUB\",\"currencySymbol\":\"\\u20bd\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/admin177doonau/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/admin177doonau/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/admin177doonau/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin177doonau/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://teplosoft.local/admin177doonau/index.php?controller=AdminAjaxFaviconBO&amp;token=d846e3e99a5574cd8a1a9b9fe612b3a1\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/teplosoft.local\\/admin177doonau\\/index.php?controller=AdminGamification&token=58a2ce8b6b86eb7e782ab47b120b4f12\";
            var current_id_tab = 105;
        </script>

";
        // line 174
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-ru adminperformance\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminDashboard&amp;token=c4c5bc98462fc1b7b4eeb58b59b9fa0e\"></a>
      <span id=\"shop_version\">1.7.6.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminOrders&amp;token=2ceb1e1a59975f2c3297cc864571b2b0\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCategories&amp;addcategory&amp;token=b52f73f9dbeef50d36dfa87046802cbd\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c4f74bf43a028b7201735829ee946b14\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php/sell/catalog/products/new?token=efacb99a4cebb7dec6864cd056b2ee7c\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0a666eda86234d075d5639164ab9ab05\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"http://teplosoft.local/admin177doonau/index.php/improve/modules/manage?token=efacb99a4cebb7dec6864cd056b2ee7c\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"11\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-DRKvh4LWalCvnVnJn1rabMjs\"
        data-post-link=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminQuickAccesses&token=dfa65eb92a058cca3d2d03ac64538873\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Производительность - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminQuickAccesses&token=dfa65eb92a058cca3d2d03ac64538873\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin177doonau/index.php?controller=AdminSearch&amp;token=ef02f449a2c67dee27d7f5cffbf303a2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://teplosoft.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Вы проверяли <strong><a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a9614a3f33ab925af1468d74f3cae915\">брошенные корзины</a></strong>?<br>Ваш следующий заказ может скрываться там!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Рассматривали ли вы продажу на рынках?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Есть время на кое-что еще!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/spiny.beast%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Мария</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin177doonau/index.php/configure/advanced/employees/1/edit?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\">
      <i class=\"material-icons\">settings</i>
      Ваш профиль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminLogin&amp;logout=1&amp;token=f92a2dfed79ba1915d008efd2412bd16\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin177doonau/index.php/configure/advanced/employees/toggle-navigation?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminDashboard&amp;token=c4c5bc98462fc1b7b4eeb58b59b9fa0e\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminOrders&amp;token=2ceb1e1a59975f2c3297cc864571b2b0\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminOrders&amp;token=2ceb1e1a59975f2c3297cc864571b2b0\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin177doonau/index.php/sell/orders/invoices/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminSlip&amp;token=216744ec70b13fdd4916743f8be9de90\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin177doonau/index.php/sell/orders/delivery-slips/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCarts&amp;token=a9614a3f33ab925af1468d74f3cae915\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin177doonau/index.php/sell/catalog/products?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin177doonau/index.php/sell/catalog/products?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin177doonau/index.php/sell/catalog/categories?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminTracking&amp;token=638e9d57e5efce64f95dde8c0fff74e4\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminAttributesGroups&amp;token=020be8e1e9ac86d0c1d3827d0678b6bf\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin177doonau/index.php/sell/catalog/brands/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminAttachments&amp;token=1dda5453abd05a9c7abfa5d61619ab09\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCartRules&amp;token=c4f74bf43a028b7201735829ee946b14\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin177doonau/index.php/sell/stocks/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin177doonau/index.php/sell/customers/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin177doonau/index.php/sell/customers/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminAddresses&amp;token=03f9c13af87875500395896b5e1faa7f\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCustomerThreads&amp;token=0d91eabc9c5b12d8ac85185c86d9da31\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCustomerThreads&amp;token=0d91eabc9c5b12d8ac85185c86d9da31\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminOrderMessage&amp;token=8055b860b09deb08b4764e9f0e83b822\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminReturn&amp;token=0d94c6950391b1e1e899f90907fb35c6\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminStats&amp;token=0a666eda86234d075d5639164ab9ab05\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin177doonau/index.php/improve/modules/manage?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin177doonau/index.php/improve/modules/manage?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminPsMboModule&amp;token=0b112ed26d78ac3d942511ab82c18901\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin177doonau/index.php/improve/design/themes/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin177doonau/index.php/improve/design/themes/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminPsMboTheme&amp;token=207479d9378186999c379412b79dfc6e\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/admin177doonau/index.php/improve/design/mail_theme/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin177doonau/index.php/improve/design/cms-pages/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin177doonau/index.php/improve/design/modules/positions/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminImages&amp;token=0e68d5df63208f48dc2f5ce77d58fa62\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin177doonau/index.php/modules/link-widget/list?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCarriers&amp;token=c9ae8855420e24f8180f250d16b0a2fe\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminCarriers&amp;token=c9ae8855420e24f8180f250d16b0a2fe\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin177doonau/index.php/improve/shipping/preferences?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin177doonau/index.php/improve/payment/payment_methods?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin177doonau/index.php/improve/payment/payment_methods?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin177doonau/index.php/improve/payment/preferences?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin177doonau/index.php/improve/international/localization/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin177doonau/index.php/improve/international/localization/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminZones&amp;token=c0a2ad80deca002e64685bf4d8f3b817\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin177doonau/index.php/improve/international/taxes/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin177doonau/index.php/improve/international/translations/settings?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin177doonau/index.php/configure/shop/preferences/preferences?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin177doonau/index.php/configure/shop/preferences/preferences?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin177doonau/index.php/configure/shop/order-preferences/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin177doonau/index.php/configure/shop/product-preferences/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin177doonau/index.php/configure/shop/customer-preferences/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin177doonau/index.php/configure/shop/contacts/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin177doonau/index.php/configure/shop/seo-urls/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminSearchConf&amp;token=00d95c55d81b5e14a2c22f796064bd7d\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminGamification&amp;token=58a2ce8b6b86eb7e782ab47b120b4f12\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin177doonau/index.php/configure/advanced/system-information/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/system-information/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/performance/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/administration/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/emails/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/import/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/employees/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/sql-requests/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/logs/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin177doonau/index.php/configure/advanced/webservice-keys/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"121\" id=\"tab-DEFAULT\">
              <span class=\"title\">Еще</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminSelfUpgrade&amp;token=99c321ff48f7a9183cbad771f8648cd8\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Расширенные параметры</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin177doonau/index.php/configure/advanced/performance/?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\" aria-current=\"page\">Производительность</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Производительность          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://teplosoft.local/admin177doonau/index.php?controller=AdminPsMboModule&token=0b112ed26d78ac3d942511ab82c18901';
    var controller = 'AdminPerformance';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin177doonau/index.php/configure/advanced/performance/clear-cache?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\"                  title=\"Очистка кэша\"                >
                  <i class=\"material-icons\">delete</i>                  Очистка кэша
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin177doonau/index.php/improve/modules/catalog?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin177doonau/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.6.0%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=vqDJlafuxqHKUrHqZ8-DRKvh4LWalCvnVnJn1rabMjs\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1253
        $this->displayBlock('content_header', $context, $blocks);
        // line 1254
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1255
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1256
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1257
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://teplosoft.local/admin177doonau/index.php?controller=AdminDashboard&amp;token=c4c5bc98462fc1b7b4eeb58b59b9fa0e\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=spiny.beast%40gmail.com&amp;firstname=%D0%9C%D0%B0%D1%80%D0%B8%D1%8F&amp;lastname=%D0%91%D1%80%D0%B5%D0%B6%D0%BD%D0%B5%D0%B2%D0%B0&amp;website=http%3A%2F%2Fteplosoft.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin177doonau/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=spiny.beast%40gmail.com&amp;firstname=%D0%9C%D0%B0%D1%80%D0%B8%D1%8F&amp;lastname=%D0%91%D1%80%D0%B5%D0%B6%D0%BD%D0%B5%D0%B2%D0%B0&amp;website=http%3A%2F%2Fteplosoft.local%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1378
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 174
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1253
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1254
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1255
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1256
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1378
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__e2d70ab67a4b562b4be8558cd71341b188514840c0ec5a5ce530f18bd5b56b89";
    }

    public function getDebugInfo()
    {
        return array (  1468 => 1378,  1463 => 1256,  1458 => 1255,  1453 => 1254,  1448 => 1253,  1439 => 174,  1431 => 1378,  1308 => 1257,  1305 => 1256,  1302 => 1255,  1299 => 1254,  1297 => 1253,  214 => 174,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e2d70ab67a4b562b4be8558cd71341b188514840c0ec5a5ce530f18bd5b56b89", "");
    }
}
