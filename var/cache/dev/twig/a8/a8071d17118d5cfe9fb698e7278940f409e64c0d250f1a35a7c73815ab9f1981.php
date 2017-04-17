<?php

/* EmploiBundle:Default:index.html.twig */
class __TwigTemplate_4306e158bb9687127b13ea0bf9afff991d826c4b6d2316693e320e245514ddcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "EmploiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a32ab19afe5ca7070d604483dacd184dc259baccadd6f540e465ba7d7f6f42da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32ab19afe5ca7070d604483dacd184dc259baccadd6f540e465ba7d7f6f42da->enter($__internal_a32ab19afe5ca7070d604483dacd184dc259baccadd6f540e465ba7d7f6f42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmploiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32ab19afe5ca7070d604483dacd184dc259baccadd6f540e465ba7d7f6f42da->leave($__internal_a32ab19afe5ca7070d604483dacd184dc259baccadd6f540e465ba7d7f6f42da_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8e109235b3bcd648b830ec4289badab978f0400069667cd5783e8d138a9c5c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e109235b3bcd648b830ec4289badab978f0400069667cd5783e8d138a9c5c54->enter($__internal_8e109235b3bcd648b830ec4289badab978f0400069667cd5783e8d138a9c5c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_8e109235b3bcd648b830ec4289badab978f0400069667cd5783e8d138a9c5c54->leave($__internal_8e109235b3bcd648b830ec4289badab978f0400069667cd5783e8d138a9c5c54_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6341ccdb0fb7abb35047a82e0181ca51d6fe33e535f33cafb96128a5961ace7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6341ccdb0fb7abb35047a82e0181ca51d6fe33e535f33cafb96128a5961ace7c->enter($__internal_6341ccdb0fb7abb35047a82e0181ca51d6fe33e535f33cafb96128a5961ace7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Admin";
        
        $__internal_6341ccdb0fb7abb35047a82e0181ca51d6fe33e535f33cafb96128a5961ace7c->leave($__internal_6341ccdb0fb7abb35047a82e0181ca51d6fe33e535f33cafb96128a5961ace7c_prof);

    }

    // line 4
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_de31f7f7506901135afa439aaaaf64a6844b76cef7364b2d4d821aad598bd470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de31f7f7506901135afa439aaaaf64a6844b76cef7364b2d4d821aad598bd470->enter($__internal_de31f7f7506901135afa439aaaaf64a6844b76cef7364b2d4d821aad598bd470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 5
        echo "    ";
        $this->loadTemplate("::sidebarAdmin.html.twig", "EmploiBundle:Default:index.html.twig", 5)->display($context);
        
        $__internal_de31f7f7506901135afa439aaaaf64a6844b76cef7364b2d4d821aad598bd470->leave($__internal_de31f7f7506901135afa439aaaaf64a6844b76cef7364b2d4d821aad598bd470_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2dcdc18a0f507ae1053b8a1fa831cbd1d74a80817974deff2db3b0ac1b8ce966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcdc18a0f507ae1053b8a1fa831cbd1d74a80817974deff2db3b0ac1b8ce966->enter($__internal_2dcdc18a0f507ae1053b8a1fa831cbd1d74a80817974deff2db3b0ac1b8ce966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <!-- Contenu de la page -->

    <!-- Partie gauche de Contenu de la page -->
    <section class=\"col-lg-7 connectedSortable\">
        <!-- TO DO List -->
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <i class=\"ion ion-clipboard\"></i>

                <h3 class=\"box-title\">To Do List</h3>

                <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <ul class=\"todo-list\">
                    <li>
                        <!-- drag handle -->
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Make the theme responsive</span>
                        <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Check your messages and notifications</span>
                        <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer clearfix no-border\">
                <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
            </div>
        </div>
        <!-- Fin TO DO List -->
    </section>
    <!-- Fin Partie gauche de Contenu de la page -->

    <!-- Partie droite de Contenu de la page -->
    <section class=\"col-lg-5 connectedSortable\">
        <!-- Calendar -->
        <div class=\"box box-solid bg-green-gradient\">
        <div class=\"box-header\">
            <i class=\"fa fa-calendar\"></i>

            <h3 class=\"box-title\">Calendar</h3>
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <!-- button with a dropdown -->
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bars\"></i></button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                    </ul>
                </div>
                <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <!--The calendar -->
            <div id=\"calendar\" style=\"width: 100%\"></div>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer text-black\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <!-- Progress bars -->
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #1</span>
                        <small class=\"pull-right\">90%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #2</span>
                        <small class=\"pull-right\">70%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-sm-6\">
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #3</span>
                        <small class=\"pull-right\">60%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #4</span>
                        <small class=\"pull-right\">40%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
        <!-- Fin Calendar -->
    </section>
    <!-- Fin Partie droite de Contenu de la page -->
    <!-- Fin Contenu de la page -->
";
        
        $__internal_2dcdc18a0f507ae1053b8a1fa831cbd1d74a80817974deff2db3b0ac1b8ce966->leave($__internal_2dcdc18a0f507ae1053b8a1fa831cbd1d74a80817974deff2db3b0ac1b8ce966_prof);

    }

    public function getTemplateName()
    {
        return "EmploiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 8,  75 => 7,  67 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_title %}Dashboard{% endblock %}
{% block page_subtitle %}Admin{% endblock %}
{% block avanzu_sidebar %}
    {% include '::sidebarAdmin.html.twig' %}
{% endblock %}
{% block page_content %}
    <!-- Contenu de la page -->

    <!-- Partie gauche de Contenu de la page -->
    <section class=\"col-lg-7 connectedSortable\">
        <!-- TO DO List -->
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <i class=\"ion ion-clipboard\"></i>

                <h3 class=\"box-title\">To Do List</h3>

                <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                        <li><a href=\"#\">&laquo;</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <ul class=\"todo-list\">
                    <li>
                        <!-- drag handle -->
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <!-- checkbox -->
                        <input type=\"checkbox\" value=\"\">
                        <!-- todo text -->
                        <span class=\"text\">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Make the theme responsive</span>
                        <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Check your messages and notifications</span>
                        <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                        <input type=\"checkbox\" value=\"\">
                        <span class=\"text\">Let theme shine like a star</span>
                        <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                        <div class=\"tools\">
                            <i class=\"fa fa-edit\"></i>
                            <i class=\"fa fa-trash-o\"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer clearfix no-border\">
                <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
            </div>
        </div>
        <!-- Fin TO DO List -->
    </section>
    <!-- Fin Partie gauche de Contenu de la page -->

    <!-- Partie droite de Contenu de la page -->
    <section class=\"col-lg-5 connectedSortable\">
        <!-- Calendar -->
        <div class=\"box box-solid bg-green-gradient\">
        <div class=\"box-header\">
            <i class=\"fa fa-calendar\"></i>

            <h3 class=\"box-title\">Calendar</h3>
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <!-- button with a dropdown -->
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bars\"></i></button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                    </ul>
                </div>
                <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <!--The calendar -->
            <div id=\"calendar\" style=\"width: 100%\"></div>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer text-black\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <!-- Progress bars -->
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #1</span>
                        <small class=\"pull-right\">90%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #2</span>
                        <small class=\"pull-right\">70%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class=\"col-sm-6\">
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #3</span>
                        <small class=\"pull-right\">60%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #4</span>
                        <small class=\"pull-right\">40%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
        <!-- Fin Calendar -->
    </section>
    <!-- Fin Partie droite de Contenu de la page -->
    <!-- Fin Contenu de la page -->
{% endblock %}
", "EmploiBundle:Default:index.html.twig", "C:\\wamp\\www\\emploi2\\src\\Emploi\\EmploiBundle/Resources/views/Default/index.html.twig");
    }
}
