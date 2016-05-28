<?php

/* ::base.html.twig */
class __TwigTemplate_1fa0995b47b075bb9a2f74dbbe5595ba0af0340dd636b45d2d83fe0c45015d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    










";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "
                
                
                  <meta content=\"website\" property=\"og:type\"/>
                <meta content=\"http://demo.joomshaper.com/2015/soccer/\" property=\"og:url\"/>
                </head>
                <body class=\"site com-sppagebuilder view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid\">
                    <div class=\"body-innerwrapper\">
                        <header id=\"sp-header\"><div class=\"container\"><div class=\"row\"><div id=\"sp-logo\" class=\"col-xs-8 col-sm-2 col-md-2\"><div class=\"sp-column \"><a class=\"logo\" href=\"index.html\"><h1><img class=\"sp-default-logo\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/images/presets/preset1/logo.png"), "html", null, true);
        echo "\" alt=\"Shaper Soccer\"><img class=\"sp-retina-logo\" src=\"templates/shaper_soccer/images/presets/preset1/logo%402x.png\" alt=\"Shaper Soccer\" width=\"119\" height=\"27\"></h1></a></div></div><div id=\"sp-menu\" class=\"col-xs-4 col-sm-8 col-md-8\"><div class=\"sp-column \"> <div class='sp-megamenu-wrapper'>
                                                                        <a id=\"offcanvas-toggler\" class=\"visible-xs\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
                                                                        <ul class=\"sp-megamenu-parent menu-fade hidden-xs\"><li class=\"sp-menu-item sp-has-child current-item active\"><a href=\"index-2.html\">Home</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/home/home-2.html\">Home Variation 2</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Club List</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/clubs/real-madrid.html\">Real Madrid</a></li><li class=\"sp-menu-item\"><a href=\"index.php/clubs/bercelona.html\">Bercelona</a></li><li class=\"sp-menu-item\"><a href=\"index.php/clubs/arsenal.html\">Arsenal</a></li><li class=\"sp-menu-item\"><a href=\"index.php/clubs/manchester-city.html\">Manchester City</a></li><li class=\"sp-menu-item\"><a href=\"index.php/clubs/metropo.html\">Metropo</a></li><li class=\"sp-menu-item\"><a href=\"index.php/clubs/selvilla.html\">Selvilla</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Fixtures</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/fixtures/liga-bbva.html\">Liga BBVA</a></li><li class=\"sp-menu-item\"><a href=\"index.php/fixtures/supper-cup.html\">Supper Cup</a></li><li class=\"sp-menu-item\"><a href=\"index.php/fixtures/southern.html\">Southern</a></li><li class=\"sp-menu-item\"><a href=\"index.php/fixtures/uefa.html\">UEFA</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Results</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/results/liga-bbva.html\">LIGA BBVA</a></li><li class=\"sp-menu-item\"><a href=\"index.php/results/super-cup.html\">Super Cup</a></li><li class=\"sp-menu-item\"><a href=\"index.php/results/southern.html\">SOUTHERN</a></li><li class=\"sp-menu-item\"><a href=\"index.php/results/uefa.html\">UEFA</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Point Table</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/point-table/liga-bbva.html\">Liga BBVA</a></li><li class=\"sp-menu-item\"><a href=\"index.php/point-table/liga-bbva-2.html\">Super Cup</a></li><li class=\"sp-menu-item\"><a href=\"index.php/point-table/southern.html\">Southern</a></li><li class=\"sp-menu-item\"><a href=\"index.php/point-table/southern-2.html\">UEFA</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Soccer</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/soccer/tournaments.html\">Tournaments</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/matches.html\">Matches</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/players.html\">Players</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/teams.html\">Teams</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/tournament-details.html\">Tournament Details</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/match-details.html\">Match Details</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/team-details.html\">Team Details</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/tournament-results.html\">Tournament Results</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/fixture.html\">Fixture</a></li><li class=\"sp-menu-item\"><a href=\"index.php/soccer/point-table.html\">Point Table</a></li></ul></div></div></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Pages</a><div class=\"sp-dropdown sp-dropdown-main sp-menu-right\" style=\"width: 240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index114a.html?tmpl=comingsoon\">Coming Soon</a></li><li class=\"sp-menu-item\"><a href=\"index.php/component/404/index46e3.html?Itemid=488\">404 Page</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/blog.html\">Soccer News</a></li><li class=\"sp-menu-item sp-has-child\"><a href=\"#\">Joomla!</a><div class=\"sp-dropdown sp-dropdown-main sp-dropdown-mega sp-menu-full container\" style=\"\"><div class=\"sp-dropdown-inner\"><div class=\"row\"><div class=\"col-sm-3\"><ul class=\"sp-mega-group\"><li class=\"sp-menu-item sp-has-child\"><a class=\"sp-group-title\" href=\"#\">Content Component</a><ul class=\"sp-mega-group-child sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/content-component/single-article.html\">Single Article</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/content-component/article-category-blog.html\">Article Category Blog</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/content-component/article-category-list.html\">Article Category List</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/content-component/featured-articles.html\">Featured Articles</a></li></ul></li></ul></div><div class=\"col-sm-3\"><ul class=\"sp-mega-group\"><li class=\"sp-menu-item sp-has-child\"><a class=\"sp-group-title\" href=\"#\">Contact Component</a><ul class=\"sp-mega-group-child sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/contact-component/contact-categories.html\">Contact Categories</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/contact-component/contact-single-category.html\">Contact Single Category</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/contact-component/single-contact.html\">Single Contact</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/contact-component/featured-contacts.html\">Featured Contacts</a></li></ul></li></ul></div><div class=\"col-sm-3\"><ul class=\"sp-mega-group\"><li class=\"sp-menu-item sp-has-child\"><a class=\"sp-group-title\" href=\"#\">Users Component</a><ul class=\"sp-mega-group-child sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">Login Form</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">User Profile</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">Edit User Profile</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/users-component/registration-form.html\">Registration Form</a></li></ul></li></ul></div><div class=\"col-sm-3\"><ul class=\"sp-mega-group\"><li class=\"sp-menu-item sp-has-child\"><a class=\"sp-group-title\" href=\"#\">Other Components</a><ul class=\"sp-mega-group-child sp-dropdown-items\"><li class=\"sp-menu-item sp-has-child\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component.html\">News Feeds Component</a><div class=\"sp-dropdown sp-dropdown-sub sp-menu-right\" style=\"width: 240px;left: -240px;\"><div class=\"sp-dropdown-inner\"><ul class=\"sp-dropdown-items\"><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/new-feed-categories.html\">News Feed Categories</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/single-news-feed.html\">Single News Feed</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/news-feed-category.html\">News Feed Category</a></li></ul></div></div></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/search-component.html\">Search Components</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/smart-search.html\">Smart Search</a></li><li class=\"sp-menu-item\"><a href=\"index.php/pages/joomla/other-components/search.html\">Search</a></li></ul></li></ul></div></div></div></div></li></ul></div></div></li></ul> </div>
                                                                </div></div><div id=\"sp-user-menu\" class=\"col-sm-2 col-md-2\"><div class=\"sp-column \"><div class=\"sp-module \"><div class=\"sp-module-content\"><ul class=\"nav menu soccer-login\">
                                                                                <li class=\"item-588\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">Sign Up / Sign In</a></li></ul>
                                                                        </div></div></div></div></div></div></header><section id=\"sp-secondery-menu\"><div class=\"container\"><div class=\"row\"><div id=\"sp-category-menu\" class=\"col-sm-9 col-md-9\"><div class=\"sp-column \"><div class=\"sp-module \"><div class=\"sp-module-content\"><ul class=\"nav menu secondary-menu\">
                                                                                            <li class=\"item-546 deeper parent\"><a href=\"index.php/liga-bbva.html\">LIGA BBVA</a><ul class=\"nav-child unstyled small\"><li class=\"item-552\"><a href=\"index.php/liga-bbva/matches.html\">Matches</a></li><li class=\"item-576\"><a href=\"index.php/liga-bbva/copa-result.html\">Result</a></li></ul></li><li class=\"item-547 deeper parent\"><a href=\"index.php/uefa.html\"> UEFA</a><ul class=\"nav-child unstyled small\"><li class=\"item-578\"><a href=\"index.php/uefa/matches.html\">Matches</a></li><li class=\"item-579\"><a href=\"index.php/uefa/result.html\">Result</a></li></ul></li><li class=\"item-548 deeper parent\"><a href=\"index.php/epl.html\"> EPL</a><ul class=\"nav-child unstyled small\"><li class=\"item-580\"><a href=\"index.php/epl/match.html\">Match</a></li><li class=\"item-581\"><a href=\"index.php/epl/result.html\">Result</a></li></ul></li><li class=\"item-549 deeper parent\"><a href=\"index.php/super-cup.html\"> SUPER CUP</a><ul class=\"nav-child unstyled small\"><li class=\"item-582\"><a href=\"index.php/super-cup/match.html\">Match</a></li><li class=\"item-583\"><a href=\"index.php/super-cup/result.html\">Result</a></li></ul></li><li class=\"item-550 deeper parent\"><a href=\"index.php/2015-05-28-08-26-20.html\"> NPL</a><ul class=\"nav-child unstyled small\"><li class=\"item-585\"><a href=\"index.php/2015-05-28-08-26-20/match.html\">Match</a></li><li class=\"item-584\"><a href=\"index.php/2015-05-28-08-26-20/result.html\">Result</a></li></ul></li><li class=\"item-551 deeper parent\"><a href=\"index.php/southern.html\"> SOUTHERN</a><ul class=\"nav-child unstyled small\"><li class=\"item-586\"><a href=\"index.php/southern/match.html\">Match</a></li><li class=\"item-587\"><a href=\"index.php/southern/result.html\">Result</a></li></ul></li></ul>
                                                                                    </div></div></div></div><div id=\"sp-search\" class=\"col-sm-3 col-md-3\"><div class=\"sp-column \"><div class=\"sp-module  soccer-search\"><div class=\"sp-module-content\"><div class=\"search soccer-search\">
                                                                                            <form action=\"http://demo.joomshaper.com/2015/soccer/index.php\" method=\"post\">
                                                                                                <input name=\"searchword\" id=\"mod-search-searchword\" maxlength=\"200\" class=\"inputbox search-query\" type=\"text\" size=\"20\" placeholder=\"Search ...\"/> <input type=\"hidden\" name=\"task\" value=\"search\"/>
                                                                                                <input type=\"hidden\" name=\"option\" value=\"com_search\"/>
                                                                                                <input type=\"hidden\" name=\"Itemid\" value=\"437\"/>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div></div></div></div></div></div></section>
                      <!--  <section id=\"sp-page-title\"><div class=\"row\"><div id=\"sp-title\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"></div></div></div></section>-->
                           <!-- Debut Body -->       
                                          ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo " 
                      
                      
                                          <!-- FIN Body -->                                          
                                                             
                                                         
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    

                                                                                    
                                                                                    
                                                                                    
                                                                                    <section id=\"sp-bottom\"><div class=\"container\"><div class=\"row\"><div id=\"sp-bottom1\" class=\"col-sm-6 col-md-4\"><div class=\"sp-column \"><div class=\"sp-module \"><div class=\"sp-module-content\">
                                                                                        <div class=\"custom\">
                                                                                            <div class=\"bottom-1-logo\">
                                                                                                <p><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/images/demo/bottom-logo.png"), "html", null, true);
        echo "\" alt=\"\"/></p>
                                                                                            </div></div>
                                                                                    </div></div><div class=\"sp-module \"><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-511\"><a href=\"#\">About</a></li><li class=\"item-512\"><a href=\"#\">Faq</a></li><li class=\"item-513\"><a href=\"#\">Feedback</a></li><li class=\"item-514\"><a href=\"#\">Contact</a></li><li class=\"item-515\"><a href=\"#\">Privacy Policy</a></li></ul>
                                                                                    </div></div><div class=\"sp-module \"><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-565\"><a href=\"#\">Help</a></li><li class=\"item-566\"><a href=\"#\">Service</a></li><li class=\"item-563\"><a href=\"#\">Shop</a></li><li class=\"item-562\"><a href=\"#\">TV guide</a></li><li class=\"item-564\"><a href=\"#\">News</a></li></ul>
                                                                                    </div></div><div class=\"sp-module \"><div class=\"sp-module-content\">
                                                                                        <div class=\"custom\">
                                                                                            <div class=\"bottom-social\">
                                                                                                <ul>
                                                                                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"><span class=\"dummy-text\">dummy</span></i></a></li>
                                                                                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"><span class=\"dummy-text\">dummy</span></i></a></li>
                                                                                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"><span class=\"dummy-text\">dummy</span></i></a></li>
                                                                                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"><span class=\"dummy-text\">dummy</span></i></a></li>
                                                                                                    <li><a href=\"#\"><i class=\"fa fa-dribbble\"><span class=\"dummy-text\">dummy</span></i></a></li>
                                                                                                </ul>
                                                                                            </div></div>
                                                                                    </div></div></div></div><div id=\"sp-bottom2\" class=\"col-sm-6 col-md-2\"><div class=\"sp-column \"><div class=\"sp-module \"><h3 class=\"sp-module-title\">Football</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-516\"><a href=\"#\">Football</a></li><li class=\"item-517\"><a href=\"#\">Afcon 2015</a></li><li class=\"item-518\"><a href=\"#\">Barclays Prem</a></li><li class=\"item-519\"><a href=\"#\">Absa Prem</a></li></ul>
                                                                                    </div></div><div class=\"sp-module  less-top-margin\"><h3 class=\"sp-module-title\">Euro</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-520\"><a href=\"#\">Futsal EURO</a></li><li class=\"item-521\"><a href=\"#\">FIFA Futsal World Cup</a></li></ul>
                                                                                    </div></div></div></div><div id=\"sp-bottom3\" class=\"col-sm-6 col-md-2\"><div class=\"sp-column \"><div class=\"sp-module \"><h3 class=\"sp-module-title\">International</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-589\"><a href=\"#\">FIFA 2015</a></li><li class=\"item-590\"><a href=\"#\">Copa 215</a></li><li class=\"item-591\"><a href=\"#\">Asia 2014</a></li><li class=\"item-592\"><a href=\"#\">Africa 2015</a></li><li class=\"item-593\"><a href=\"#\">Australia</a></li><li class=\"item-594\"><a href=\"#\">Brazil</a></li><li class=\"item-595\"><a href=\"#\">England</a></li><li class=\"item-596\"><a href=\"#\">Under-21</a></li><li class=\"item-597\"><a href=\"#\">Under-19</a></li></ul>
                                                                                    </div></div></div></div><div id=\"sp-bottom4\" class=\"col-sm-6 col-md-2\"><div class=\"sp-column \"><div class=\"sp-module \"><h3 class=\"sp-module-title\">Other Links</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-598\"><a href=\"#\">Login</a></li><li class=\"item-599\"><a href=\"#\">Register</a></li><li class=\"item-600\"><a href=\"#\">mysoccer.com</a></li><li class=\"item-601\"><a href=\"#\">Leagues</a></li></ul>
                                                                                    </div></div><div class=\"sp-module \"><h3 class=\"sp-module-title\">Tools</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-530\"><a href=\"#\">RSS Feed</a></li><li class=\"item-531\"><a href=\"#\">Calendar</a></li></ul>
                                                                                    </div></div></div></div><div id=\"sp-bottom5\" class=\"col-sm-2 col-md-2\"><div class=\"sp-column \"><div class=\"sp-module \"><h3 class=\"sp-module-title\">Help</h3><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                            <li class=\"item-567\"><a href=\"#\">catalogue</a></li><li class=\"item-568\"><a href=\"#\">Community</a></li><li class=\"item-569\"><a href=\"#\">Corporate</a></li><li class=\"item-570\"><a href=\"#\">General</a></li><li class=\"item-571\"><a href=\"#\">Products</a></li><li class=\"item-572\"><a href=\"#\">Usability</a></li><li class=\"item-573\"><a href=\"#\">Careers</a></li><li class=\"item-574\"><a href=\"#\">Press</a></li><li class=\"item-575\"><a href=\"#\">Corporate Info</a></li></ul>
                                                                                    </div></div></div></div></div></div></section><footer id=\"sp-footer\"><div class=\"container\"><div class=\"row\"><div id=\"sp-footer1\" class=\"col-sm-12 col-md-12\"><div class=\"sp-column \"><span class=\"sp-copyright\"> Copyright© 2015<a href=\"#\"> Soccer</a> All Right Reserved</span></div></div></div></div></footer>
                                                            <div class=\"offcanvas-menu\">
                                                                <a href=\"#\" class=\"close-offcanvas\"><i class=\"fa fa-remove\"></i></a>
                                                                <div class=\"offcanvas-inner\">
                                                                    <div class=\"sp-module \"><h3 class=\"sp-module-title\">Search</h3><div class=\"sp-module-content\"><div class=\"search\">
                                                                                <form action=\"http://demo.joomshaper.com/2015/soccer/index.php\" method=\"post\">
                                                                                    <input name=\"searchword\" id=\"mod-search-searchword\" maxlength=\"200\" class=\"inputbox search-query\" type=\"text\" size=\"20\" placeholder=\"Search ...\"/> <input type=\"hidden\" name=\"task\" value=\"search\"/>
                                                                                    <input type=\"hidden\" name=\"option\" value=\"com_search\"/>
                                                                                    <input type=\"hidden\" name=\"Itemid\" value=\"437\"/>
                                                                                </form>
                                                                            </div>
                                                                        </div></div><div class=\"sp-module \"><div class=\"sp-module-content\"><ul class=\"nav menu\">
                                                                                <li class=\"item-437 current active deeper parent\"><a href=\"index-2.html\">Home</a><ul class=\"nav-child unstyled small\"><li class=\"item-560\"><a href=\"index.php/home/home-2.html\">Home Variation 2</a></li></ul></li><li class=\"item-605 deeper parent\"><a href=\"#\">Club List</a><ul class=\"nav-child unstyled small\"><li class=\"item-610\"><a href=\"index.php/clubs/real-madrid.html\">Real Madrid</a></li><li class=\"item-611\"><a href=\"index.php/clubs/bercelona.html\">Bercelona</a></li><li class=\"item-606\"><a href=\"index.php/clubs/arsenal.html\">Arsenal</a></li><li class=\"item-609\"><a href=\"index.php/clubs/manchester-city.html\">Manchester City</a></li><li class=\"item-607\"><a href=\"index.php/clubs/metropo.html\">Metropo</a></li><li class=\"item-608\"><a href=\"index.php/clubs/selvilla.html\">Selvilla</a></li></ul></li><li class=\"item-612 deeper parent\"><a href=\"#\">Fixtures</a><ul class=\"nav-child unstyled small\"><li class=\"item-613\"><a href=\"index.php/fixtures/liga-bbva.html\">Liga BBVA</a></li><li class=\"item-614\"><a href=\"index.php/fixtures/supper-cup.html\">Supper Cup</a></li><li class=\"item-615\"><a href=\"index.php/fixtures/southern.html\">Southern</a></li><li class=\"item-616\"><a href=\"index.php/fixtures/uefa.html\">UEFA</a></li></ul></li><li class=\"item-617 deeper parent\"><a href=\"#\">Results</a><ul class=\"nav-child unstyled small\"><li class=\"item-618\"><a href=\"index.php/results/liga-bbva.html\">LIGA BBVA</a></li><li class=\"item-619\"><a href=\"index.php/results/super-cup.html\">Super Cup</a></li><li class=\"item-621\"><a href=\"index.php/results/southern.html\">SOUTHERN</a></li><li class=\"item-620\"><a href=\"index.php/results/uefa.html\">UEFA</a></li></ul></li><li class=\"item-622 deeper parent\"><a href=\"#\">Point Table</a><ul class=\"nav-child unstyled small\"><li class=\"item-623\"><a href=\"index.php/point-table/liga-bbva.html\">Liga BBVA</a></li><li class=\"item-624\"><a href=\"index.php/point-table/liga-bbva-2.html\">Super Cup</a></li><li class=\"item-625\"><a href=\"index.php/point-table/southern.html\">Southern</a></li><li class=\"item-626\"><a href=\"index.php/point-table/southern-2.html\">UEFA</a></li></ul></li><li class=\"item-555 deeper parent\"><a href=\"#\">Soccer</a><ul class=\"nav-child unstyled small\"><li class=\"item-556\"><a href=\"index.php/soccer/tournaments.html\">Tournaments</a></li><li class=\"item-557\"><a href=\"index.php/soccer/matches.html\">Matches</a></li><li class=\"item-558\"><a href=\"index.php/soccer/players.html\">Players</a></li><li class=\"item-561\"><a href=\"index.php/soccer/teams.html\">Teams</a></li><li class=\"item-627\"><a href=\"index.php/soccer/tournament-details.html\">Tournament Details</a></li><li class=\"item-577\"><a href=\"index.php/soccer/match-details.html\">Match Details</a></li><li class=\"item-630\"><a href=\"index.php/soccer/team-details.html\">Team Details</a></li><li class=\"item-628\"><a href=\"index.php/soccer/tournament-results.html\">Tournament Results</a></li><li class=\"item-604\"><a href=\"index.php/soccer/fixture.html\">Fixture</a></li><li class=\"item-629\"><a href=\"index.php/soccer/point-table.html\">Point Table</a></li></ul></li><li class=\"item-279 deeper parent\"><a href=\"#\">Pages</a><ul class=\"nav-child unstyled small\"><li class=\"item-487\"><a href=\"index114a.html?tmpl=comingsoon\">Coming Soon</a></li><li class=\"item-488\"><a href=\"index.php/component/404/index46e3.html?Itemid=488\">404 Page</a></li><li class=\"item-278\"><a href=\"index.php/pages/blog.html\">Soccer News</a></li><li class=\"item-280 deeper parent\"><a href=\"#\">Joomla!</a><ul class=\"nav-child unstyled small\"><li class=\"item-266 deeper parent\"><a href=\"#\">Content Component</a><ul class=\"nav-child unstyled small\"><li class=\"item-257\"><a href=\"index.php/pages/joomla/content-component/single-article.html\">Single Article</a></li><li class=\"item-259\"><a href=\"index.php/pages/joomla/content-component/article-category-blog.html\">Article Category Blog</a></li><li class=\"item-260\"><a href=\"index.php/pages/joomla/content-component/article-category-list.html\">Article Category List</a></li><li class=\"item-262\"><a href=\"index.php/pages/joomla/content-component/featured-articles.html\">Featured Articles</a></li></ul></li><li class=\"item-270 deeper parent\"><a href=\"#\">Contact Component</a><ul class=\"nav-child unstyled small\"><li class=\"item-251\"><a href=\"index.php/pages/joomla/contact-component/contact-categories.html\">Contact Categories</a></li><li class=\"item-275\"><a href=\"index.php/pages/joomla/contact-component/contact-single-category.html\">Contact Single Category</a></li><li class=\"item-229\"><a href=\"index.php/pages/joomla/contact-component/single-contact.html\">Single Contact</a></li><li class=\"item-452\"><a href=\"index.php/pages/joomla/contact-component/featured-contacts.html\">Featured Contacts</a></li></ul></li><li class=\"item-271 deeper parent\"><a href=\"#\">Users Component</a><ul class=\"nav-child unstyled small\"><li class=\"item-402\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">Login Form</a></li><li class=\"item-403\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">User Profile</a></li><li class=\"item-404\"><a href=\"index.php/pages/joomla/users-component/login-form.html\">Edit User Profile</a></li><li class=\"item-405\"><a href=\"index.php/pages/joomla/users-component/registration-form.html\">Registration Form</a></li></ul></li><li class=\"item-268 deeper parent\"><a href=\"#\">Other Components</a><ul class=\"nav-child unstyled small\"><li class=\"item-267 deeper parent\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component.html\">News Feeds Component</a><ul class=\"nav-child unstyled small\"><li class=\"item-252\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/new-feed-categories.html\">News Feed Categories</a></li><li class=\"item-254\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/single-news-feed.html\">Single News Feed</a></li><li class=\"item-253\"><a href=\"index.php/pages/joomla/other-components/news-feeds-component/news-feed-category.html\">News Feed Category</a></li></ul></li><li class=\"item-276\"><a href=\"index.php/pages/joomla/other-components/search-component.html\">Search Components</a></li><li class=\"item-466\"><a href=\"index.php/pages/joomla/other-components/smart-search.html\">Smart Search</a></li><li class=\"item-255\"><a href=\"index.php/pages/joomla/other-components/search.html\">Search</a></li></ul></li></ul></li></ul></li></ul>
                                                                        </div></div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "


        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/index-2.html"), "html", null, true);
        echo "\" rel=\"canonical\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/images/favicon.ico"), "html", null, true);
        echo "\" rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/index.php/component/search/index1791.html?id=1&amp;Itemid=437&amp;format=opensearch"), "html", null, true);
        echo "\" rel=\"search\" title=\"Search Shaper Soccer\" type=\"application/opensearchdescription+xml\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/components/com_sppagebuilder/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/components/com_sppagebuilder/assets/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/components/com_sppagebuilder/assets/css/sppagebuilder.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_news_highlighter/assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_soccer_recent_results/assets/css/recent-result.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_club_rankings/assets/css/rank-style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/media/com_acymailing/css/module_defaulta6cb.css?v=1431957328"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:regular,900,700,100&amp;greek-ext,latin"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/lightbox.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/animate.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/legacy.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/template.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/css/presets/preset1.css"), "html", null, true);
        echo "\" type=\"text/css\" class=\"preset\"/>

