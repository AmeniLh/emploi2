<?php

/* EmploiBundle:Admin:gestionEmploiStatique.html.twig */
class __TwigTemplate_6fa000dfe39465217bc124d0a21d18ed5d5e68bf27993498f3e1721b8d4c7a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Admin:gestionEmploiStatique.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6888a0bab3afd831a00adaca4a1d3db77d124a331d55c0d5e553f37cf1604bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6888a0bab3afd831a00adaca4a1d3db77d124a331d55c0d5e553f37cf1604bea->enter($__internal_6888a0bab3afd831a00adaca4a1d3db77d124a331d55c0d5e553f37cf1604bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Admin:gestionEmploiStatique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6888a0bab3afd831a00adaca4a1d3db77d124a331d55c0d5e553f37cf1604bea->leave($__internal_6888a0bab3afd831a00adaca4a1d3db77d124a331d55c0d5e553f37cf1604bea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e05d144544814263a23f4f171ec40582e7982112a235f3c58464551a6dfd748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e05d144544814263a23f4f171ec40582e7982112a235f3c58464551a6dfd748->enter($__internal_1e05d144544814263a23f4f171ec40582e7982112a235f3c58464551a6dfd748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion mploi";
        
        $__internal_1e05d144544814263a23f4f171ec40582e7982112a235f3c58464551a6dfd748->leave($__internal_1e05d144544814263a23f4f171ec40582e7982112a235f3c58464551a6dfd748_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9f0c946e30afc9257a2d4229f6c8ceeb868bca296fba703e29af80001f0ff146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0c946e30afc9257a2d4229f6c8ceeb868bca296fba703e29af80001f0ff146->enter($__internal_9f0c946e30afc9257a2d4229f6c8ceeb868bca296fba703e29af80001f0ff146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Gestion Emploi statique";
        
        $__internal_9f0c946e30afc9257a2d4229f6c8ceeb868bca296fba703e29af80001f0ff146->leave($__internal_9f0c946e30afc9257a2d4229f6c8ceeb868bca296fba703e29af80001f0ff146_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_918445308fb1b974a3a0d5c7f4a40245dd2dba5f30025bd6ba3ba5c11d546c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918445308fb1b974a3a0d5c7f4a40245dd2dba5f30025bd6ba3ba5c11d546c3e->enter($__internal_918445308fb1b974a3a0d5c7f4a40245dd2dba5f30025bd6ba3ba5c11d546c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_918445308fb1b974a3a0d5c7f4a40245dd2dba5f30025bd6ba3ba5c11d546c3e->leave($__internal_918445308fb1b974a3a0d5c7f4a40245dd2dba5f30025bd6ba3ba5c11d546c3e_prof);

    }

    // line 5
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_ca60c115ca5cba04983960d772106f4d89ff88dbcd989c81162751a6fcc4b41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca60c115ca5cba04983960d772106f4d89ff88dbcd989c81162751a6fcc4b41c->enter($__internal_ca60c115ca5cba04983960d772106f4d89ff88dbcd989c81162751a6fcc4b41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 6
        echo "    ";
        $this->loadTemplate("EmploiBundle:Admin:sidebarAdmin.html.twig", "EmploiBundle:Admin:gestionEmploiStatique.html.twig", 6)->display($context);
        
        $__internal_ca60c115ca5cba04983960d772106f4d89ff88dbcd989c81162751a6fcc4b41c->leave($__internal_ca60c115ca5cba04983960d772106f4d89ff88dbcd989c81162751a6fcc4b41c_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cca5567983102080ca5a0aade6965800b80d82f97234c0fa7c54477e8cefcd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca5567983102080ca5a0aade6965800b80d82f97234c0fa7c54477e8cefcd21->enter($__internal_cca5567983102080ca5a0aade6965800b80d82f97234c0fa7c54477e8cefcd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h4 class=\"box-title\">Draggable Events</h4>
                </div>
                <div class=\"box-body\">
                    <!-- the events -->
                    <div id=\"external-events\">
                        <div class=\"external-event bg-green ui-draggable ui-draggable-handle\" style=\"position: relative;\">Math</div>
                        <div class=\"external-event bg-yellow ui-draggable ui-draggable-handle\" style=\"position: relative;\">Français</div>
                        <div class=\"external-event bg-aqua ui-draggable ui-draggable-handle\" style=\"position: relative;\">Anglais</div>
                        <div class=\"external-event bg-light-blue ui-draggable ui-draggable-handle\" style=\"position: relative;\">Arabe</div>
                        <div class=\"external-event bg-red ui-draggable ui-draggable-handle\" style=\"position: relative;\">Club</div>
                        <div class=\"checkbox\">
                            <label for=\"drop-remove\">
                                <input type=\"checkbox\" id=\"drop-remove\">
                                remove after drop
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Create Event</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                        <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                        <ul class=\"fc-color-picker\" id=\"color-chooser\">
                            <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <div class=\"input-group\">
                        <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Event Title\">

                        <div class=\"input-group-btn\">
                            <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">Add</button>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-body no-padding\">
                    <!-- THE CALENDAR -->
                    <div id=\"calendar\" class=\"fc fc-ltr fc-unthemed\">
                        <div class=\"fc-toolbar\">
                            <div class=\"fc-center\">
                                <h2>Emploi Semestre 1 2017</h2>
                            </div>
                            <div class=\"fc-clear\"></div>
                        </div>
                        <div class=\"fc-view-container\" style=\"\">
                            <div class=\"fc-view fc-month-view fc-basic-view\">
                                <table><thead><tr><td class=\"fc-widget-header\">
                                            <div class=\"fc-row fc-widget-header\">

                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th class=\"fc-day-header fc-widget-header fc-sun\"></th>
                                                        <th class=\"fc-day-header fc-widget-header fc-sun\">Sun</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-mon\">Mon</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-tue\">Tue</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-wed\">Wed</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-thu\">Thu</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-fri\">Fri</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-sat\">Sat</th>
                                                    </tr>
                                                    </thead>
                                                    <tr  style=\"height: 56px;\">
                                                        <td>8 h - 9 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>9 h - 10 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>10 h - 11 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>11 h - 12 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>12 h - 13 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr style=\"height: 56px;\">
                                                        <td>13 h - 14 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>14 h - 15 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>15 h - 16 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>16 h - 17 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>17 h - 18 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                </table>

                                                </div>

                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
";
        
        $__internal_cca5567983102080ca5a0aade6965800b80d82f97234c0fa7c54477e8cefcd21->leave($__internal_cca5567983102080ca5a0aade6965800b80d82f97234c0fa7c54477e8cefcd21_prof);

    }

    // line 216
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_c6d795c7effd257f924ced85d1b9d87fb1a5db5fa276a2d3207c74195851e4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d795c7effd257f924ced85d1b9d87fb1a5db5fa276a2d3207c74195851e4d7->enter($__internal_c6d795c7effd257f924ced85d1b9d87fb1a5db5fa276a2d3207c74195851e4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        
        $__internal_c6d795c7effd257f924ced85d1b9d87fb1a5db5fa276a2d3207c74195851e4d7->leave($__internal_c6d795c7effd257f924ced85d1b9d87fb1a5db5fa276a2d3207c74195851e4d7_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Admin:gestionEmploiStatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 216,  94 => 9,  88 => 8,  80 => 6,  74 => 5,  63 => 4,  51 => 3,  39 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}
{% block title %}Gestion mploi{% endblock %}
{% block page_title %}Gestion Emploi statique{% endblock %}
{% block page_subtitle %}{% endblock %}
{% block avanzu_sidebar %}
    {% include 'EmploiBundle:Admin:sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h4 class=\"box-title\">Draggable Events</h4>
                </div>
                <div class=\"box-body\">
                    <!-- the events -->
                    <div id=\"external-events\">
                        <div class=\"external-event bg-green ui-draggable ui-draggable-handle\" style=\"position: relative;\">Math</div>
                        <div class=\"external-event bg-yellow ui-draggable ui-draggable-handle\" style=\"position: relative;\">Français</div>
                        <div class=\"external-event bg-aqua ui-draggable ui-draggable-handle\" style=\"position: relative;\">Anglais</div>
                        <div class=\"external-event bg-light-blue ui-draggable ui-draggable-handle\" style=\"position: relative;\">Arabe</div>
                        <div class=\"external-event bg-red ui-draggable ui-draggable-handle\" style=\"position: relative;\">Club</div>
                        <div class=\"checkbox\">
                            <label for=\"drop-remove\">
                                <input type=\"checkbox\" id=\"drop-remove\">
                                remove after drop
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Create Event</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                        <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                        <ul class=\"fc-color-picker\" id=\"color-chooser\">
                            <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <div class=\"input-group\">
                        <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Event Title\">

                        <div class=\"input-group-btn\">
                            <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">Add</button>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-body no-padding\">
                    <!-- THE CALENDAR -->
                    <div id=\"calendar\" class=\"fc fc-ltr fc-unthemed\">
                        <div class=\"fc-toolbar\">
                            <div class=\"fc-center\">
                                <h2>Emploi Semestre 1 2017</h2>
                            </div>
                            <div class=\"fc-clear\"></div>
                        </div>
                        <div class=\"fc-view-container\" style=\"\">
                            <div class=\"fc-view fc-month-view fc-basic-view\">
                                <table><thead><tr><td class=\"fc-widget-header\">
                                            <div class=\"fc-row fc-widget-header\">

                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th class=\"fc-day-header fc-widget-header fc-sun\"></th>
                                                        <th class=\"fc-day-header fc-widget-header fc-sun\">Sun</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-mon\">Mon</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-tue\">Tue</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-wed\">Wed</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-thu\">Thu</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-fri\">Fri</th>
                                                        <th class=\"fc-day-header fc-widget-header fc-sat\">Sat</th>
                                                    </tr>
                                                    </thead>
                                                    <tr  style=\"height: 56px;\">
                                                        <td>8 h - 9 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>9 h - 10 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>10 h - 11 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>11 h - 12 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>12 h - 13 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr><tr style=\"height: 56px;\">
                                                        <td>13 h - 14 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>14 h - 15 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>15 h - 16 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>16 h - 17 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style=\"height: 56px;\">
                                                        <td>17 h - 18 h</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                </table>

                                                </div>

                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
{% endblock %}
{% block avanzu_admin_footer %}{% endblock %}", "EmploiBundle:Admin:gestionEmploiStatique.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Admin/gestionEmploiStatique.html.twig");
    }
}