";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "




            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/media/jui/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/media/jui/js/jquery-noconflict.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/media/jui/js/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/jquery.countdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_news_highlighter/assets/js/sp_highlighter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/matchheight.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_soccer_recent_results/assets/js/recent-result.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/modules/mod_sp_club_rankings/assets/js/club-rank.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/media/com_acymailing/js/acymailing_module5df1.js"), "html", null, true);
        echo "?v=493\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/components/com_sppagebuilder/assets/js/sppagebuilder.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/jquery.sticky.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/smoothscroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("template/templates/shaper_soccer/js/lightbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
                (function(\$) {
                    \$(document).on('click', '#poll-submit', function() {
                        var value = \$('input[name=question]:checked').val(),
                                request = {
                            'option': 'com_ajax',
                            'module': 'sp_soccer_poll',
                            'data': value,
                            'format': 'raw'
                        };
                        \$.ajax({
                            type: 'POST',
                            data: request,
                            success: function(response) {
                                \$('#spsoccer-poll').hide();
                                \$('.status').html(response);
                            }
                        });
                        return false;
                    });
                })(jQuery)
                var acymailing = Array();
                acymailing['NAMECAPTION'] = 'Name';
                acymailing['NAME_MISSING'] = 'Please enter your name';
                acymailing['EMAILCAPTION'] = 'E-mail';
                acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
                acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
                acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
                acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';

                </script>

                <script type=\"text/javascript\">
                    jQuery(function(\$) {
                        //variable
                        var \$sppbUmCountDown = \$('#sppb-um-match-countdown'),
                                \$umCountDownDate = \$sppbUmCountDown.data('umcountdown');
                        \$umCountDownOver = \$sppbUmCountDown.data('umcountdownover');

                        //Countdown function
                        \$sppbUmCountDown.countdown(\$umCountDownDate, function(event) {
                            \$(this).html(event.strftime('<li class=\"days\"><span class=\"number\">%-D</span><span class=\"string\">%!D:Day,Days;</span></li><li class=\"hours\"><span class=\"number\">%H</span><span class=\"string\">%!H:Hour,Hours;</span></li><li class=\"minutes\"><span class=\"number\">%M</span><span class=\"string\">%!M:Minute,Minutes;</span></li><li class=\"seconds\"><span class=\"number\">%S</span><span class=\"string\">%!S:Second,Seconds;</span></li>'));
                        });

                        // if countdown is finished
                        \$sppbUmCountDown.on('finish.countdown', function(event) {
                            \$(this).html(\$umCountDownOver)
                                    .parent().addClass('disabled')
                        });

                    });
                    </script>
                    <script type=\"text/javascript\">
                        jQuery(function(\$) {
                            \$('#sp-nh129').spNewsHighlighter({
                                'interval': 5000,
                                'fxduration': 1000,
                                'animation': \"slide-vertical\"
                            });
                        });
                        </script>
                          <script type=\"text/javascript\">
                    (function (\$) {
                        \$(document).on('click', '#poll-submit', function () {
                            var value = \$('input[name=question]:checked').val(),
                                    request = {
                                        'option': 'com_ajax',
                                        'module': 'sp_soccer_poll',
                                        'data': value,
                                        'format': 'raw'
                                    };
                            \$.ajax({
                                type: 'POST',
                                data: request,
                                success: function (response) {
                                    \$('#spsoccer-poll').hide();
                                    \$('.status').html(response);
                                }
                            });
                            return false;
                        });
                    })(jQuery)
                    var acymailing = Array();
                    acymailing['NAMECAPTION'] = 'Name';
                    acymailing['NAME_MISSING'] = 'Please enter your name';
                    acymailing['EMAILCAPTION'] = 'E-mail';
                    acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
                    acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
                    acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
                    acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';

                </script>
                        
";
    }

    // line 186
    public function block_body($context, array $blocks = array())
    {
        // line 187
        echo "


";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 187,  424 => 186,  325 => 66,  321 => 65,  317 => 64,  313 => 63,  309 => 62,  305 => 61,  301 => 60,  297 => 59,  293 => 58,  289 => 57,  285 => 56,  281 => 55,  277 => 54,  273 => 53,  269 => 52,  265 => 51,  258 => 46,  255 => 45,  248 => 28,  244 => 27,  240 => 26,  236 => 25,  232 => 24,  228 => 23,  224 => 22,  220 => 21,  216 => 20,  208 => 18,  204 => 17,  196 => 15,  192 => 14,  188 => 13,  184 => 12,  180 => 11,  176 => 10,  171 => 7,  168 => 6,  162 => 5,  108 => 209,  87 => 190,  85 => 186,  65 => 169,  55 => 161,  53 => 45,  35 => 31,  33 => 6,  29 => 5,  23 => 1,  219 => 129,  212 => 19,  200 => 16,  194 => 115,  187 => 111,  183 => 110,  179 => 109,  173 => 108,  170 => 107,  166 => 106,  106 => 48,  92 => 41,  88 => 40,  74 => 29,  70 => 28,  61 => 22,  57 => 21,  51 => 17,  47 => 16,  31 => 4,  28 => 3,);
    }
}
